<?php
/**
 * Template for Courses page
 *
 * @package LaLa_Global_Language
 */

get_header(); ?>

<?php lala_breadcrumbs(); ?>

<main id="primary" class="site-main courses-page">
    <!-- Hero Section -->
    <section class="courses-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="page-title fade-in">コース案内</h1>
                <p class="hero-description fade-in no-line-break">LaLaは「世界中のことばを、誰でも、どこでも学べる」"言語のデパート"を目指します。</p>
                <p class="hero-description fade-in">目的やスタイルに合わせて、3つのクラスと3つのコースから自由に選べます。</p>
            </div>
        </div>
    </section>

    <!-- 35 Languages Section -->
    <section class="languages-section">
        <div class="container">
            <h2 class="section-title fade-in">LaLaの対応35言語リスト</h2>

            <?php
            $course_language_regions = array(
                array(
                    'title' => '東アジア',
                    'languages' => array(
                        array( 'code' => 'zh', 'flag' => '🇨🇳', 'name' => '中国語（北京語）' ),
                        array( 'code' => 'tw', 'flag' => '🇹🇼', 'name' => '台湾華語' ),
                        array( 'code' => 'ko', 'flag' => '🇰🇷', 'name' => '韓国語' ),
                        array( 'code' => 'mn', 'flag' => '🇲🇳', 'name' => 'モンゴル語' ),
                    ),
                ),
                array(
                    'title' => '東南アジア',
                    'languages' => array(
                        array( 'code' => 'id', 'flag' => '🇮🇩', 'name' => 'インドネシア語' ),
                        array( 'code' => 'kh', 'flag' => '🇰🇭', 'name' => 'カンボジア語（クメール語）' ),
                        array( 'code' => 'la', 'flag' => '🇱🇦', 'name' => 'ラオス語' ),
                        array( 'code' => 'mm', 'flag' => '🇲🇲', 'name' => 'ミャンマー語（ビルマ語）' ),
                        array( 'code' => 'my', 'flag' => '🇲🇾', 'name' => 'マレーシア語（マレー語）' ),
                        array( 'code' => 'ph', 'flag' => '🇵🇭', 'name' => 'フィリピン語（タガログ語）' ),
                        array( 'code' => 'th', 'flag' => '🇹🇭', 'name' => 'タイ語' ),
                        array( 'code' => 'vn', 'flag' => '🇻🇳', 'name' => 'ベトナム語' ),
                    ),
                ),
                array(
                    'title' => '南アジア',
                    'languages' => array(
                        array( 'code' => 'bn', 'flag' => '🇧🇩', 'name' => 'ベンガル語' ),
                        array( 'code' => 'hi', 'flag' => '🇮🇳', 'name' => 'ヒンディー語' ),
                        array( 'code' => 'np', 'flag' => '🇳🇵', 'name' => 'ネパール語' ),
                        array( 'code' => 'pa', 'flag' => '🇮🇳', 'name' => 'パンジャーブ語' ),
                        array( 'code' => 'si', 'flag' => '🇱🇰', 'name' => 'シンハラ語' ),
                        array( 'code' => 'ta', 'flag' => '🇮🇳', 'name' => 'タミル語' ),
                        array( 'code' => 'ur', 'flag' => '🇵🇰', 'name' => 'ウルドゥー語' ),
                    ),
                ),
                array(
                    'title' => 'ヨーロッパ',
                    'languages' => array(
                        array( 'code' => 'en', 'flag' => '🇬🇧', 'name' => '英語' ),
                        array( 'code' => 'de', 'flag' => '🇩🇪', 'name' => 'ドイツ語' ),
                        array( 'code' => 'fr', 'flag' => '🇫🇷', 'name' => 'フランス語' ),
                        array( 'code' => 'it', 'flag' => '🇮🇹', 'name' => 'イタリア語' ),
                        array( 'code' => 'es', 'flag' => '🇪🇸', 'name' => 'スペイン語' ),
                        array( 'code' => 'pt', 'flag' => '🇵🇹', 'name' => 'ポルトガル語' ),
                        array( 'code' => 'nl', 'flag' => '🇳🇱', 'name' => 'オランダ語' ),
                    ),
                ),
                array(
                    'title' => '東欧・ロシア',
                    'languages' => array(
                        array( 'code' => 'ru', 'flag' => '🇷🇺', 'name' => 'ロシア語' ),
                        array( 'code' => 'uk', 'flag' => '🇺🇦', 'name' => 'ウクライナ語' ),
                        array( 'code' => 'cs', 'flag' => '🇨🇿', 'name' => 'チェコ語' ),
                        array( 'code' => 'hu', 'flag' => '🇭🇺', 'name' => 'ハンガリー語' ),
                    ),
                ),
                array(
                    'title' => '中東・アフリカ',
                    'languages' => array(
                        array( 'code' => 'ar', 'flag' => '🇸🇦', 'name' => 'アラビア語' ),
                        array( 'code' => 'fa', 'flag' => '🇮🇷', 'name' => 'ペルシャ語' ),
                        array( 'code' => 'he', 'flag' => '🇮🇱', 'name' => 'ヘブライ語' ),
                        array( 'code' => 'tr', 'flag' => '🇹🇷', 'name' => 'トルコ語' ),
                        array( 'code' => 'sw', 'flag' => '🇰🇪', 'name' => 'スワヒリ語' ),
                    ),
                ),
            );
            ?>

            <div class="languages-grid">
                <?php foreach ( $course_language_regions as $region ) : ?>
                <div class="language-category fade-in">
                    <h3><?php echo esc_html( $region['title'] ); ?></h3>
                    <ul>
                        <?php foreach ( $region['languages'] as $lang ) :
                            $lang_url = get_theme_mod( 'language_url_' . $lang['code'], '' );
                        ?>
                        <?php if ( $lang_url ) : ?>
                        <li class="has-link">
                            <a href="<?php echo esc_url( $lang_url ); ?>" class="language-category-link">
                                <span class="lang-label"><?php echo $lang['flag']; ?> <?php echo esc_html( $lang['name'] ); ?></span>
                                <span class="lang-cta">
                                    <span class="lang-cta-text">詳しく見る</span>
                                    <span class="lang-cta-arrow">→</span>
                                </span>
                            </a>
                        </li>
                        <?php else : ?>
                        <li><?php echo $lang['flag']; ?> <?php echo esc_html( $lang['name'] ); ?></li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Course Types Section -->
    <section class="course-types-section">
        <div class="container">
            <h2 class="section-title">選べる3つのコース</h2>
            
            <div class="course-types-grid">
                <div class="course-type-card fade-in">
                    <div class="course-type-header" style="background: linear-gradient(135deg, #4ECDC4, #44A08D);">
                        <h3>Sコース<span class="course-subtitle">（ショート）</span></h3>
                    </div>
                    <div class="course-type-content">
                        <p class="course-duration">50分×4回（1ヶ月単位）</p>
                        <p>まず試したい方や、旅行・イベント前の短期集中に最適なコースです。</p>
                        <div class="course-benefits">
                            <h4>こんな方におすすめ</h4>
                            <ul>
                                <li>✓ まずは気軽に始めたい</li>
                                <li>✓ 旅行前の準備として</li>
                                <li>✓ イベント参加のために</li>
                            </ul>
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
                        <div class="course-benefits">
                            <h4>こんな方におすすめ</h4>
                            <ul>
                                <li>✓ 学習を習慣化したい</li>
                                <li>✓ 着実にレベルアップしたい</li>
                                <li>✓ 継続的に学びたい</li>
                            </ul>
                        </div>
                        <p class="course-note">※短期集中型（ex.週2日、2コマ連続）の相談も可能。</p>
                    </div>
                </div>
                
                <div class="course-type-card fade-in">
                    <div class="course-type-header" style="background: linear-gradient(135deg, #f093fb, #f5576c);">
                        <h3>Lコース<span class="course-subtitle">（ロング）</span></h3>
                    </div>
                    <div class="course-type-content">
                        <p class="course-duration">50分×40回（10ヶ月契約）</p>
                        <p>本格的に学びたい方、しっかり定着させたい方のための充実コースです。</p>
                        <div class="course-benefits">
                            <h4>こんな方におすすめ</h4>
                            <ul>
                                <li>✓ 本格的にマスターしたい</li>
                                <li>✓ 資格取得を目指す</li>
                                <li>✓ ビジネスレベルまで上達したい</li>
                            </ul>
                        </div>
                        <p class="course-note">※短期集中型（ex.週2日、2コマ連続）の相談も可能。</p>
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
                    <div class="class-examples">
                        <h4>例えば…</h4>
                        <ul>
                            <li>• K-POPを韓国語で理解したい</li>
                            <li>• 旅行で現地の人と話したい</li>
                            <li>• 推しの言葉を理解したい</li>
                            <li>• スペインへのサッカー留学で現地の言葉で話したい</li>
                            <li>• フランス語で書かれたレシピで料理をしたい</li>
                        </ul>
                    </div>
                </div>
                
                <div class="class-type-card fade-in">
                    <div class="class-icon">💼</div>
                    <h3>B｜ビジネスクラス</h3>
                    <p>社会人やキャリアアップを目指す方のためのクラスです。英語はもちろん、実務で必要な各国の言語にも対応し、仕事で"使える"語学力を身につけます。</p>
                    <div class="class-examples">
                        <h4>例えば…</h4>
                        <ul>
                            <li>• 海外取引先との商談</li>
                            <li>• プレゼンテーション</li>
                            <li>• ビジネスメールの作成</li>
                            <li>• 語学検定対策</li>
                        </ul>
                    </div>
                </div>
                
                <div class="class-type-card fade-in">
                    <div class="class-icon">🏢</div>
                    <h3>C｜カスタムクラス</h3>
                    <p>官公庁・企業・団体向けのオーダーメイド型クラスです。ご予算や目的、期間、スタイルに応じて個別提案・設計し、研修・グループ指導などにも対応します。</p>
                    <div class="class-examples">
                        <h4>例えば…</h4>
                        <ul>
                            <li>• 企業研修プログラム</li>
                            <li>• 海外赴任前研修</li>
                            <li>• 団体向け特別講座</li>
                            <li>• 社員向け福利厚生</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Custom Class Detail Section -->
    <section class="custom-class-detail-section">
        <div class="container">
            <div class="custom-detail-content fade-in">
                <h2>C｜カスタムクラス</h2>
                <p class="section-subtitle">法人向けカスタマイズ型語学研修</p>
                
                <?php 
                $courses_custom_class_image = get_theme_mod('courses_custom_class_image');
                if ($courses_custom_class_image) : ?>
                    <div class="custom-class-image">
                        <img src="<?php echo esc_url($courses_custom_class_image); ?>" alt="カスタムクラス 法人向けカスタマイズ型語学研修">
                    </div>
                <?php endif; ?>
                
                <div class="custom-intro">
                    <p>法人・団体のお客様のための完全カスタマイズ型語学研修（35言語に対応）です。</p>
                    <p>私たちが提供するのは、業務に直結する語学力です。現場で使える言葉を、実務に沿った形で身につけていただく。そのために、LaLaは「ゼロベースで一緒に研修をつくる」ことを大切にしています。</p>
                </div>
                
                <div class="custom-grid">
                    <div class="custom-features">
                        <h3>LaLaのカスタマイズ型研修の特徴</h3>
                        <ul>
                            <li>✓ 実務とリンクした語学力を最短で習得</li>
                            <li>✓ 柔軟なスケジュール設計（短期集中／継続型 など）</li>
                            <li>✓ 1対1〜グループまで自由に設計可能</li>
                            <li>✓ 必要に応じて補助金対応カリキュラムにもアレンジ可</li>
                        </ul>
                    </div>
                    
                    <div class="custom-challenges">
                        <h3>こんな課題をお持ちの企業・団体に</h3>
                        <ul>
                            <li>• 海外とのやりとりを任せられる人材を育てたい</li>
                            <li>• 外国籍社員と働くための語学トレーニングを行いたい</li>
                            <li>• 接客・営業の場面で使える英語を短期集中で身につけさせたい</li>
                            <li>• 導入教育・赴任前研修として語学を組み込みたい</li>
                        </ul>
                    </div>
                    
                    <div class="custom-consultation">
                        <h3>よくあるご相談</h3>
                        <ul>
                            <li>• 実際に電話・メール・対面で必要なフレーズだけを習得させたい</li>
                            <li>• 業種に合った表現（例：医療／観光／建築 など）を反映してほしい</li>
                            <li>• 日本人社員向けに外国籍スタッフとの連携強化のための語学研修を行いたい</li>
                        </ul>
                    </div>
                </div>
                
                <div class="custom-message">
                    <p>LaLaの法人研修は、型にはまらない。けれど、現場では使える。<br>
                    貴社の業務や目標にあわせて、必要な言葉と学びのスタイルをご提案します。</p>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-large">まずはお気軽にご相談ください</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Lesson Format Section -->
    <section class="lesson-format-section">
        <div class="container">
            <h2 class="section-title">レッスン形式（受講スタイル）</h2>
            
            <div class="lesson-formats-grid">
                <div class="lesson-format-card fade-in">
                    <h3>👤 シングルレッスン</h3>
                    <?php 
                    $single_lesson_image = get_theme_mod('single_lesson_image');
                    if ($single_lesson_image) : ?>
                        <div class="lesson-format-image">
                            <img src="<?php echo esc_url($single_lesson_image); ?>" alt="シングルレッスン">
                        </div>
                    <?php endif; ?>
                    <p>講師と1対1で、自分のペースと目的にじっくり向き合えるレッスンです。他人と比べず、成長の手応えをしっかり感じながら、自分だけの"ことばの旅"を進められます。学びたい気持ちに、まっすぐ応えるスタイルです。</p>
                    <div class="format-features">
                        <span class="feature-tag">マンツーマン</span>
                        <span class="feature-tag">カスタマイズ可能</span>
                        <span class="feature-tag">集中学習</span>
                    </div>
                </div>
                
                <div class="lesson-format-card fade-in">
                    <h3>👥 ペアレッスン・トリオレッスン</h3>
                    <?php 
                    $pair_trio_lesson_image = get_theme_mod('pair_trio_lesson_image');
                    if ($pair_trio_lesson_image) : ?>
                        <div class="lesson-format-image">
                            <img src="<?php echo esc_url($pair_trio_lesson_image); ?>" alt="ペアレッスン・トリオレッスン">
                        </div>
                    <?php endif; ?>
                    <p>夫婦、親子、友だち同士など、気心の知れた人と一緒に学べるレッスン。会話量もたっぷり、学ぶ楽しさを共有できます。2名は"ペア"、3名は"トリオ"としてご案内し、人数に応じて割安になる料金設定です。仲間と一緒だからこそ、続けやすく、励まし合える環境になります。</p>
                    <div class="format-features">
                        <span class="feature-tag">一緒に学べる</span>
                        <span class="feature-tag">割安料金</span>
                        <span class="feature-tag">楽しく継続</span>
                    </div>
                </div>
            </div>
            
            <p class="lesson-note">※どちらのレッスン形式でも、S・M・Lコース（ショート／ミドル／ロング）を選べます。<br>
            ※レッスン形式は、A（アラカルトクラス）・B（ビジネスクラス）どちらにも対応しています。<br>
            ※C（カスタムクラス）は、レッスン形式・人数・頻度・内容をすべて個別に設計します。</p>
        </div>
    </section>

    <!-- Pricing Section -->
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
                            <td>3,850円／回<br><span class="total">計77,000円</span></td>
                            <td>3,575円／回<br><span class="total">計143,000円</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <p class="tax-notice-table">※上記価格はすべて消費税込みの価格です</p>
            
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule Section -->
    <section class="schedule-section">
        <div class="schedule-background">
            <div class="schedule-pattern"></div>
        </div>
        <div class="container">
            <div class="schedule-header">
                <h2 class="section-title">
                    <span class="title-en">Weekly Schedule</span>
                    <span class="title-ja">週間スケジュール</span>
                </h2>
                <p class="section-subtitle">
                    <span class="subtitle-highlight">週57枠</span>の充実したレッスン体制で、あなたのライフスタイルに合わせて学習
                </p>
            </div>
            
            <div class="schedule-visual-container">
                <!-- Time Legend -->
                <div class="time-legend">
                    <div class="legend-item morning">
                        <span class="legend-icon">🌅</span>
                        <span class="legend-text">朝の部</span>
                    </div>
                    <div class="legend-item afternoon">
                        <span class="legend-icon">☀️</span>
                        <span class="legend-text">昼の部</span>
                    </div>
                    <div class="legend-item evening">
                        <span class="legend-icon">🌙</span>
                        <span class="legend-text">夜の部</span>
                    </div>
                </div>
                
                <!-- Visual Calendar Grid -->
                <div class="schedule-calendar">
                    <!-- Days Header -->
                    <div class="calendar-header">
                        <div class="time-header">時間</div>
                        <div class="day-header">
                            <span class="day-name">月</span>
                            <span class="day-label">Mon</span>
                        </div>
                        <div class="day-header">
                            <span class="day-name">火</span>
                            <span class="day-label">Tue</span>
                        </div>
                        <div class="day-header">
                            <span class="day-name">水</span>
                            <span class="day-label">Wed</span>
                        </div>
                        <div class="day-header">
                            <span class="day-name">木</span>
                            <span class="day-label">Thu</span>
                        </div>
                        <div class="day-header">
                            <span class="day-name">金</span>
                            <span class="day-label">Fri</span>
                        </div>
                        <div class="day-header weekend">
                            <span class="day-name">土</span>
                            <span class="day-label">Sat</span>
                        </div>
                        <div class="day-header weekend">
                            <span class="day-name">日</span>
                            <span class="day-label">Sun</span>
                        </div>
                    </div>
                    
                    <!-- Time Slots Grid -->
                    <div class="time-slots-grid">
                        <!-- 10:00 -->
                        <div class="time-label">10:00</div>
                        <div class="slot morning available" data-time="10:00-10:50" data-day="月"><span class="slot-number">①</span></div>
                        <div class="slot morning available" data-time="10:00-10:50" data-day="火"><span class="slot-number">①</span></div>
                        <div class="slot morning available" data-time="10:00-10:50" data-day="水"><span class="slot-number">①</span></div>
                        <div class="slot morning available" data-time="10:00-10:50" data-day="木"><span class="slot-number">①</span></div>
                        <div class="slot morning available" data-time="10:00-10:50" data-day="金"><span class="slot-number">①</span></div>
                        <div class="slot morning available weekend" data-time="10:00-10:50" data-day="土"><span class="slot-number">①</span></div>
                        <div class="slot morning available weekend" data-time="10:00-10:50" data-day="日"><span class="slot-number">①</span></div>
                        
                        <!-- 11:00 -->
                        <div class="time-label">11:00</div>
                        <div class="slot morning available" data-time="11:00-11:50" data-day="月"><span class="slot-number">②</span></div>
                        <div class="slot morning available" data-time="11:00-11:50" data-day="火"><span class="slot-number">②</span></div>
                        <div class="slot morning available" data-time="11:00-11:50" data-day="水"><span class="slot-number">②</span></div>
                        <div class="slot morning available" data-time="11:00-11:50" data-day="木"><span class="slot-number">②</span></div>
                        <div class="slot morning available" data-time="11:00-11:50" data-day="金"><span class="slot-number">②</span></div>
                        <div class="slot morning available weekend" data-time="11:00-11:50" data-day="土"><span class="slot-number">②</span></div>
                        <div class="slot morning available weekend" data-time="11:00-11:50" data-day="日"><span class="slot-number">②</span></div>
                        
                        <!-- 12:00 -->
                        <div class="time-label">12:00</div>
                        <div class="slot afternoon available" data-time="12:00-12:50" data-day="月"><span class="slot-number">③</span></div>
                        <div class="slot afternoon available" data-time="12:00-12:50" data-day="火"><span class="slot-number">③</span></div>
                        <div class="slot afternoon available" data-time="12:00-12:50" data-day="水"><span class="slot-number">③</span></div>
                        <div class="slot afternoon available" data-time="12:00-12:50" data-day="木"><span class="slot-number">③</span></div>
                        <div class="slot afternoon available" data-time="12:00-12:50" data-day="金"><span class="slot-number">③</span></div>
                        <div class="slot afternoon available weekend" data-time="12:00-12:50" data-day="土"><span class="slot-number">③</span></div>
                        <div class="slot afternoon available weekend" data-time="12:00-12:50" data-day="日"><span class="slot-number">③</span></div>
                        
                        <!-- 13:00 -->
                        <div class="time-label">13:00</div>
                        <div class="slot afternoon available" data-time="13:00-13:50" data-day="月"><span class="slot-number">④</span></div>
                        <div class="slot afternoon available" data-time="13:00-13:50" data-day="火"><span class="slot-number">④</span></div>
                        <div class="slot afternoon available" data-time="13:00-13:50" data-day="水"><span class="slot-number">④</span></div>
                        <div class="slot afternoon available" data-time="13:00-13:50" data-day="木"><span class="slot-number">④</span></div>
                        <div class="slot afternoon available" data-time="13:00-13:50" data-day="金"><span class="slot-number">④</span></div>
                        <div class="slot unavailable"></div>
                        <div class="slot unavailable"></div>
                        
                        <!-- 14:00 -->
                        <div class="time-label">14:00</div>
                        <div class="slot afternoon available" data-time="14:00-14:50" data-day="月"><span class="slot-number">⑤</span></div>
                        <div class="slot afternoon available" data-time="14:00-14:50" data-day="火"><span class="slot-number">⑤</span></div>
                        <div class="slot afternoon available" data-time="14:00-14:50" data-day="水"><span class="slot-number">⑤</span></div>
                        <div class="slot afternoon available" data-time="14:00-14:50" data-day="木"><span class="slot-number">⑤</span></div>
                        <div class="slot afternoon available" data-time="14:00-14:50" data-day="金"><span class="slot-number">⑤</span></div>
                        <div class="slot unavailable"></div>
                        <div class="slot unavailable"></div>
                        
                        <!-- Break Row -->
                        <div class="break-row" style="grid-column: 1 / -1;">
                            <span>休憩時間</span>
                        </div>
                        
                        <!-- 18:00 -->
                        <div class="time-label">18:00</div>
                        <div class="slot evening available" data-time="18:00-18:50" data-day="月"><span class="slot-number">⑥</span></div>
                        <div class="slot evening available" data-time="18:00-18:50" data-day="火"><span class="slot-number">⑥</span></div>
                        <div class="slot evening available" data-time="18:00-18:50" data-day="水"><span class="slot-number">⑥</span></div>
                        <div class="slot evening available" data-time="18:00-18:50" data-day="木"><span class="slot-number">⑥</span></div>
                        <div class="slot evening available" data-time="18:00-18:50" data-day="金"><span class="slot-number">⑥</span></div>
                        <div class="slot evening available weekend" data-time="18:00-18:50" data-day="土"><span class="slot-number">④</span></div>
                        <div class="slot evening available weekend" data-time="18:00-18:50" data-day="日"><span class="slot-number">④</span></div>
                        
                        <!-- 19:00 -->
                        <div class="time-label">19:00</div>
                        <div class="slot evening available popular" data-time="19:00-19:50" data-day="月"><span class="slot-number">⑦</span><span class="popular-badge">人気</span></div>
                        <div class="slot evening available popular" data-time="19:00-19:50" data-day="火"><span class="slot-number">⑦</span><span class="popular-badge">人気</span></div>
                        <div class="slot evening available popular" data-time="19:00-19:50" data-day="水"><span class="slot-number">⑦</span><span class="popular-badge">人気</span></div>
                        <div class="slot evening available popular" data-time="19:00-19:50" data-day="木"><span class="slot-number">⑦</span><span class="popular-badge">人気</span></div>
                        <div class="slot evening available popular" data-time="19:00-19:50" data-day="金"><span class="slot-number">⑦</span><span class="popular-badge">人気</span></div>
                        <div class="slot evening available weekend" data-time="19:00-19:50" data-day="土"><span class="slot-number">⑤</span></div>
                        <div class="slot evening available weekend" data-time="19:00-19:50" data-day="日"><span class="slot-number">⑤</span></div>
                        
                        <!-- 20:00 -->
                        <div class="time-label">20:00</div>
                        <div class="slot evening available popular" data-time="20:00-20:50" data-day="月"><span class="slot-number">⑧</span><span class="popular-badge">人気</span></div>
                        <div class="slot evening available popular" data-time="20:00-20:50" data-day="火"><span class="slot-number">⑧</span><span class="popular-badge">人気</span></div>
                        <div class="slot evening available popular" data-time="20:00-20:50" data-day="水"><span class="slot-number">⑧</span><span class="popular-badge">人気</span></div>
                        <div class="slot evening available popular" data-time="20:00-20:50" data-day="木"><span class="slot-number">⑧</span><span class="popular-badge">人気</span></div>
                        <div class="slot evening available popular" data-time="20:00-20:50" data-day="金"><span class="slot-number">⑧</span><span class="popular-badge">人気</span></div>
                        <div class="slot evening available weekend" data-time="20:00-20:50" data-day="土"><span class="slot-number">⑥</span></div>
                        <div class="slot evening available weekend" data-time="20:00-20:50" data-day="日"><span class="slot-number">⑥</span></div>
                        
                        <!-- 21:00 -->
                        <div class="time-label">21:00</div>
                        <div class="slot evening available" data-time="21:00-21:50" data-day="月"><span class="slot-number">⑨</span></div>
                        <div class="slot evening available" data-time="21:00-21:50" data-day="火"><span class="slot-number">⑨</span></div>
                        <div class="slot evening available" data-time="21:00-21:50" data-day="水"><span class="slot-number">⑨</span></div>
                        <div class="slot evening available" data-time="21:00-21:50" data-day="木"><span class="slot-number">⑨</span></div>
                        <div class="slot evening available" data-time="21:00-21:50" data-day="金"><span class="slot-number">⑨</span></div>
                        <div class="slot unavailable"></div>
                        <div class="slot unavailable"></div>
                    </div>
                </div>
                
                <!-- Mobile Schedule View -->
                <div class="schedule-mobile-view">
                    <div class="mobile-day-tabs">
                        <button type="button" class="day-tab active" data-day="weekday">平日</button>
                        <button type="button" class="day-tab" data-day="weekend">土日</button>
                    </div>
                    
                    <div class="mobile-schedule-content">
                        <div class="mobile-day-content active" id="weekday">
                            <h3>平日スケジュール（月〜金）</h3>
                            <div class="mobile-time-group morning">
                                <h4>🌅 朝の部</h4>
                                <div class="mobile-slots">
                                    <span class="mobile-slot">10:00</span>
                                    <span class="mobile-slot">11:00</span>
                                </div>
                            </div>
                            <div class="mobile-time-group afternoon">
                                <h4>☀️ 昼の部</h4>
                                <div class="mobile-slots">
                                    <span class="mobile-slot">12:00</span>
                                    <span class="mobile-slot">13:00</span>
                                    <span class="mobile-slot">14:00</span>
                                </div>
                            </div>
                            <div class="mobile-time-group evening">
                                <h4>🌙 夜の部</h4>
                                <div class="mobile-slots">
                                    <span class="mobile-slot popular">18:00</span>
                                    <span class="mobile-slot popular">19:00</span>
                                    <span class="mobile-slot popular">20:00</span>
                                    <span class="mobile-slot">21:00</span>
                                </div>
                            </div>
                            <p class="mobile-total">合計: 9枠/日 × 5日 = 45枠</p>
                        </div>
                        
                        <div class="mobile-day-content" id="weekend">
                            <h3>週末スケジュール（土・日）</h3>
                            <div class="mobile-time-group morning">
                                <h4>🌅 朝の部</h4>
                                <div class="mobile-slots">
                                    <span class="mobile-slot">10:00</span>
                                    <span class="mobile-slot">11:00</span>
                                </div>
                            </div>
                            <div class="mobile-time-group afternoon">
                                <h4>☀️ 昼の部</h4>
                                <div class="mobile-slots">
                                    <span class="mobile-slot">12:00</span>
                                </div>
                            </div>
                            <div class="mobile-time-group evening">
                                <h4>🌙 夜の部</h4>
                                <div class="mobile-slots">
                                    <span class="mobile-slot">18:00</span>
                                    <span class="mobile-slot">19:00</span>
                                    <span class="mobile-slot">20:00</span>
                                </div>
                            </div>
                            <p class="mobile-total">合計: 6枠/日 × 2日 = 12枠</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Summary Stats -->
            <div class="schedule-stats fade-in">
                <div class="stat-card">
                    <div class="stat-icon">📅</div>
                    <div class="stat-content">
                        <span class="stat-number">57</span>
                        <span class="stat-label">週間レッスン枠</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">⏰</div>
                    <div class="stat-content">
                        <span class="stat-number">50</span>
                        <span class="stat-label">分/レッスン</span>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">🎯</div>
                    <div class="stat-content">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">予約の柔軟性</span>
                    </div>
                </div>
            </div>
            
            <div class="schedule-cta">
                <p>💡 人気の時間帯は早めのご予約がおすすめです！</p>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">体験レッスン(50分1,100円)</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="courses-cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>世界中のことばを、ここ日本で。</h2>
                <p>英語はもちろん、欧米、アジア、アフリカのことばも。<br>
                駅前留学？ホテル留学？LaLaなら "自宅留学"！</p>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-large">体験レッスン(50分1,100円)</a>
            </div>
        </div>
    </section>
