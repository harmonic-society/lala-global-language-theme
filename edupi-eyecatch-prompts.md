# エデュピ！にほんごサポート 記事広告 アイキャッチ画像 プロンプト集

## 🎯 推奨サイズ
- **WordPress標準アイキャッチ**：1200 × 630px（OGP対応）
- **記事内挿入用**：1920 × 1080px
- **正方形SNS用**：1080 × 1080px

---

## 🎨 プロンプト案①：物語性重視（ストーリーフック型）★最推奨

### 日本語版（イメージ用）
> 日本の小学校の教室。やわらかな夕方の光が窓から差し込む。教室の隅で、ノートパソコンに向かって笑顔で学んでいる外国ルーツの小学生（アジア系、肌の色は多様）。画面の向こうにはバイリンガル講師の笑顔。後ろの黒板には「ようこそ」と書かれている。温かく、希望に満ちた雰囲気。シネマティックな照明、柔らかい光、明るい未来感

### 英語版（Midjourney / DALL-E / Stable Diffusion 用）

```
A warm, hopeful scene inside a Japanese elementary school classroom in the late afternoon. Soft golden sunlight streams through the windows, illuminating the wooden floor and desks. In the foreground, a happy multicultural elementary school child (mixed Asian/Southeast Asian heritage, around 8-10 years old) is sitting at a desk, smiling at a laptop screen during an online lesson. On the laptop screen, a friendly bilingual teacher is visible, smiling back warmly. The blackboard in the background has "ようこそ" (Welcome) written in chalk. Soft cinematic lighting, shallow depth of field, photorealistic, optimistic and inviting atmosphere, professional editorial photography style, warm color palette (cream, amber, soft blue), 16:9 aspect ratio --ar 16:9 --style raw --v 6
```

### スタイル指定
- **トーン**：温かい、希望的、エディトリアル写真
- **色調**：クリーム・アンバー・ソフトブルー
- **構図**：横長16:9、左に子ども、右に空間（テキスト挿入用余白）

---

## 🎨 プロンプト案②：象徴的な「画面越しの笑顔」型

### 英語版

```
Close-up split-screen composition: On the left, a small foreign-rooted child in a Japanese school uniform looking at a laptop with curious bright eyes. On the right side of the laptop screen, a smiling young bilingual female teacher (warm friendly expression, professional-looking) waving back through the video call. Background: blurred Japanese elementary school classroom with soft natural lighting. The atmosphere conveys "connection across the language barrier." Photorealistic, cinematic, soft warm lighting, editorial documentary style, hopeful and gentle mood --ar 16:9 --style raw --v 6
```

### 使いどころ
- 「先生と子どもをつなぐ」のメッセージを直接的に表現
- 「画面越しのコミュニケーション」というサービスの本質を視覚化

---

## 🎨 プロンプト案③：35言語の多様性を表現する型

### 英語版

```
A group of diverse multicultural elementary school children (from different countries: Vietnamese, Filipino, Nepalese, Brazilian, Chinese, Indonesian, etc.) standing together in a Japanese elementary school yard, smiling at the camera. Cherry blossoms gently falling in the spring afternoon light. Each child holds a small flag or wears subtle cultural touches. School building blurred in the background. Warm, harmonious, hopeful, photorealistic editorial photography style, soft golden hour lighting --ar 16:9 --style raw --v 6
```

### 使いどころ
- 「多文化共生」を直接的に表現したい場合
- 自治体・教育委員会向けの記事に最適

---

## 🎨 プロンプト案④：「教室の隅でうつむく男の子」→「笑顔」の対比型

### 英語版（Before/After 風）

```
Cinematic editorial photo: A small Asian boy (foreign-rooted, around 8 years old) sitting alone at the back of a Japanese elementary classroom, gradually transitioning from a sad downcast expression on the left side to a bright joyful smile on the right side. Soft afternoon sunlight, school desk, notebook, laptop showing a friendly teacher's face. Warm hopeful color grade, dreamlike transition effect, photorealistic, emotional storytelling style --ar 16:9 --style raw --v 6
```

### 使いどころ
- 記事冒頭の「教室の隅の男の子」のストーリーと完全リンク
- 感情的訴求が強い

---

## 🎨 プロンプト案⑤：シンプル＆ブランド統一型（テキスト挿入向け）

### 英語版

```
Minimalist editorial photograph of a Japanese elementary school classroom, empty wooden desks arranged neatly, large window with soft sunlight pouring in. In the foreground center, a single laptop is open on a desk, screen glowing with a warm welcoming light. The composition has plenty of negative space on the left for text overlay. Calm, hopeful, contemplative mood. Photorealistic, shallow depth of field, soft cream and pale blue color palette --ar 16:9 --style raw --v 6
```

