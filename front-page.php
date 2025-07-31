<?php
/**
 * The front page template file
 *
 * @package LaLa_Global_Language
 */

get_header(); ?>

<main id="primary" class="site-main">
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-animated-bg">
            <div class="hero-shape hero-shape-1"></div>
            <div class="hero-shape hero-shape-2"></div>
            <div class="hero-shape hero-shape-3"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title animate-fade-up">
                    <?php echo esc_html( get_theme_mod( 'hero_title', '世界中のことばを、ここ日本で。' ) ); ?>
                </h1>
                <p class="hero-description animate-fade-up" style="animation-delay: 0.2s;">
                    <?php echo nl2br( esc_html( get_theme_mod( 'hero_description', '英語はもちろん、欧米、アジア、アフリカのことばも。駅前留学？ホテル留学？LaLaなら "自宅留学"！' ) ) ); ?>
                </p>
                <div class="hero-buttons animate-fade-up" style="animation-delay: 0.4s;">
                    <a href="#courses" class="btn btn-primary btn-large">
                        <span class="btn-text">無料体験レッスン</span>
                        <span class="btn-icon">→</span>
                    </a>
                    <a href="#languages" class="btn btn-secondary btn-large">
                        <span class="btn-text">対応言語を見る</span>
                        <span class="btn-icon">🌍</span>
                    </a>
                </div>
                <div class="hero-stats animate-fade-up" style="animation-delay: 0.6s;">
                    <div class="stat-highlight">
                        <span class="stat-icon">🌍</span>
                        <span class="stat-text">バイリンガル講師による<strong>35ヶ国語</strong>対応</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-scroll-indicator">
            <span class="scroll-text">SCROLL</span>
            <div class="scroll-arrow"></div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <h2 class="section-title fade-in">LaLa Global Language が選ばれる理由</h2>
            <div class="features-grid">
                <div class="feature-card fade-in">
                    <div class="feature-icon">🎯</div>
                    <h3 class="feature-title">バイリンガル講師による丁寧な指導</h3>
                    <p>日本語も話せるバイリンガル講師陣が、あなたのペースに合わせて丁寧に指導します。</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">👥</div>
                    <h3 class="feature-title">35ヶ国語から選べる</h3>
                    <p>英語、中国語、韓国語から、アラビア語、スワヒリ語まで。あなたの学びたい言語がきっと見つかります。</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">🎮</div>
                    <h3 class="feature-title">楽しく続けられる工夫</h3>
                    <p>ゲーム感覚で学べる教材や、レベルアップシステムで、モチベーションを維持しながら学習できます。</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">📱</div>
                    <h3 class="feature-title">オンラインで世界とつながる</h3>
                    <p>基本的に講座はオンライン。どこからでも質の高いレッスンを受講できます。通学の必要がなく、自宅で
  気軽に学習可能。</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">🎓</div>
                    <h3 class="feature-title">実践的なカリキュラム</h3>
                    <p>旅行、ビジネス、日常会話など、目的に合わせた実践的なカリキュラムをご用意しています。</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon">📈</div>
                    <h3 class="feature-title">充実のサポート体制</h3>
                    <p>学習の進捗管理から、留学相談まで。専任カウンセラーがあなたの語学学習を全面サポート。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 35 Languages Section -->
    <section id="languages" class="languages-section">
        <div class="container">
            <h2 class="section-title fade-in">LaLaの対応35言語</h2>
            <p class="section-subtitle">世界中のことばを、誰でも、どこでも学べる"言語のデパート"</p>
            
            <div class="languages-grid">
                <div class="language-category fade-in">
                    <h3>東アジア</h3>
                    <ul>
                        <li>🇨🇳 中国語（北京語）</li>
                        <li>🇹🇼 台湾華語</li>
                        <li>🇰🇷 韓国語</li>
                        <li>🇲🇳 モンゴル語</li>
                    </ul>
                </div>
                
                <div class="language-category fade-in">
                    <h3>東南アジア</h3>
                    <ul>
                        <li>🇮🇩 インドネシア語</li>
                        <li>🇰🇭 カンボジア語（クメール語）</li>
                        <li>🇱🇦 ラオス語</li>
                        <li>🇲🇲 ミャンマー語（ビルマ語）</li>
                        <li>🇲🇾 マレーシア語（マレー語）</li>
                        <li>🇵🇭 フィリピン語（タガログ語）</li>
                        <li>🇹🇭 タイ語</li>
                        <li>🇻🇳 ベトナム語</li>
                    </ul>
                </div>
                
                <div class="language-category fade-in">
                    <h3>南アジア</h3>
                    <ul>
                        <li>🇧🇩 ベンガル語</li>
                        <li>🇮🇳 ヒンディー語</li>
                        <li>🇳🇵 ネパール語</li>
                        <li>🇮🇳 パンジャーブ語</li>
                        <li>🇱🇰 シンハラ語</li>
                        <li>🇮🇳 タミル語</li>
                        <li>🇵🇰 ウルドゥー語</li>
                    </ul>
                </div>
                
                <div class="language-category fade-in">
                    <h3>ヨーロッパ</h3>
                    <ul>
                        <li>🇬🇧 英語</li>
                        <li>🇩🇪 ドイツ語</li>
                        <li>🇫🇷 フランス語</li>
                        <li>🇮🇹 イタリア語</li>
                        <li>🇪🇸 スペイン語</li>
                        <li>🇵🇹 ポルトガル語</li>
                        <li>🇳🇱 オランダ語</li>
                    </ul>
                </div>
                
                <div class="language-category fade-in">
                    <h3>東欧・ロシア</h3>
                    <ul>
                        <li>🇷🇺 ロシア語</li>
                        <li>🇺🇦 ウクライナ語</li>
                        <li>🇨🇿 チェコ語</li>
                        <li>🇭🇺 ハンガリー語</li>
                    </ul>
                </div>
                
                <div class="language-category fade-in">
                    <h3>中東・アフリカ</h3>
                    <ul>
                        <li>🇸🇦 アラビア語</li>
                        <li>🇮🇷 ペルシャ語</li>
                        <li>🇮🇱 ヘブライ語</li>
                        <li>🇹🇷 トルコ語</li>
                        <li>🇰🇪 スワヒリ語</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Course System Section -->
    <section id="courses" class="courses-section">
        <div class="container">
            <h2 class="section-title">選べる3つのコース</h2>
            <p class="section-subtitle">目的やスタイルに合わせて、3つのクラスと3つのコースから自由に選べます。</p>
            
            <div class="course-types-grid">
                <div class="course-type-card fade-in">
                    <div class="course-type-header" style="background: linear-gradient(135deg, #4ECDC4, #44A08D);">
                        <h3>Sコース<span class="course-subtitle">（ショート）</span></h3>
                    </div>
                    <div class="course-type-content">
                        <p class="course-duration">50分×4回（1ヶ月単位）</p>
                        <p>まず試したい方や、旅行・イベント前の短期集中に最適なコースです。</p>
                        <div class="price-info">
                            <p><strong>シングル：</strong>24,200円/月</p>
                            <p><strong>ペア：</strong>19,800円/月（1人分）</p>
                            <p><strong>トリオ：</strong>16,500円/月（1人分）</p>
                        </div>
                    </div>
                </div>
                
                <div class="course-type-card fade-in popular">
                    <div class="popular-badge">人気No.1</div>
                    <div class="course-type-header" style="background: linear-gradient(135deg, #FF6B6B, #FFE66D);">
                        <h3>Mコース<span class="course-subtitle">（ミドル）</span></h3>
                    </div>
                    <div class="course-type-content">
                        <p class="course-duration">50分×20回（5ヶ月契約）</p>
                        <p>学びを習慣化したい方、継続的にレベルアップしたい方におすすめです。</p>
                        <div class="price-info">
                            <p><strong>シングル：</strong>115,500円（5,775円/回）</p>
                            <p><strong>ペア：</strong>93,500円（4,675円/回）</p>
                            <p><strong>トリオ：</strong>82,500円（3,850円/回）</p>
                        </div>
                    </div>
                </div>
                
                <div class="course-type-card fade-in">
                    <div class="course-type-header" style="background: linear-gradient(135deg, #f093fb, #f5576c);">
                        <h3>Lコース<span class="course-subtitle">（ロング）</span></h3>
                    </div>
                    <div class="course-type-content">
                        <p class="course-duration">50分×40回（10ヶ月契約）</p>
                        <p>本格的に学びたい方、しっかり定着させたい方のための充実コースです。</p>
                        <div class="price-info">
                            <p><strong>シングル：</strong>220,000円（5,500円/回）</p>
                            <p><strong>ペア：</strong>176,000円（4,400円/回）</p>
                            <p><strong>トリオ：</strong>143,000円（3,575円/回）</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Class Types Section -->
    <section class="class-types-section">
        <div class="container">
            <h2 class="section-title">3つのクラス分類</h2>
            
            <div class="class-types-grid">
                <div class="class-type-card fade-in">
                    <div class="class-icon">🍱</div>
                    <h3>A｜アラカルトクラス</h3>
                    <p>趣味・旅行・推し活・語学検定など、"学んでみたい"をきっかけにした個人向けクラスです。好きな言語を自由に選び、自分のペースで続けられます。</p>
                </div>
                
                <div class="class-type-card fade-in">
                    <div class="class-icon">💼</div>
                    <h3>B｜ビジネスクラス</h3>
                    <p>社会人やキャリアアップを目指す方のためのクラスです。英語はもちろん、実務で必要な各国の言語にも対応し、仕事で"使える"語学力を身につけます。</p>
                </div>
                
                <div class="class-type-card fade-in">
                    <div class="class-icon">🏢</div>
                    <h3>C｜カスタムクラス</h3>
                    <p>官公庁・企業・団体向けのオーダーメイド型クラスです。目的、期間、スタイルに応じて個別提案・設計し、研修・グループ指導などにも対応します。</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Lesson Format Section -->
    <section class="lesson-format-section">
        <div class="container">
            <h2 class="section-title">レッスン形式</h2>
            
            <div class="lesson-formats-grid">
                <div class="lesson-format-card fade-in">
                    <h3>👤 シングルレッスン</h3>
                    <p>講師と1対1で、自分のペースと目的にじっくり向き合えるレッスンです。他人と比べず、成長の手応えをしっかり感じながら、自分だけの"ことばの旅"を進められます。学びたい気持ちに、まっすぐ応えるスタイルです。</p>
                </div>
                
                <div class="lesson-format-card fade-in">
                    <h3>👥 ペアレッスン・トリオレッスン</h3>
                    <p>夫婦、親子、友だち同士など、気心の知れた人と一緒に学べるレッスン。会話量もたっぷり、学ぶ楽しさを共有できます。2名は"ペア"、3名は"トリオ"としてご案内し、人数に応じて割安になる料金設定です。仲間と一緒だからこそ、続けやすく、励まし合える環境になります。</p>
                </div>
            </div>
            
            <p class="lesson-note">※どちらのレッスン形式でも、S・M・Lコース（ショート／ミドル／ロング）を選べます。<br>
            ※レッスン形式は、A（アラカルトクラス）・B（ビジネスクラス）どちらにも対応しています。<br>
            ※C（カスタムクラス）は、レッスン形式・人数・頻度・内容をすべて個別に設計します。</p>
        </div>
    </section>
    
    <!-- Pricing Table Section -->
    <section class="pricing-section">
        <div class="container">
            <h2 class="section-title">レッスン料金一覧（税込）</h2>
            
            <div class="pricing-table-wrapper">
                <table class="pricing-table fade-in">
                    <thead>
                        <tr>
                            <th>レッスン形式</th>
                            <th>S（4回）<br><span class="table-subtitle">1ヵ月月謝制</span></th>
                            <th>M（20回）<br><span class="table-subtitle">5ヵ月一括納入</span></th>
                            <th>L（40回）<br><span class="table-subtitle">10ヵ月一括納入</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="lesson-type">シングル</td>
                            <td>6,050円／回<br><span class="monthly">毎月24,200円</span></td>
                            <td>5,775円／回<br><span class="total">計115,500円</span></td>
                            <td>5,500円／回<br><span class="total">計220,000円</span></td>
                        </tr>
                        <tr>
                            <td class="lesson-type">ペア（2名）<br><span class="note">※1人分の料金</span></td>
                            <td>4,950円／回<br><span class="monthly">毎月19,800円</span></td>
                            <td>4,675円／回<br><span class="total">計93,500円</span></td>
                            <td>4,400円／回<br><span class="total">計176,000円</span></td>
                        </tr>
                        <tr>
                            <td class="lesson-type">トリオ（3名）<br><span class="note">※1人分の料金</span></td>
                            <td>4,125円／回<br><span class="monthly">毎月16,500円</span></td>
                            <td>3,850円／回<br><span class="total">計82,500円</span></td>
                            <td>3,575円／回<br><span class="total">計143,000円</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="pricing-benefits">
                <div class="benefit-card">
                    <h4>📊 目的や期間に応じて長期ほどお得！</h4>
                    <p>長期コースほど1回あたりの料金がお得になります。</p>
                </div>
                <div class="benefit-card">
                    <h4>👥 1人あたり約4,400円〜シングルより割安！</h4>
                    <p>ペアレッスンなら、シングルレッスンよりお得に受講できます。</p>
                </div>
                <div class="benefit-card">
                    <h4>👨‍👩‍👧 1人あたり約3,575円〜3人で2人分の料金！</h4>
                    <p>トリオレッスンなら、さらにお得。友達や家族と一緒に学びましょう。</p>
                </div>
            </div>
            
            <div class="additional-fees fade-in">
                <h3>その他の費用（2025年度）</h3>
                <div class="fee-items">
                    <div class="fee-item">
                        <h4>① 入会金</h4>
                        <p class="fee-amount">16,500円（税込）</p>
                        <p class="fee-note">春・夏・秋・冬のキャンペーンで割引や免除を実施可</p>
                    </div>
                    <div class="fee-item">
                        <h4>② 教材費</h4>
                        <p class="fee-amount">実費</p>
                        <p class="fee-note">市販教材をAmazon等で各自購入</p>
                    </div>
                    <div class="fee-item">
                        <h4>③ 月会費</h4>
                        <p class="fee-amount">オンライン受講生：1,100円（税込）</p>
                        <p class="fee-amount">通学型（将来導入）：2,200円（税込）</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title">受講生の声</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card fade-in">
                    <div class="testimonial-content">
                        <p>"ビジネス英語コースを受講して、海外クライアントとの交渉がスムーズにできるようになりました！"</p>
                    </div>
                    <div class="testimonial-author">
                        <span class="author-avatar">👩</span>
                        <div>
                            <h4>田中 太郎さん</h4>
                            <p>英語コース受講生</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card fade-in">
                    <div class="testimonial-content">
                        <p>"韓国ドラマを字幕なしで見るのが夢でした。楽しく学んで、今では韓国旅行も楽しめるように！"</p>
                    </div>
                    <div class="testimonial-author">
                        <span class="author-avatar">👨</span>
                        <div>
                            <h4>佐藤 美優さん</h4>
                            <p>韓国語コース受講生</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card fade-in">
                    <div class="testimonial-content">
                        <p>"HSK6級に合格しました！先生方の熱心な指導のおかげで、難しい中国語も楽しく学べました。"</p>
                    </div>
                    <div class="testimonial-author">
                        <span class="author-avatar">👩</span>
                        <div>
                            <h4>鈴木 花子さん</h4>
                            <p>中国語コース受講生</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>今すぐ語学学習を始めよう！</h2>
                <p>まずは無料体験レッスンから。あなたにぴったりのコースがきっと見つかります。</p>
                <a href="#" class="btn btn-primary btn-large">無料体験を申し込む</a>
            </div>
        </div>
    </section>

    <!-- Latest Blog Posts -->
    <?php
    $latest_posts = new WP_Query( array(
        'posts_per_page' => 3,
        'post_status' => 'publish',
    ) );

    if ( $latest_posts->have_posts() ) : ?>
        <section class="latest-posts-section">
            <div class="container">
                <h2 class="section-title">最新情報</h2>
                <div class="posts-grid">
                    <?php
                    while ( $latest_posts->have_posts() ) :
                        $latest_posts->the_post();
                        ?>
                        <article class="post-card fade-in">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'medium_large' ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="post-content">
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="entry-meta">
                                    <time><?php echo get_the_date(); ?></time>
                                </div>
                                <div class="entry-summary">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More →', 'lala-global-language' ); ?></a>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

