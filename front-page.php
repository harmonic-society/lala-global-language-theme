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

    <!-- Announcements Section -->
    <?php get_template_part( 'template-parts/announcement', 'list' ); ?>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <h2 class="section-title fade-in">LaLa Global Language が選ばれる理由</h2>
            <?php 
            $features_image = get_theme_mod( 'features_image' );
            if ( $features_image ) : ?>
                <div class="features-image fade-in">
                    <img src="<?php echo esc_url( $features_image ); ?>" alt="選ばれる理由" />
                </div>
            <?php endif; ?>
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
        <div class="languages-bg-pattern"></div>
        <div class="container">
            <h2 class="section-title fade-in">LaLaの対応35言語</h2>
            <p class="section-subtitle">世界中のことばを、誰でも、どこでも学べる"言語のデパート"</p>
            
            <div class="languages-showcase">
                <!-- 東アジア -->
                <div class="language-region east-asia fade-in" data-region="東アジア">
                    <div class="region-header">
                        <div class="region-icon">🏮</div>
                        <h3 class="region-title">東アジア</h3>
                        <span class="language-count">4言語</span>
                    </div>
                    <div class="language-items">
                        <div class="language-item" data-lang="zh">
                            <span class="flag-icon">🇨🇳</span>
                            <div class="language-info">
                                <h4>中国語</h4>
                                <span class="language-native">北京語</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="tw">
                            <span class="flag-icon">🇹🇼</span>
                            <div class="language-info">
                                <h4>台湾華語</h4>
                                <span class="language-native">繁體中文</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="ko">
                            <span class="flag-icon">🇰🇷</span>
                            <div class="language-info">
                                <h4>韓国語</h4>
                                <span class="language-native">한국어</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="mn">
                            <span class="flag-icon">🇲🇳</span>
                            <div class="language-info">
                                <h4>モンゴル語</h4>
                                <span class="language-native">Монгол</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- 東南アジア -->
                <div class="language-region southeast-asia fade-in" data-region="東南アジア">
                    <div class="region-header">
                        <div class="region-icon">🌺</div>
                        <h3 class="region-title">東南アジア</h3>
                        <span class="language-count">8言語</span>
                    </div>
                    <div class="language-items">
                        <div class="language-item" data-lang="id">
                            <span class="flag-icon">🇮🇩</span>
                            <div class="language-info">
                                <h4>インドネシア語</h4>
                                <span class="language-native">Bahasa</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="kh">
                            <span class="flag-icon">🇰🇭</span>
                            <div class="language-info">
                                <h4>カンボジア語</h4>
                                <span class="language-native">クメール語</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="la">
                            <span class="flag-icon">🇱🇦</span>
                            <div class="language-info">
                                <h4>ラオス語</h4>
                                <span class="language-native">ພາສາລາວ</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="mm">
                            <span class="flag-icon">🇲🇲</span>
                            <div class="language-info">
                                <h4>ミャンマー語</h4>
                                <span class="language-native">ビルマ語</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="my">
                            <span class="flag-icon">🇲🇾</span>
                            <div class="language-info">
                                <h4>マレーシア語</h4>
                                <span class="language-native">マレー語</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="ph">
                            <span class="flag-icon">🇵🇭</span>
                            <div class="language-info">
                                <h4>フィリピン語</h4>
                                <span class="language-native">タガログ語</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="th">
                            <span class="flag-icon">🇹🇭</span>
                            <div class="language-info">
                                <h4>タイ語</h4>
                                <span class="language-native">ภาษาไทย</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="vn">
                            <span class="flag-icon">🇻🇳</span>
                            <div class="language-info">
                                <h4>ベトナム語</h4>
                                <span class="language-native">Tiếng Việt</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- 南アジア -->
                <div class="language-region south-asia fade-in" data-region="南アジア">
                    <div class="region-header">
                        <div class="region-icon">🕌</div>
                        <h3 class="region-title">南アジア</h3>
                        <span class="language-count">7言語</span>
                    </div>
                    <div class="language-items">
                        <div class="language-item" data-lang="bd">
                            <span class="flag-icon">🇧🇩</span>
                            <div class="language-info">
                                <h4>ベンガル語</h4>
                                <span class="language-native">বাংলা</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="hi">
                            <span class="flag-icon">🇮🇳</span>
                            <div class="language-info">
                                <h4>ヒンディー語</h4>
                                <span class="language-native">हिन्दी</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="np">
                            <span class="flag-icon">🇳🇵</span>
                            <div class="language-info">
                                <h4>ネパール語</h4>
                                <span class="language-native">नेपाली</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="pa">
                            <span class="flag-icon">🇮🇳</span>
                            <div class="language-info">
                                <h4>パンジャーブ語</h4>
                                <span class="language-native">ਪੰਜਾਬੀ</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="si">
                            <span class="flag-icon">🇱🇰</span>
                            <div class="language-info">
                                <h4>シンハラ語</h4>
                                <span class="language-native">සිංහල</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="ta">
                            <span class="flag-icon">🇮🇳</span>
                            <div class="language-info">
                                <h4>タミル語</h4>
                                <span class="language-native">தமிழ்</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="ur">
                            <span class="flag-icon">🇵🇰</span>
                            <div class="language-info">
                                <h4>ウルドゥー語</h4>
                                <span class="language-native">اردو</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- ヨーロッパ -->
                <div class="language-region europe fade-in" data-region="ヨーロッパ">
                    <div class="region-header">
                        <div class="region-icon">🏰</div>
                        <h3 class="region-title">ヨーロッパ</h3>
                        <span class="language-count">7言語</span>
                    </div>
                    <div class="language-items">
                        <div class="language-item" data-lang="en">
                            <span class="flag-icon">🇬🇧</span>
                            <div class="language-info">
                                <h4>英語</h4>
                                <span class="language-native">English</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="de">
                            <span class="flag-icon">🇩🇪</span>
                            <div class="language-info">
                                <h4>ドイツ語</h4>
                                <span class="language-native">Deutsch</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="fr">
                            <span class="flag-icon">🇫🇷</span>
                            <div class="language-info">
                                <h4>フランス語</h4>
                                <span class="language-native">Français</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="it">
                            <span class="flag-icon">🇮🇹</span>
                            <div class="language-info">
                                <h4>イタリア語</h4>
                                <span class="language-native">Italiano</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="es">
                            <span class="flag-icon">🇪🇸</span>
                            <div class="language-info">
                                <h4>スペイン語</h4>
                                <span class="language-native">Español</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="pt">
                            <span class="flag-icon">🇵🇹</span>
                            <div class="language-info">
                                <h4>ポルトガル語</h4>
                                <span class="language-native">Português</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="nl">
                            <span class="flag-icon">🇳🇱</span>
                            <div class="language-info">
                                <h4>オランダ語</h4>
                                <span class="language-native">Nederlands</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- 東欧・ロシア -->
                <div class="language-region eastern-europe fade-in" data-region="東欧・ロシア">
                    <div class="region-header">
                        <div class="region-icon">⛪</div>
                        <h3 class="region-title">東欧・ロシア</h3>
                        <span class="language-count">4言語</span>
                    </div>
                    <div class="language-items">
                        <div class="language-item" data-lang="ru">
                            <span class="flag-icon">🇷🇺</span>
                            <div class="language-info">
                                <h4>ロシア語</h4>
                                <span class="language-native">Русский</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="ua">
                            <span class="flag-icon">🇺🇦</span>
                            <div class="language-info">
                                <h4>ウクライナ語</h4>
                                <span class="language-native">Українська</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="cz">
                            <span class="flag-icon">🇨🇿</span>
                            <div class="language-info">
                                <h4>チェコ語</h4>
                                <span class="language-native">Čeština</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="hu">
                            <span class="flag-icon">🇭🇺</span>
                            <div class="language-info">
                                <h4>ハンガリー語</h4>
                                <span class="language-native">Magyar</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- 中東・アフリカ -->
                <div class="language-region middle-east-africa fade-in" data-region="中東・アフリカ">
                    <div class="region-header">
                        <div class="region-icon">🕌</div>
                        <h3 class="region-title">中東・アフリカ</h3>
                        <span class="language-count">5言語</span>
                    </div>
                    <div class="language-items">
                        <div class="language-item" data-lang="ar">
                            <span class="flag-icon">🇸🇦</span>
                            <div class="language-info">
                                <h4>アラビア語</h4>
                                <span class="language-native">العربية</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="fa">
                            <span class="flag-icon">🇮🇷</span>
                            <div class="language-info">
                                <h4>ペルシャ語</h4>
                                <span class="language-native">فارسی</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="he">
                            <span class="flag-icon">🇮🇱</span>
                            <div class="language-info">
                                <h4>ヘブライ語</h4>
                                <span class="language-native">עברית</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="tr">
                            <span class="flag-icon">🇹🇷</span>
                            <div class="language-info">
                                <h4>トルコ語</h4>
                                <span class="language-native">Türkçe</span>
                            </div>
                        </div>
                        <div class="language-item" data-lang="sw">
                            <span class="flag-icon">🇰🇪</span>
                            <div class="language-info">
                                <h4>スワヒリ語</h4>
                                <span class="language-native">Kiswahili</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Overview Section -->
    <section id="courses" class="courses-section">
        <div class="container">
            <h2 class="section-title">選べるコース & 料金体系</h2>
            <p class="section-subtitle">あなたの目的とペースに合わせて、最適なプランをお選びいただけます</p>
            <p class="tax-notice">※表示価格はすべて税込です</p>
            
            <!-- Course Overview Grid -->
            <div class="course-overview-grid">
                <!-- Courses Column -->
                <div class="overview-column fade-in">
                    <h3 class="overview-title">
                        <span class="overview-icon">📚</span>
                        3つのコース期間
                    </h3>
                    <div class="overview-items">
                        <div class="overview-item">
                            <h4>Sコース<span class="item-subtitle">（ショート）</span></h4>
                            <p class="item-duration">50分×4回（1ヶ月）</p>
                            <p class="item-price">月額 16,500円〜</p>
                        </div>
                        <div class="overview-item popular">
                            <span class="popular-label">人気No.1</span>
                            <h4>Mコース<span class="item-subtitle">（ミドル）</span></h4>
                            <p class="item-duration">50分×20回（5ヶ月）</p>
                            <p class="item-price">82,500円〜</p>
                        </div>
                        <div class="overview-item">
                            <h4>Lコース<span class="item-subtitle">（ロング）</span></h4>
                            <p class="item-duration">50分×40回（10ヶ月）</p>
                            <p class="item-price">143,000円〜</p>
                        </div>
                    </div>
                </div>
                
                <!-- Classes Column -->
                <div class="overview-column fade-in">
                    <h3 class="overview-title">
                        <span class="overview-icon">🎯</span>
                        3つのクラス
                    </h3>
                    <div class="overview-items">
                        <div class="overview-item">
                            <h4>アラカルトクラス</h4>
                            <p>趣味・旅行・推し活など個人向け</p>
                        </div>
                        <div class="overview-item">
                            <h4>ビジネスクラス</h4>
                            <p>実務で使える語学力を身につける</p>
                        </div>
                        <div class="overview-item">
                            <h4>カスタムクラス</h4>
                            <p>企業・団体向けオーダーメイド</p>
                        </div>
                    </div>
                </div>
                
                <!-- Lesson Format Column -->
                <div class="overview-column fade-in">
                    <h3 class="overview-title">
                        <span class="overview-icon">👥</span>
                        レッスン形式
                    </h3>
                    <div class="overview-items">
                        <div class="overview-item">
                            <h4>シングル</h4>
                            <p>講師と1対1のマンツーマン</p>
                        </div>
                        <div class="overview-item">
                            <h4>ペア</h4>
                            <p>2名で受講（割引料金）</p>
                        </div>
                        <div class="overview-item">
                            <h4>トリオ</h4>
                            <p>3名で受講（さらにお得）</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Quick Price Summary -->
            <div class="price-summary fade-in">
                <h3>料金例（税込）</h3>
                <?php 
                $pricing_image = get_theme_mod( 'pricing_image' );
                if ( $pricing_image ) : ?>
                    <div class="pricing-image">
                        <img src="<?php echo esc_url( $pricing_image ); ?>" alt="料金プラン" />
                    </div>
                <?php endif; ?>
                <div class="price-examples">
                    <div class="price-example">
                        <span class="example-label">最安プラン</span>
                        <span class="example-price">月額 16,500円〜</span>
                        <span class="example-desc">（トリオ・Sコース）</span>
                    </div>
                    <div class="price-example">
                        <span class="example-label">人気プラン</span>
                        <span class="example-price">1回あたり 4,675円〜</span>
                        <span class="example-desc">（ペア・Mコース）</span>
                    </div>
                    <div class="price-example">
                        <span class="example-label">入会金</span>
                        <span class="example-price">16,500円</span>
                        <span class="example-desc">（キャンペーン割引あり）</span>
                    </div>
                </div>
            </div>
            
            <!-- CTA Button -->
            <div class="course-cta">
                <a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>" class="btn btn-primary btn-large">
                    <span class="btn-text">詳しいコース内容・料金表を見る</span>
                    <span class="btn-icon">→</span>
                </a>
                <p class="cta-note">※目的に合わせた最適なプランをご提案します</p>
            </div>
        </div>
    </section>

    <!-- Custom Class Recommendation Section -->
    <section class="custom-class-section">
        <div class="custom-class-bg-gradient"></div>
        <div class="container">
            <div class="custom-class-content">
                <div class="custom-class-intro fade-in">
                    <span class="section-badge">おすすめ</span>
                    <h2 class="section-title">企業・団体様向け<br>カスタムクラスのご案内</h2>
                    <p class="section-lead">
                        貴社のニーズに合わせて、完全オーダーメイドの語学研修プログラムをご提供します
                    </p>
                    <?php 
                    $custom_class_image = get_theme_mod( 'custom_class_image' );
                    if ( $custom_class_image ) : ?>
                        <div class="custom-class-image">
                            <img src="<?php echo esc_url( $custom_class_image ); ?>" alt="カスタムクラス" />
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="custom-class-features">
                    <div class="feature-row fade-in">
                        <div class="feature-icon">
                            <span>🏢</span>
                        </div>
                        <div class="feature-content">
                            <h3>法人・団体様に最適化</h3>
                            <p>企業の海外展開、インバウンド対応、社員のスキルアップなど、組織の目的に合わせたカリキュラムを設計</p>
                        </div>
                    </div>
                    
                    <div class="feature-row fade-in">
                        <div class="feature-icon">
                            <span>🎯</span>
                        </div>
                        <div class="feature-content">
                            <h3>業界特化型プログラム</h3>
                            <p>医療、IT、製造業、観光業など、各業界の専門用語やビジネスシーンに対応した実践的な内容</p>
                        </div>
                    </div>
                    
                    <div class="feature-row fade-in">
                        <div class="feature-icon">
                            <span>📊</span>
                        </div>
                        <div class="feature-content">
                            <h3>柔軟な受講形態</h3>
                            <p>オンライン・対面・ハイブリッド対応。就業時間内の研修や、早朝・夜間レッスンも可能</p>
                        </div>
                    </div>
                    
                    <div class="feature-row fade-in">
                        <div class="feature-icon">
                            <span>💰</span>
                        </div>
                        <div class="feature-content">
                            <h3>お得な団体割引</h3>
                            <p>10名以上の受講で特別料金をご用意。助成金申請のサポートも承ります</p>
                        </div>
                    </div>
                </div>
                
                <div class="custom-class-cta fade-in">
                    <div class="cta-box">
                        <h3>まずは無料相談から</h3>
                        <p>貴社の語学研修に関するお悩みをお聞かせください。<br>最適なソリューションをご提案いたします。</p>
                        <div class="cta-buttons">
                            <a href="#contact" class="btn btn-primary btn-large">
                                <span class="btn-text">無料相談を申し込む</span>
                                <span class="btn-icon">→</span>
                            </a>
                            <a href="<?php echo esc_url( home_url( '/custom-class/' ) ); ?>" class="btn btn-secondary btn-large">
                                <span class="btn-text">詳細資料をダウンロード</span>
                                <span class="btn-icon">📄</span>
                            </a>
                        </div>
                        <p class="cta-note">※お見積もりは無料です。お気軽にお問い合わせください。</p>
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
    padding: 100px 0;
    background: #F8F9FA;
    position: relative;
    overflow: hidden;
}

