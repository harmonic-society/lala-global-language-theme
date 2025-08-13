<?php
/**
 * Template Name: Recruitment Page
 * 
 * @package LaLa_Global_Language
 */

get_header(); ?>

<main id="primary" class="site-main recruitment-page">
    <!-- Hero Section -->
    <section class="recruitment-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <h1 class="page-title">
                    <span class="title-en">Join Our Team</span>
                    <span class="title-ja">講師・スタッフ採用</span>
                </h1>
                <p class="hero-subtitle">35言語で未来を変える、仲間を募集しています</p>
            </div>
        </div>
    </section>

    <!-- Main Message Section -->
    <section class="main-message-section">
        <div class="container">
            <div class="message-content">
                <h2 class="message-title">
                    すべての仲間たちへ。
                    <span class="title-en">To all my comrades</span>
                </h2>
                
                <?php 
                $all_comrades_image = get_theme_mod('all_comrades_image');
                if ($all_comrades_image) : ?>
                    <div class="message-image">
                        <img src="<?php echo esc_url($all_comrades_image); ?>" alt="すべての仲間たちへ">
                    </div>
                <?php endif; ?>
                
                <div class="message-text">
                    <p class="lead-text">LaLa GLOBAL LANGUAGEは、チャレンジする人たちが集う場所です。</p>
                    
                    <p>私たちは35言語の「ことば」だけでなく、その背景にある文化や生活も大切にしています。<br>
                    LaLaで教える講師も、支える事務スタッフも、かつては皆、それぞれの挑戦をしてきた先輩たち。<br>
                    だからこそ、これからチャレンジしようとする人たちの心に寄り添ったサポートを提供します。</p>
                    
                    <div class="philosophy-box">
                        <h3>LaLaの理念</h3>
                        <p class="philosophy-text no-line-break">「そのチャレンジが、未来を変える」</p>
                    </div>
                    
                    <p>この想いを胸に、私たちは学びたい人の一歩を支える伴走者でありたいと考えています。
                    そして、LaLaには35言語、35以上の国や文化を超えた未来を変える出会いがあります。</p>
                </div>
                
                <div class="target-audience">
                    <h3>LaLaで一緒に働くあなたへ</h3>
                    <ul class="audience-list">
                        <li>
                            <span class="icon">🌟</span>
                            <span>自分の経験や知識を活かして、学びの場を広げたい方</span>
                        </li>
                        <li>
                            <span class="icon">💝</span>
                            <span>ことばを教えるだけでなく、相手の挑戦を応援したい方</span>
                        </li>
                        <li>
                            <span class="icon">🌍</span>
                            <span>グローバルな仲間と共に、新しい未来をつくりたい方</span>
                        </li>
                    </ul>
                    
                    <p class="welcome-message">LaLaは、そんなあなたを心から歓迎します。<br>
                    仲間として、一緒にLaLaの世界をつくっていきましょう！</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Position Tabs Section -->
    <section class="positions-section">
        <div class="container">
            <h2 class="section-title">募集職種</h2>
            
            <div class="position-tabs">
                <button class="tab-button active" data-tab="teacher">外国語講師</button>
                <button class="tab-button" data-tab="staff">事務スタッフ</button>
            </div>
            
            <!-- Teacher Position Content -->
            <div class="position-content active" id="teacher">
                <div class="position-header">
                    <h3>外国語講師募集</h3>
                    <p class="position-subtitle">35言語のネイティブ講師を募集しています</p>
                </div>
                
                <div class="recruitment-details">
                    <div class="detail-grid">
                        <div class="detail-item">
                            <h4>募集人数</h4>
                            <p>各言語 5 名追加募集</p>
                        </div>
                        
                        <div class="detail-item">
                            <h4>採用形態</h4>
                            <p>業務委託（登録制）</p>
                        </div>
                        
                        <div class="detail-item">
                            <h4>応募条件</h4>
                            <ul>
                                <li>外国語ネイティブスピーカー</li>
                                <li>日本語能力試験 JLPT N2以上（または同等の能力）</li>
                                <li>オンラインレッスンの経験あり</li>
                                <li>日本人で語学教育の指導経験者</li>
                            </ul>
                        </div>
                        
                        <div class="detail-item">
                            <h4>歓迎条件</h4>
                            <ul class="welcome-conditions">
                                <li>✓ 日本人への指導経験</li>
                                <li>✓ 官公庁・企業での語学研修経験</li>
                                <li>✓ 翻訳・通訳・執筆の経験</li>
                                <li>✓ マルチリンガル対応可能</li>
                                <li>✓ 柔軟な時間帯での対応可能</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Ideal Teacher Profile -->
                <div class="ideal-profile">
                    <h3>LaLaが求める講師像</h3>
                    <div class="profile-grid">
                        <div class="profile-item">
                            <div class="profile-number">1</div>
                            <h4>明るくて元気！</h4>
                            <p>場の空気をぱっと明るくする、ポジティブシンキング</p>
                        </div>
                        
                        <div class="profile-item">
                            <div class="profile-number">2</div>
                            <h4>いい意味でお節介な"人たらし"</h4>
                            <p>言語だけでなく、人との距離感づくりが上手い</p>
                        </div>
                        
                        <div class="profile-item">
                            <div class="profile-number">3</div>
                            <h4>寄り添い＋引っ張るバランス型</h4>
                            <p>「Let's try!」で勇気づけ、「これならできそう」に導く</p>
                        </div>
                        
                        <div class="profile-item">
                            <div class="profile-number">4</div>
                            <h4>生徒が信頼できる存在</h4>
                            <p>準備力・柔軟性・場慣れ感がある</p>
                        </div>
                        
                        <div class="profile-item">
                            <div class="profile-number">5</div>
                            <h4>母語で引っ張る力</h4>
                            <p>日本語に頼りすぎず、初心者でも安心のサポート</p>
                        </div>
                        
                        <div class="profile-item">
                            <div class="profile-number">6</div>
                            <h4>"また会いたい"と思わせる人柄</h4>
                            <p>レッスン後に自然と「また来たい」が芽生える魅力</p>
                        </div>
                        
                        <div class="profile-item">
                            <div class="profile-number">7</div>
                            <h4>LaLaのワクワクを楽しめる</h4>
                            <p>教える側も楽しむ姿勢が、LaLaらしさ</p>
                        </div>
                    </div>
                </div>
                
                <!-- Application Process -->
                <div class="application-process">
                    <h3>採用プロセス</h3>
                    <div class="process-timeline">
                        <div class="process-step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h4>エントリー</h4>
                                <p>応募フォームから必要事項を入力</p>
                            </div>
                        </div>
                        
                        <div class="process-arrow">→</div>
                        
                        <div class="process-step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h4>書類選考</h4>
                                <p>通過者にZoom面接のご案内</p>
                            </div>
                        </div>
                        
                        <div class="process-arrow">→</div>
                        
                        <div class="process-step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h4>オンライン面接</h4>
                                <p>Zoom面接（15分）＋デモレッスン（15分）</p>
                            </div>
                        </div>
                        
                        <div class="process-arrow">→</div>
                        
                        <div class="process-step">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h4>採否連絡</h4>
                                <p>メールにて結果をお知らせ</p>
                            </div>
                        </div>
                        
                        <div class="process-arrow">→</div>
                        
                        <div class="process-step">
                            <div class="step-number">5</div>
                            <div class="step-content">
                                <h4>正式登録</h4>
                                <p>必要書類提出後、講師として登録</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Staff Position Content -->
            <div class="position-content" id="staff">
                <div class="position-header">
                    <h3>事務スタッフ募集</h3>
                    <p class="position-subtitle">LaLaの運営を支えるスタッフを募集しています</p>
                </div>
                
                <div class="recruitment-details">
                    <div class="detail-grid">
                        <div class="detail-item">
                            <h4>募集人数</h4>
                            <p>3名（アルバイト）</p>
                        </div>
                        
                        <div class="detail-item">
                            <h4>採用形態</h4>
                            <p>アルバイト<br><span class="note">週2〜3日、オンライン中心</span></p>
                        </div>
                        
                        <div class="detail-item">
                            <h4>募集対象</h4>
                            <ul>
                                <li>学生</li>
                                <li>主婦・主夫</li>
                                <li>Wワーク希望者</li>
                                <li>講師兼任も可能</li>
                            </ul>
                        </div>
                        
                        <div class="detail-item">
                            <h4>勤務特典</h4>
                            <div class="benefit-box">
                                <p class="benefit-title">レッスン通学手当</p>
                                <p class="benefit-amount">5,000円/月</p>
                                <p class="benefit-condition">※月8日・24時間以上勤務の方</p>
                            </div>
                        </div>
                        
                        <div class="detail-item">
                            <h4>必須スキル</h4>
                            <ul>
                                <li>Googleフォームの操作</li>
                                <li>Excel（関数レベル）</li>
                                <li>SlackまたはLINE公式の使用経験</li>
                            </ul>
                        </div>
                        
                        <div class="detail-item">
                            <h4>歓迎条件</h4>
                            <div class="sns-welcome">
                                <p>SNS発信が好きな方、大歓迎！</p>
                                <div class="sns-icons">
                                    <span>📱 Instagram</span>
                                    <span>🎵 TikTok</span>
                                    <span>🐦 X (Twitter)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="staff-message">
                    <h3>事務スタッフの役割</h3>
                    <p>LaLaの事務スタッフは、講師と生徒をつなぐ大切な架け橋です。<br>
                    レッスンのスケジュール管理、生徒さんからのお問い合わせ対応、<br>
                    SNSでの情報発信など、LaLaの運営を幅広くサポートしていただきます。</p>
                    
                    <div class="work-style">
                        <h4>柔軟な働き方</h4>
                        <ul>
                            <li>✓ 在宅ワーク中心で、ライフスタイルに合わせて勤務可能</li>
                            <li>✓ 週2〜3日からOK、シフト相談可</li>
                            <li>✓ 講師業との兼任も歓迎</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="recruitment-cta">
        <div class="container">
            <div class="cta-content">
                <h2>一緒にLaLaの未来をつくりませんか？</h2>
                <p>35言語の可能性を広げ、チャレンジする人々を支える仲間を待っています</p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">応募・お問い合わせ</a>
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-secondary">LaLaについて詳しく</a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Recruitment Page Specific Styles */
.recruitment-page {
    overflow-x: hidden;
}