</main>

<style>
/* Languages Section */
.languages-section {
    padding: 80px 0;
    background: white;
}

.section-subtitle {
    text-align: center;
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 50px;
}

.languages-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    margin-top: 50px;
}

.language-category {
    background: #F8F9FA;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
}

.language-category h3 {
    color: var(--primary-color);
    margin-bottom: 20px;
    font-size: 1.3rem;
}

.language-category ul {
    list-style: none;
    padding: 0;
}

.language-category li {
    padding: 8px 0;
    font-size: 1.1rem;
}

/* Course System Section */
.courses-section {
    padding: 80px 0;
    background: #F8F9FA;
}

.course-types-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.course-type-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    position: relative;
    transition: transform 0.3s ease;
}

.course-type-card:hover {
    transform: translateY(-10px);
}

.course-type-card.popular {
    position: relative;
}

.popular-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    background: var(--accent-color);
    color: var(--dark-color);
    padding: 8px 20px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.9rem;
    z-index: 1;
}

.course-type-header {
    padding: 40px;
    text-align: center;
    color: white;
}

.course-type-header h3 {
    font-size: 2rem;
    color: white;
    margin: 0;
}

.course-subtitle {
    font-size: 1rem;
    font-weight: normal;
    margin-left: 10px;
}

.course-type-content {
    padding: 40px;
}

