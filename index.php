<?php
/**
 * The main template file
 *
 * @package LaLa_Global_Language
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="content-area">
            <?php if ( have_posts() ) : ?>
                
                <header class="page-header fade-in">
                    <h1 class="page-title">
                        <?php
                        if ( is_home() && ! is_front_page() ) :
                            single_post_title();
                        elseif ( is_archive() ) :
                            the_archive_title();
                        elseif ( is_search() ) :
                            printf( esc_html__( 'Search Results for: %s', 'lala-global-language' ), '<span>' . get_search_query() . '</span>' );
                        else :
                            echo esc_html__( 'Latest Posts', 'lala-global-language' );
                        endif;
                        ?>
                    </h1>
                </header>

                <div class="posts-grid">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card fade-in' ); ?>>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'medium_large' ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="post-content">
                                <header class="entry-header">
                                    <?php
                                    if ( is_singular() ) :
                                        the_title( '<h1 class="entry-title">', '</h1>' );
                                    else :
                                        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                                    endif;
                                    ?>
                                    
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
                                    </div>
                                </header>

                                <div class="entry-summary">
                                    <?php the_excerpt(); ?>
                                </div>

                                <footer class="entry-footer">
                                    <a href="<?php the_permalink(); ?>" class="read-more btn btn-primary">
                                        <?php esc_html_e( 'Read More', 'lala-global-language' ); ?>
                                    </a>
                                </footer>
                            </div>
                        </article>
                        <?php
                    endwhile;
                    ?>
                </div>

                <div class="pagination">
                    <?php
                    the_posts_pagination( array(
                        'prev_text' => '&larr; ' . __( 'Previous', 'lala-global-language' ),
                        'next_text' => __( 'Next', 'lala-global-language' ) . ' &rarr;',
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
.posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin: 40px 0;
}

.post-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.post-thumbnail img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.post-content {
    padding: 30px;
}

.entry-title {
    font-size: 1.5rem;
    margin-bottom: 15px;
}

.entry-title a {
    color: var(--dark-color);
    text-decoration: none;
    transition: color 0.3s ease;
}

.entry-title a:hover {
    color: var(--primary-color);
}

.entry-meta {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 15px;
}

.entry-meta span {
    margin-right: 15px;
}

.entry-summary {
    margin-bottom: 20px;
    line-height: 1.8;
}

.read-more {
    display: inline-block;
    padding: 10px 30px;
    font-size: 0.9rem;
}

.pagination {
    margin: 50px 0;
    text-align: center;
}

.pagination .nav-links {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.pagination a,
.pagination span {
    padding: 10px 20px;
    background: white;
    border-radius: 50px;
    text-decoration: none;
    color: var(--dark-color);
    transition: all 0.3s ease;
}

.pagination a:hover,
.pagination .current {
    background: var(--primary-color);
    color: white;
}

.container {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
}

@media (max-width: 768px) {
    .container {
        grid-template-columns: 1fr;
    }
    
    .posts-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php get_footer(); ?>