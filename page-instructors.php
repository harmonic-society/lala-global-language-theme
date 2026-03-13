<?php
/**
 * Template Name: Instructors Page
 * Description: 講師紹介ページ
 *
 * @package LaLa_Global_Language
 */

get_header(); ?>

<?php lala_breadcrumbs(); ?>

<main id="primary" class="site-main instructors-page">
    <!-- Hero Section -->
    <section class="instructors-hero">
        <div class="container">
            <h1 class="instructors-hero-title fade-in">講師紹介</h1>
            <p class="instructors-hero-subtitle fade-in">世界各国出身のバイリンガル講師が、あなたの「学びたい」を全力サポート！</p>
        </div>
    </section>

    <!-- Instructors Grid Section -->
    <section class="instructors-section">
        <div class="container">

            <!-- ギフト講師 -->
            <div class="instructor-card fade-in">
                <div class="instructor-card-inner">
                    <div class="instructor-photo-area">
                        <div class="instructor-photo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gift-thai.jpeg" alt="ギフト講師" style="object-position: center 20%;">
                        </div>
                        <div class="instructor-flag">🇹🇭</div>
                    </div>
                    <div class="instructor-info">
                        <div class="instructor-header">
                            <h2 class="instructor-name">ギフト講師</h2>
                            <span class="instructor-language-badge">タイ語</span>
                        </div>
                        <p class="instructor-origin">タイ（バンコク）出身</p>
                        <div class="instructor-tags">
                            <span class="tag">語学指導</span>
                            <span class="tag">法人研修</span>
                            <span class="tag">検定指導</span>
                            <span class="tag">通訳業務</span>
                        </div>
                        <div class="instructor-availability">
                            <span class="avail-item">平日昼OK</span>
                            <span class="avail-item">平日夜OK</span>
                        </div>
                        <p class="instructor-style">ドラマ・仕事・日常会話を、初心者から丁寧に指導</p>
                        <div class="instructor-message">
                            <p>タイ語が初めての方もどうぞ安心ください。日常会話からビジネス交渉、ドラマのセリフまで、ご要望に合わせて幅広くサポートいたします。基礎から一歩ずつ、丁寧に指導いたしますので、私と一緒に生きたタイ語を身につけていきましょう！</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ジュン講師 -->
            <div class="instructor-card fade-in">
                <div class="instructor-card-inner">
                    <div class="instructor-photo-area">
                        <div class="instructor-photo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/jun-vietnam.jpg" alt="ジュン講師" style="object-position: center 25%;">
                        </div>
                        <div class="instructor-flag">🇻🇳</div>
                    </div>
                    <div class="instructor-info">
                        <div class="instructor-header">
                            <h2 class="instructor-name">ジュン講師</h2>
                            <span class="instructor-language-badge">ベトナム語</span>
                        </div>
                        <p class="instructor-origin">ベトナム（ハノイ）出身</p>
                        <div class="instructor-tags">
                            <span class="tag">語学指導</span>
                            <span class="tag">法人研修</span>
                            <span class="tag">検定指導</span>
                            <span class="tag">通訳業務</span>
                            <span class="tag">翻訳業務</span>
                        </div>
                        <div class="instructor-availability">
                            <span class="avail-item">平日夜OK</span>
                            <span class="avail-item">土日OK</span>
                        </div>
                        <p class="instructor-style">楽しく話せる実践ベトナム語</p>
                        <div class="instructor-message">
                            <p>ベトナムは北部・中部・南部で方言の違いが大きい国ですが、私はハノイ出身で標準的なベトナム語の発音を分かりやすくお伝えします。通訳経験もあり、日常会話からビジネスまで対応可能です。「聞き取れる・話せる」実践的なベトナム語を、皆さんの目的やレベルに合わせて身につけていきましょう！</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- アレク講師 -->
            <div class="instructor-card fade-in">
                <div class="instructor-card-inner">
                    <div class="instructor-photo-area">
                        <div class="instructor-photo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/alek-indonesia.jpeg" alt="アレク講師" style="object-position: center 20%;">
                        </div>
                        <div class="instructor-flag">🇮🇩</div>
                    </div>
                    <div class="instructor-info">
                        <div class="instructor-header">
                            <h2 class="instructor-name">アレク講師</h2>
                            <span class="instructor-language-badge">インドネシア語</span>
                        </div>
                        <p class="instructor-origin">インドネシア出身</p>
                        <div class="instructor-tags">
                            <span class="tag">語学指導</span>
                            <span class="tag">官公庁研修</span>
                            <span class="tag">通訳業務</span>
                        </div>
                        <div class="instructor-availability">
                            <span class="avail-item">平日夜OK</span>
                            <span class="avail-item">土日OK</span>
                        </div>
                        <p class="instructor-style">楽しく実践で学ぶ会話レッスン</p>
                        <div class="instructor-message">
                            <p>インドネシア語は、実際に使いながら覚えることで自然に身につきます。間違えても大丈夫。安心してたくさん話してください。受講生一人ひとりの目的に合わせて、実際の会話で使える表現を丁寧にサポートします。一緒に楽しく学んでいきましょう！</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ユカ講師 -->
            <div class="instructor-card fade-in">
                <div class="instructor-card-inner">
                    <div class="instructor-photo-area">
                        <div class="instructor-photo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/yuka-philippines.jpg" alt="ユカ講師" style="object-position: center 15%;">
                        </div>
                        <div class="instructor-flag">🇵🇭</div>
                    </div>
                    <div class="instructor-info">
                        <div class="instructor-header">
                            <h2 class="instructor-name">ユカ講師</h2>
                            <span class="instructor-language-badge">フィリピン語 / 英語</span>
                        </div>
                        <p class="instructor-origin">フィリピン出身</p>
                        <div class="instructor-tags">
                            <span class="tag">語学指導</span>
                            <span class="tag">官公庁研修</span>
                            <span class="tag">検定指導</span>
                            <span class="tag">通訳業務</span>
                            <span class="tag">翻訳業務</span>
                        </div>
                        <div class="instructor-availability">
                            <span class="avail-item">平日昼OK</span>
                            <span class="avail-item">土日OK</span>
                        </div>
                        <p class="instructor-style">初心者でも安心の実践語学レッスン</p>
                        <div class="instructor-message">
                            <p>学生の方から社会人の方まで、それぞれのレベルや目的に合わせて丁寧にサポートします。初心者の方でも学べて、実際に使える語学力を身につけます。一緒に楽しく「ことば」を学びましょう！</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- スイエイ講師（広東語・北京語/マレーシア） -->
            <div class="instructor-card fade-in">
                <div class="instructor-card-inner">
                    <div class="instructor-photo-area">
                        <div class="instructor-photo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/suiei-malaysia.jpeg" alt="スイエイ講師" style="object-position: center 30%;">
                        </div>
                        <div class="instructor-flag">🇲🇾</div>
                    </div>
                    <div class="instructor-info">
                        <div class="instructor-header">
                            <h2 class="instructor-name">スイエイ講師</h2>
                            <span class="instructor-language-badge">広東語 / 北京語（中国語）</span>
                        </div>
                        <p class="instructor-origin">マレーシア出身</p>
                        <div class="instructor-tags">
                            <span class="tag">語学指導</span>
                            <span class="tag">官公庁研修</span>
                            <span class="tag">検定指導</span>
                            <span class="tag">通訳業務</span>
                            <span class="tag">翻訳業務</span>
                        </div>
                        <div class="instructor-availability">
                            <span class="avail-item">平日昼OK</span>
                            <span class="avail-item">土日OK</span>
                        </div>
                        <p class="instructor-style">初心者でも安心して話せる会話指導</p>
                        <div class="instructor-message">
                            <p>受講生一人ひとりの目的に合わせて、実際の現場で使える広東語・北京語の表現を丁寧にサポートします。初めての方も安心して話せる雰囲気づくりを大切にし、基礎から実践まで無理なく続けられるレッスンを心がけています。小さな一歩を一緒に積み重ねながら、楽しくステップアップしていきましょう！</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ヤン講師 -->
            <div class="instructor-card fade-in">
                <div class="instructor-card-inner">
                    <div class="instructor-photo-area">
                        <div class="instructor-photo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/yan-china.jpeg" alt="ヤン講師" style="object-position: center 10%; transform: scale(1.5); transform-origin: center 20%;">
                        </div>
                        <div class="instructor-flag">🇨🇳</div>
                    </div>
                    <div class="instructor-info">
                        <div class="instructor-header">
                            <h2 class="instructor-name">ヤン講師</h2>
                            <span class="instructor-language-badge">北京語（中国語）</span>
                        </div>
                        <p class="instructor-origin">中国出身</p>
                        <div class="instructor-tags">
                            <span class="tag">語学指導</span>
                            <span class="tag">官公庁研修</span>
                            <span class="tag">検定指導</span>
                            <span class="tag">通訳業務</span>
                            <span class="tag">翻訳業務</span>
                        </div>
                        <div class="instructor-availability">
                            <span class="avail-item">平日夜OK</span>
                            <span class="avail-item">土日OK</span>
                        </div>
                        <p class="instructor-style">楽しみながら上達する会話レッスン</p>
                        <div class="instructor-message">
                            <p>ネイティブ講師と一緒に、楽しく安心して学べる中国語レッスンです。発音・会話重視で、初心者でも自然に話せるよう、受講生のペースに合わせて丁寧にサポートしますので、安心して一緒に練習していきましょう！</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ラモン講師（ポルトガル語） -->
            <div class="instructor-card fade-in">
                <div class="instructor-card-inner">
                    <div class="instructor-photo-area">
                        <div class="instructor-photo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ramon-portugal.png" alt="ラモン講師" style="object-position: center 30%;">
                        </div>
                        <div class="instructor-flag">🇧🇷</div>
                    </div>
                    <div class="instructor-info">
                        <div class="instructor-header">
                            <h2 class="instructor-name">ラモン講師</h2>
                            <span class="instructor-language-badge">ポルトガル語</span>
                        </div>
                        <p class="instructor-origin">ブラジル出身</p>
                        <div class="instructor-tags">
                            <span class="tag">語学指導</span>
                            <span class="tag">法人研修</span>
                            <span class="tag">通訳業務</span>
                            <span class="tag">翻訳業務</span>
                        </div>
                        <div class="instructor-availability">
                            <span class="avail-item">平日夜OK</span>
                            <span class="avail-item">土日OK</span>
                        </div>
                        <p class="instructor-style">伝わる発音と会話</p>
                        <div class="instructor-message">
                            <p>初めてでも大丈夫、安心して話せる雰囲気で進めます。日常・旅行・仕事でもそのまま使える会話と、伝わる発音を中心にロールプレイで練習します。目的に合わせて必要なフレーズを増やして、一緒に楽しくステップアップしましょう！</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- チョン講師（韓国語） -->
            <div class="instructor-card fade-in">
                <div class="instructor-card-inner">
                    <div class="instructor-photo-area">
                        <div class="instructor-photo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/chon_korean.jpeg" alt="チョン講師" style="object-position: 30% 15%; transform: scale(1.5); transform-origin: 30% 20%;">
                        </div>
                        <div class="instructor-flag">🇰🇷</div>
                    </div>
                    <div class="instructor-info">
                        <div class="instructor-header">
                            <h2 class="instructor-name">チョン講師</h2>
                            <span class="instructor-language-badge">韓国語</span>
                        </div>
                        <p class="instructor-origin">韓国出身</p>
                        <div class="instructor-tags">
                            <span class="tag">語学指導</span>
                            <span class="tag">法人研修</span>
                            <span class="tag">官公庁研修</span>
                            <span class="tag">検定指導</span>
                            <span class="tag">通訳業務</span>
                            <span class="tag">翻訳業務</span>
                        </div>
                        <div class="instructor-availability">
                            <span class="avail-item">平日昼OK</span>
                            <span class="avail-item">平日夜OK</span>
                        </div>
                        <p class="instructor-style">ドラマや音楽と一緒に、楽しく学ぶ韓国語レッスン</p>
                        <div class="instructor-message">
                            <p>韓国語はちょっと難しそうに見えるけど、一緒に楽しく学んでみませんか？初心者から上級者までわかりやすくていねいに教えます。ドラマや音楽など好きなものでもっと身近に感じられるはずです。一緒にがんばりましょう！</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- マリナ講師（ロシア語） -->
            <div class="instructor-card fade-in">
                <div class="instructor-card-inner">
                    <div class="instructor-photo-area">
                        <div class="instructor-photo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/marina-russian.JPEG" alt="マリナ講師" style="object-position: center 30%;">
                        </div>
                        <div class="instructor-flag">🇷🇺</div>
                    </div>
                    <div class="instructor-info">
                        <div class="instructor-header">
                            <h2 class="instructor-name">マリナ講師</h2>
                            <span class="instructor-language-badge">ロシア語</span>
                        </div>
                        <p class="instructor-origin">ロシア出身</p>
                        <div class="instructor-tags">
                            <span class="tag">語学指導</span>
                            <span class="tag">法人研修</span>
                            <span class="tag">官公庁研修</span>
                            <span class="tag">検定指導</span>
                            <span class="tag">通訳業務</span>
                            <span class="tag">翻訳業務</span>
                        </div>
                        <div class="instructor-availability">
                            <span class="avail-item">平日昼OK</span>
                            <span class="avail-item">土日OK</span>
                        </div>
                        <p class="instructor-style">基礎から会話まで、ロシア語と文化を楽しく学ぶレッスン</p>
                        <div class="instructor-message">
                            <p>文法の基礎を大切にしながら、日常の会話や仕事の会合で使えるロシア語を学び、言葉の背景にあるロシア文化にも触れていきます。初めての方にも分かりやすく丁寧に進め、一人ひとりの目的に合わせたレッスンをいたします。ロシア語の世界に触れてみたい方はお気軽にご連絡ください。</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="instructors-cta">
        <div class="container">
            <div class="cta-content fade-in">
                <h2 class="cta-title">まずは体験レッスンから始めてみませんか？</h2>
                <p class="cta-text">50分 1,100円で、お好きな言語の体験レッスンを受講いただけます。</p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-large">
                        <span class="btn-text">体験レッスンに申し込む</span>
                        <span class="btn-icon">→</span>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>" class="btn btn-secondary btn-large">
                        <span class="btn-text">コース一覧を見る</span>
                        <span class="btn-icon">📚</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* ===========================================
   Instructors Page Styles
   =========================================== */

