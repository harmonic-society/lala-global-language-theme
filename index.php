<?php
/**
 * The main template file
 *
 * @package LaLa_Global_Language
 */

get_header(); ?>

<?php lala_breadcrumbs(); ?>

<main id="primary" class="site-main blog-main">
    <div class="blog-hero-section">
        <div class="blog-hero-content">
            <h1 class="blog-hero-title">
                <span class="title-gradient">
                    <?php
                    if ( is_home() && ! is_front_page() ) :
                        single_post_title();
                    elseif ( is_archive() ) :
                        the_archive_title();
                    elseif ( is_search() ) :
                        printf( esc_html__( 'Search Results for: %s', 'lala-global-language' ), '<span>' . get_search_query() . '</span>' );
                    else :
                        echo esc_html__( 'Global Insights & Stories', 'lala-global-language' );
                    endif;
                    ?>
                </span>
            </h1>
            <div class="blog-hero-divider"></div>
            <p class="blog-hero-subtitle">異文化の視点、語学のヒント、グローバル教育の情報を発信</p>
        </div>
        <div class="hero-decoration">
            <div class="floating-bubble bubble-1"></div>
            <div class="floating-bubble bubble-2"></div>
            <div class="floating-bubble bubble-3"></div>
        </div>
    </div>

    <div class="blog-container">
        <div class="content-area">
            <?php if ( have_posts() ) : ?>
                
                <?php
                $post_count = 0;
                $featured_post = null;
                ?>
                
                <div class="blog-layout">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        $post_count++;
                        
                        // Make first post featured
                        if ( $post_count === 1 && ! is_paged() ) :
                        ?>
                            <div class="featured-post-container">
                                <article id="post-<?php the_ID(); ?>" <?php post_class( 'featured-post' ); ?>>
                                    <div class="featured-badge">Featured Story</div>
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <div class="featured-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail( 'full' ); ?>
                                                <div class="thumbnail-overlay"></div>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <div class="featured-content">
                                        <div class="featured-meta">
                                            <?php
                                            $categories = get_the_category();
                                            if ( ! empty( $categories ) ) :
                                                foreach ( $categories as $category ) :
                                            ?>
                                                <span class="category-badge" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                                    <?php echo esc_html( $category->name ); ?>
                                                </span>
                                            <?php
                                                endforeach;
                                            endif;
                                            ?>
                                            <span class="reading-time">
                                                <?php echo reading_time(); ?> min read
                                            </span>
                                        </div>
                                        
                                        <?php the_title( '<h2 class="featured-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                                        
                                        <div class="featured-excerpt">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        
                                        <div class="featured-footer">
                                            <div class="author-info">
                                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
                                                <div class="author-details">
                                                    <span class="author-name"><?php the_author(); ?></span>
                                                    <span class="post-date"><?php echo esc_html( get_the_date() ); ?></span>
                                                </div>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="featured-read-more">
                                                Read Article
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            
                            <div class="posts-grid modern-grid">
                        <?php else : ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card modern-card' ); ?>>
                                <div class="card-inner">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <div class="card-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail( 'medium_large' ); ?>
                                                <div class="thumbnail-gradient"></div>
                                            </a>
                                            <?php
                                            $categories = get_the_category();
                                            if ( ! empty( $categories ) ) :
                                            ?>
                                                <div class="card-category">
                                                    <?php echo esc_html( $categories[0]->name ); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <div class="card-content">
                                        <div class="card-meta">
                                            <span class="meta-date"><?php echo esc_html( get_the_date() ); ?></span>
                                            <span class="meta-divider">•</span>
                                            <span class="meta-reading"><?php echo reading_time(); ?> min</span>
                                        </div>
                                        
                                        <?php the_title( '<h3 class="card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
                                        
                                        <div class="card-excerpt">
                                            <?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
                                        </div>
                                        
                                        <div class="card-footer">
                                            <div class="card-author">
                                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?>
                                                <span><?php the_author(); ?></span>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="card-arrow" aria-label="Read more">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                    <path d="M7 17L17 7M17 7H7M17 7V17"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php
                        endif;
                    endwhile;
                    ?>
                    </div>
                </div>

                <div class="pagination modern-pagination">
                    <?php
                    the_posts_pagination( array(
                        'prev_text' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg> ' . __( 'Previous', 'lala-global-language' ),
                        'next_text' => __( 'Next', 'lala-global-language' ) . ' <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>',
                    ) );
                    ?>
                </div>

            <?php else : ?>
                
                <section class="no-results not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'lala-global-language' ); ?></h1>
                    </header>

                    <div class="page-content">
                        <?php if ( is_search() ) : ?>
                            <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'lala-global-language' ); ?></p>
                            <?php get_search_form(); ?>
                        <?php else : ?>
                            <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'lala-global-language' ); ?></p>
                            <?php get_search_form(); ?>
                        <?php endif; ?>
                    </div>
                </section>

            <?php endif; ?>
        </div>
    </div>
