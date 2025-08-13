<?php
/**
 * Template for About page
 *
 * @package LaLa_Global_Language
 */

get_header(); ?>

<main id="primary" class="site-main about-page">
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="page-title fade-in"><?php if ( has_site_icon() ) : ?><img src="<?php echo esc_url( get_site_icon_url( 512 ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="hero-globe-icon"><?php endif; ?> LaLa GLOBAL LANGUAGE</h1>
                <p class="hero-tagline fade-in">🎶 Let's Learn Global Language！</p>
            </div>
        </div>
    </section>

    <!-- Brand Core Section -->
    <section class="brand-core-section">
        <div class="container">
            <div class="section-header fade-in">
                <h2>💎 ブランドの核</h2>
            </div>
            <div class="brand-content fade-in">
                <p class="lead-text no-line-break">LaLa GLOBAL LANGUAGEは「やってみたい！」という想いから始まります。</p>
                <p>言葉を学ぶことは、ただのスキル習得ではなく、自分の世界を拡張し、未来へ飛び出すための"翼"を持つこと。挑戦する楽しさ、つながる喜び、成長の実感――LaLaは、その全てを一緒に味わう場所です。</p>
                <p>"Let's""Learn"の頭文字(LL)、そして前向きな「ララ♪」の響き。この名前には、学ぶ人・教える人・支える人、すべての"やってみたい"を応援する熱い想いが込められています。</p>
                
                <?php 
                $brand_core_image = get_theme_mod( 'brand_core_image' );
                if ( $brand_core_image ) : ?>
                    <div class="brand-core-image fade-in">
                        <img src="<?php echo esc_url( $brand_core_image ); ?>" alt="LaLa GLOBAL LANGUAGE ブランドの核">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section class="philosophy-section">
        <div class="philosophy-universe">
            <div class="philosophy-stars"></div>
            <div class="philosophy-stars"></div>
            <div class="philosophy-stars"></div>
            <div class="philosophy-gradient-orb"></div>
        </div>
        
        <div class="container">
            <div class="philosophy-header fade-in">
                <h2 class="philosophy-title">
                    <span class="title-gradient">Our Core Philosophy</span>
                </h2>
                <div class="philosophy-divider">
                    <span class="divider-line"></span>
                    <span class="divider-star">✦</span>
                    <span class="divider-line"></span>
                </div>
            </div>

            <div class="philosophy-pyramid">
                <!-- 理念 - Top Level -->
                <div class="philosophy-level philosophy-level-1 fade-in">
                    <div class="philosophy-card philosophy-rinen">
                        <div class="card-glow"></div>
                        <div class="card-content">
                            <div class="philosophy-label">
                                <span class="label-text">理念</span>
                                <span class="label-subtitle">Philosophy</span>
                            </div>
                            <div class="philosophy-icon-wrapper">
                                <div class="icon-pulse"></div>
                                <div class="philosophy-icon">🌱</div>
                            </div>
                            <h4 class="philosophy-statement">「そのチャレンジが未来を変える。」</h4>
                            <p class="philosophy-description">まずは「やってみよう！」が、未来を動かす第一歩。一歩を踏み出すことで、世界は広がり、自分自身も変わります。LaLaは、その挑戦する勇気とWAKU²(ワクワク)を言語を通じて育みます。</p>
                            <div class="philosophy-sparkles">
                                <span class="sparkle"></span>
                                <span class="sparkle"></span>
                                <span class="sparkle"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ミッション & ビジョン - Second Level -->
                <div class="philosophy-level philosophy-level-2">
                    <div class="philosophy-card philosophy-mission fade-in" style="animation-delay: 0.2s;">
                        <div class="card-glow"></div>
                        <div class="card-content">
                            <div class="philosophy-label">
                                <span class="label-text">ミッション</span>
                                <span class="label-subtitle">Mission</span>
                            </div>
                            <div class="philosophy-icon-wrapper">
                                <div class="philosophy-icon">🎯</div>
                            </div>
                            <h4 class="philosophy-statement">「言葉で世界をつなぎ、多様な未来を共につくる。」</h4>
                            <p class="philosophy-description">すべての「やってみたい！」を応援して、学ぶ人と教える人をつなぎ、言葉を通じて、自分と世界の可能性を広げます。</p>
                        </div>
                    </div>

                    <div class="philosophy-card philosophy-vision fade-in" style="animation-delay: 0.4s;">
                        <div class="card-glow"></div>
                        <div class="card-content">
                            <div class="philosophy-label">
                                <span class="label-text">ビジョン</span>
                                <span class="label-subtitle">Vision</span>
                            </div>
                            <div class="philosophy-icon-wrapper">
                                <div class="philosophy-icon">🔭</div>
                            </div>
                            <h4 class="philosophy-statement">「LaLaから世界へ、挑戦する人を育てる。」</h4>
                            <p class="philosophy-description">言語を学ぶことで、文化や国境を超えた出会いと成長を生み出す。LaLa GLOBAL LANGUAGEは、日本人と外国人が共に学び、共に高め合い、人生を動かす"分岐点"となる場所を目指します。</p>
                            <p class="vision-note">ここから世界へ――一人ひとりが未来へ飛び出すきっかけを。</p>
                        </div>
                    </div>
                </div>

                <!-- WAKU² Values - Third Level -->
                <div class="philosophy-level philosophy-level-3">
                    <div class="waku-header fade-in">
                        <h3 class="waku-title">🌟 LaLaが大切にする3つのWAKU²</h3>
                    </div>
                </div>
                <div class="philosophy-level philosophy-level-waku">
                    <div class="philosophy-card philosophy-waku waku-1 fade-in" style="animation-delay: 0.6s;">
                        <div class="card-glow"></div>
                        <div class="card-content">
                            <div class="philosophy-label">
                                <span class="label-text">WAKU² 1</span>
                                <span class="label-subtitle">Challenge & Growth</span>
                            </div>
                            <div class="philosophy-icon-wrapper">
                                <div class="philosophy-icon">🎉</div>
                            </div>
                            <h4 class="philosophy-statement">挑戦と成長</h4>
                            <h5 class="waku-subtitle">「やってみたい！」が未来をつくる</h5>
                            <p class="philosophy-description three-line-text">「やってみたい！」の一歩が、新しい自分をつくる。LaLaは、挑戦することの楽しさを一緒に味わい、成長を伴走します。</p>
                        </div>
                    </div>

                    <div class="philosophy-card philosophy-waku waku-2 fade-in" style="animation-delay: 0.8s;">
                        <div class="card-glow"></div>
                        <div class="card-content">
                            <div class="philosophy-label">
                                <span class="label-text">WAKU² 2</span>
                                <span class="label-subtitle">Discover the World</span>
                            </div>
                            <div class="philosophy-icon-wrapper">
                                <div class="philosophy-icon">🌈</div>
                            </div>
                            <h4 class="philosophy-statement">世界を知る</h4>
                            <h5 class="waku-subtitle">その一言で、世界の扉がひらく</h5>
                            <p class="philosophy-description">「Hello」「こんにちは」――その一言が、世界の扉を開く。言語を通して、文化・価値観・多様性に触れ、自分の世界が広がります。</p>
                        </div>
                    </div>

                    <div class="philosophy-card philosophy-waku waku-3 fade-in" style="animation-delay: 1s;">
                        <div class="card-glow"></div>
                        <div class="card-content">
                            <div class="philosophy-label">
                                <span class="label-text">WAKU² 3</span>
                                <span class="label-subtitle">Take Off to the World</span>
                            </div>
                            <div class="philosophy-icon-wrapper">
                                <div class="philosophy-icon">✈️</div>
                            </div>
                            <h4 class="philosophy-statement">世界へ飛び出せ！</h4>
                            <h5 class="waku-subtitle">学びのその先へ</h5>
                            <p class="philosophy-description three-line-text">学んだ先に待っているのは、まだ見ぬ体験と出会い。LaLaは、その一歩を後押しし、「世界へ挑戦する人」を応援します。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Name Story Section -->
    <section class="name-story-section">
        <div class="container">
            <div class="story-content fade-in">
                <h2>💡 LaLa という名前に込めた想い</h2>
                <div class="story-text">
                    <p class="highlight">Let's Learn = LL = ララ = 「LaLa」</p>
                    <p>軽やかで前向きな「ララ♪」の響きが、人の気持ちをポジティブに変える力を持っています。</p>
                    <p>LaLaは、誰もがまた帰ってきたくなる「心の拠点」であり、ここから世界へ飛び出す力をもらえる場所です。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="about-cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>あなたの「やってみたい！」を応援します</h2>
                <p>LaLaで、新しい言語の扉を開いてみませんか？</p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>" class="btn btn-primary">コース一覧を見る</a>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">お問い合わせ</a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* About Page Specific Styles */