.course-duration {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 15px;
}

.price-info {
    background: #F8F9FA;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
}

.price-info p {
    margin: 10px 0;
}

/* Class Types Section */
.class-types-section {
    padding: 80px 0;
    background: white;
}

.class-types-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
    margin-top: 50px;
}

.class-type-card {
    text-align: center;
    padding: 40px;
    background: #F8F9FA;
    border-radius: 20px;
    transition: transform 0.3s ease;
}

.class-type-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.class-icon {
    font-size: 4rem;
    margin-bottom: 20px;
}

.class-type-card h3 {
    font-size: 1.5rem;
    color: var(--dark-color);
    margin-bottom: 15px;
}

/* Lesson Format Section */
.lesson-format-section {
    padding: 80px 0;
    background: #F8F9FA;
}

.lesson-formats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 40px;
    margin-top: 50px;
}

.lesson-format-card {
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
}

.lesson-format-card h3 {
    color: var(--primary-color);
    margin-bottom: 20px;
    font-size: 1.5rem;
}

.lesson-note {
    text-align: center;
    margin-top: 40px;
    color: #666;
    font-size: 0.9rem;
    line-height: 1.8;
}

/* Pricing Section */
.pricing-section {
    padding: 80px 0;
    background: white;
}

.pricing-table-wrapper {
    overflow-x: auto;
    margin: 50px 0;
}

