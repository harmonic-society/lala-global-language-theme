<?php
/**
 * Template Name: Terms Page
 * Template for Terms of Service page without sidebar
 *
 * @package LaLa_Global_Language
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container page-container full-width">
        <div class="content-area">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content fade-in' ); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="page-hero-image">
                            <?php the_post_thumbnail( 'full' ); ?>
                        </div>
                    <?php endif; ?>
                    
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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
                </article>

            <?php endwhile; ?>
        </div>
    </div>
</main>

<style>
.page-template-page-terms .page-container {
    display: block;
    max-width: 900px;
    margin: 0 auto;
    padding: 60px 20px;
}

.page-template-page-terms .page-content {
    background: white;
    border-radius: 20px;
    padding: 50px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.page-template-page-terms .entry-title {
    font-size: 2.5rem;
    color: var(--dark-color);
    margin-bottom: 40px;
    text-align: center;
    padding-bottom: 20px;
    border-bottom: 3px solid var(--primary-color);
}

.page-template-page-terms .entry-content {
    font-size: 1.05rem;
    line-height: 1.8;
    color: #333;
}

.page-template-page-terms .entry-content h2 {
    margin: 40px 0 20px;
    font-size: 1.8rem;
    color: var(--primary-color);
    border-left: 4px solid var(--primary-color);
    padding-left: 15px;
}

.page-template-page-terms .entry-content h3 {
    margin: 30px 0 15px;
    font-size: 1.4rem;
    color: var(--secondary-color);
}

.page-template-page-terms .entry-content h4 {
    margin: 25px 0 12px;
    font-size: 1.2rem;
    color: #555;
    font-weight: 600;
}

.page-template-page-terms .entry-content p {
    margin-bottom: 20px;
    text-align: justify;
}

.page-template-page-terms .entry-content ul,
.page-template-page-terms .entry-content ol {
    margin: 20px 0 20px 40px;
}

.page-template-page-terms .entry-content li {
    margin-bottom: 12px;
    line-height: 1.7;
}

.page-template-page-terms .entry-content strong {
    color: var(--dark-color);
    font-weight: 600;
}

.page-template-page-terms .entry-content blockquote {
    border-left: 4px solid var(--accent-color);
    padding: 20px;
    margin: 30px 0;
    background: #f9f9f9;
    border-radius: 5px;
}

/* Add a table of contents style if needed */
.page-template-page-terms .toc {
    background: #f5f5f5;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 25px;
    margin: 30px 0;
}

.page-template-page-terms .toc h2 {
    margin-top: 0;
    font-size: 1.3rem;
    color: var(--secondary-color);
    border: none;
    padding: 0;
}

.page-template-page-terms .toc ul {
    margin: 15px 0 0 20px;
}

.page-template-page-terms .toc li {
    margin-bottom: 8px;
}

.page-template-page-terms .toc a {
    color: var(--primary-color);
    text-decoration: none;
    transition: color 0.3s ease;
}

.page-template-page-terms .toc a:hover {
    color: var(--secondary-color);
    text-decoration: underline;
}

/* Date stamp styling */
.page-template-page-terms .last-updated {
    text-align: right;
    color: #999;
    font-size: 0.9rem;
    margin-top: 40px;
    padding-top: 20px;
    border-top: 1px solid #eee;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .page-template-page-terms .page-container {
        padding: 40px 15px;
    }
    
    .page-template-page-terms .page-content {
        padding: 35px 25px;
        border-radius: 15px;
    }
    
    .page-template-page-terms .entry-title {
        font-size: 2rem;
        margin-bottom: 30px;
    }
    
    .page-template-page-terms .entry-content {
        font-size: 1rem;
        line-height: 1.7;
    }
    
    .page-template-page-terms .entry-content h2 {
        font-size: 1.5rem;
        margin: 30px 0 15px;
    }
    
    .page-template-page-terms .entry-content h3 {
        font-size: 1.25rem;
        margin: 25px 0 12px;
    }
    
    .page-template-page-terms .entry-content h4 {
        font-size: 1.1rem;
        margin: 20px 0 10px;
    }
    
    .page-template-page-terms .entry-content p {
        text-align: left;
        margin-bottom: 15px;
    }
    
    .page-template-page-terms .entry-content ul,
    .page-template-page-terms .entry-content ol {
        margin: 15px 0 15px 25px;
    }
    
    .page-template-page-terms .entry-content li {
        margin-bottom: 10px;
    }
    
    .page-template-page-terms .toc {
        padding: 20px;
        margin: 25px 0;
    }
    
    .page-template-page-terms .toc h2 {
        font-size: 1.2rem;
    }
}

@media (max-width: 480px) {
    .page-template-page-terms .page-container {
        padding: 30px 10px;
    }
    
    .page-template-page-terms .page-content {
        padding: 25px 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }
    
    .page-template-page-terms .entry-title {
        font-size: 1.6rem;
        margin-bottom: 25px;
        padding-bottom: 15px;
    }
    
    .page-template-page-terms .entry-content {
        font-size: 0.95rem;
        line-height: 1.6;
    }
    
    .page-template-page-terms .entry-content h2 {
        font-size: 1.3rem;
        margin: 25px 0 12px;
        padding-left: 10px;
    }
    
    .page-template-page-terms .entry-content h3 {
        font-size: 1.15rem;
        margin: 20px 0 10px;
    }
    
    .page-template-page-terms .entry-content h4 {
        font-size: 1.05rem;
    }
    
    .page-template-page-terms .entry-content ul,
    .page-template-page-terms .entry-content ol {
        margin: 12px 0 12px 20px;
    }
    
    .page-template-page-terms .entry-content li {
        margin-bottom: 8px;
    }
    
    .page-template-page-terms .entry-content blockquote {
        padding: 15px;
        margin: 20px 0;
    }
    
    .page-template-page-terms .toc {
        padding: 15px;
        margin: 20px 0;
    }
    
    .page-template-page-terms .toc h2 {
        font-size: 1.1rem;
    }
    
    .page-template-page-terms .toc ul {
        margin: 10px 0 0 15px;
    }
    
    .page-template-page-terms .last-updated {
        font-size: 0.85rem;
        margin-top: 30px;
        padding-top: 15px;
    }
}
</style>

<?php get_footer(); ?>