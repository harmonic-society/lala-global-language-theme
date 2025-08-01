<?php
/**
 * Template part for displaying announcement list on front page
 *
 * @package LaLa_Global_Language
 */

// Get active announcements
$args = array(
    'post_type'      => 'announcement',
    'posts_per_page' => 5, // Show latest 5 announcements
    'meta_query'     => array(
        array(
            'key'     => '_announcement_active',
            'value'   => '1',
            'compare' => '='
        )
    ),
    'orderby'        => 'date',
    'order'          => 'DESC'
);

$announcements = new WP_Query( $args );

// Only display section if there are active announcements
if ( $announcements->have_posts() ) : ?>
    
    <section id="announcements" class="announcements-section">
        <div class="announcements-bg-shape"></div>
        <div class="container">
            <h2 class="section-title fade-in">
                <span class="title-icon">📢</span>
                お知らせ・最新情報
            </h2>
            
            <div class="announcements-grid">
                <?php while ( $announcements->have_posts() ) : $announcements->the_post();
                    
                    $announcement_id = get_the_ID();
                    $announcement_type = get_post_meta( $announcement_id, '_announcement_type', true );
                    $expiry_date = get_post_meta( $announcement_id, '_announcement_expiry_date', true );
                    
                    // Check if announcement has expired
                    if ( $expiry_date && strtotime( $expiry_date ) < current_time( 'timestamp' ) ) {
                        continue;
                    }
                    
                    // Set announcement type class and icon
                    $type_class = $announcement_type ? 'announcement-type-' . $announcement_type : 'announcement-type-info';
                    $type_icon = '';
                    switch ( $announcement_type ) {
                        case 'warning':
                            $type_icon = '⚠️';
                            break;
                        case 'success':
                            $type_icon = '✅';
                            break;
                        case 'error':
                            $type_icon = '❌';
                            break;
                        default:
                            $type_icon = 'ℹ️';
                            break;
                    }
                    ?>
                    
                    <article class="announcement-card fade-in <?php echo esc_attr( $type_class ); ?>">
                        <div class="announcement-header">
                            <span class="announcement-icon"><?php echo $type_icon; ?></span>
                            <time class="announcement-date" datetime="<?php echo get_the_date( 'c' ); ?>">
                                <?php echo get_the_date( 'Y年n月j日' ); ?>
                            </time>
                        </div>
                        
                        <h3 class="announcement-title">
                            <?php the_title(); ?>
                        </h3>
                        
                        <div class="announcement-excerpt">
                            <?php 
                            // Get content and create excerpt
                            $content = get_the_content();
                            $content = wp_strip_all_tags( $content );
                            $excerpt = mb_substr( $content, 0, 100 );
                            if ( mb_strlen( $content ) > 100 ) {
                                $excerpt .= '...';
                            }
                            echo esc_html( $excerpt );
                            ?>
                        </div>
                        
                        <button class="announcement-expand" data-announcement-id="<?php echo $announcement_id; ?>">
                            詳しく見る <span class="expand-icon">▼</span>
                        </button>
                        
                        <div class="announcement-full-content" id="announcement-content-<?php echo $announcement_id; ?>" style="display: none;">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    
                <?php endwhile; ?>
            </div>
            
            <?php if ( $announcements->found_posts > 5 ) : ?>
                <div class="announcements-footer">
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'announcement' ) ); ?>" class="btn btn-outline">
                        すべてのお知らせを見る
                    </a>
                </div>
            <?php endif; ?>
            
        </div>
    </section>
    
<?php endif;
wp_reset_postdata();
?>