.about-page {
    overflow-x: hidden;
}

/* Hero Section */
.about-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 150px 0 100px;
    text-align: center;
    color: white;
    position: relative;
}

.about-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><circle cx="100" cy="100" r="50" fill="rgba(255,255,255,0.1)"/><circle cx="1100" cy="500" r="80" fill="rgba(255,255,255,0.05)"/><circle cx="600" cy="300" r="120" fill="rgba(255,255,255,0.08)"/></svg>');
    opacity: 0.3;
}

.about-hero .hero-content {
    position: relative;
    z-index: 1;
}

.about-hero .page-title {
    font-size: 3.5rem;
    margin-bottom: 20px;
    animation: fadeInDown 1s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
}

.hero-globe-icon {
    width: 60px;
    height: 60px;
    object-fit: contain;
    vertical-align: middle;
}

.hero-subtitle {
    font-size: 1.5rem;
    margin-bottom: 10px;
    opacity: 0.9;
}

.hero-tagline {
    font-size: 1.3rem;
    font-style: italic;
    text-align: center;
}

/* Brand Core Section */
.brand-core-section {
    padding: 100px 0;
    background: white;
}

.section-header {
    text-align: center;
    margin-bottom: 50px;
}

.section-header h2 {
    font-size: 2.5rem;
    color: var(--primary-color);
}