.pricing-table {
    width: 100%;
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.pricing-table th {
    background: var(--primary-color);
    color: white;
    padding: 25px 20px;
    font-weight: 600;
    text-align: center;
}

.table-subtitle {
    font-size: 0.9rem;
    font-weight: normal;
    opacity: 0.9;
}

.pricing-table td {
    padding: 25px 20px;
    text-align: center;
    border-bottom: 1px solid #eee;
}

.pricing-table tbody tr:last-child td {
    border-bottom: none;
}

.lesson-type {
    font-weight: 600;
    color: var(--dark-color);
    text-align: left !important;
}

.note {
    font-size: 0.85rem;
    color: #666;
    font-weight: normal;
}

.monthly {
    display: block;
    font-size: 0.9rem;
    color: var(--primary-color);
    margin-top: 5px;
}

.total {
    display: block;
    font-size: 0.9rem;
    color: var(--secondary-color);
    margin-top: 5px;
}

.pricing-benefits {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin: 50px 0;
}

.benefit-card {
    background: #F8F9FA;
    padding: 30px;
    border-radius: 15px;
    text-align: center;
}

.benefit-card h4 {
    color: var(--primary-color);
    margin-bottom: 10px;
}

.additional-fees {
    background: #F8F9FA;
    padding: 50px;
    border-radius: 20px;
    margin-top: 50px;
}

.additional-fees h3 {
    text-align: center;
    color: var(--dark-color);
    margin-bottom: 40px;
}

.fee-items {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
}

.fee-item {
    text-align: center;
}

.fee-item h4 {
    color: var(--secondary-color);
    margin-bottom: 15px;
}

.fee-amount {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--dark-color);
    margin: 10px 0;
}