/* Hero */
.instructors-hero {
    background: linear-gradient(135deg, var(--primary-color) 0%, #006666 100%);
    padding: 80px 0 60px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.instructors-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 70%);
    animation: heroGlow 15s ease-in-out infinite;
}

@keyframes heroGlow {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(5%, 5%); }
}

.instructors-hero-title {
    font-size: 3rem;
    color: white;
    font-weight: 800;
    margin-bottom: 15px;
    position: relative;
}

.instructors-hero-subtitle {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.9);
    font-weight: 500;
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.7;
    position: relative;
}

/* Instructors Section */
.instructors-section {
    padding: 80px 0;
    background: #f8f9fa;
}

/* Instructor Card */
.instructor-card {
    margin-bottom: 40px;
}

.instructor-card-inner {
    display: flex;
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.instructor-card-inner:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(0, 0, 0, 0.1);
}

/* Photo Area */
.instructor-photo-area {
    position: relative;
    flex-shrink: 0;
    width: 280px;
}

.instructor-photo {
    position: relative;
    width: 100%;
    height: 380px;
    overflow: hidden;
}

.instructor-photo img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
}

.instructor-photo-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #e8f5f5 0%, #d4edec 100%);
}

.placeholder-icon {
    font-size: 5rem;
}

.instructor-flag {
    position: absolute;
    bottom: 15px;
    right: 15px;
    font-size: 2.5rem;
    background: white;
    width: 55px;
    height: 55px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
}