.brand-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.lead-text {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 30px;
}

.brand-content p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 25px;
}

.brand-core-image {
    margin-top: 50px;
    text-align: center;
}

.brand-core-image img {
    max-width: 100%;
    height: auto;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.brand-core-image img:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 70px rgba(0, 0, 0, 0.15);
}

/* Philosophy Section - Ultimate Design */
.philosophy-section {
    padding: 120px 0;
    background: linear-gradient(180deg, #0a0e27 0%, #1a1f3a 50%, #0f1424 100%);
    position: relative;
    overflow: hidden;
}

/* Universe Background */
.philosophy-universe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0;
}

.philosophy-stars {
    position: absolute;
    width: 100%;
    height: 100%;
    background-image: radial-gradient(2px 2px at 20px 30px, white, transparent),
                      radial-gradient(2px 2px at 40px 70px, white, transparent),
                      radial-gradient(1px 1px at 50px 90px, white, transparent),
                      radial-gradient(1px 1px at 130px 40px, white, transparent),
                      radial-gradient(2px 2px at 180px 80px, white, transparent);
    background-repeat: repeat;
    background-size: 200px 200px;
    animation: starsAnimation 120s linear infinite;
}

.philosophy-stars:nth-child(2) {
    background-image: radial-gradient(1px 1px at 10px 10px, rgba(255,255,255,0.5), transparent),
                      radial-gradient(1px 1px at 60px 170px, rgba(255,255,255,0.5), transparent),
                      radial-gradient(2px 2px at 120px 30px, rgba(255,255,255,0.5), transparent);
    background-size: 300px 300px;
    animation-duration: 150s;
}

.philosophy-stars:nth-child(3) {
    background-image: radial-gradient(1px 1px at 90px 150px, rgba(255,255,255,0.3), transparent),
                      radial-gradient(1px 1px at 190px 50px, rgba(255,255,255,0.3), transparent);
    background-size: 250px 250px;
    animation-duration: 180s;
}

