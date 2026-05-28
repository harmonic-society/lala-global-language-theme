#!/usr/bin/env python3
"""
GA4 月次レポート用データ取得スクリプト

【重要】GA4データの確定タイミングについて
GA4のデータはイベント受信から確定まで24-72時間かかります。
そのため、対象期間からは直近2日を除外し、前月との「同一期間長」で比較します。

例: 今日が4/30なら
  対象期間（今月）: 2026-04-01 〜 2026-04-27（27日間）
  比較期間（前月）: 2026-03-01 〜 2026-03-27（27日間 / 同期間長）

使い方:
  python3 scripts/ga4-monthly-report.py
"""
from datetime import datetime, timedelta
from calendar import monthrange
import sys

try:
    from google.analytics.data_v1beta import BetaAnalyticsDataClient
    from google.analytics.data_v1beta.types import (
        RunReportRequest, DateRange, Dimension, Metric, OrderBy, Filter, FilterExpression,
    )
    from google.oauth2 import service_account
except ImportError:
    print("依存ライブラリが不足しています。以下を実行してください:")
    print("  pip3 install --break-system-packages google-analytics-data google-auth")
    sys.exit(1)

PROPERTY_ID = "501941562"
KEY_FILE = "harmonic-society-ac10d4c94814.json"

EXCLUDE_RECENT_DAYS = 2  # データ確定遅延


def get_date_ranges():
    """
    今月（1日〜直近確定日）と前月（1日〜同じ日数分）を返す。
    """
    today = datetime.now()
    end_cur = today - timedelta(days=EXCLUDE_RECENT_DAYS + 1)  # 直近2日除外、3日前まで
    start_cur = end_cur.replace(day=1)
    days_in_window = (end_cur - start_cur).days + 1  # 例: 4/1〜4/27 = 27日

    # 前月
    if start_cur.month == 1:
        prev_year, prev_month = start_cur.year - 1, 12
    else:
        prev_year, prev_month = start_cur.year, start_cur.month - 1
    start_prev = datetime(prev_year, prev_month, 1)
    end_prev = start_prev + timedelta(days=days_in_window - 1)

    # 前月のフル月（参考用）
    last_day_prev = monthrange(prev_year, prev_month)[1]
    start_prev_full = datetime(prev_year, prev_month, 1)
    end_prev_full = datetime(prev_year, prev_month, last_day_prev)

    return {
        "current": (start_cur.strftime("%Y-%m-%d"), end_cur.strftime("%Y-%m-%d")),
        "previous": (start_prev.strftime("%Y-%m-%d"), end_prev.strftime("%Y-%m-%d")),
        "previous_full": (start_prev_full.strftime("%Y-%m-%d"), end_prev_full.strftime("%Y-%m-%d")),
        "days": days_in_window,
    }


def get_client():
    credentials = service_account.Credentials.from_service_account_file(
        KEY_FILE, scopes=["https://www.googleapis.com/auth/analytics.readonly"]
    )
    return BetaAnalyticsDataClient(credentials=credentials)


def fmt_int(v): return f"{v:>12,.0f}"
def fmt_pct(v): return f"{v:>11.1%}"


def section(title):
    print()
    print("=" * 70)
    print(title)
    print("=" * 70)