/* Info Area */
.instructor-info {
    padding: 35px 40px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.instructor-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 8px;
    flex-wrap: wrap;
}

.instructor-name {
    font-size: 1.6rem;
    font-weight: 800;
    color: #333;
    margin: 0;
}

.instructor-language-badge {
    background: linear-gradient(135deg, var(--primary-color), #006666);
    color: white;
    padding: 5px 16px;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 600;
    white-space: nowrap;
}

.instructor-origin {
    color: #888;
    font-size: 0.95rem;
    margin-bottom: 15px;
}

/* Tags */
.instructor-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 12px;
}

.instructor-tags .tag {
    background: #f0f7f7;
    color: var(--primary-color);
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    border: 1px solid rgba(0, 128, 128, 0.15);
}

/* Availability */
.instructor-availability {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 15px;
}

.avail-item {
    background: #fff8f0;
    color: #e67e22;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    border: 1px solid rgba(230, 126, 34, 0.2);
}

/* Style */
.instructor-style {
    font-size: 1.05rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 15px;
    padding-left: 15px;
    border-left: 3px solid var(--primary-color);
}

/* Message */
.instructor-message {
    background: #f9fafb;
    border-radius: 12px;
    padding: 20px;
    margin-top: auto;
}

.instructor-message p {
    color: #555;
    font-size: 0.95rem;
    line-height: 1.8;
    margin: 0;
}