@keyframes starsAnimation {
    0% { transform: translateY(0); }
    100% { transform: translateY(-100%); }
}

.philosophy-gradient-orb {
    position: absolute;
    width: 800px;
    height: 800px;
    border-radius: 50%;
    background: radial-gradient(circle at center, rgba(102, 126, 234, 0.15) 0%, transparent 70%);
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: orbFloat 20s ease-in-out infinite;
}

@keyframes orbFloat {
    0%, 100% { transform: translate(-50%, -50%) scale(1); }
    50% { transform: translate(-50%, -50%) scale(1.1); }
}

/* Header */
.philosophy-header {
    text-align: center;
    margin-bottom: 80px;
    position: relative;
    z-index: 1;
}

.philosophy-title {
    font-size: 3.5rem;
    margin-bottom: 30px;
}

.title-gradient {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f093fb 50%, #4facfe 75%, #667eea 100%);
    background-size: 200% 200%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: gradientShift 5s ease infinite;
}

@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.philosophy-divider {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
}

.divider-line {
    height: 2px;
    width: 100px;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
}

.divider-star {
    font-size: 1.5rem;
    color: #667eea;
    animation: starRotate 3s linear infinite;
}

@keyframes starRotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Pyramid Layout */
.philosophy-pyramid {
    position: relative;
    z-index: 1;
}

.philosophy-level {
    display: flex;
    justify-content: center;
    gap: 40px;
    margin-bottom: 60px;
}

.philosophy-level-1 {
    margin-bottom: 80px;
}

/* Cards */
.philosophy-card {
    position: relative;
    background: rgba(255, 255, 255, 0.03);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 30px;
    overflow: hidden;
    transition: all 0.4s ease;
}

.philosophy-rinen {
    width: 600px;
    padding: 60px;
    box-shadow: 0 20px 60px rgba(102, 126, 234, 0.3),
                0 0 100px rgba(102, 126, 234, 0.1) inset;
}

.philosophy-mission,
.philosophy-vision {
    width: 450px;
    padding: 50px;
}

.philosophy-mission {
    box-shadow: 0 15px 40px rgba(247, 147, 251, 0.2);
}

.philosophy-vision {
    box-shadow: 0 15px 40px rgba(79, 172, 254, 0.2);
}

.philosophy-card:hover {
    transform: translateY(-15px) scale(1.02);
    border-color: rgba(255, 255, 255, 0.2);
}

/* Card Glow Effect */
.card-glow {
    position: absolute;
    top: -100%;
    left: -100%;
    width: 300%;
    height: 300%;
    background: radial-gradient(circle at center, rgba(255,255,255,0.05) 0%, transparent 50%);
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
}

.philosophy-card:hover .card-glow {
    opacity: 1;
}

/* Card Content */
.card-content {
    position: relative;
    z-index: 1;
}

.philosophy-label {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 30px;
}

.label-text {
    font-size: 1.2rem;
    font-weight: 700;
    letter-spacing: 0.15em;
    color: rgba(255, 255, 255, 0.9);
    text-transform: uppercase;
    margin-bottom: 5px;
}

.label-subtitle {
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.5);
    font-style: italic;
}

/* Icons */
.philosophy-icon-wrapper {
    position: relative;
    width: 100px;
    height: 100px;
    margin: 0 auto 40px;
}

.philosophy-icon {
    font-size: 4rem;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    position: relative;
    z-index: 1;
}

.philosophy-rinen .philosophy-icon {
    font-size: 5rem;
    filter: drop-shadow(0 0 20px rgba(102, 126, 234, 0.6));
}

.icon-pulse {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(102, 126, 234, 0.3) 0%, transparent 70%);
    animation: iconPulse 2s ease-in-out infinite;
}

@keyframes iconPulse {
    0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.5; }
    50% { transform: translate(-50%, -50%) scale(1.3); opacity: 0; }
}

/* Text Content */
.philosophy-statement {
    font-size: 1.8rem;
    color: #ffffff;
    margin-bottom: 25px;
    line-height: 1.5;
    font-weight: 700;
    text-align: center;
}