.fee-note {
    font-size: 0.9rem;
    color: #666;
}

/* Courses Section */
.courses-section {
    padding: 80px 0;
    background: #F8F9FA;
}

.courses-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    margin-top: 50px;
}

.course-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.course-card:hover {
    transform: translateY(-10px);
}

.course-header {
    padding: 40px;
    text-align: center;
    color: white;
}

.course-flag {
    font-size: 4rem;
    display: block;
    margin-bottom: 20px;
}

.course-header h3 {
    font-size: 2rem;
    color: white;
    margin: 0;
}

.course-content {
    padding: 40px;
}

.course-features {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}

.course-features li {
    padding: 10px 0;
    color: #666;
}

/* Testimonials Section */
.testimonials-section {
    padding: 80px 0;
    background: white;
}

.testimonials-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
    margin-top: 50px;
}

.testimonial-card {
    background: #F8F9FA;
    padding: 40px;
    border-radius: 20px;
    position: relative;
}

.testimonial-card::before {
    content: '"';
    font-size: 6rem;
    color: var(--primary-color);
    opacity: 0.2;
    position: absolute;
    top: 20px;
    left: 30px;
    line-height: 1;
}

.testimonial-content {
    margin-bottom: 30px;
    font-style: italic;
    line-height: 1.8;
}