.languages-bg-pattern {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 50%, rgba(0, 128, 128, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 80% 50%, rgba(248, 131, 121, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 50% 100%, rgba(255, 215, 0, 0.05) 0%, transparent 50%);
    pointer-events: none;
}

.section-subtitle {
    text-align: center;
    font-size: 1.3rem;
    color: #666;
    margin-bottom: 60px;
    font-weight: 500;
}

.languages-showcase {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
    gap: 30px;
    margin-top: 60px;
}

/* Language Region Cards */
.language-region {
    background: white;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    position: relative;
}

.language-region:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

.region-header {
    padding: 30px;
    display: flex;
    align-items: center;
    gap: 15px;
    position: relative;
    z-index: 1;
}

.region-icon {
    font-size: 2.5rem;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.region-title {
    font-size: 1.8rem;
    color: white;
    margin: 0;
    flex: 1;
}

.language-count {
    background: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
}

/* Regional Color Schemes */
.east-asia .region-header {
    background: linear-gradient(135deg, #E74C3C 0%, #C0392B 100%);
}

.southeast-asia .region-header {
    background: linear-gradient(135deg, #3498DB 0%, #2980B9 100%);
}

.south-asia .region-header {
    background: linear-gradient(135deg, #9B59B6 0%, #8E44AD 100%);
}

.europe .region-header {
    background: linear-gradient(135deg, #1ABC9C 0%, #16A085 100%);
}

.eastern-europe .region-header {
    background: linear-gradient(135deg, #34495E 0%, #2C3E50 100%);
}

.middle-east-africa .region-header {
    background: linear-gradient(135deg, #E67E22 0%, #D35400 100%);
}

/* Language Items */
.language-items {
    padding: 20px;
    display: grid;
    gap: 12px;
}

.language-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 20px;
    background: #F8F9FA;
    border-radius: 15px;
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.language-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    background: linear-gradient(90deg, rgba(0, 128, 128, 0.1) 0%, rgba(248, 131, 121, 0.1) 100%);
    transition: width 0.3s ease;
    z-index: 0;
}

.language-item:hover::before {
    width: 100%;
}

.language-item:hover {
    transform: translateX(10px);
    background: white;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.flag-icon {
    font-size: 2.5rem;
    position: relative;
    z-index: 1;
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
    transition: transform 0.3s ease;
}

.language-item:hover .flag-icon {
    transform: scale(1.1) rotate(5deg);
}

.language-info {
    flex: 1;
    position: relative;
    z-index: 1;
}

.language-info h4 {
    margin: 0;
    font-size: 1.1rem;
    color: var(--dark-color);
    font-weight: 600;
}

.language-native {
    font-size: 0.85rem;
    color: #666;
    font-style: italic;
    display: block;
    margin-top: 3px;
}

/* Special emphasis for popular languages */
.language-item[data-lang="en"],
.language-item[data-lang="zh"],
.language-item[data-lang="ko"] {
    background: linear-gradient(135deg, #FFF5E6 0%, #FFE4CC 100%);
}

.language-item[data-lang="en"]::after,
.language-item[data-lang="zh"]::after,
.language-item[data-lang="ko"]::after {
    content: '人気';
    position: absolute;
    top: -5px;
    right: 10px;
    background: var(--accent-color);
    color: var(--dark-color);
    font-size: 0.7rem;
    padding: 3px 10px;
    border-radius: 10px;
    font-weight: 600;
    animation: pulse 2s ease-in-out infinite;
}

/* Animations */
@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
}

/* Stagger animation for language regions */
.language-region {
    animation: fadeInUp 0.6s ease-out forwards;
    opacity: 0;
}

.language-region:nth-child(1) { animation-delay: 0.1s; }
.language-region:nth-child(2) { animation-delay: 0.2s; }
.language-region:nth-child(3) { animation-delay: 0.3s; }
.language-region:nth-child(4) { animation-delay: 0.4s; }
.language-region:nth-child(5) { animation-delay: 0.5s; }
.language-region:nth-child(6) { animation-delay: 0.6s; }

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Interactive hover states */
.language-region {
    cursor: pointer;
    position: relative;
}

.language-region::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, transparent 0%, rgba(255, 255, 255, 0.1) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
    border-radius: 25px;
}

.language-region:hover::before {
    opacity: 1;
}

/* Responsive breakpoints */
@media (max-width: 1200px) {
    .languages-showcase {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .languages-section {
        padding: 60px 0;
    }
    
    .language-item[data-lang="en"]::after,
    .language-item[data-lang="zh"]::after,
    .language-item[data-lang="ko"]::after {
        display: none;
    }
    
    .language-item {
        padding: 10px 12px;
    }
    
    .flag-icon {
        font-size: 1.8rem;
    }
}

/* Course Overview Section */
.courses-section {
    padding: 80px 0;
    background: white;
}

.course-overview-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 40px;
    margin: 60px 0;
}

.overview-column {
    background: #F8F9FA;
    border-radius: 25px;
    padding: 40px;
    position: relative;
    transition: transform 0.3s ease;
}

.overview-column:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}

.overview-title {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 30px;
    font-size: 1.5rem;
    color: var(--primary-color);
}

.overview-icon {
    font-size: 2rem;
}

.overview-items {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.overview-item {
    background: white;
    padding: 20px;
    border-radius: 15px;
    position: relative;
    transition: transform 0.3s ease;
}

.overview-item:hover {
    transform: translateX(10px);
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.overview-item h4 {
    font-size: 1.2rem;
    color: var(--dark-color);
    margin-bottom: 8px;
}

.item-subtitle {
    font-size: 0.9rem;
    font-weight: normal;
    color: #666;
    margin-left: 5px;
}

.item-duration {
    font-size: 0.95rem;
    color: var(--primary-color);
    font-weight: 600;
    margin-bottom: 5px;
}

.item-price {
    font-size: 1.1rem;
    color: var(--secondary-color);
    font-weight: 700;
}

.overview-item.popular {
    border: 2px solid var(--accent-color);
    background: linear-gradient(135deg, #FFF5E6 0%, #FFE4CC 100%);
}

.popular-label {
    position: absolute;
    top: -10px;
    right: 15px;
    background: var(--accent-color);
    color: var(--dark-color);
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
}

/* Price Summary */
.price-summary {
    background: linear-gradient(135deg, #F8F9FA 0%, #E9ECEF 100%);
    border-radius: 25px;
    padding: 40px;
    margin: 40px 0;
    text-align: center;
}

.price-summary h3 {
    font-size: 1.8rem;
    color: var(--dark-color);
    margin-bottom: 30px;
}

.pricing-image {
    margin-bottom: 30px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.pricing-image img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
    max-height: 400px;
}

.price-examples {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
}

.price-example {
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
}

.example-label {
    display: block;
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 10px;
}

.example-price {
    display: block;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 5px;
}

.example-desc {
    display: block;
    font-size: 0.85rem;
    color: #999;
}

/* Course CTA */
.course-cta {
    text-align: center;
    margin-top: 50px;
}

.course-cta .btn-large {
    padding: 20px 50px;
    font-size: 1.2rem;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.course-cta .btn-large:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
}

.cta-note {
    margin-top: 15px;
    color: #666;
    font-size: 0.95rem;
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
    
    /* Languages showcase responsive */
    .languages-showcase {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .language-region {
        border-radius: 20px;
    }
    
    .region-header {
        padding: 20px;
        gap: 10px;
    }
    
    .region-icon {
        width: 45px;
        height: 45px;
        font-size: 2rem;
    }
    
    .region-title {
        font-size: 1.4rem;
    }
    
    .language-count {
        padding: 5px 15px;
        font-size: 0.8rem;
    }
    
    .language-items {
        padding: 15px;
        gap: 10px;
    }
    
    .language-item {
        padding: 12px 15px;
        gap: 12px;
    }
    
    .flag-icon {
        font-size: 2rem;
    }
    
    .language-info h4 {
        font-size: 1rem;
    }
    
    .language-native {
        font-size: 0.8rem;
    }
    
    .language-item:hover {
        transform: translateX(5px);
    }
    
    /* Course overview responsive */
    .course-overview-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }
    
    .overview-column {
        padding: 30px 25px;
    }
    
    .overview-title {
        font-size: 1.3rem;
        gap: 10px;
    }
    
    .overview-icon {
        font-size: 1.5rem;
    }
    
    .overview-items {
        gap: 15px;
    }
    
    .overview-item {
        padding: 15px;
    }
    
    .overview-item h4 {
        font-size: 1.1rem;
    }
    
    .item-price {
        font-size: 1rem;
    }
    
    .overview-item:hover {
        transform: translateX(5px);
    }
    
    /* Price summary responsive */
    .price-summary {
        padding: 30px 20px;
    }
    
    .pricing-image {
        margin-bottom: 20px;
    }
    
    .pricing-image img {
        max-height: 250px;
    }
    
    .price-examples {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .price-example {
        padding: 20px;
    }
    
    .example-price {
        font-size: 1.3rem;
    }
    
    /* Course CTA responsive */
    .course-cta .btn-large {
        width: 100%;
        max-width: 350px;
        padding: 18px 30px;
        font-size: 1rem;
        justify-content: center;
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

/* Custom Class Section */
.custom-class-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #F8F9FA 0%, #E9ECEF 100%);
    position: relative;
    overflow: hidden;
}

.custom-class-bg-gradient {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 10% 20%, rgba(248, 131, 121, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 90% 80%, rgba(0, 128, 128, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 50% 50%, rgba(255, 215, 0, 0.05) 0%, transparent 50%);
    pointer-events: none;
}

.custom-class-content {
    position: relative;
    z-index: 1;
}

.custom-class-intro {
    text-align: center;
    margin-bottom: 60px;
}

.section-badge {
    display: inline-block;
    background: var(--accent-color);
    color: var(--dark-color);
    padding: 8px 25px;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 700;
    margin-bottom: 20px;
    animation: pulse 2s ease-in-out infinite;
}

.section-lead {
    font-size: 1.3rem;
    color: #666;
    max-width: 700px;
    margin: 20px auto 0;
    line-height: 1.8;
}

.custom-class-image {
    margin-top: 40px;
    margin-bottom: 20px;
    max-width: 1000px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}

.custom-class-image img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
    max-height: 600px;
}

/* Custom Class Features */
.custom-class-features {
    max-width: 900px;
    margin: 0 auto 80px;
}

.feature-row {
    display: flex;
    align-items: flex-start;
    gap: 30px;
    background: white;
    padding: 30px;
    border-radius: 20px;
    margin-bottom: 20px;
    transition: all 0.3s ease;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
}

.feature-row:hover {
    transform: translateX(10px);
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
}

.feature-icon {
    flex-shrink: 0;
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.5rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.feature-content h3 {
    font-size: 1.4rem;
    color: var(--dark-color);
    margin-bottom: 10px;
}

.feature-content p {
    color: #666;
    line-height: 1.7;
    margin: 0;
}

/* CTA Box */
.custom-class-cta {
    text-align: center;
}

.cta-box {
    background: linear-gradient(135deg, var(--primary-color) 0%, #006666 100%);
    padding: 60px;
    border-radius: 30px;
    color: white;
    position: relative;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
}

.cta-box::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
    animation: rotate 20s linear infinite;
}

.cta-box h3 {
    font-size: 2.5rem;
    color: white;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}

.cta-box > p {
    font-size: 1.2rem;
    margin-bottom: 40px;
    opacity: 0.95;
    position: relative;
    z-index: 1;
    line-height: 1.8;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    position: relative;
    z-index: 1;
}

.cta-buttons .btn-large {
    padding: 20px 40px;
    font-size: 1.1rem;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.cta-buttons .btn-primary {
    background: white;
    color: var(--primary-color);
}

.cta-buttons .btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
}

.cta-buttons .btn-secondary {
    background: transparent;
    color: white;
    border: 3px solid white;
}

.cta-buttons .btn-secondary:hover {
    background: white;
    color: var(--primary-color);
}

.cta-note {
    margin-top: 20px;
    opacity: 0.8;
    font-size: 0.95rem;
    position: relative;
    z-index: 1;
}

/* Responsive */
@media (max-width: 768px) {
    .custom-class-section {
        padding: 60px 0;
    }
    
    .custom-class-intro {
        margin-bottom: 40px;
    }
    
    .section-lead {
        font-size: 1.1rem;
        padding: 0 20px;
    }
    
    .custom-class-image {
        margin-top: 30px;
        margin-bottom: 15px;
        border-radius: 15px;
    }
    
    .custom-class-image img {
        max-height: 400px;
    }
    
    .feature-row {
        flex-direction: column;
        text-align: center;
        padding: 25px 20px;
        gap: 20px;
    }
    
    .feature-row:hover {
        transform: translateX(0) translateY(-5px);
    }
    
    .feature-icon {
        width: 60px;
        height: 60px;
        font-size: 2rem;
        margin: 0 auto;
    }
    
    .feature-content h3 {
        font-size: 1.2rem;
    }
    
    .cta-box {
        padding: 40px 30px;
        border-radius: 20px;
    }
    
    .cta-box h3 {
        font-size: 1.8rem;
    }
    
    .cta-box > p {
        font-size: 1rem;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .cta-buttons .btn-large {
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .section-badge {
        font-size: 0.8rem;
        padding: 6px 20px;
    }
    
    .custom-class-intro h2 {
        font-size: 1.5rem;
    }
    
    .section-lead {
        font-size: 1rem;
    }
    
    .custom-class-image {
        margin-top: 20px;
        margin-bottom: 10px;
    }
    
    .custom-class-image img {
        max-height: 300px;
    }
    
    .feature-content h3 {
        font-size: 1.1rem;
    }
    
    .feature-content p {
        font-size: 0.9rem;
    }
    
    .cta-box {
        padding: 30px 20px;
    }
    
    .cta-box h3 {
        font-size: 1.5rem;
    }
    
    .cta-buttons .btn-large {
        padding: 16px 30px;
        font-size: 1rem;
    }
}
</style>

<?php get_footer(); ?>