.philosophy-rinen .philosophy-statement {
    font-size: 2.2rem;
    background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.philosophy-description {
    font-size: 1.1rem;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.8);
    text-align: center;
}

.philosophy-rinen .philosophy-description {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.9);
}

.vision-note {
    margin-top: 20px;
    font-style: italic;
    color: #4facfe;
    text-align: center;
    font-size: 1rem;
}

/* WAKU² Styles */
.philosophy-level-3 {
    margin-top: 60px;
    margin-bottom: 30px;
}

.waku-header {
    text-align: center;
    width: 100%;
}

.waku-title {
    font-size: 2.2rem;
    color: #ffffff;
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 50%, #4facfe 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 20px;
    font-weight: 700;
}

.philosophy-level-waku {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
    margin-bottom: 0;
}

.philosophy-waku {
    width: 360px;
    padding: 45px 35px;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.08);
}

.waku-1 {
    box-shadow: 0 15px 40px rgba(241, 87, 108, 0.15),
                0 0 60px rgba(241, 87, 108, 0.05) inset;
}

.waku-1:hover {
    border-color: rgba(241, 87, 108, 0.3);
    box-shadow: 0 20px 50px rgba(241, 87, 108, 0.25),
                0 0 80px rgba(241, 87, 108, 0.1) inset;
}

.waku-2 {
    box-shadow: 0 15px 40px rgba(243, 147, 251, 0.15),
                0 0 60px rgba(243, 147, 251, 0.05) inset;
}

.waku-2:hover {
    border-color: rgba(243, 147, 251, 0.3);
    box-shadow: 0 20px 50px rgba(243, 147, 251, 0.25),
                0 0 80px rgba(243, 147, 251, 0.1) inset;
}

.waku-3 {
    box-shadow: 0 15px 40px rgba(79, 172, 254, 0.15),
                0 0 60px rgba(79, 172, 254, 0.05) inset;
}

.waku-3:hover {
    border-color: rgba(79, 172, 254, 0.3);
    box-shadow: 0 20px 50px rgba(79, 172, 254, 0.25),
                0 0 80px rgba(79, 172, 254, 0.1) inset;
}

.philosophy-waku .philosophy-icon {
    font-size: 3.5rem;
    filter: none;
}

.waku-1 .philosophy-icon {
    filter: drop-shadow(0 0 15px rgba(241, 87, 108, 0.6));
}

.waku-2 .philosophy-icon {
    filter: drop-shadow(0 0 15px rgba(243, 147, 251, 0.6));
}

.waku-3 .philosophy-icon {
    filter: drop-shadow(0 0 15px rgba(79, 172, 254, 0.6));
}

.philosophy-waku .philosophy-statement {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.waku-subtitle {
    font-size: 1.1rem;
    color: rgba(255, 255, 255, 0.7);
    margin-bottom: 20px;
    text-align: center;
    font-weight: 400;
    font-style: italic;
}

.philosophy-waku .philosophy-description {
    font-size: 1rem;
}

/* Three-line text optimization */
.philosophy-description.three-line-text {
    font-size: 0.95rem;
    line-height: 1.6;
    min-height: auto;
    height: auto;
    display: block;
    overflow: visible;
    -webkit-line-clamp: unset;
    -webkit-box-orient: unset;
}

/* Sparkles */
.philosophy-sparkles {
    position: absolute;
    top: 20px;
    right: 20px;
    pointer-events: none;
}

.sparkle {
    position: absolute;
    width: 4px;
    height: 4px;
    background: white;
    border-radius: 50%;
    animation: sparkleFloat 3s ease-in-out infinite;
}

.sparkle:nth-child(1) {
    top: 0;
    left: 0;
    animation-delay: 0s;
}

.sparkle:nth-child(2) {
    top: 20px;
    left: 15px;
    animation-delay: 1s;
}

.sparkle:nth-child(3) {
    top: -10px;
    left: 30px;
    animation-delay: 2s;
}

@keyframes sparkleFloat {
    0%, 100% {
        opacity: 0;
        transform: translateY(0) scale(0);
    }
    50% {
        opacity: 1;
        transform: translateY(-20px) scale(1);
    }
}


/* Name Story Section */
.name-story-section {
    padding: 100px 0;
    background: var(--accent-color);
    text-align: center;
}

.story-content h2 {
    font-size: 2.5rem;
    color: var(--dark-color);
    margin-bottom: 40px;
}

.story-text {
    max-width: 700px;
    margin: 0 auto;
}

.highlight {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 30px;
    background: white;
    padding: 20px 40px;
    border-radius: 50px;
    display: inline-block;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.story-text p {
    font-size: 1.2rem;
    line-height: 1.8;
    margin-bottom: 20px;
    color: var(--dark-color);
}

/* CTA Section */
.about-cta-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    text-align: center;
    color: white;
}

.about-cta-section h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: white;
}

