#!/usr/bin/env python3
"""
GA4 週次レポート用データ取得スクリプト

【重要】GA4データの確定タイミングについて
GA4のデータはイベント受信から確定まで24-72時間かかります。
特に直近1-2日のデータは bounceRate / engagedSessions / conversions が
実際より低く（または0で）表示され、bounceRate が100%近くに見える現象が発生します。

そのため、このスクリプトは「3日前〜10日前」の8日間を対象期間として取得します。
これにより、データ未確定の暫定値を「異常値」と誤認するリスクを排除します。

使い方:
  python3 scripts/ga4-weekly-report.py
"""
from datetime import datetime, timedelta
import sys
import json

# GA4 Data API
try:
    from google.analytics.data_v1beta import BetaAnalyticsDataClient
    from google.analytics.data_v1beta.types import (
        RunReportRequest, DateRange, Dimension, Metric, OrderBy,
    )
    from google.oauth2 import service_account
except ImportError:
    print("依存ライブラリが不足しています。以下を実行してください:")
    print("  pip3 install --break-system-packages google-analytics-data google-auth")
    sys.exit(1)

PROPERTY_ID = "501941562"
KEY_FILE = "harmonic-society-ac10d4c94814.json"

# データ確定遅延を考慮し、直近2日を除外する
# 対象期間: 10日前 〜 3日前（8日間）
# 比較期間: 18日前 〜 11日前（8日間）
EXCLUDE_RECENT_DAYS = 2  # 直近2日は未確定データを含む可能性があるため除外


def get_date_ranges():
    """確定データのみを使う日付範囲を返す"""
    today = datetime.now()
    end_cur = today - timedelta(days=EXCLUDE_RECENT_DAYS + 1)
    start_cur = end_cur - timedelta(days=7)
    end_prev = start_cur - timedelta(days=1)
    start_prev = end_prev - timedelta(days=7)

    return {
        "current": (start_cur.strftime("%Y-%m-%d"), end_cur.strftime("%Y-%m-%d")),
        "previous": (start_prev.strftime("%Y-%m-%d"), end_prev.strftime("%Y-%m-%d")),
    }


def main():
    ranges = get_date_ranges()
    cur_start, cur_end = ranges["current"]
    prev_start, prev_end = ranges["previous"]

    print(f"対象期間（今週）: {cur_start} 〜 {cur_end}")
    print(f"比較期間（前週）: {prev_start} 〜 {prev_end}")
    print(f"※ データ確定遅延を考慮し、直近{EXCLUDE_RECENT_DAYS}日は除外しています")
    print()

    credentials = service_account.Credentials.from_service_account_file(
        KEY_FILE, scopes=["https://www.googleapis.com/auth/analytics.readonly"]
    )
    client = BetaAnalyticsDataClient(credentials=credentials)

    # Overview
    r = client.run_report(RunReportRequest(
        property=f"properties/{PROPERTY_ID}",
        date_ranges=[
            DateRange(start_date=cur_start, end_date=cur_end),
            DateRange(start_date=prev_start, end_date=prev_end),
        ],
        metrics=[
            Metric(name="activeUsers"), Metric(name="sessions"),
            Metric(name="screenPageViews"), Metric(name="averageSessionDuration"),
            Metric(name="bounceRate"), Metric(name="newUsers"),
            Metric(name="engagedSessions"), Metric(name="engagementRate"),
            Metric(name="screenPageViewsPerSession"), Metric(name="conversions"),
        ],
    ))
    metric_names = ["activeUsers", "sessions", "screenPageViews",
                    "averageSessionDuration", "bounceRate", "newUsers",
                    "engagedSessions", "engagementRate",
                    "screenPageViewsPerSession", "conversions"]

    print("=" * 60)
    print("サイト全体サマリー（今週 vs 前週）")
    print("=" * 60)
    cur_data = {}
    prev_data = {}
    for row in r.rows:
        dr = row.dimension_values[0].value if row.dimension_values else "date_range_0"
        vals = {metric_names[i]: float(row.metric_values[i].value)
                for i in range(len(metric_names))}
        if dr == "date_range_0":
            cur_data = vals
        else:
            prev_data = vals

    label_map = {
        "activeUsers": "アクティブユーザー",
        "sessions": "セッション数",
        "screenPageViews": "ページビュー",
        "averageSessionDuration": "平均セッション時間(秒)",
        "bounceRate": "直帰率",
        "newUsers": "新規ユーザー",
        "engagedSessions": "エンゲージセッション",
        "engagementRate": "エンゲージメント率",
        "screenPageViewsPerSession": "PV/セッション",
        "conversions": "コンバージョン",
    }

    for key, label in label_map.items():
        cur = cur_data.get(key, 0)
        prev = prev_data.get(key, 0)
        if "Rate" in key:
            print(f"  {label:25} {cur:.1%}  (前週: {prev:.1%})")
        else:
            change = ((cur - prev) / prev * 100) if prev > 0 else 0
            print(f"  {label:25} {cur:>10,.0f}  (前週: {prev:>10,.0f}, {change:+.1f}%)")


if __name__ == "__main__":
    main()
