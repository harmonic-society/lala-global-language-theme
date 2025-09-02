<?php
/**
 * Template Name: Privacy Policy Page
 * Template for Privacy Policy page without sidebar
 *
 * @package LaLa_Global_Language
 */

get_header(); ?>

<?php lala_breadcrumbs(); ?>

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
.page-template-page-privacy-policy .page-container {
    display: block;
    max-width: 900px;
    margin: 0 auto;
    padding: 60px 20px;
}

.page-template-page-privacy-policy .page-content {
    background: white;
    border-radius: 20px;
    padding: 50px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.page-template-page-privacy-policy .entry-title {
    font-size: 2.5rem;
    color: var(--dark-color);
    margin-bottom: 40px;
    text-align: center;
    padding-bottom: 20px;
    border-bottom: 3px solid var(--primary-color);
}

.page-template-page-privacy-policy .entry-content {
    font-size: 1.05rem;
    line-height: 1.8;
    color: #333;
}

.page-template-page-privacy-policy .entry-content h2 {
    margin: 40px 0 20px;
    font-size: 1.8rem;
    color: var(--primary-color);
    border-left: 4px solid var(--primary-color);
    padding-left: 15px;
}

.page-template-page-privacy-policy .entry-content h3 {
    margin: 30px 0 15px;
    font-size: 1.4rem;
    color: var(--secondary-color);
}

.page-template-page-privacy-policy .entry-content h4 {
    margin: 25px 0 12px;
    font-size: 1.2rem;
    color: #555;
    font-weight: 600;
}

.page-template-page-privacy-policy .entry-content p {
    margin-bottom: 20px;
    text-align: justify;
}

.page-template-page-privacy-policy .entry-content ul,
.page-template-page-privacy-policy .entry-content ol {
    margin: 20px 0 20px 40px;
}

.page-template-page-privacy-policy .entry-content li {
    margin-bottom: 12px;
    line-height: 1.7;
}

.page-template-page-privacy-policy .entry-content strong {
    color: var(--dark-color);
    font-weight: 600;
}

.page-template-page-privacy-policy .entry-content blockquote {
    border-left: 4px solid var(--accent-color);
    padding: 20px;
    margin: 30px 0;
    background: #f9f9f9;
    border-radius: 5px;
}

/* Privacy Policy specific styling */
.page-template-page-privacy-policy .privacy-section {
    margin: 40px 0;
    padding: 30px;
    background: #f8f9fa;
    border-radius: 10px;
}

.page-template-page-privacy-policy .privacy-highlight {
    background: #fff5e6;
    padding: 20px;
    border-left: 3px solid var(--accent-color);
    margin: 25px 0;
    border-radius: 5px;
}

.page-template-page-privacy-policy .privacy-highlight h3 {
    margin-top: 0;
    color: var(--accent-color);
}

/* Contact information styling */
.page-template-page-privacy-policy .contact-info {
    background: #f0f4f8;
    padding: 25px;
    border-radius: 10px;
    margin: 30px 0;
}

.page-template-page-privacy-policy .contact-info h3 {
    margin-top: 0;
    color: var(--secondary-color);
}

.page-template-page-privacy-policy .contact-info p {
    margin-bottom: 10px;
    text-align: left;
}

/* Table styling for privacy policy */
.page-template-page-privacy-policy table {
    width: 100%;
    border-collapse: collapse;
    margin: 25px 0;
    background: white;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.page-template-page-privacy-policy table th {
    background: var(--primary-color);
    color: white;
    padding: 15px;
    text-align: left;
    font-weight: 600;
}

.page-template-page-privacy-policy table td {
    padding: 15px;
    border-bottom: 1px solid #eee;
}

.page-template-page-privacy-policy table tr:hover {
    background: #f5f5f5;
}

/* Date stamp styling */
.page-template-page-privacy-policy .last-updated {
    text-align: right;
    color: #999;
    font-size: 0.9rem;
    margin-top: 40px;
    padding-top: 20px;
    border-top: 1px solid #eee;
}

/* Icon list styling */
.page-template-page-privacy-policy .icon-list {
    list-style: none;
    padding-left: 0;
}

.page-template-page-privacy-policy .icon-list li {
    position: relative;
    padding-left: 30px;
    margin-bottom: 15px;
}

.page-template-page-privacy-policy .icon-list li:before {
    content: "✓";
    position: absolute;
    left: 0;
    color: var(--primary-color);
    font-weight: bold;
    font-size: 1.2rem;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .page-template-page-privacy-policy .page-container {
        padding: 40px 15px;
    }
    
    .page-template-page-privacy-policy .page-content {
        padding: 35px 25px;
        border-radius: 15px;
    }
    
    .page-template-page-privacy-policy .entry-title {
        font-size: 2rem;
        margin-bottom: 30px;
    }
    
    .page-template-page-privacy-policy .entry-content {
        font-size: 1rem;
        line-height: 1.7;
    }
    
    .page-template-page-privacy-policy .entry-content h2 {
        font-size: 1.5rem;
        margin: 30px 0 15px;
    }
    
    .page-template-page-privacy-policy .entry-content h3 {
        font-size: 1.25rem;
        margin: 25px 0 12px;
    }
    
    .page-template-page-privacy-policy .entry-content h4 {
        font-size: 1.1rem;
        margin: 20px 0 10px;
    }
    
    .page-template-page-privacy-policy .entry-content p {
        text-align: left;
        margin-bottom: 15px;
    }
    
    .page-template-page-privacy-policy .entry-content ul,
    .page-template-page-privacy-policy .entry-content ol {
        margin: 15px 0 15px 25px;
    }
    
    .page-template-page-privacy-policy .entry-content li {
        margin-bottom: 10px;
    }
    
    .page-template-page-privacy-policy .privacy-section {
        padding: 20px;
        margin: 30px 0;
    }
    
    .page-template-page-privacy-policy .privacy-highlight {
        padding: 15px;
        margin: 20px 0;
    }
    
    .page-template-page-privacy-policy .contact-info {
        padding: 20px;
        margin: 25px 0;
    }
    
    .page-template-page-privacy-policy table {
        font-size: 0.9rem;
    }
    
    .page-template-page-privacy-policy table th,
    .page-template-page-privacy-policy table td {
        padding: 10px;
    }
}

@media (max-width: 480px) {
    .page-template-page-privacy-policy .page-container {
        padding: 30px 10px;
    }
    
    .page-template-page-privacy-policy .page-content {
        padding: 25px 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }
    
    .page-template-page-privacy-policy .entry-title {
        font-size: 1.6rem;
        margin-bottom: 25px;
        padding-bottom: 15px;
    }
    
    .page-template-page-privacy-policy .entry-content {
        font-size: 0.95rem;
        line-height: 1.6;
    }
    
    .page-template-page-privacy-policy .entry-content h2 {
        font-size: 1.3rem;
        margin: 25px 0 12px;
        padding-left: 10px;
    }
    
    .page-template-page-privacy-policy .entry-content h3 {
        font-size: 1.15rem;
        margin: 20px 0 10px;
    }
    
    .page-template-page-privacy-policy .entry-content h4 {
        font-size: 1.05rem;
    }
    
    .page-template-page-privacy-policy .entry-content ul,
    .page-template-page-privacy-policy .entry-content ol {
        margin: 12px 0 12px 20px;
    }
    
    .page-template-page-privacy-policy .entry-content li {
        margin-bottom: 8px;
    }
    
    .page-template-page-privacy-policy .entry-content blockquote {
        padding: 15px;
        margin: 20px 0;
    }
    
    .page-template-page-privacy-policy .privacy-section {
        padding: 15px;
        margin: 20px 0;
    }
    
    .page-template-page-privacy-policy .privacy-highlight {
        padding: 12px;
        margin: 15px 0;
    }
    
    .page-template-page-privacy-policy .contact-info {
        padding: 15px;
        margin: 20px 0;
    }
    
    .page-template-page-privacy-policy table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }
    
    .page-template-page-privacy-policy table th,
    .page-template-page-privacy-policy table td {
        padding: 8px;
        font-size: 0.85rem;
    }
    
    .page-template-page-privacy-policy .icon-list li {
        padding-left: 25px;
        margin-bottom: 12px;
    }
    
    .page-template-page-privacy-policy .last-updated {
        font-size: 0.85rem;
        margin-top: 30px;
        padding-top: 15px;
    }
}
</style>

<?php get_footer(); ?>