.about-cta-section p {
    font-size: 1.3rem;
    margin-bottom: 40px;
    text-align: center;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-buttons .btn {
    padding: 20px 50px;
    font-size: 1.1rem;
}

/* Animations */
@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Animations Control */
@media (prefers-reduced-motion: reduce) {
    * {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}

/* Responsive */
@media (max-width: 1024px) {
    /* Philosophy cards - 2 columns on tablet */
    .philosophy-grid {
        gap: 30px;
    }
}

@media (max-width: 768px) {
    /* Hero Section */
    .about-hero {
        padding: 100px 0 60px;
    }
    
    .about-hero .page-title {
        font-size: 2rem;
        margin-bottom: 15px;
    }
    
    .hero-globe-icon {
        width: 40px;
        height: 40px;
    }
    
    .hero-subtitle {
        font-size: 1.2rem;
        margin-bottom: 8px;
    }
    
    .hero-tagline {
        font-size: 1.1rem;
    }
    
    /* Section spacing */
    .brand-core-section {
        padding: 60px 0;
    }
    
    .philosophy-section,
    .name-story-section,
    .about-cta-section {
        padding: 60px 0;
    }
    
    /* Brand Core */
    .section-header h2 {
        font-size: 1.8rem;
    }
    
    .lead-text {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }
    
    .brand-content p {
        font-size: 1rem;
        margin-bottom: 20px;
    }
    
    .brand-core-image {
        margin-top: 30px;
    }
    
    .brand-core-image img {
        border-radius: 15px;
    }
    
    /* Philosophy cards - stack nicely on mobile */
    .philosophy-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }
    
    .philosophy-card {
        padding: 35px 25px;
    }
    
    .philosophy-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
    }
    
    .philosophy-card h3 {
        font-size: 1rem;
        margin-bottom: 10px;
    }
    
    .philosophy-card h4 {
        font-size: 1.2rem;
        margin-bottom: 15px;
    }
    
    .philosophy-card p {
        font-size: 0.95rem;
    }
    
    
    /* Name Story */
    .story-content h2 {
        font-size: 1.8rem;
        margin-bottom: 30px;
    }
    
    .highlight {
        font-size: 1.3rem;
        padding: 15px 25px;
        margin-bottom: 20px;
        word-break: break-word;
    }
    
    .story-text p {
        font-size: 1rem;
        margin-bottom: 15px;
    }
    
    /* CTA Section */
    .about-cta-section h2 {
        font-size: 1.8rem;
    }
    
    .about-cta-section p {
        font-size: 1.1rem;
        padding: 0 20px;
        text-align: center;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }
    
    .cta-buttons .btn {
        width: 100%;
        max-width: 280px;
        padding: 16px 30px;
        font-size: 1rem;
    }
    
    /* Reduce animations on mobile */
    .fade-in,
    .slide-in-left,
    .slide-in-right {
        animation: none;
        opacity: 1;
        transform: none;
    }
    
    /* Container padding */
    .container {
        padding: 0 20px;
    }
}