</main>

<style>
/* Blog Hero Section */
.blog-main {
    background: linear-gradient(180deg, #f8f9ff 0%, #ffffff 100%);
    min-height: 100vh;
}

.blog-hero-section {
    position: relative;
    padding: 120px 20px 80px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    overflow: hidden;
}

.blog-hero-content {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
    position: relative;
    z-index: 2;
}

.blog-hero-title {
    font-size: clamp(2.5rem, 5vw, 4rem);
    margin-bottom: 20px;
    animation: fadeInUp 0.8s ease;
}

.title-gradient {
    background: linear-gradient(135deg, #ffffff 0%, #f0f0ff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 900;
    letter-spacing: -1px;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

.blog-hero-divider {
    width: 60px;
    height: 3px;
    background: rgba(255, 255, 255, 0.5);
    margin: 0 auto 24px;
    border-radius: 2px;
    animation: fadeInUp 0.8s ease 0.15s both;
}

.blog-hero-subtitle {
    font-size: 1.1rem;
    color: rgba(255, 255, 255, 0.85);
    max-width: 600px;
    margin: 0 auto;
    letter-spacing: 0.12em;
    line-height: 1.9;
    font-weight: 300;
    animation: fadeInUp 0.8s ease 0.3s both;
}

/* Floating Decoration */
.hero-decoration {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    overflow: hidden;
    pointer-events: none;
}

.floating-bubble {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
}

.bubble-1 {
    width: 300px;
    height: 300px;
    top: -150px;
    right: -100px;
    animation: float 20s ease-in-out infinite;
}

.bubble-2 {
    width: 200px;
    height: 200px;
    bottom: -100px;
    left: -50px;
    animation: float 25s ease-in-out infinite reverse;
}

.bubble-3 {
    width: 150px;
    height: 150px;
    top: 50%;
    right: 10%;
    animation: float 15s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-30px) rotate(180deg); }
}

/* Blog Container */
.blog-container {
    max-width: 1400px;
    margin: -40px auto 0;
    padding: 0 20px 80px;
    position: relative;
    z-index: 10;
}

/* Featured Post */
.featured-post-container {
    margin-bottom: 80px;
    animation: fadeInUp 0.8s ease 0.4s both;
}

.featured-post {
    background: white;
    border-radius: 30px;
    overflow: hidden;
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12);
    position: relative;
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    min-height: 500px;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.featured-post:hover {
    transform: translateY(-5px);
    box-shadow: 0 40px 80px rgba(0, 0, 0, 0.15);
}

.featured-badge {
    position: absolute;
    top: 30px;
    left: 30px;
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: white;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 600;
    z-index: 10;
    animation: pulse 2s ease infinite;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

.featured-thumbnail {
    position: relative;
    overflow: hidden;
}

.featured-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}

.featured-post:hover .featured-thumbnail img {
    transform: scale(1.08);
}

.thumbnail-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.4) 100%);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.featured-post:hover .thumbnail-overlay {
    opacity: 1;
}