def overview(client, cur, prev):
    r = client.run_report(RunReportRequest(
        property=f"properties/{PROPERTY_ID}",
        date_ranges=[
            DateRange(start_date=cur[0], end_date=cur[1]),
            DateRange(start_date=prev[0], end_date=prev[1]),
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

    cur_data, prev_data = {}, {}
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

    section("サイト全体サマリー（今月 vs 前月・同期間）")
    for key, label in label_map.items():
        c = cur_data.get(key, 0)
        p = prev_data.get(key, 0)
        if "Rate" in key:
            diff = (c - p) * 100
            print(f"  {label:25} {c:.1%}  (前月: {p:.1%}, {diff:+.1f}pt)")
        else:
            chg = ((c - p) / p * 100) if p > 0 else 0
            print(f"  {label:25} {c:>10,.0f}  (前月: {p:>10,.0f}, {chg:+.1f}%)")
    return cur_data, prev_data


def by_dimension(client, cur, prev, dim, label, top=20, order_metric="sessions"):
    def run(date_range):
        return client.run_report(RunReportRequest(
            property=f"properties/{PROPERTY_ID}",
            date_ranges=[DateRange(start_date=date_range[0], end_date=date_range[1])],
            dimensions=[Dimension(name=dim)],
            metrics=[
                Metric(name="sessions"), Metric(name="activeUsers"),
                Metric(name="bounceRate"), Metric(name="engagementRate"),
                Metric(name="screenPageViews"), Metric(name="conversions"),
            ],
            order_bys=[OrderBy(metric=OrderBy.MetricOrderBy(metric_name=order_metric), desc=True)],
            limit=200,
        ))

    cur_r, prev_r = run(cur), run(prev)
    cur_map = {}
    for row in cur_r.rows:
        k = row.dimension_values[0].value
        cur_map[k] = {
            "sessions": int(row.metric_values[0].value),
            "users": int(row.metric_values[1].value),
            "bounce": float(row.metric_values[2].value),
            "engage": float(row.metric_values[3].value),
            "pv": int(row.metric_values[4].value),
            "cv": float(row.metric_values[5].value),
        }
    prev_map = {}
    for row in prev_r.rows:
        k = row.dimension_values[0].value
        prev_map[k] = {
            "sessions": int(row.metric_values[0].value),
            "cv": float(row.metric_values[5].value),
        }

    section(f"{label}（今月 / 前月比較）")
    print(f"  {'値':<35} {'今月セッ':>9} {'前月セッ':>9} {'変化':>8}  {'CV':>4} {'前CV':>5} {'直帰率':>7} {'エンゲ率':>7}")
    items = list(cur_map.items())[:top]
    for k, v in items:
        prev_v = prev_map.get(k, {"sessions": 0, "cv": 0})
        chg = ((v["sessions"] - prev_v["sessions"]) / prev_v["sessions"] * 100) if prev_v["sessions"] > 0 else (999 if v["sessions"] > 0 else 0)
        chg_s = f"{chg:+.1f}%" if prev_v["sessions"] > 0 else "NEW"
        kdisp = (k[:33] + "..") if len(k) > 35 else k
        print(f"  {kdisp:<35} {v['sessions']:>9,} {prev_v['sessions']:>9,} {chg_s:>8}  {v['cv']:>4.0f} {prev_v['cv']:>5.0f} {v['bounce']:>6.1%} {v['engage']:>7.1%}")


def by_page(client, cur, prev, top=30):
    def run(date_range):
        return client.run_report(RunReportRequest(
            property=f"properties/{PROPERTY_ID}",
            date_ranges=[DateRange(start_date=date_range[0], end_date=date_range[1])],
            dimensions=[Dimension(name="pageTitle")],
            metrics=[
                Metric(name="screenPageViews"), Metric(name="activeUsers"),
                Metric(name="averageSessionDuration"), Metric(name="bounceRate"),
            ],
            order_bys=[OrderBy(metric=OrderBy.MetricOrderBy(metric_name="screenPageViews"), desc=True)],
            limit=200,
        ))

    cur_r, prev_r = run(cur), run(prev)
    cur_map = {row.dimension_values[0].value: (
        int(row.metric_values[0].value),
        int(row.metric_values[1].value),
        float(row.metric_values[2].value),
        float(row.metric_values[3].value),
    ) for row in cur_r.rows}
    prev_map = {row.dimension_values[0].value: int(row.metric_values[0].value)
                for row in prev_r.rows}

    section(f"人気ページ TOP{top}（PV順、今月）")
    print(f"  順位 {'タイトル':<40} {'PV':>6} {'前月PV':>7} {'変化':>8} {'ユーザー':>7} {'滞在':>5} {'直帰率':>7}")
    items = list(cur_map.items())[:top]
    for i, (title, (pv, users, dur, bounce)) in enumerate(items, 1):
        prev_pv = prev_map.get(title, 0)
        chg = ((pv - prev_pv) / prev_pv * 100) if prev_pv > 0 else (999 if pv > 0 else 0)
        chg_s = f"{chg:+.0f}%" if prev_pv > 0 else "NEW"
        td = title.replace("　", " ")[:40]
        print(f"  {i:>3}  {td:<40} {pv:>6,} {prev_pv:>7,} {chg_s:>8} {users:>7,} {dur:>4.0f}s {bounce:>6.1%}")


def daily_trend(client, cur):
    r = client.run_report(RunReportRequest(
        property=f"properties/{PROPERTY_ID}",
        date_ranges=[DateRange(start_date=cur[0], end_date=cur[1])],
        dimensions=[Dimension(name="date")],
        metrics=[
            Metric(name="activeUsers"), Metric(name="sessions"),
            Metric(name="screenPageViews"), Metric(name="newUsers"),
            Metric(name="bounceRate"), Metric(name="conversions"),
        ],
        order_bys=[OrderBy(dimension=OrderBy.DimensionOrderBy(dimension_name="date"))],
    ))
    section("日別トレンド（今月）")
    print(f"  {'日付':<10} {'ユーザー':>7} {'セッション':>9} {'PV':>6} {'新規':>6} {'直帰率':>7} {'CV':>4}")
    for row in r.rows:
        d = row.dimension_values[0].value  # YYYYMMDD
        d_disp = f"{d[:4]}-{d[4:6]}-{d[6:]}"
        u = int(row.metric_values[0].value)
        s = int(row.metric_values[1].value)
        pv = int(row.metric_values[2].value)
        nu = int(row.metric_values[3].value)
        br = float(row.metric_values[4].value)
        cv = float(row.metric_values[5].value)
        print(f"  {d_disp:<10} {u:>7,} {s:>9,} {pv:>6,} {nu:>6,} {br:>6.1%} {cv:>4.0f}")


def events(client, cur, prev, top=20):
    def run(date_range):
        return client.run_report(RunReportRequest(
            property=f"properties/{PROPERTY_ID}",
            date_ranges=[DateRange(start_date=date_range[0], end_date=date_range[1])],
            dimensions=[Dimension(name="eventName")],
            metrics=[Metric(name="eventCount")],
            order_bys=[OrderBy(metric=OrderBy.MetricOrderBy(metric_name="eventCount"), desc=True)],
            limit=50,
        ))
    cur_r, prev_r = run(cur), run(prev)
    cur_map = {row.dimension_values[0].value: int(row.metric_values[0].value) for row in cur_r.rows}
    prev_map = {row.dimension_values[0].value: int(row.metric_values[0].value) for row in prev_r.rows}

    section(f"イベント・コンバージョン詳細 TOP{top}")
    print(f"  {'イベント':<35} {'今月':>9} {'前月':>9} {'変化':>9}")
    for k, v in list(cur_map.items())[:top]:
        p = prev_map.get(k, 0)
        chg = ((v - p) / p * 100) if p > 0 else (999 if v > 0 else 0)
        chg_s = f"{chg:+.1f}%" if p > 0 else "NEW"
        kd = (k[:33] + "..") if len(k) > 35 else k
        print(f"  {kd:<35} {v:>9,} {p:>9,} {chg_s:>9}")


def main():
    ranges = get_date_ranges()
    cur = ranges["current"]
    prev = ranges["previous"]
    prev_full = ranges["previous_full"]
    days = ranges["days"]

    print("【LaLa GLOBAL LANGUAGE 月次GA4レポート】")
    print(f"対象期間（今月）: {cur[0]} 〜 {cur[1]} ({days}日間)")
    print(f"比較期間（前月・同期間）: {prev[0]} 〜 {prev[1]} ({days}日間)")
    print(f"参考: 前月フル: {prev_full[0]} 〜 {prev_full[1]}")
    print(f"※ データ確定遅延を考慮し、直近{EXCLUDE_RECENT_DAYS}日は除外")
    client = get_client()

    overview(client, cur, prev)
    daily_trend(client, cur)
    by_dimension(client, cur, prev, "hostName", "ホスト名別分析", top=30)
    by_page(client, cur, prev, top=30)
    by_dimension(client, cur, prev, "sessionDefaultChannelGroup", "流入元（チャネル別）", top=10)
    by_dimension(client, cur, prev, "sessionSourceMedium", "流入元（ソース/メディア別）", top=20)
    events(client, cur, prev, top=20)
    by_dimension(client, cur, prev, "deviceCategory", "デバイス構成", top=5)
    by_dimension(client, cur, prev, "country", "地域分析（国別）", top=20)
    by_dimension(client, cur, prev, "landingPagePlusQueryString", "ランディングページ", top=25)
    by_dimension(client, cur, prev, "newVsReturning", "新規 vs リピーター", top=5)


if __name__ == "__main__":
    main()
