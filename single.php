<?php
/**
 * Enhanced template for displaying single posts with dramatic UI/UX improvements
 *
 * @package LaLa_Global_Language
 */

get_header(); ?>

<?php lala_breadcrumbs(); ?>

<!-- Enhanced Reading Experience Tools -->
<div class="reading-tools-container">
    <div class="reading-progress">
        <div class="progress-bar"></div>
        <span class="progress-percentage">0%</span>
    </div>
    
    <div class="floating-tools">
        <button class="tool-btn" id="font-size-toggle" aria-label="フォントサイズ調整">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 7V4h16v3M9 20h6M12 4v16"/>
            </svg>
        </button>
        <button class="tool-btn" id="theme-toggle" aria-label="テーマ切替">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="5"/>
                <line x1="12" y1="1" x2="12" y2="3"/>
                <line x1="12" y1="21" x2="12" y2="23"/>
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                <line x1="1" y1="12" x2="3" y2="12"/>
                <line x1="21" y1="12" x2="23" y2="12"/>
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
            </svg>
        </button>
        <button class="tool-btn" id="search-article" aria-label="記事内検索">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8"/>
                <path d="m21 21-4.35-4.35"/>
            </svg>
        </button>
        <button class="tool-btn" id="speak-article" aria-label="音声読み上げ">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/>
                <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/>
            </svg>
        </button>
        <button class="tool-btn" id="print-article" aria-label="印刷">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="6 9 6 2 18 2 18 9"/>
                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/>
                <rect x="6" y="14" width="12" height="8"/>
            </svg>
        </button>
    </div>
</div>

<!-- Search Overlay -->
<div class="search-overlay" id="search-overlay">
    <div class="search-container">
        <input type="text" id="search-input" placeholder="記事内を検索...">
        <button id="close-search">×</button>
        <div class="search-results"></div>
    </div>
</div>

<!-- Font Size Panel -->
<div class="font-size-panel" id="font-size-panel">
    <button data-size="small">小</button>
    <button data-size="medium" class="active">中</button>
    <button data-size="large">大</button>
    <button data-size="xlarge">特大</button>
</div>