.featured-content {
    padding: 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.featured-meta {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
}

.category-badge {
    padding: 6px 16px;
    border-radius: 50px;
    color: white;
    font-size: 0.85rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.reading-time {
    color: #666;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 5px;
}

.featured-title {
    font-size: 2.25rem;
    line-height: 1.2;
    margin-bottom: 20px;
    font-weight: 800;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

.featured-title a {
    color: #1a202c;
    text-decoration: none;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    transition: opacity 0.3s ease;
}

.featured-title a:hover {
    opacity: 0.8;
}

.featured-excerpt {
    color: #4a5568;
    line-height: 1.8;
    margin-bottom: 30px;
    font-size: 1.1rem;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

.featured-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.author-info {
    display: flex;
    align-items: center;
    gap: 15px;
}

.author-info img {
    border-radius: 50%;
    border: 3px solid #f0f0f0;
}

.author-details {
    display: flex;
    flex-direction: column;
}

.author-name {
    font-weight: 600;
    color: #2d3748;
}

.post-date {
    color: #718096;
    font-size: 0.9rem;
}

.featured-read-more {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 30px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.featured-read-more:hover {
    transform: translateX(5px);
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
}

/* Modern Grid */
.modern-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(min(380px, 100%), 1fr));
    gap: 40px;
    margin-bottom: 80px;
}

.modern-card {
    animation: fadeInUp 0.8s ease both;
    animation-delay: calc(var(--card-index, 0) * 0.1s);
}

.modern-card:nth-child(1) { --card-index: 1; }
.modern-card:nth-child(2) { --card-index: 2; }
.modern-card:nth-child(3) { --card-index: 3; }
.modern-card:nth-child(4) { --card-index: 4; }
.modern-card:nth-child(5) { --card-index: 5; }
.modern-card:nth-child(6) { --card-index: 6; }

.card-inner {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    height: 100%;
    display: flex;
    flex-direction: column;
}

.modern-card:hover .card-inner {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
}

.card-thumbnail {
    position: relative;
    height: 240px;
    overflow: hidden;
}

.card-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}

.modern-card:hover .card-thumbnail img {
    transform: scale(1.1);
}

.thumbnail-gradient {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.6) 100%);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.modern-card:hover .thumbnail-gradient {
    opacity: 1;
}

.card-category {
    position: absolute;
    top: 20px;
    left: 20px;
    padding: 6px 16px;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    color: #667eea;
}

.card-content {
    padding: 30px;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.card-meta {
    display: flex;
    align-items: center;
    color: #718096;
    font-size: 0.9rem;
    margin-bottom: 15px;
}

.meta-divider {
    margin: 0 8px;
}

.card-title {
    font-size: 1.4rem;
    line-height: 1.3;
    margin-bottom: 15px;
    font-weight: 700;
    flex: 1;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

.card-title a {
    color: #2d3748;
    text-decoration: none;
    transition: color 0.3s ease;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.card-title a:hover {
    color: #667eea;
}

.card-excerpt {
    color: #4a5568;
    line-height: 1.7;
    margin-bottom: 20px;
    flex: 1;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

.card-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 20px;
    border-top: 1px solid #e2e8f0;
}

.card-author {
    display: flex;
    align-items: center;
    gap: 10px;
}

.card-author img {
    border-radius: 50%;
    border: 2px solid #e2e8f0;
}

.card-author span {
    color: #4a5568;
    font-size: 0.9rem;
    font-weight: 500;
}

.card-arrow {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    color: white;
    transition: transform 0.3s ease;
}

.card-arrow:hover {
    transform: rotate(45deg);
}

/* Modern Pagination */
.modern-pagination {
    margin: 80px 0;
}

.modern-pagination .nav-links {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
}

.modern-pagination a,
.modern-pagination span {
    padding: 12px 24px;
    background: white;
    border-radius: 50px;
    text-decoration: none;
    color: #4a5568;
    font-weight: 500;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
}

.modern-pagination a:hover {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
}

.modern-pagination .current {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    font-weight: 600;
}

/* Animations */
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

/* Responsive Design */
@media (max-width: 1024px) {
    .featured-post {
        grid-template-columns: 1fr;
    }
    
    .featured-thumbnail {
        height: 300px;
    }
    
    .featured-content {
        padding: 40px;
    }
}

@media (max-width: 768px) {
    .blog-hero-section {
        padding: 80px 20px 60px;
    }
    
    .blog-hero-title {
        font-size: 2.5rem;
        padding: 0 10px;
    }
    
    .blog-hero-subtitle {
        font-size: 1.1rem;
        padding: 0 10px;
    }
    
    .featured-post-container {
        margin-bottom: 60px;
    }
    
    .featured-content {
        padding: 30px;
    }
    
    .featured-title {
        font-size: 1.75rem;
    }
    
    .featured-excerpt {
        font-size: 1rem;
    }
    
    .modern-grid {
        grid-template-columns: 1fr;
        gap: 30px;
        padding: 0 10px;
    }
    
    .card-inner {
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }
    
    .card-title {
        font-size: 1.2rem;
    }
    
    .modern-pagination {
        margin: 60px 0;
    }
}

@media (max-width: 480px) {
    .blog-hero-title {
        font-size: 2rem;
    }
    
    .blog-hero-subtitle {
        font-size: 1rem;
    }
    
    .blog-container {
        padding: 0 15px 60px;
    }
    
    .featured-post {
        border-radius: 20px;
    }
    
    .featured-content {
        padding: 20px;
    }
    
    .featured-title {
        font-size: 1.5rem;
    }
    
    .featured-meta {
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .featured-footer {
        flex-direction: column;
        gap: 20px;
        align-items: flex-start;
    }
    
    .modern-grid {
        gap: 20px;
    }
    
    .card-content {
        padding: 20px;
    }
    
    .card-title {
        font-size: 1.1rem;
    }
    
    .card-excerpt {
        font-size: 0.95rem;
    }
    
    .card-footer {
        flex-direction: column;
        gap: 15px;
        align-items: flex-start;
    }
    
    .modern-pagination .nav-links {
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .modern-pagination a,
    .modern-pagination span {
        padding: 10px 18px;
        font-size: 0.9rem;
    }
}
</style>

<?php get_footer(); ?>