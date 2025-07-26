<?php
/**
 * The template for displaying all pages
 *
 * @package LaLa_Global_Language
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container page-container">
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

                <?php
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; ?>
        </div>

        <?php
        // Show sidebar only if page template allows it
        if ( ! is_page_template( 'page-templates/full-width.php' ) ) :
            get_sidebar();
        endif;
        ?>
    </div>
</main>

<style>
.page-container {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
}

.page-container.full-width {
    grid-template-columns: 1fr;
    max-width: 900px;
}

.page-content {
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.page-hero-image {
    margin: -40px -40px 40px;
}

.page-hero-image img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 20px 20px 0 0;
}

.page-content .entry-title {
    font-size: 2.5rem;
    color: var(--dark-color);
    margin-bottom: 30px;
    text-align: center;
}

.page-content .entry-content {
    font-size: 1.1rem;
    line-height: 1.8;
}

.page-content .entry-content h2 {
    margin: 40px 0 20px;
    font-size: 2rem;
    color: var(--primary-color);
}

.page-content .entry-content h3 {
    margin: 30px 0 15px;
    font-size: 1.5rem;
    color: var(--secondary-color);
}

.page-content .entry-content p {
    margin-bottom: 20px;
}

.page-content .entry-content img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    margin: 20px 0;
}

.page-content .entry-content ul,
.page-content .entry-content ol {
    margin: 20px 0 20px 40px;
}

.page-content .entry-content li {
    margin-bottom: 10px;
}

.page-content .entry-content blockquote {
    border-left: 4px solid var(--primary-color);
    padding-left: 20px;
    margin: 30px 0;
    font-style: italic;
    color: #555;
}

/* Contact Form Styling */
.page-content .wpcf7 {
    margin: 40px 0;
}

.page-content .wpcf7 label {
    display: block;
    margin-bottom: 10px;
    font-weight: 600;
    color: var(--dark-color);
}

.page-content .wpcf7 input[type="text"],
.page-content .wpcf7 input[type="email"],
.page-content .wpcf7 input[type="tel"],
.page-content .wpcf7 textarea {
    width: 100%;
    padding: 15px;
    border: 2px solid #eee;
    border-radius: 10px;
    font-size: 1rem;
    margin-bottom: 20px;
    transition: border-color 0.3s ease;
}

.page-content .wpcf7 input[type="text"]:focus,
.page-content .wpcf7 input[type="email"]:focus,
.page-content .wpcf7 input[type="tel"]:focus,
.page-content .wpcf7 textarea:focus {
    outline: none;
    border-color: var(--primary-color);
}

.page-content .wpcf7 input[type="submit"] {
    background: var(--primary-color);
    color: white;
    padding: 15px 40px;
    border: none;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.page-content .wpcf7 input[type="submit"]:hover {
    background: var(--secondary-color);
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

/* Table Styling */
.page-content table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

.page-content table th,
.page-content table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #eee;
}

.page-content table th {
    background: var(--primary-color);
    color: white;
    font-weight: 600;
}

.page-content table tr:hover {
    background: #f5f5f5;
}

/* Button Styling */
.page-content .wp-block-button__link {
    background: var(--primary-color);
    color: white;
    padding: 15px 40px;
    border-radius: 50px;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
}

.page-content .wp-block-button__link:hover {
    background: var(--secondary-color);
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

@media (max-width: 768px) {
    .page-container {
        grid-template-columns: 1fr;
    }
    
    .page-content {
        padding: 20px;
    }
    
    .page-content .entry-title {
        font-size: 2rem;
    }
}
</style>

<?php get_footer(); ?>