/* CTA Section */
.instructors-cta {
    background: linear-gradient(135deg, var(--secondary-color) 0%, #e66a5e 100%);
    padding: 80px 0;
    text-align: center;
}

.instructors-cta .cta-content {
    max-width: 700px;
    margin: 0 auto;
}

.instructors-cta .cta-title {
    font-size: 2rem;
    color: white;
    font-weight: 800;
    margin-bottom: 15px;
}

.instructors-cta .cta-text {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.1rem;
    margin-bottom: 35px;
}

.instructors-cta .cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.instructors-cta .btn-primary {
    background: white;
    color: var(--secondary-color);
}

.instructors-cta .btn-primary:hover {
    background: #f0f0f0;
    transform: translateY(-2px);
}

.instructors-cta .btn-secondary {
    background: transparent;
    border: 2px solid white;
    color: white;
}

.instructors-cta .btn-secondary:hover {
    background: white;
    color: var(--secondary-color);
    transform: translateY(-2px);
}

/* ===========================================
   Responsive
   =========================================== */

/* Protect instructor page elements from global overflow fixes */
.instructors-page .instructor-card-inner,
.instructors-page .instructor-info,
.instructors-page .instructor-photo-area,
.instructors-page .instructor-header,
.instructors-page .instructor-tags,
.instructors-page .instructor-availability,
.instructors-page .instructor-message,
.instructors-page .cta-buttons,
.instructors-page h2,
.instructors-page p,
.instructors-page span,
.instructors-page a {
    max-width: none !important;
    word-break: normal !important;
    hyphens: none !important;
}

.instructors-page .instructor-photo img {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important;
    max-width: none !important;
    object-fit: cover !important;
}

@media (max-width: 768px) {
    .instructors-page {
        overflow-x: hidden;
    }

    .instructors-hero {
        padding: 60px 0 40px;
    }

    .instructors-hero-title {
        font-size: 2rem;
        text-align: center;
    }

    .instructors-hero-subtitle {
        font-size: 1rem;
        padding: 0 20px;
        text-align: center;
    }

    .instructors-section {
        padding: 30px 0;
    }

    .instructors-section > .container {
        padding: 0 15px;
    }

    .instructor-card {
        margin-bottom: 20px;
    }

    .instructor-card-inner {
        flex-direction: column;
        border-radius: 16px;
    }

    .instructor-card-inner:hover {
        transform: none;
    }

    .instructor-photo-area {
        width: 100%;
    }

    .instructor-photo {
        height: 300px;
    }

    .instructor-flag {
        bottom: 12px;
        right: 12px;
        width: 45px;
        height: 45px;
        font-size: 2rem;
    }

    .instructor-info {
        padding: 20px;
        text-align: center;
    }

    .instructor-header {
        justify-content: center;
        gap: 10px;
    }

    .instructor-name {
        font-size: 1.3rem;
    }

    .instructor-origin {
        font-size: 0.9rem;
        text-align: center;
    }

    .instructor-tags {
        justify-content: center;
        gap: 6px;
    }

    .instructor-tags .tag {
        font-size: 0.75rem;
        padding: 3px 10px;
    }

    .instructor-availability {
        justify-content: center;
        gap: 6px;
    }

    .avail-item {
        font-size: 0.75rem;
        padding: 3px 10px;
    }

    .instructor-style {
        font-size: 0.95rem;
        text-align: left;
        border-left: 3px solid var(--primary-color);
        padding-left: 12px;
    }

    .instructor-message {
        padding: 15px;
    }

    .instructor-message p {
        font-size: 0.88rem;
        line-height: 1.7;
        text-align: left;
    }

    .instructors-cta {
        padding: 50px 0;
    }

    .instructors-cta .cta-title {
        font-size: 1.4rem;
        padding: 0 15px;
    }

    .instructors-cta .cta-text {
        font-size: 0.95rem;
        padding: 0 15px;
    }

    .instructors-cta .cta-buttons {
        flex-direction: column;
        align-items: center;
    }

    .instructors-cta .btn {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .instructors-hero {
        padding: 50px 0 30px;
    }

    .instructors-hero-title {
        font-size: 1.6rem;
    }

    .instructors-hero-subtitle {
        font-size: 0.9rem;
    }

    .instructors-section {
        padding: 20px 0;
    }

    .instructor-card {
        margin-bottom: 16px;
    }

    .instructor-card-inner {
        border-radius: 14px;
    }

    .instructor-photo {
        height: 260px;
    }

    .instructor-info {
        padding: 18px 15px;
    }

    .instructor-header {
        flex-direction: column;
        align-items: center;
        gap: 8px;
    }

    .instructor-name {
        font-size: 1.2rem;
    }

    .instructor-language-badge {
        font-size: 0.8rem;
        padding: 4px 14px;
    }

    .instructor-style {
        font-size: 0.9rem;
    }

    .instructor-message p {
        font-size: 0.85rem;
    }

    .instructors-cta .cta-title {
        font-size: 1.25rem;
    }
}
</style>

<?php get_footer(); ?>
