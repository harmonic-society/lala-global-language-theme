# Contact Form 7 設定手順書

## 1. Contact Form 7プラグインのインストール

1. WordPress管理画面にログイン
2. 左メニューから「プラグイン」→「新規追加」をクリック
3. 検索ボックスに「Contact Form 7」と入力
4. 「今すぐインストール」→「有効化」をクリック

## 2. 新規フォームの作成

1. 左メニューに追加された「お問い合わせ」→「新規追加」をクリック
2. フォームのタイトルを入力（例：「LaLa Global Language お問い合わせフォーム」）

## 3. フォームコードの設定

以下のコードをフォーム編集エリアに貼り付けてください：

```html
<div class="lala-contact-form">

<div class="form-group">
<label for="inquiry-type">お問い合わせの種類 <span class="required">*</span></label>
[select* inquiry-type id:inquiry-type class:form-control "選択してください" "資料請求" "体験レッスン" "入会相談" "講師採用" "事務採用"]
</div>

<div class="form-group">
<label for="language">ご希望の言語 <span class="required">*</span></label>
[select* language id:language class:form-control "選択してください" "英語" "中国語（北京語）" "台湾華語" "韓国語" "モンゴル語" "インドネシア語" "カンボジア語（クメール語）" "ラオス語" "ミャンマー語（ビルマ語）" "マレーシア語（マレー語）" "フィリピン語（タガログ語）" "タイ語" "ベトナム語" "ベンガル語" "ヒンディー語" "ネパール語" "パンジャーブ語" "シンハラ語" "タミル語" "ウルドゥー語" "ドイツ語" "フランス語" "イタリア語" "スペイン語" "ポルトガル語" "オランダ語" "ロシア語" "ウクライナ語" "チェコ語" "ハンガリー語" "アラビア語" "ペルシャ語" "ヘブライ語" "トルコ語" "スワヒリ語" "スタッフ（事務採用の場合）"]
</div>

<div class="form-group">
<label for="your-name">お名前（フルネーム） <span class="required">*</span></label>
[text* your-name id:your-name class:form-control placeholder "山田 太郎"]
</div>

<div class="form-group">
<label for="your-email">メールアドレス <span class="required">*</span></label>
[email* your-email id:your-email class:form-control placeholder "example@email.com"]
</div>

<div class="form-group">
<label for="your-phone">電話番号 <span class="required">*</span></label>
[tel* your-phone id:your-phone class:form-control placeholder "090-1234-5678"]
</div>

<div class="form-group">
<label for="your-message">メッセージ（100〜200文字程度）</label>
[textarea your-message id:your-message class:form-control rows:5 placeholder "お問い合わせ内容をご記入ください"]
</div>

<div class="form-group">
[acceptance acceptance-privacy] <span class="privacy-text"><a href="/privacy-policy/" target="_blank">プライバシーポリシー</a>に同意する <span class="required">*</span></span>
</div>

<div class="form-submit">
[submit class:btn class:btn-primary class:btn-large "送信する"]
</div>

</div>
```

## 4. メール設定

### 4.1 メールタブをクリック

**送信先（管理者向け）の設定：**

- **送信先**: info@lala-global-language.com（実際の受信メールアドレスに変更）
- **送信元**: [your-name] <wordpress@yourdomain.com>
- **題名**: 【LaLa】[inquiry-type] - [your-name]様からのお問い合わせ
- **追加ヘッダー**: Reply-To: [your-email]

**メッセージ本文**:
```
お問い合わせを受信しました。

【お問い合わせ内容】
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

■ お問い合わせの種類：[inquiry-type]
■ ご希望の言語：[language]
■ お名前：[your-name]
■ メールアドレス：[your-email]
■ 電話番号：[your-phone]

■ メッセージ：
[your-message]

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

このメールは LaLa Global Language のウェブサイトから送信されました。
```

### 4.2 メール(2)を有効化

自動返信メールの設定：

- **メール(2)を使用**にチェック
- **送信先**: [your-email]
- **送信元**: LaLa Global Language <noreply@yourdomain.com>
- **題名**: 【LaLa Global Language】お問い合わせありがとうございます

**メッセージ本文**:
```
[your-name] 様

この度は、LaLa Global Language へお問い合わせいただき、誠にありがとうございます。
以下の内容でお問い合わせを承りました。

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

■ お問い合わせの種類：[inquiry-type]
■ ご希望の言語：[language]
■ お名前：[your-name]
■ メールアドレス：[your-email]
■ 電話番号：[your-phone]

■ メッセージ：
[your-message]

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

担当者より3営業日以内にご連絡させていただきます。
今しばらくお待ちくださいませ。

なお、お急ぎの場合は以下までお電話ください。
TEL: 03-xxxx-xxxx（平日10:00-18:00）

--
LaLa Global Language
35ヶ国語から選べる、日本人のための語学スクール
https://lala-global-language.com
```