<main id="primary" class="site-main single-main enhanced">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        
        <!-- Enhanced Hero Section -->
        <div class="post-hero-enhanced">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="hero-image-wrapper">
                    <div class="hero-image" data-parallax>
                        <?php the_post_thumbnail( 'full' ); ?>
                    </div>
                    <div class="hero-gradient"></div>
                </div>
            <?php endif; ?>
            
            <div class="hero-content-wrapper">
                <div class="hero-meta-bar">
                    <div class="meta-categories">
                        <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) :
                            foreach ( $categories as $category ) :
                        ?>
                            <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" class="category-badge">
                                <?php echo esc_html( $category->name ); ?>
                            </a>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                    <div class="meta-stats">
                        <span class="stat-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                            <?php echo reading_time(); ?> 分で読了
                        </span>
                        <span class="stat-item views-count">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                            <span id="view-count">0</span> 回閲覧
                        </span>
                    </div>
                </div>
                
                <h1 class="hero-title-enhanced"><?php the_title(); ?></h1>
                
                <div class="hero-author-enhanced">
                    <div class="author-card">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
                        <div class="author-details">
                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="author-name">
                                <?php the_author(); ?>
                            </a>
                            <div class="author-meta">
                                <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                    <?php echo esc_html( get_the_date( 'Y年n月j日' ) ); ?>
                                </time>
                                <?php if ( get_the_modified_date() != get_the_date() ) : ?>
                                    <span class="updated">
                                        更新: <?php echo esc_html( get_the_modified_date( 'Y年n月j日' ) ); ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="quick-actions">
                        <button class="action-btn bookmark-btn" data-post-id="<?php the_ID(); ?>">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/>
                            </svg>
                            <span>保存</span>
                        </button>
                        <button class="action-btn share-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="18" cy="5" r="3"/>
                                <circle cx="6" cy="12" r="3"/>
                                <circle cx="18" cy="19" r="3"/>
                                <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/>
                                <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>
                            </svg>
                            <span>共有</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content-wrapper">
            <div class="content-layout">
                <!-- Enhanced Sidebar -->
                <aside class="sidebar-enhanced">
                    <div class="sidebar-sticky-wrapper">
                        <!-- Table of Contents -->
                        <div class="toc-widget">
                            <div class="widget-header">
                                <h3>目次</h3>
                                <button class="toc-toggle" aria-label="目次を折りたたむ">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="6 9 12 15 18 9"/>
                                    </svg>
                                </button>
                            </div>
                            <nav class="toc-content" id="toc-nav">
                                <!-- Generated by JavaScript -->
                            </nav>
                            <div class="reading-time-estimate">
                                <div class="time-bar">
                                    <div class="time-progress"></div>
                                </div>
                                <span class="time-text">読了まで約 <span id="remaining-time"><?php echo reading_time(); ?></span> 分</span>
                            </div>
                        </div>
                        
                        <!-- Share Widget -->
                        <div class="share-widget">
                            <h3>シェア</h3>
                            <div class="share-buttons-grid">
                                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" class="share-button twitter" target="_blank" rel="noopener">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                                    </svg>
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" class="share-button facebook" target="_blank" rel="noopener">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                                    </svg>
                                </a>
                                <a href="https://line.me/R/msg/text/?<?php echo urlencode( get_the_title() . ' ' . get_permalink() ); ?>" class="share-button line" target="_blank" rel="noopener">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.349 0 .63.285.63.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.627-.63.349 0 .631.285.631.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.349 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.282.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/>
                                    </svg>
                                </a>
                                <button class="share-button copy-link" data-url="<?php echo esc_url( get_permalink() ); ?>">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Reactions Widget -->
                        <div class="reactions-widget">
                            <h3>リアクション</h3>
                            <div class="reactions-grid">
                                <button class="reaction-btn" data-reaction="like">
                                    <span class="reaction-emoji">👍</span>
                                    <span class="reaction-count">0</span>
                                </button>
                                <button class="reaction-btn" data-reaction="love">
                                    <span class="reaction-emoji">❤️</span>
                                    <span class="reaction-count">0</span>
                                </button>
                                <button class="reaction-btn" data-reaction="wow">
                                    <span class="reaction-emoji">😮</span>
                                    <span class="reaction-count">0</span>
                                </button>
                                <button class="reaction-btn" data-reaction="think">
                                    <span class="reaction-emoji">🤔</span>
                                    <span class="reaction-count">0</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </aside>
                
                <!-- Main Article Content -->
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-enhanced' ); ?>>
                    <div class="article-body">
                        <?php the_content(); ?>
                    </div>
                    
                    <!-- Enhanced Tags Section -->
                    <?php if ( has_tag() ) : ?>
                        <div class="tags-section-enhanced">
                            <h3 class="section-title">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                                    <line x1="7" y1="7" x2="7.01" y2="7"/>
                                </svg>
                                タグ
                            </h3>
                            <div class="tags-cloud">
                                <?php
                                $tags = get_the_tags();
                                foreach ( $tags as $tag ) :
                                ?>
                                    <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="tag-pill">
                                        #<?php echo esc_html( $tag->name ); ?>
                                        <span class="tag-count"><?php echo $tag->count; ?></span>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <!-- CTA Section -->
                    <div class="article-cta-section">
                        <div class="cta-content">
                            <div class="cta-icon">
                                <span class="cta-emoji">🌍</span>
                            </div>
                            <h3 class="cta-title">あなたの「話したい」を、カタチに。</h3>
                            <p class="cta-description">
                                世界35言語に対応したLaLa Global Languageで、<br class="pc-only">
                                あなたの可能性を広げてみませんか？<br>
                                <span class="cta-highlight">まずは無料体験レッスンから。</span>
                            </p>
                            <div class="cta-features">
                                <span class="cta-feature">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    オンライン完結
                                </span>
                                <span class="cta-feature">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    ネイティブ講師
                                </span>
                                <span class="cta-feature">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <polyline points="20 6 9 17 4 12"/>
                                    </svg>
                                    1回50分マンツーマン
                                </span>
                            </div>
                            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="cta-button">
                                <span>無料体験に申し込む</span>
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                    <polyline points="12 5 19 12 12 19"/>
                                </svg>
                            </a>
                            <p class="cta-note">お気軽にお問い合わせください</p>
                        </div>
                        <div class="cta-decoration">
                            <div class="decoration-circle circle-1"></div>
                            <div class="decoration-circle circle-2"></div>
                            <div class="decoration-circle circle-3"></div>
                        </div>
                    </div>

                    <!-- Article Footer Actions -->
                    <div class="article-footer-actions">
                        <div class="action-group">
                            <button class="action-button like-article" data-post-id="<?php the_ID(); ?>">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                                </svg>
                                <span>いいね</span>
                                <span class="like-count">0</span>
                            </button>
                            <button class="action-button bookmark-article" data-post-id="<?php the_ID(); ?>">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/>
                                </svg>
                                <span>保存</span>
                            </button>
                            <button class="action-button share-article">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="18" cy="5" r="3"/>
                                    <circle cx="6" cy="12" r="3"/>
                                    <circle cx="18" cy="19" r="3"/>
                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/>
                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>
                                </svg>
                                <span>シェア</span>
                            </button>
                        </div>
                    </div>
                </article>
            </div>
            
            <!-- Enhanced Post Navigation -->
            <nav class="post-navigation-enhanced">
                <div class="nav-container">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>
                    
                    <?php if ( $prev_post ) : ?>
                        <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="nav-item prev">
                            <div class="nav-arrow">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="15 18 9 12 15 6"/>
                                </svg>
                            </div>
                            <div class="nav-content">
                                <span class="nav-label">前の記事</span>
                                <h4 class="nav-title"><?php echo esc_html( $prev_post->post_title ); ?></h4>
                                <?php if ( has_post_thumbnail( $prev_post->ID ) ) : ?>
                                    <div class="nav-thumb">
                                        <?php echo get_the_post_thumbnail( $prev_post->ID, 'thumbnail' ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </a>
                    <?php endif; ?>
                    
                    <?php if ( $next_post ) : ?>
                        <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="nav-item next">
                            <div class="nav-content">
                                <span class="nav-label">次の記事</span>
                                <h4 class="nav-title"><?php echo esc_html( $next_post->post_title ); ?></h4>
                                <?php if ( has_post_thumbnail( $next_post->ID ) ) : ?>
                                    <div class="nav-thumb">
                                        <?php echo get_the_post_thumbnail( $next_post->ID, 'thumbnail' ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="nav-arrow">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </nav>
            
            <!-- Enhanced Author Bio -->
            <div class="author-section-enhanced">
                <div class="author-bio-card">
                    <div class="author-header">
                        <div class="author-avatar-large">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 150 ); ?>
                            <span class="author-badge">✍️</span>
                        </div>
                        <div class="author-info">
                            <h3 class="author-name">
                                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                                    <?php the_author(); ?>
                                </a>
                            </h3>
                            <div class="author-stats">
                                <div class="stat">
                                    <span class="stat-value"><?php echo count_user_posts( get_the_author_meta( 'ID' ) ); ?></span>
                                    <span class="stat-label">記事</span>
                                </div>
                                <div class="stat">
                                    <span class="stat-value">
                                        <?php
                                        $author_posts = get_posts( array(
                                            'author' => get_the_author_meta( 'ID' ),
                                            'posts_per_page' => -1
                                        ) );
                                        $total_comments = 0;
                                        foreach ( $author_posts as $post ) {
                                            $total_comments += get_comments_number( $post->ID );
                                        }
                                        echo $total_comments;
                                        ?>
                                    </span>
                                    <span class="stat-label">コメント</span>
                                </div>
                            </div>
                            <?php if ( get_the_author_meta( 'description' ) ) : ?>
                                <p class="author-bio"><?php the_author_meta( 'description' ); ?></p>
                            <?php endif; ?>
                            <div class="author-social">
                                <?php if ( get_the_author_meta( 'user_url' ) ) : ?>
                                    <a href="<?php the_author_meta( 'user_url' ); ?>" class="social-link" target="_blank" rel="noopener">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"/>
                                            <line x1="2" y1="12" x2="22" y2="12"/>
                                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="author-more-link">
                        この著者の他の記事を見る
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Enhanced Related Posts -->
            <div class="related-section-enhanced">
                <div class="section-header">
                    <h2 class="section-title-large">おすすめの記事</h2>
                    <div class="carousel-controls">
                        <button class="carousel-prev" aria-label="前へ">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="15 18 9 12 15 6"/>
                            </svg>
                        </button>
                        <button class="carousel-next" aria-label="次へ">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9 18 15 12 9 6"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="related-carousel">
                    <div class="carousel-track">
                        <?php
                        // まずカテゴリーベースで関連記事を取得
                        $categories = wp_get_post_categories( get_the_ID() );
                        $related_posts = array();
                        
                        if ( !empty( $categories ) ) {
                            $related_posts = get_posts( array(
                                'category__in' => $categories,
                                'numberposts' => 6,
                                'post__not_in' => array( get_the_ID() ),
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'order' => 'DESC'
                            ) );
                        }
                        
                        // カテゴリーで記事が見つからない場合は最新記事を取得
                        if ( empty( $related_posts ) ) {
                            $related_posts = get_posts( array(
                                'numberposts' => 6,
                                'post__not_in' => array( get_the_ID() ),
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'order' => 'DESC'
                            ) );
                        }
                        
                        if ( !empty( $related_posts ) ) :
                            foreach ( $related_posts as $post ) :
                                setup_postdata( $post );
                        ?>
                            <article class="related-item">
                                <a href="<?php the_permalink(); ?>" class="related-link">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <div class="related-image">
                                            <?php the_post_thumbnail( 'medium' ); ?>
                                            <div class="related-overlay">
                                                <span class="read-more">記事を読む</span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="related-body">
                                        <div class="related-meta">
                                            <time><?php echo get_the_date( 'Y.m.d' ); ?></time>
                                            <span class="reading-time"><?php echo reading_time(); ?>分</span>
                                        </div>
                                        <h3 class="related-title"><?php the_title(); ?></h3>
                                        <p class="related-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>
                                    </div>
                                </a>
                            </article>
                        <?php
                            endforeach;
                            wp_reset_postdata();
                        else :
                            // 記事が全くない場合のメッセージ
                            ?>
                            <div class="no-related-posts">
                                <p>現在、おすすめの記事はありません。</p>
                            </div>
                            <?php
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            
            <!-- Enhanced Comments Section -->
            <?php if ( comments_open() || get_comments_number() ) : ?>
                <div class="comments-enhanced">
                    <div class="comments-header">
                        <h2 class="comments-title">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                            </svg>
                            コメント
                            <?php if ( get_comments_number() > 0 ) : ?>
                                <span class="comments-count"><?php echo get_comments_number(); ?></span>
                            <?php endif; ?>
                        </h2>
                    </div>
                    <?php comments_template(); ?>
                </div>
            <?php endif; ?>
        </div>
        
    <?php endwhile; ?>
</main>

<!-- Lightbox for Images -->
<div class="lightbox" id="lightbox">
    <button class="lightbox-close" aria-label="閉じる">×</button>
    <img src="" alt="" class="lightbox-image">
    <div class="lightbox-caption"></div>
</div>

<!-- Share Modal -->
<div class="share-modal" id="share-modal">
    <div class="modal-content">
        <h3>この記事をシェア</h3>
        <div class="share-options">
            <a href="#" class="share-option twitter" target="_blank" rel="noopener">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                </svg>
                <span>Twitter</span>
            </a>
            <a href="#" class="share-option facebook" target="_blank" rel="noopener">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                </svg>
                <span>Facebook</span>
            </a>
            <a href="#" class="share-option line" target="_blank" rel="noopener">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.349 0 .63.285.63.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.627-.63.349 0 .631.285.631.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.349 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.282.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314"/>
                </svg>
                <span>LINE</span>
            </a>
            <a href="#" class="share-option linkedin" target="_blank" rel="noopener">
                <svg viewBox="0 0 24 24" fill="currentColor">
                    <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                    <circle cx="4" cy="4" r="2"/>
                </svg>
                <span>LinkedIn</span>
            </a>
            <button class="share-option copy-url">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                </svg>
                <span>URLをコピー</span>
            </button>
        </div>
        <button class="modal-close">閉じる</button>
    </div>
</div>

<!-- Mobile Action Buttons (visible only on mobile) -->
<?php 
// This file is single.php, so we're always on a single post
$post_id = get_the_ID();
?>
<div class="mobile-actions" id="mobile-actions-bar">
    <button class="mobile-action-btn bookmark-mobile" data-post-id="<?php echo esc_attr( $post_id ); ?>" aria-label="保存">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/>
        </svg>
    </button>
    <button class="mobile-action-btn share-mobile" aria-label="共有">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="18" cy="5" r="3"/>
            <circle cx="6" cy="12" r="3"/>
            <circle cx="18" cy="19" r="3"/>
            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/>
            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/>
        </svg>
    </button>
</div>

<style>
@media (max-width: 768px) {
    #mobile-actions-bar {
        display: flex !important;
        position: fixed !important;
        bottom: 20px !important;
        left: 50% !important;
        transform: translateX(-50%) !important;
        gap: 12px !important;
        z-index: 99999 !important;
        background: rgba(0,0,0,0.8) !important;
        backdrop-filter: blur(10px) !important;
        padding: 8px 12px !important;
        border-radius: 30px !important;
        box-shadow: 0 4px 20px rgba(0,0,0,0.3) !important;
    }
    
    #mobile-actions-bar .mobile-action-btn {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: 45px !important;
        height: 45px !important;
        background: rgba(255,255,255,0.1) !important;
        border: 1px solid rgba(255,255,255,0.2) !important;
        border-radius: 50% !important;
        color: white !important;
        cursor: pointer !important;
        transition: all 0.3s ease !important;
    }
    
    #mobile-actions-bar .mobile-action-btn:hover,
    #mobile-actions-bar .mobile-action-btn:active {
        background: rgba(255,255,255,0.2) !important;
        transform: scale(1.1) !important;
    }
    
    #mobile-actions-bar .mobile-action-btn.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
        border-color: transparent !important;
    }
}</style>

<!-- Toast Notification -->
<div class="toast" id="toast">
    <span class="toast-message"></span>
</div>

<?php get_footer(); ?>