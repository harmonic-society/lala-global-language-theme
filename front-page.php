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