## 5. メッセージ設定

メッセージタブで以下を設定：

- **送信完了**: お問い合わせありがとうございました。内容を確認の上、担当者よりご連絡させていただきます。
- **送信失敗**: 送信に失敗しました。お手数ですが、しばらく経ってから再度お試しください。
- **入力必須項目エラー**: 必須項目が入力されていません。ご確認ください。
- **メールアドレス形式エラー**: 正しいメールアドレスを入力してください。

## 6. フォームの保存とショートコード取得

1. 「保存」ボタンをクリック
2. 表示されるショートコード（例：`[contact-form-7 id="123" title="LaLa Global Language お問い合わせフォーム"]`）をコピー

## 7. 固定ページへの設置

1. 「固定ページ」→「新規追加」または既存のお問い合わせページを編集
2. ページタイトル：「お問い合わせ」
3. 本文にショートコードを貼り付け
4. 「公開」または「更新」をクリック

## 8. スタイリング（CSS）の追加

テーマの style.css または カスタマイザーの追加CSSに以下を追加：

```css
/* Contact Form 7 カスタムスタイル */
.lala-contact-form {
    max-width: 800px;
    margin: 0 auto;
    padding: 40px;
    background: #fff;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.lala-contact-form .form-group {
    margin-bottom: 25px;
}

.lala-contact-form label {
    display: block;
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
    font-size: 1.1rem;
}

.lala-contact-form .required {
    color: #F88379;
    font-weight: normal;
}

.lala-contact-form .form-control {
    width: 100%;
    padding: 12px 20px;
    font-size: 1rem;
    border: 2px solid #e0e0e0;
    border-radius: 10px;
    background: #f8f9fa;
    transition: all 0.3s ease;
}

.lala-contact-form .form-control:focus {
    outline: none;
    border-color: #008080;
    background: #fff;
}

.lala-contact-form select.form-control {
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath fill='%23333' d='M6 8L0 0h12z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 20px center;
    padding-right: 50px;
}

.lala-contact-form textarea.form-control {
    resize: vertical;
    min-height: 120px;
}

.lala-contact-form .privacy-text {
    font-size: 0.95rem;
    margin-left: 5px;
}

.lala-contact-form .privacy-text a {
    color: #008080;
    text-decoration: underline;
    font-weight: 500;
}

.lala-contact-form .privacy-text a:hover {
    text-decoration: none;
    color: #006666;
}

.lala-contact-form .form-submit {
    text-align: center;
    margin-top: 30px;
}

.lala-contact-form .btn-primary {
    background: linear-gradient(135deg, #008080 0%, #006666 100%);
    color: white;
    padding: 15px 50px;
    font-size: 1.1rem;
    font-weight: 600;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.lala-contact-form .btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0, 128, 128, 0.3);
}

/* エラーメッセージスタイル */
.lala-contact-form .wpcf7-not-valid-tip {
    color: #dc3545;
    font-size: 0.85rem;
    margin-top: 5px;
}

.lala-contact-form .wpcf7-not-valid {
    border-color: #dc3545 !important;
}

.lala-contact-form .wpcf7-response-output {
    margin: 20px 0;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
    font-weight: 600;
}

.lala-contact-form .wpcf7-mail-sent-ok {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.lala-contact-form .wpcf7-mail-sent-ng,
.lala-contact-form .wpcf7-aborted,
.lala-contact-form .wpcf7-spam-blocked,
.lala-contact-form .wpcf7-validation-errors {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

/* レスポンシブ対応 */
@media (max-width: 768px) {
    .lala-contact-form {
        padding: 20px;
    }
    
    .lala-contact-form .form-control {
        font-size: 16px; /* iOSのズーム防止 */
    }
}
```

## 9. 動作確認

1. お問い合わせページにアクセス
2. 各項目を入力してテスト送信
3. 管理者メールと自動返信メールが届くことを確認
4. エラーメッセージが適切に表示されることを確認

## 10. 追加の推奨設定

### スパム対策
- Akismetプラグインをインストール・有効化
- reCAPTCHAの設定（Contact Form 7の統合設定から）

### フォーム送信データの保存
- Flamingo プラグイン（Contact Form 7の姉妹プラグイン）をインストール
- 送信されたメッセージをデータベースに保存可能

### 注意事項
- メールアドレスは実際のものに変更してください
- 電話番号は実際のものに変更してください
- プライバシーポリシーページへのリンクを追加することを推奨

以上で設定は完了です。