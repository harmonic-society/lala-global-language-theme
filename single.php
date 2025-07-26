<?php
/**
 * The template for displaying all single posts
 *
 * @package LaLa_Global_Language
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container single-post-container">
        <div class="content-area">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post fade-in' ); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-hero-image">
                            <?php the_post_thumbnail( 'full' ); ?>
                        </div>
                    <?php endif; ?>
                    
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        
                        <div class="entry-meta">
                            <span class="posted-on">
                                <time class="entry-date published" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                                    <?php echo esc_html( get_the_date() ); ?>
                                </time>
                            </span>
                            <span class="byline">
                                <?php
                                printf(
                                    esc_html__( 'by %s', 'lala-global-language' ),
                                    '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
                                );
                                ?>
                            </span>
                            <span class="category-links">
                                <?php esc_html_e( 'in', 'lala-global-language' ); ?> <?php the_category( ', ' ); ?>
                            </span>
                        </div>
                    </header>

                    <div class="entry-content">
                        <?php
                        the_content();
                        
                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lala-global-language' ),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div>

                    <footer class="entry-footer">
                        <div class="tag-links">
                            <?php the_tags( '<span class="tags-title">' . esc_html__( 'Tagged:', 'lala-global-language' ) . '</span> ', ', ', '' ); ?>
                        </div>
                        
                        <div class="share-buttons">
                            <span class="share-title"><?php esc_html_e( 'Share this post:', 'lala-global-language' ); ?></span>
                            <a href="#" class="share-button facebook" aria-label="Share on Facebook">📘</a>
                            <a href="#" class="share-button twitter" aria-label="Share on Twitter">🐦</a>
                            <a href="#" class="share-button linkedin" aria-label="Share on LinkedIn">💼</a>
                            <a href="#" class="share-button email" aria-label="Share via Email">📧</a>
                        </div>
                    </footer>
                </article>

                <div class="post-navigation fade-in">
                    <?php
                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'lala-global-language' ) . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'lala-global-language' ) . '</span> <span class="nav-title">%title</span>',
                        )
                    );
                    ?>
                </div>

                <?php
                // Display author bio if exists
                if ( get_the_author_meta( 'description' ) ) : ?>
                    <div class="author-bio fade-in">
                        <h3><?php esc_html_e( 'About the Author', 'lala-global-language' ); ?></h3>
                        <div class="author-bio-content">
                            <div class="author-avatar">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
                            </div>
                            <div class="author-info">
                                <h4><?php the_author(); ?></h4>
                                <p><?php the_author_meta( 'description' ); ?></p>
                                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="author-link">
                                    <?php esc_html_e( 'View all posts', 'lala-global-language' ); ?> →
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; ?>
        </div>

    </div>
</main>

<style>
.single-post-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 40px 20px;
    min-height: 100vh;
}

.single-post {
    background: white;
    border-radius: 20px;
    overflow: visible;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
}

.post-hero-image {
    margin: -40px -40px 40px;
}

.post-hero-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

.single-post .entry-header,
.single-post .entry-content,
.single-post .entry-footer {
    padding: 0 40px;
}

.single-post .entry-header {
    margin-bottom: 40px;
}

.single-post .entry-title {
    font-size: 2.5rem;
    line-height: 1.2;
    margin-bottom: 20px;
    color: var(--dark-color);
}

.entry-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    font-size: 0.9rem;
    color: #666;
}

.entry-meta a {
    color: var(--primary-color);
    text-decoration: none;
}

.entry-meta a:hover {
    text-decoration: underline;
}

.entry-content {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 40px;
}

.entry-content h2 {
    margin: 40px 0 20px;
    font-size: 2rem;
}

.entry-content h3 {
    margin: 30px 0 15px;
    font-size: 1.5rem;
}

.entry-content p {
    margin-bottom: 20px;
}

.entry-content img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    margin: 20px 0;
}

.entry-content blockquote {
    border-left: 4px solid var(--primary-color);
    padding-left: 20px;
    margin: 30px 0;
    font-style: italic;
    color: #555;
}

.entry-content ul,
.entry-content ol {
    margin: 20px 0 20px 40px;
}

.entry-content li {
    margin-bottom: 10px;
}

.entry-footer {
    padding-bottom: 40px;
    border-top: 1px solid #eee;
    padding-top: 30px;
}

.tag-links {
    margin-bottom: 20px;
}

.tag-links a {
    display: inline-block;
    padding: 5px 15px;
    margin: 5px;
    background: #f0f0f0;
    border-radius: 50px;
    text-decoration: none;
    color: var(--text-color);
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.tag-links a:hover {
    background: var(--primary-color);
    color: white;
}

.share-buttons {
    display: flex;
    align-items: center;
    gap: 15px;
}

.share-title {
    font-weight: 600;
}

.share-button {
    display: inline-block;
    font-size: 1.5rem;
    transition: transform 0.3s ease;
}

.share-button:hover {
    transform: scale(1.2);
}

.post-navigation {
    margin: 40px 0;
    padding: 30px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
}

.post-navigation .nav-links {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
}

.post-navigation .nav-subtitle {
    display: block;
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 5px;
}

.post-navigation .nav-title {
    display: block;
    font-weight: 600;
    color: var(--primary-color);
}

.post-navigation a {
    text-decoration: none;
    transition: transform 0.3s ease;
    display: block;
}

.post-navigation a:hover {
    transform: translateX(5px);
}

.post-navigation .nav-previous a:hover {
    transform: translateX(-5px);
}

.author-bio {
    margin: 40px 0;
    padding: 40px;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    border-radius: 20px;
}

.author-bio h3 {
    margin-bottom: 20px;
}

.author-bio-content {
    display: flex;
    gap: 30px;
    align-items: center;
}

.author-avatar img {
    border-radius: 50%;
    border: 4px solid white;
}

.author-info h4 {
    margin-bottom: 10px;
    color: var(--dark-color);
}

.author-link {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    margin-top: 10px;
    display: inline-block;
}

.author-link:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .single-post-container {
        padding: 20px 15px;
    }
    
    .single-post .entry-header,
    .single-post .entry-content,
    .single-post .entry-footer {
        padding: 0 20px;
    }
    
    .single-post .entry-title {
        font-size: 2rem;
    }
    
    .post-navigation .nav-links {
        grid-template-columns: 1fr;
    }
    
    .author-bio-content {
        flex-direction: column;
        text-align: center;
    }
}
</style>

<?php get_footer(); ?>