</main>

<style>
/* Courses Page Specific Styles */
.courses-page {
    overflow-x: hidden;
}

/* Hero Section */
.courses-hero {
    background: linear-gradient(135deg, #FF6B6B 0%, #FFE66D 100%);
    padding: 150px 0 100px;
    text-align: center;
    color: white;
}

.courses-hero .page-title {
    font-size: 3.5rem;
    margin-bottom: 20px;
}

.courses-hero .hero-description {
    font-size: 1.3rem;
    line-height: 1.8;
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.courses-hero .hero-description.no-line-break {
    font-size: 1.15rem;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Languages Section */
.languages-section {
    padding: 80px 0;
    background: white;
}

.languages-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    margin-top: 50px;
}

.language-category {
    background: #F8F9FA;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease;
}

.language-category:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
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

/* Clickable language items in course page */
.language-category li.has-link {
    padding: 0;
}

.language-category-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 15px;
    margin: 0 -15px;
    border-radius: 12px;
    text-decoration: none;
    color: inherit;
    background: linear-gradient(135deg, #f0fafa 0%, #fef9f5 100%);
    border: 1.5px solid transparent;
    transition: all 0.3s ease;
}

.language-category-link:hover,
.language-category-link:focus,
.language-category-link:visited {
    text-decoration: none;
    color: inherit;
}

.language-category-link:hover {
    border-color: #008080;
    background: white;
    box-shadow: 0 3px 15px rgba(0, 128, 128, 0.15);
    transform: translateX(5px);
}

.lang-label {
    flex: 1;
}

.lang-cta {
    display: flex;
    align-items: center;
    gap: 4px;
    flex-shrink: 0;
}

.lang-cta-text {
    font-size: 0.7rem;
    color: #008080;
    font-weight: 600;
    white-space: nowrap;
    opacity: 0;
    transform: translateX(-8px);
    transition: all 0.3s ease;
}

.lang-cta-arrow {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 26px;
    height: 26px;
    background: #008080;
    color: white;
    border-radius: 50%;
    font-size: 0.8rem;
    font-weight: 700;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0, 128, 128, 0.3);
}

.language-category-link:hover .lang-cta-text {
    opacity: 1;
    transform: translateX(0);
}

.language-category-link:hover .lang-cta-arrow {
    background: #006666;
    transform: translateX(3px);
    box-shadow: 0 3px 12px rgba(0, 128, 128, 0.4);
}

/* Course Types Section */
.course-types-section {
    padding: 80px 0;
    background: #F8F9FA;
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 20px;
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

.course-benefits {
    margin-top: 30px;
    background: #F8F9FA;
    padding: 25px;
    border-radius: 15px;
}

.course-benefits h4 {
    color: var(--secondary-color);
    margin-bottom: 15px;
}

.course-benefits ul {
    list-style: none;
    padding: 0;
}

.course-benefits li {
    padding: 5px 0;
    color: #666;
}

.course-note {
    margin-top: 20px;
    padding: 15px;
    background: #FFF5E6;
    border-left: 3px solid var(--accent-color);
    font-size: 0.9rem;
    color: #666;
    border-radius: 5px;
}

/* Class Types Section */
.class-types-section {
    padding: 80px 0;
    background: white;
}

.class-types-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    margin-top: 50px;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
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

.class-examples {
    margin-top: 25px;
    text-align: left;
    background: white;
    padding: 20px;
    border-radius: 10px;
}

.class-examples h4 {
    color: var(--secondary-color);
    margin-bottom: 10px;
}

.class-examples ul {
    list-style: none;
    padding: 0;
}

.class-examples li {
    padding: 5px 0;
    font-size: 0.95rem;
    color: #666;
}

/* Custom Class Detail Section */
.custom-class-detail-section {
    padding: 80px 0;
    background: #F8F9FA;
}

.custom-detail-content {
    max-width: 1200px;
    margin: 0 auto;
}

.custom-detail-content h2 {
    text-align: center;
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 10px;
}

.custom-detail-content .section-subtitle {
    text-align: center;
    font-size: 1.3rem;
    color: var(--secondary-color);
    font-weight: 600;
    margin-bottom: 50px;
}

.custom-class-image {
    width: 100%;
    max-width: 1200px;
    margin: 30px auto 40px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.custom-class-image img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
}

.custom-intro {
    text-align: center;
    max-width: 900px;
    margin: 0 auto 60px;
    font-size: 1.1rem;
    line-height: 1.8;
}

.custom-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    margin-bottom: 60px;
}

.custom-features,
.custom-challenges,
.custom-consultation {
    background: white;
    padding: 40px 30px;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
}

.custom-features h3,
.custom-challenges h3,
.custom-consultation h3 {
    color: var(--primary-color);
    margin-bottom: 25px;
    font-size: 1.3rem;
}

.custom-features ul,
.custom-challenges ul,
.custom-consultation ul {
    list-style: none;
    padding: 0;
}

.custom-features li,
.custom-challenges li,
.custom-consultation li {
    padding: 10px 0;
    line-height: 1.6;
}

.custom-features {
    background: linear-gradient(135deg, #E8F5E9 0%, #F1F8E9 100%);
}

.custom-challenges {
    background: linear-gradient(135deg, #E3F2FD 0%, #E8EAF6 100%);
}

.custom-consultation {
    background: linear-gradient(135deg, #FFF3E0 0%, #FFF8E1 100%);
}

.custom-message {
    text-align: center;
    background: white;
    padding: 50px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.custom-message p {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 30px;
    line-height: 1.8;
    text-align: center;
}

.btn-large {
    padding: 20px 50px;
    font-size: 1.1rem;
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

.lesson-format-image {
    width: 100%;
    margin: 20px 0;
    border-radius: 15px;
    overflow: hidden;
}

.lesson-format-image img {
    width: 100%;
    height: auto;
    display: block;
    object-fit: cover;
}

.format-features {
    margin-top: 25px;
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.feature-tag {
    background: var(--accent-color);
    color: var(--dark-color);
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 500;
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

/* Schedule Section */
.schedule-section {
    padding: 80px 0;
    background: #F8F9FA;
}

.section-subtitle {
    text-align: center;
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 50px;
}

.schedule-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 40px;
    margin-bottom: 50px;
}

.schedule-card {
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.schedule-card h3 {
    color: var(--primary-color);
    margin-bottom: 30px;
    font-size: 1.5rem;
}

.schedule-content {
    display: grid;
    gap: 30px;
}

.time-slot h4 {
    color: var(--secondary-color);
    margin-bottom: 15px;
}

.time-slot ul {
    list-style: none;
    padding: 0;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
    gap: 10px;
}

.time-slot li {
    background: #F8F9FA;
    padding: 10px;
    border-radius: 10px;
    text-align: center;
    font-size: 0.95rem;
}

.schedule-note {
    margin-top: 20px;
    text-align: center;
    color: var(--primary-color);
    font-weight: 600;
}

.schedule-summary {
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.schedule-summary h3 {
    color: var(--primary-color);
    margin-bottom: 30px;
}

.summary-content {
    display: flex;
    justify-content: center;
    gap: 40px;
    margin-bottom: 20px;
}

.summary-item {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.summary-item .label {
    color: #666;
    font-size: 0.95rem;
    margin-bottom: 5px;
}

.summary-item .value {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--secondary-color);
}

.summary-item.total .value {
    color: var(--primary-color);
    font-size: 2rem;
}

.summary-note {
    color: #666;
    font-style: italic;
}

/* CTA Section */
.courses-cta-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    text-align: center;
    color: white;
}

.courses-cta-section h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: white;
}

.courses-cta-section p {
    font-size: 1.3rem;
    margin-bottom: 40px;
    line-height: 1.8;
    text-align: center;
}

.btn-large {
    padding: 20px 50px;
    font-size: 1.2rem;
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
    /* Hero adjustments */
    .courses-hero {
        padding: 120px 0 80px;
    }
    
    /* Languages grid - 3 columns on tablet */
    .languages-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }
    
    /* Class types - 2 columns on tablet */
    .class-types-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    /* Custom grid - maintain readability */
    .custom-grid {
        gap: 30px;
    }
}

@media (max-width: 768px) {
    /* Hero Section */
    .courses-hero {
        padding: 100px 0 60px;
    }
    
    .courses-hero .page-title {
        font-size: 2rem;
    }
    
    .courses-hero .hero-description {
        font-size: 1.1rem;
        padding: 0 20px;
    }
    
    .courses-hero .hero-description.no-line-break {
        font-size: 0.95rem;
        white-space: normal;
        overflow: visible;
    }
    
    /* Section spacing */
    .languages-section,
    .course-types-section,
    .class-types-section,
    .custom-class-detail-section,
    .lesson-format-section,
    .pricing-section,
    .schedule-section {
        padding: 50px 0;
    }
    
    .section-title {
        font-size: 1.8rem;
    }
    
    .section-subtitle {
        font-size: 1rem;
        margin-bottom: 30px;
        padding: 0 20px;
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
    }
    
    .language-category li {
        font-size: 0.95rem;
        padding: 5px 0;
    }

    /* Mobile: always show CTA text for linked language items */
    .lang-cta-text {
        opacity: 1;
        transform: translateX(0);
        font-size: 0.6rem;
    }

    .lang-cta-arrow {
        width: 22px;
        height: 22px;
        font-size: 0.7rem;
    }

    .language-category-link {
        padding: 8px 12px;
        margin: 0 -12px;
    }

    /* Course types - stack on mobile */
    .course-types-grid {
        grid-template-columns: 1fr;
        gap: 25px;
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
    
    .course-benefits {
        margin-top: 20px;
        padding: 20px;
    }
    
    .course-benefits h4 {
        font-size: 1rem;
    }
    
    /* Class types - stack on mobile */
    .class-types-grid {
        grid-template-columns: 1fr;
        gap: 25px;
        margin-top: 30px;
    }
    
    .class-type-card {
        padding: 30px 25px;
    }
    
    .class-icon {
        font-size: 3rem;
        margin-bottom: 15px;
    }
    
    .class-type-card h3 {
        font-size: 1.3rem;
    }
    
    .class-examples {
        margin-top: 20px;
        padding: 15px;
    }
    
    .class-examples h4 {
        font-size: 0.95rem;
    }
    
    .class-examples li {
        font-size: 0.9rem;
    }
    
    /* Custom class detail - stack on mobile */
    .custom-detail-content h2 {
        font-size: 1.8rem;
    }
    
    .custom-detail-content .section-subtitle {
        font-size: 1.1rem;
        margin-bottom: 30px;
    }
    
    .custom-intro {
        font-size: 1rem;
        margin-bottom: 40px;
        padding: 0 20px;
    }
    
    .custom-grid {
        grid-template-columns: 1fr;
        gap: 25px;
        margin-bottom: 40px;
    }
    
    .custom-features,
    .custom-challenges,
    .custom-consultation {
        padding: 30px 20px;
    }
    
    .custom-features h3,
    .custom-challenges h3,
    .custom-consultation h3 {
        font-size: 1.2rem;
        margin-bottom: 20px;
    }
    
    .custom-features li,
    .custom-challenges li,
    .custom-consultation li {
        font-size: 0.95rem;
        padding: 8px 0;
    }
    
    .custom-message {
        padding: 30px 20px;
    }
    
    .custom-message p {
        font-size: 1.1rem;
        margin-bottom: 25px;
    }
    
    /* Lesson formats - stack on mobile */
    .lesson-formats-grid {
        grid-template-columns: 1fr;
        gap: 25px;
        margin-top: 30px;
    }
    
    .lesson-format-card {
        padding: 30px 25px;
    }
    
    .lesson-format-card h3 {
        font-size: 1.3rem;
    }
    
    .format-features {
        margin-top: 20px;
    }
    
    .feature-tag {
        padding: 4px 12px;
        font-size: 0.85rem;
    }
    
    /* Schedule - stack on mobile */
    .schedule-grid {
        grid-template-columns: 1fr;
        gap: 25px;
        margin-bottom: 30px;
    }
    
    .schedule-card {
        padding: 30px 25px;
    }
    
    .schedule-card h3 {
        font-size: 1.3rem;
        margin-bottom: 25px;
    }
    
    .time-slot h4 {
        font-size: 1rem;
    }
    
    .time-slot ul {
        grid-template-columns: repeat(2, 1fr);
        gap: 8px;
    }
    
    .time-slot li {
        padding: 8px;
        font-size: 0.85rem;
    }
    
    .schedule-summary {
        padding: 30px 20px;
    }
    
    .summary-content {
        flex-direction: column;
        gap: 20px;
    }
    
    .summary-item .value {
        font-size: 1.3rem;
    }
    
    .summary-item.total .value {
        font-size: 1.6rem;
    }
    
    /* Pricing table - make it scrollable */
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
    
    .additional-fees {
        padding: 30px 20px;
        margin-top: 30px;
    }
    
    .fee-items {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    /* CTA Section */
    .courses-cta-section {
        padding: 60px 0;
    }
    
    .courses-cta-section h2 {
        font-size: 1.8rem;
    }
    
    .courses-cta-section p {
        font-size: 1.1rem;
        padding: 0 20px;
    }
    
    .btn-large {
        padding: 16px 40px;
        font-size: 1rem;
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

    /* Hide CTA text on very small screens, keep arrow only */
    .lang-cta-text {
        display: none;
    }

    .lang-cta-arrow {
        width: 20px;
        height: 20px;
        font-size: 0.65rem;
    }

    /* Even smaller text sizes */
    .courses-hero .page-title {
        font-size: 1.6rem;
    }
    
    .section-title {
        font-size: 1.5rem;
    }
    
    /* Time slots - stack vertically on small screens */
    .time-slot ul {
        grid-template-columns: 1fr;
    }
    
    /* Button adjustments */
    .btn {
        padding: 14px 30px;
        font-size: 0.95rem;
    }
}
</style>

<?php get_footer(); ?>