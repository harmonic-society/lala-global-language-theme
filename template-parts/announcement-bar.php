<?php
/**
 * Template part for displaying announcements
 *
 * @package LaLa_Global_Language
 */

// Get active announcements
$args = array(
    'post_type'      => 'announcement',
    'posts_per_page' => 1,
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

if ( $announcements->have_posts() ) :
    while ( $announcements->have_posts() ) : $announcements->the_post();
        
        $announcement_id = get_the_ID();
        $announcement_type = get_post_meta( $announcement_id, '_announcement_type', true );
        $expiry_date = get_post_meta( $announcement_id, '_announcement_expiry_date', true );
        $is_dismissible = get_post_meta( $announcement_id, '_announcement_dismissible', true );
        
        // Check if announcement has expired
        if ( $expiry_date && strtotime( $expiry_date ) < current_time( 'timestamp' ) ) {
            continue;
        }
        
        // Check if user has dismissed this announcement
        $dismissed_key = 'lala_dismissed_announcement_' . $announcement_id;
        if ( $is_dismissible && isset( $_COOKIE[$dismissed_key] ) ) {
            continue;
        }
        
        // Set announcement type class
        $type_class = $announcement_type ? 'announcement-' . $announcement_type : 'announcement-info';
        ?>
        
        <div id="announcement-<?php echo $announcement_id; ?>" class="announcement-bar <?php echo esc_attr( $type_class ); ?>" data-announcement-id="<?php echo $announcement_id; ?>">
            <div class="announcement-content">
                <div class="announcement-text">
                    <?php the_content(); ?>
                </div>
                <?php if ( $is_dismissible ) : ?>
                    <button class="announcement-close" aria-label="お知らせを閉じる">
                        <span aria-hidden="true">&times;</span>
                    </button>
                <?php endif; ?>
            </div>
        </div>
        
        <?php
    endwhile;
    wp_reset_postdata();
endif;
?>