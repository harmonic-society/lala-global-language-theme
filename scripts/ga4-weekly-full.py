#!/usr/bin/env python3
"""GA4 週次レポート用 全セクションデータ取得スクリプト

ga4-weekly-report.py がサイト全体サマリーのみを出力するのに対し、
本スクリプトは週次レポート（ga4-report-YYYYMMDD.md）の全セクションに必要な
生データをまとめて取得します：

  日別トレンド / ホスト名別 / 人気ページ / チャネル別 / ソース・メディア別 /
  イベント / デバイス / 地域 / ランディングページ品質 / 新規vsリピーター

データ確定遅延を考慮し「今週＝3〜10日前の8日間（確定済）」「前週＝その前の8日間」を
2期間同時取得し、直近2日は暫定値として日別トレンドに別掲します。
date_range_0 = 今週、date_range_1 = 前週。

使い方:
  python3 scripts/ga4-weekly-full.py
"""
from datetime import datetime, timedelta
from google.analytics.data_v1beta import BetaAnalyticsDataClient
from google.analytics.data_v1beta.types import (
    RunReportRequest, DateRange, Dimension, Metric, OrderBy,
)
from google.oauth2 import service_account

PROPERTY_ID = "501941562"
KEY_FILE = "harmonic-society-ac10d4c94814.json"
EXCLUDE_RECENT_DAYS = 2

today = datetime.now()
end_cur = today - timedelta(days=EXCLUDE_RECENT_DAYS + 1)
start_cur = end_cur - timedelta(days=7)
end_prev = start_cur - timedelta(days=1)
start_prev = end_prev - timedelta(days=7)
# 直近2日（暫定値）
prov_start = (end_cur + timedelta(days=1)).strftime("%Y-%m-%d")
prov_end = (today - timedelta(days=1)).strftime("%Y-%m-%d")

CUR = (start_cur.strftime("%Y-%m-%d"), end_cur.strftime("%Y-%m-%d"))
PREV = (start_prev.strftime("%Y-%m-%d"), end_prev.strftime("%Y-%m-%d"))

creds = service_account.Credentials.from_service_account_file(
    KEY_FILE, scopes=["https://www.googleapis.com/auth/analytics.readonly"])
client = BetaAnalyticsDataClient(credentials=creds)
P = f"properties/{PROPERTY_ID}"

def two_range(dims, mets, order_metric=None, limit=30):
    ob = []
    if order_metric:
        ob = [OrderBy(metric=OrderBy.MetricOrderBy(metric_name=order_metric), desc=True)]
    r = client.run_report(RunReportRequest(
        property=P,
        date_ranges=[DateRange(start_date=CUR[0], end_date=CUR[1]),
                     DateRange(start_date=PREV[0], end_date=PREV[1])],
        dimensions=[Dimension(name=d) for d in dims],
        metrics=[Metric(name=m) for m in mets],
        order_bys=ob, limit=limit,
    ))
    return r

def single_range(dims, mets, dr, order_metric=None, limit=30):
    ob = []
    if order_metric:
        ob = [OrderBy(metric=OrderBy.MetricOrderBy(metric_name=order_metric), desc=True)]
    r = client.run_report(RunReportRequest(
        property=P,
        date_ranges=[DateRange(start_date=dr[0], end_date=dr[1])],
        dimensions=[Dimension(name=d) for d in dims],
        metrics=[Metric(name=m) for m in mets],
        order_bys=ob, limit=limit,
    ))
    return r

def dump(title, r, dims, mets):
    print(f"\n##### {title}")
    print("\t".join(dims + mets))
    for row in r.rows:
        dvals = [dv.value for dv in row.dimension_values]
        mvals = [mv.value for mv in row.metric_values]
        print("\t".join(dvals + mvals))

print(f"対象期間（今週）: {CUR[0]} 〜 {CUR[1]}")
print(f"比較期間（前週）: {PREV[0]} 〜 {PREV[1]}")
print(f"暫定期間（直近2日）: {prov_start} 〜 {prov_end}")

# 1. 日別トレンド（今週+暫定）
dr_all = (CUR[0], prov_end)
r = single_range(["date"], ["activeUsers","sessions","screenPageViews","newUsers","bounceRate","conversions"], dr_all, limit=20)
dump("日別トレンド（今週〜暫定）", r, ["date"], ["activeUsers","sessions","screenPageViews","newUsers","bounceRate","conversions"])

# 2. ホスト名別
r = two_range(["hostName"], ["sessions","conversions","bounceRate","engagementRate","averageSessionDuration"], "sessions", 20)
dump("ホスト名別（2期間）", r, ["hostName","dateRange"], ["sessions","conversions","bounceRate","engagementRate","averageSessionDuration"])

# 3. 人気ページ TOP25
r = two_range(["pageTitle"], ["screenPageViews","activeUsers","averageSessionDuration","bounceRate"], "screenPageViews", 30)
dump("人気ページ（2期間）", r, ["pageTitle","dateRange"], ["screenPageViews","activeUsers","averageSessionDuration","bounceRate"])

# 4. チャネル別
r = two_range(["sessionDefaultChannelGroup"], ["sessions","conversions"], "sessions", 20)
dump("チャネル別（2期間）", r, ["sessionDefaultChannelGroup","dateRange"], ["sessions","conversions"])

# 5. ソース/メディア TOP15
r = two_range(["sessionSourceMedium"], ["sessions","conversions"], "sessions", 25)
dump("ソース/メディア（2期間）", r, ["sessionSourceMedium","dateRange"], ["sessions","conversions"])

# 6. イベント
r = two_range(["eventName"], ["eventCount"], "eventCount", 30)
dump("イベント（2期間）", r, ["eventName","dateRange"], ["eventCount"])

# 7. デバイス
r = two_range(["deviceCategory"], ["sessions","bounceRate","conversions"], "sessions", 10)
dump("デバイス（2期間）", r, ["deviceCategory","dateRange"], ["sessions","bounceRate","conversions"])

# 8. 地域
r = two_range(["country"], ["sessions"], "sessions", 20)
dump("地域（2期間）", r, ["country","dateRange"], ["sessions"])

# 9. ランディングページ品質
r = single_range(["landingPage"], ["sessions","bounceRate","averageSessionDuration","engagementRate"], CUR, "sessions", 20)
dump("ランディングページ品質（今週）", r, ["landingPage"], ["sessions","bounceRate","averageSessionDuration","engagementRate"])

# 10. 新規 vs リピーター
r = two_range(["newVsReturning"], ["sessions"], "sessions", 10)
dump("新規vsリピーター（2期間）", r, ["newVsReturning","dateRange"], ["sessions"])