.testimonial-author {
    display: flex;
    align-items: center;
    gap: 15px;
}

.author-avatar {
    font-size: 2.5rem;
}

.testimonial-author h4 {
    margin: 0;
    color: var(--dark-color);
}

.testimonial-author p {
    margin: 0;
    color: #666;
    font-size: 0.9rem;
}

/* CTA Section */
.cta-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    text-align: center;
    color: white;
}

.cta-content h2 {
    font-size: 3rem;
    color: white;
    margin-bottom: 20px;
}

.cta-content p {
    font-size: 1.3rem;
    margin-bottom: 40px;
    opacity: 0.9;
}

.btn-large {
    padding: 20px 50px;
    font-size: 1.2rem;
}

/* Latest Posts Section */
.latest-posts-section {
    padding: 80px 0;
    background: #F8F9FA;
}

.latest-posts-section .posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: var(--primary-color);
}

/* Animations */
@media (prefers-reduced-motion: reduce) {
    * {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }
}

/* Mobile Responsive Styles */
@media (max-width: 1024px) {
    /* Languages grid - 3 columns on tablet */
    .languages-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }
    
    /* Course cards adjustments */
    .course-types-grid {
        gap: 25px;
    }
}

@media (max-width: 768px) {
    /* Hero Section */
    .hero-section {
        padding: 80px 0 60px;
    }
    
    .hero-title {
        font-size: 1.8rem;
        line-height: 1.3;
    }
    
    .hero-description {
        font-size: 1rem;
        padding: 0 20px;
    }
    
    .hero-buttons {
        flex-direction: column;
        gap: 15px;
        align-items: center;
    }
    
    .hero-buttons .btn {
        width: 100%;
        max-width: 280px;
    }
    
    /* Section spacing */
    .features-section,
    .languages-section,
    .courses-section,
    .class-types-section,
    .lesson-format-section,
    .pricing-section,
    .testimonials-section,
    .latest-posts-section {
        padding: 50px 0;
    }
    
    .section-title {
        font-size: 1.8rem;
        margin-bottom: 15px;
    }
    
    .section-subtitle {
        font-size: 1rem;
        margin-bottom: 30px;
        padding: 0 20px;
    }
    
    /* Features grid */
    .features-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }
    
    .feature-card {
        padding: 30px 25px;
    }
    
    /* Languages grid - 2 columns on mobile */
    .languages-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-top: 30px;
    }
    
    .language-category {
        padding: 20px;
    }
    
    .language-category h3 {
        font-size: 1.1rem;
        margin-bottom: 15px;
    }
    
    .language-category li {
        font-size: 0.95rem;
        padding: 5px 0;
    }
    
    /* Course cards - stack on mobile */
    .course-types-grid {
        grid-template-columns: 1fr;
        gap: 20px;
        margin-top: 30px;
    }
    
    .course-type-header {
        padding: 30px 20px;
    }
    
    .course-type-header h3 {
        font-size: 1.5rem;
    }
    
    .course-type-content {
        padding: 30px 20px;
    }
    
    .course-duration {
        font-size: 1.1rem;
    }
    
    .popular-badge {
        top: 10px;
        right: 10px;
        padding: 6px 15px;
        font-size: 0.8rem;
    }
    
    /* Class types - stack on mobile */
    .class-types-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }
    
    .class-type-card {
        padding: 30px 25px;
    }
    
    .class-icon {
        font-size: 3rem;
    }
    
    /* Lesson formats */
    .lesson-formats-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }
    
    .lesson-format-card {
        padding: 30px 25px;
    }
    
    /* Pricing table - make scrollable */
    .pricing-table-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        margin: 30px -20px;
        padding: 0 20px;
    }
    
    .pricing-table {
        min-width: 600px;
        font-size: 0.85rem;
    }
    
    .pricing-table th,
    .pricing-table td {
        padding: 15px 10px;
    }
    
    .pricing-benefits {
        grid-template-columns: 1fr;
        gap: 20px;
        margin: 30px 0;
    }
    
    .benefit-card {
        padding: 20px;
    }
    
    .benefit-card h4 {
        font-size: 1rem;
    }
    
    /* Additional fees */
    .additional-fees {
        padding: 30px 20px;
        margin-top: 30px;
    }
    
    .fee-items {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .fee-amount {
        font-size: 1.3rem;
    }
    
    /* Testimonials */
    .testimonials-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }
    
    .testimonial-card {
        padding: 30px 25px;
    }
    
    /* CTA Section */
    .cta-section {
        padding: 60px 0;
    }
    
    .cta-content h2 {
        font-size: 1.8rem;
    }
    
    .cta-content p {
        font-size: 1.1rem;
        padding: 0 20px;
    }
    
    .btn-large {
        padding: 16px 40px;
        font-size: 1rem;
    }
    
    /* Latest posts */
    .latest-posts-section .posts-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }
    
    /* Reduce animations on mobile */
    .fade-in {
        animation: none;
        opacity: 1;
    }
    
    /* Container padding */
    .container {
        padding: 0 20px;
    }
}

@media (max-width: 480px) {
    /* Languages grid - single column on small phones */
    .languages-grid {
        grid-template-columns: 1fr;
    }
    
    /* Even smaller text adjustments */
    .hero-title {
        font-size: 1.5rem;
    }
    
    .section-title {
        font-size: 1.5rem;
    }
    
    /* Button adjustments */
    .btn {
        padding: 14px 30px;
        font-size: 0.95rem;
    }
}
</style>

<?php get_footer(); ?>