### 使いどころ
- タイトル文字を後から重ねたい場合
- 「静かで力強い」印象を演出
- ブランドロゴ・タイトル文字配置の余白あり

---

## 🎨 プロンプト案⑥：エデュピ！既存資料との統一感重視型

### 英語版

```
A bright Japanese elementary school classroom with large windows, soft natural afternoon light. A multicultural child (warm Asian/Southeast Asian appearance, about 9 years old) is sitting at a wooden desk, looking at a laptop screen with a delighted smile. The laptop displays a video lesson interface with a friendly teacher. Subtle background: blurred classroom interior with books and Japanese cultural elements. Mood: hopeful, gentle, professional. Editorial photography, warm cream and soft blue tones with golden highlights, matching a Japanese education service brand aesthetic --ar 16:9 --style raw --v 6
```

### 使いどころ
- すでに作成されているエデュピ！PDFのデザイントーンと統一したい場合
- ブランド資料との一貫性を重視

---

## 📋 各AIサービス別の使い分け

### Midjourney（v6 推奨）
- プロンプト末尾に `--ar 16:9 --style raw --v 6` を付与
- 写真リアリスティックなクオリティを求めるなら最適

### DALL-E 3（ChatGPT経由）
- 日本語プロンプトでもOK
- `--ar`等は使わない。代わりに「横長16:9」と日本語で指定

### Stable Diffusion / Adobe Firefly
- ネガティブプロンプト追加推奨：
  ```
  Negative: cartoon, anime, 3d render, low quality, blurry, distorted faces, text watermark, ugly, deformed
  ```

### Google Gemini Imagen / Microsoft Copilot
- そのまま英語プロンプトを使用可能

---

## ✍️ 共通ネガティブプロンプト（避けたい要素）

```
cartoon, anime, 3D render, illustration, low quality, blurry, distorted faces,
multiple heads, deformed hands, text overlay, watermark, signature,
oversaturated colors, dark depressing mood, sad expression (※案④以外),
stereotype, racial caricature, exaggerated expressions
```

---

## 🎯 最終おすすめ：①の改良版（フル英語）

```
A warm, hopeful editorial photograph inside a bright Japanese elementary school classroom in the late afternoon. Soft golden sunlight streams through tall windows, casting gentle shadows on the wooden desks. In the center-left foreground, a happy foreign-rooted elementary school child (Southeast Asian heritage, around 9 years old, wearing a simple t-shirt) is sitting at a desk, looking at an open laptop with a delighted smile. On the laptop screen, a friendly bilingual female teacher is visible, smiling back warmly through a video lesson. The blackboard behind has "ようこそ" softly written in chalk. The right side of the frame has gentle negative space showing the classroom with blurred books and shelves. Mood: optimistic, gentle, full of possibility. Photorealistic editorial documentary photography, shallow depth of field, soft cinematic lighting, warm cream-amber-soft blue color palette. Composition leaves room for title text overlay on the upper-right area. --ar 16:9 --style raw --v 6
```

---

## 📐 出力後の編集Tips

1. **タイトル文字の挿入** ：右上に余白を残してプロンプトしているので、Canvaなどで簡単にタイトルを重ねられます
2. **ロゴ配置** ：右下に「（株）LaLa GLOBAL LANGUAGE」ロゴ
3. **明度調整** ：WordPress表示時にやや明るく見えるよう、書き出し時は **彩度+10%、明度+5%** で調整推奨
4. **JPG vs PNG** ：人物が主役 → JPG（85%品質）、ロゴ含むデザイン → PNG

---

## 🔁 もし結果が物足りない場合の調整キーワード

| 求める方向性 | 追加キーワード |
|---|---|
| もっと温かく | `warm golden hour, soft amber light, cozy atmosphere` |
| もっとプロっぽく | `national geographic style, award-winning photography, sharp focus` |
| もっと希望的に | `optimistic, hopeful, future-bright, uplifting mood` |
| 子どもの笑顔強調 | `genuine joyful smile, sparkling eyes, candid moment` |
| 教室の雰囲気強調 | `Japanese elementary classroom, wooden desks, chalkboard, school atmosphere` |
| 多文化感を強調 | `multicultural diversity, inclusive atmosphere, international children` |

---

**※ プロンプトは「①の最終改良版」を最推奨します。記事冒頭のストーリー（教室の隅の男の子が笑顔を取り戻す）と完全に呼応するアイキャッチになります。**