/* Hero Section */
.recruitment-hero {
    position: relative;
    padding: 180px 0 120px;
    color: #FFFFFF;
    text-align: center;
}

.hero-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    z-index: -1;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
}

.hero-content {
    position: relative;
    z-index: 10;
}

.page-title {
    margin-bottom: 20px;
}

.title-en {
    display: block;
    font-size: 1.2rem;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom: 10px;
    color: #FFFFFF;
    opacity: 1;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.title-ja {
    display: block;
    font-size: 3.5rem;
    font-weight: 800;
    color: #FFFFFF;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
}

.hero-subtitle {
    font-size: 1.3rem;
    color: #FFFFFF;
    opacity: 1;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    text-align: center;
}

/* Main Message Section */
.main-message-section {
    padding: 100px 0;
    background: white;
}

.message-content {
    max-width: 900px;
    margin: 0 auto;
}

.message-title {
    text-align: center;
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 50px;
}

.message-title .title-en {
    display: block;
    font-size: 1rem;
    color: #999;
    margin-top: 10px;
}

.message-image {
    width: 100%;
    max-width: 1000px;
    margin: 40px auto;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.message-image img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
}

.message-text {
    font-size: 1.1rem;
    line-height: 2;
    color: #333;
}

.lead-text {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 30px;
    text-align: center;
}

.philosophy-box {
    background: linear-gradient(135deg, #f5f7fa 0%, #e9ecef 100%);
    padding: 40px;
    border-radius: 20px;
    margin: 40px 0;
    text-align: center;
}

.philosophy-box h3 {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 15px;
}

.philosophy-text {
    font-size: 2rem;
    font-weight: 800;
    color: var(--secondary-color);
    text-align: center;
}

.target-audience {
    margin-top: 60px;
    background: #f8f9fa;
    padding: 50px;
    border-radius: 30px;
}

.target-audience h3 {
    text-align: center;
    color: var(--primary-color);
    margin-bottom: 40px;
}

.audience-list {
    list-style: none;
    padding: 0;
    max-width: 700px;
    margin: 0 auto 40px;
}

.audience-list li {
    display: flex;
    align-items: center;
    padding: 20px 0;
    border-bottom: 1px solid #e0e0e0;
}

.audience-list li:last-child {
    border-bottom: none;
}

.audience-list .icon {
    font-size: 2rem;
    margin-right: 20px;
}

.welcome-message {
    text-align: center;
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--secondary-color);
}

/* Positions Section */
.positions-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 50px;
}