@media (max-width: 480px) {
    /* Even smaller adjustments for small phones */
    .about-hero .page-title {
        font-size: 1.6rem;
    }
    
    .hero-globe-icon {
        width: 35px;
        height: 35px;
    }
    
    .section-header h2 {
        font-size: 1.5rem;
    }
    
    .philosophy-card {
        padding: 30px 20px;
    }
    
    
    .highlight {
        font-size: 1.1rem;
        padding: 12px 20px;
    }
    
    /* Button adjustments */
    .btn {
        padding: 14px 25px;
        font-size: 0.95rem;
    }
    
    /* Philosophy Section Responsive */
    .philosophy-title {
        font-size: 2.5rem;
    }
    
    .philosophy-pyramid {
        max-width: 100%;
    }
    
    .philosophy-level {
        flex-direction: column;
        align-items: center;
        gap: 30px;
    }
    
    .philosophy-level-1 {
        margin-bottom: 50px;
    }
    
    .philosophy-rinen {
        width: 100%;
        max-width: 500px;
        padding: 40px 30px;
    }
    
    .philosophy-mission,
    .philosophy-vision {
        width: 100%;
        max-width: 400px;
        padding: 35px 25px;
    }
    
    .philosophy-icon-wrapper {
        width: 80px;
        height: 80px;
        margin-bottom: 30px;
    }
    
    .philosophy-icon {
        font-size: 3rem;
    }
    
    .philosophy-rinen .philosophy-icon {
        font-size: 3.5rem;
    }
    
    .philosophy-statement {
        font-size: 1.4rem;
        margin-bottom: 20px;
    }
    
    .philosophy-rinen .philosophy-statement {
        font-size: 1.6rem;
    }
    
    .philosophy-description {
        font-size: 1rem;
    }
    
    .philosophy-rinen .philosophy-description {
        font-size: 1.05rem;
    }
    
    .divider-line {
        width: 60px;
    }
    
    .philosophy-gradient-orb {
        width: 500px;
        height: 500px;
    }
}

/* Extra small devices */
@media (max-width: 480px) {
    .philosophy-section {
        padding: 80px 0;
    }
    
    .philosophy-header {
        margin-bottom: 50px;
    }
    
    .philosophy-title {
        font-size: 2rem;
    }
    
    .philosophy-rinen {
        padding: 35px 20px;
    }
    
    .philosophy-mission,
    .philosophy-vision {
        padding: 30px 20px;
    }
    
    .philosophy-statement {
        font-size: 1.2rem;
    }
    
    .philosophy-rinen .philosophy-statement {
        font-size: 1.4rem;
    }
    
    .philosophy-description {
        font-size: 0.95rem;
    }
    
    .label-text {
        font-size: 1rem;
    }
    
    .label-subtitle {
        font-size: 0.8rem;
    }
    
    /* WAKU² responsive styles */
    .philosophy-level-waku {
        flex-direction: column;
        align-items: center;
        gap: 25px;
    }
    
    .philosophy-waku {
        width: 100%;
        max-width: 400px;
        padding: 35px 25px;
    }
    
    .waku-title {
        font-size: 1.8rem;
    }
    
    .philosophy-waku .philosophy-statement {
        font-size: 1.3rem;
    }
    
    .waku-subtitle {
        font-size: 1rem;
    }
    
    .philosophy-waku .philosophy-icon {
        font-size: 3rem;
    }
}

@media (max-width: 768px) {
    .philosophy-level-3 {
        margin-top: 40px;
        margin-bottom: 20px;
    }
    
    .waku-title {
        font-size: 1.5rem;
        padding: 0 20px;
    }
    
    .philosophy-level-waku {
        gap: 20px;
    }
    
    .philosophy-waku {
        padding: 30px 20px;
    }
    
    .philosophy-waku .philosophy-statement {
        font-size: 1.2rem;
    }
    
    .waku-subtitle {
        font-size: 0.95rem;
        margin-bottom: 15px;
    }
    
    .philosophy-waku .philosophy-description {
        font-size: 0.95rem;
    }
    
    .philosophy-description.three-line-text {
        font-size: 0.85rem;
        line-height: 1.4;
        min-height: auto;
        height: auto;
        padding-bottom: 10px;
    }
}
</style>

<?php get_footer(); ?>