/* Position Tabs */
.position-tabs {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 50px;
}

.tab-button {
    padding: 15px 40px;
    background: white;
    border: 2px solid #e0e0e0;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 600;
    color: #666;
    cursor: pointer;
    transition: all 0.3s ease;
}

.tab-button.active {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.tab-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Position Content */
.position-content {
    display: none;
    animation: fadeIn 0.5s ease;
}

.position-content.active {
    display: block;
}

.position-header {
    text-align: center;
    margin-bottom: 50px;
}

.position-header h3 {
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 10px;
}

.position-subtitle {
    color: #666;
}

/* Recruitment Details */
.recruitment-details {
    background: white;
    padding: 60px;
    border-radius: 30px;
    margin-bottom: 60px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.detail-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 40px;
}

.detail-item h4 {
    color: var(--secondary-color);
    margin-bottom: 15px;
    font-size: 1.2rem;
}

.detail-item p,
.detail-item ul {
    color: #333;
    line-height: 1.8;
}

.detail-item ul {
    list-style: none;
    padding: 0;
}

.detail-item li {
    padding: 5px 0;
}

.note {
    font-size: 0.9rem;
    color: #666;
}

.welcome-conditions li {
    color: var(--primary-color);
    font-weight: 500;
}

/* Benefit Box */
.benefit-box {
    background: linear-gradient(135deg, #ffe8e8 0%, #ffd6d6 100%);
    padding: 25px;
    border-radius: 15px;
    text-align: center;
}

.benefit-title {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 5px;
}

.benefit-amount {
    font-size: 2rem;
    font-weight: 800;
    color: var(--secondary-color);
    margin: 0;
}

.benefit-condition {
    font-size: 0.85rem;
    color: #666;
    margin-top: 5px;
}

/* SNS Welcome */
.sns-welcome {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 15px;
    text-align: center;
}

.sns-welcome p {
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 15px;
}

.sns-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.sns-icons span {
    font-size: 1rem;
    color: #666;
}

/* Ideal Profile */
.ideal-profile {
    background: white;
    padding: 60px;
    border-radius: 30px;
    margin-bottom: 60px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.ideal-profile h3 {
    text-align: center;
    color: var(--primary-color);
    margin-bottom: 50px;
    font-size: 2rem;
}

.profile-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.profile-item {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 20px;
    text-align: center;
    transition: transform 0.3s ease;
}

.profile-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.profile-number {
    width: 50px;
    height: 50px;
    background: var(--accent-color);
    color: #333;
    font-size: 1.5rem;
    font-weight: 800;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}

.profile-item h4 {
    color: var(--primary-color);
    margin-bottom: 10px;
}

.profile-item p {
    color: #666;
    font-size: 0.95rem;
}

/* Application Process */
.application-process {
    background: white;
    padding: 60px;
    border-radius: 30px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.application-process h3 {
    text-align: center;
    color: var(--primary-color);
    margin-bottom: 50px;
    font-size: 2rem;
}

.process-timeline {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1000px;
    margin: 0 auto;
    flex-wrap: wrap;
}

.process-step {
    flex: 1;
    text-align: center;
    min-width: 150px;
}

.step-number {
    width: 60px;
    height: 60px;
    background: var(--primary-color);
    color: white;
    font-size: 1.5rem;
    font-weight: 800;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
}

.step-content h4 {
    color: var(--primary-color);
    margin-bottom: 10px;
}

.step-content p {
    color: #666;
    font-size: 0.9rem;
}

.process-arrow {
    flex: 0 0 auto;
    font-size: 2rem;
    color: #ccc;
    margin: 0 10px;
}

/* Staff Message */
.staff-message {
    background: linear-gradient(135deg, #e8f5e9 0%, #f1f8e9 100%);
    padding: 50px;
    border-radius: 30px;
    margin-top: 40px;
    text-align: center;
}

.staff-message h3 {
    color: var(--primary-color);
    margin-bottom: 30px;
}

.staff-message p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #333;
    margin-bottom: 30px;
}

.work-style {
    background: white;
    padding: 30px;
    border-radius: 20px;
    margin-top: 30px;
}

.work-style h4 {
    color: var(--secondary-color);
    margin-bottom: 20px;
}

.work-style ul {
    list-style: none;
    padding: 0;
    text-align: left;
    max-width: 600px;
    margin: 0 auto;
}

.work-style li {
    padding: 10px 0;
    color: #333;
}

/* CTA Section */
.recruitment-cta {
    padding: 100px 0;
    background: linear-gradient(135deg, var(--primary-color) 0%, #006666 100%);
    text-align: center;
    color: white;
}

.cta-content h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: white;
}

.cta-content p {
    font-size: 1.3rem;
    margin-bottom: 40px;
    opacity: 0.9;
    text-align: center;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-buttons .btn {
    padding: 18px 50px;
    font-size: 1.1rem;
    font-weight: 600;
}

.btn-secondary {
    background: transparent;
    border: 2px solid white;
    color: white;
}

.btn-secondary:hover {
    background: white;
    color: var(--primary-color);
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Design */
@media (max-width: 1024px) {
    .detail-grid {
        gap: 30px;
    }
    
    .profile-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    /* Hero adjustments */
    .recruitment-hero {
        padding: 120px 0 80px;
    }
    
    .title-ja {
        font-size: 2.5rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
        padding: 0 20px;
    }
    
    /* Section padding */
    .main-message-section,
    .positions-section {
        padding: 60px 0;
    }
    
    /* Message section */
    .message-title {
        font-size: 2rem;
    }
    
    .message-text {
        font-size: 1rem;
    }
    
    .philosophy-text {
        font-size: 1.5rem;
    }
    
    .target-audience {
        padding: 30px 20px;
    }
    
    /* Position tabs */
    .position-tabs {
        flex-direction: column;
        gap: 10px;
        max-width: 300px;
        margin: 0 auto 40px;
    }
    
    .tab-button {
        width: 100%;
    }
    
    /* Detail grid */
    .detail-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .recruitment-details {
        padding: 30px 20px;
    }
    
    /* Profile grid */
    .profile-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .ideal-profile {
        padding: 30px 20px;
    }
    
    /* Process timeline */
    .process-timeline {
        flex-direction: column;
        gap: 30px;
    }
    
    .process-arrow {
        transform: rotate(90deg);
        margin: 0;
    }
    
    .application-process {
        padding: 30px 20px;
    }
    
    /* CTA section */
    .recruitment-cta {
        padding: 60px 0;
    }
    
    .cta-content h2 {
        font-size: 1.8rem;
        padding: 0 20px;
    }
    
    .cta-content p {
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
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .title-ja {
        font-size: 2rem;
    }
    
    .message-title {
        font-size: 1.6rem;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .audience-list .icon {
        font-size: 1.5rem;
        margin-right: 15px;
    }
    
    .profile-item {
        padding: 20px;
    }
    
    .profile-number {
        width: 40px;
        height: 40px;
        font-size: 1.2rem;
    }
}
</style>

<script>
// Position tabs functionality
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-button');
    const positionContents = document.querySelectorAll('.position-content');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // Remove active class from all tabs and contents
            tabButtons.forEach(btn => btn.classList.remove('active'));
            positionContents.forEach(content => content.classList.remove('active'));
            
            // Add active class to clicked tab and corresponding content
            this.classList.add('active');
            document.getElementById(targetTab).classList.add('active');
        });
    });
});
</script>

<?php get_footer(); ?>