<?php
/**
 * LaLa Global Language functions and definitions
 *
 * @package LaLa_Global_Language
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Theme setup
 */
function lala_global_language_setup() {
    // Make theme available for translation
    load_theme_textdomain( 'lala-global-language', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in two locations
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary Menu', 'lala-global-language' ),
            'footer-menu' => esc_html__( 'Footer Menu', 'lala-global-language' ),
        )
    );

    // Switch default core markup to output valid HTML5
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature
    add_theme_support(
        'custom-background',
        apply_filters(
            'lala_global_language_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for core custom logo
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 100,
            'width'       => 400,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

    // Add support for wide alignment
    add_theme_support( 'align-wide' );

    // Add support for responsive embeds
    add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'lala_global_language_setup' );

/**
 * Set the content width in pixels
 */
function lala_global_language_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'lala_global_language_content_width', 1200 );
}
add_action( 'after_setup_theme', 'lala_global_language_content_width', 0 );

/**
 * Register widget area
 */
function lala_global_language_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'lala-global-language' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'lala-global-language' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Widget Area', 'lala-global-language' ),
            'id'            => 'footer-widgets',
            'description'   => esc_html__( 'Add footer widgets here.', 'lala-global-language' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="footer-widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'lala_global_language_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function lala_global_language_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'lala-global-language-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Enqueue Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap', array(), null );

    // Enqueue main JavaScript file
    wp_enqueue_script( 'lala-global-language-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );

    // Enqueue comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'lala_global_language_scripts' );

/**
 * Custom template tags for this theme
 */
function lala_global_language_posted_on() {
    $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
    }

    $time_string = sprintf(
        $time_string,
        esc_attr( get_the_date( DATE_W3C ) ),
        esc_html( get_the_date() ),
        esc_attr( get_the_modified_date( DATE_W3C ) ),
        esc_html( get_the_modified_date() )
    );

    printf(
        '<span class="posted-on">%1$s <a href="%2$s" rel="bookmark">%3$s</a></span>',
        esc_html__( 'Posted on', 'lala-global-language' ),
        esc_url( get_permalink() ),
        $time_string
    );
}

/**
 * Custom excerpt length
 */
function lala_global_language_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'lala_global_language_excerpt_length', 999 );

/**
 * Custom excerpt more
 */
function lala_global_language_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'lala_global_language_excerpt_more' );

/**
 * Fallback menu
 */
function lala_global_language_fallback_menu() {
    ?>
    <div class="menu-container">
        <ul id="primary-menu" class="menu">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">スクールについて</a></li>
            <li><a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>">コース一覧</a></li>
            <li><a href="<?php echo esc_url( home_url( '/instructors/' ) ); ?>">講師紹介</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">ブログ</a></li>
            <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">よくある質問</a></li>
            <li><a href="<?php echo esc_url( home_url( '/recruitment/' ) ); ?>">採用情報</a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a></li>
        </ul>
    </div>
    <?php
}

/**
 * Add custom body classes
 */
function lala_global_language_body_classes( $classes ) {
    // Add class for animation support
    $classes[] = 'lala-animated';

    // Add class for sidebar
    if ( is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'has-sidebar';
    }

    // Check if there's an active announcement
    $active_announcement = get_posts( array(
        'post_type'      => 'announcement',
        'posts_per_page' => 1,
        'meta_query'     => array(
            array(
                'key'     => '_announcement_active',
                'value'   => '1',
                'compare' => '='
            )
        ),
        'fields' => 'ids'
    ) );
    
    if ( ! empty( $active_announcement ) ) {
        $classes[] = 'has-announcement';
    }

    return $classes;
}
add_filter( 'body_class', 'lala_global_language_body_classes' );

/**
 * Register Announcement Custom Post Type
 */
function lala_register_announcement_post_type() {
    $labels = array(
        'name'                  => _x( 'お知らせ', 'Post Type General Name', 'lala-global-language' ),
        'singular_name'         => _x( 'お知らせ', 'Post Type Singular Name', 'lala-global-language' ),
        'menu_name'             => __( 'お知らせ', 'lala-global-language' ),
        'name_admin_bar'        => __( 'お知らせ', 'lala-global-language' ),
        'add_new'               => __( '新規追加', 'lala-global-language' ),
        'add_new_item'          => __( '新しいお知らせを追加', 'lala-global-language' ),
        'new_item'              => __( '新しいお知らせ', 'lala-global-language' ),
        'edit_item'             => __( 'お知らせを編集', 'lala-global-language' ),
        'view_item'             => __( 'お知らせを表示', 'lala-global-language' ),
        'all_items'             => __( 'すべてのお知らせ', 'lala-global-language' ),
        'search_items'          => __( 'お知らせを検索', 'lala-global-language' ),
        'not_found'             => __( 'お知らせが見つかりません', 'lala-global-language' ),
        'not_found_in_trash'    => __( 'ゴミ箱にお知らせが見つかりません', 'lala-global-language' ),
    );
    
    $args = array(
        'label'                 => __( 'お知らせ', 'lala-global-language' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'hierarchical'          => false,
        'public'                => false,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-megaphone',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => false,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    
    register_post_type( 'announcement', $args );
}
add_action( 'init', 'lala_register_announcement_post_type', 0 );

/**
 * Add meta boxes for announcements
 */
function lala_add_announcement_meta_boxes() {
    add_meta_box(
        'announcement_settings',
        __( 'お知らせ設定', 'lala-global-language' ),
        'lala_announcement_settings_callback',
        'announcement',
        'side',
        'default'
    );
}
add_action( 'add_meta_boxes', 'lala_add_announcement_meta_boxes' );

/**
 * Announcement settings meta box callback
 */
function lala_announcement_settings_callback( $post ) {
    // Add nonce for security
    wp_nonce_field( 'lala_announcement_settings_nonce', 'lala_announcement_settings_nonce' );
    
    // Get existing values
    $announcement_type = get_post_meta( $post->ID, '_announcement_type', true );
    $expiry_date = get_post_meta( $post->ID, '_announcement_expiry_date', true );
    $is_dismissible = get_post_meta( $post->ID, '_announcement_dismissible', true );
    $is_active = get_post_meta( $post->ID, '_announcement_active', true );
    
    ?>
    <p>
        <label for="announcement_type"><?php _e( 'お知らせタイプ:', 'lala-global-language' ); ?></label>
        <select name="announcement_type" id="announcement_type" class="widefat">
            <option value="info" <?php selected( $announcement_type, 'info' ); ?>><?php _e( '情報', 'lala-global-language' ); ?></option>
            <option value="warning" <?php selected( $announcement_type, 'warning' ); ?>><?php _e( '警告', 'lala-global-language' ); ?></option>
            <option value="success" <?php selected( $announcement_type, 'success' ); ?>><?php _e( '成功', 'lala-global-language' ); ?></option>
            <option value="error" <?php selected( $announcement_type, 'error' ); ?>><?php _e( 'エラー', 'lala-global-language' ); ?></option>
        </select>
    </p>
    
    <p>
        <label for="announcement_expiry_date"><?php _e( '有効期限:', 'lala-global-language' ); ?></label>
        <input type="datetime-local" name="announcement_expiry_date" id="announcement_expiry_date" value="<?php echo esc_attr( $expiry_date ); ?>" class="widefat" />
        <small><?php _e( '空欄の場合は無期限', 'lala-global-language' ); ?></small>
    </p>
    
    <p>
        <label>
            <input type="checkbox" name="announcement_dismissible" value="1" <?php checked( $is_dismissible, '1' ); ?> />
            <?php _e( 'ユーザーが閉じることができる', 'lala-global-language' ); ?>
        </label>
    </p>
    
    <p>
        <label>
            <input type="checkbox" name="announcement_active" value="1" <?php checked( $is_active, '1' ); ?> />
            <?php _e( 'アクティブ（表示する）', 'lala-global-language' ); ?>
        </label>
    </p>
    <?php
}

/**
 * Save announcement meta data
 */
function lala_save_announcement_meta( $post_id ) {
    // Check nonce
    if ( ! isset( $_POST['lala_announcement_settings_nonce'] ) || ! wp_verify_nonce( $_POST['lala_announcement_settings_nonce'], 'lala_announcement_settings_nonce' ) ) {
        return;
    }
    
    // Check autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    
    // Check permissions
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
    
    // Save announcement type
    if ( isset( $_POST['announcement_type'] ) ) {
        update_post_meta( $post_id, '_announcement_type', sanitize_text_field( $_POST['announcement_type'] ) );
    }
    
    // Save expiry date
    if ( isset( $_POST['announcement_expiry_date'] ) ) {
        update_post_meta( $post_id, '_announcement_expiry_date', sanitize_text_field( $_POST['announcement_expiry_date'] ) );
    }
    
    // Save dismissible option
    $is_dismissible = isset( $_POST['announcement_dismissible'] ) ? '1' : '0';
    update_post_meta( $post_id, '_announcement_dismissible', $is_dismissible );
    
    // Save active status
    $is_active = isset( $_POST['announcement_active'] ) ? '1' : '0';
    update_post_meta( $post_id, '_announcement_active', $is_active );
}
add_action( 'save_post_announcement', 'lala_save_announcement_meta' );

/**
 * Add custom columns to announcement admin list
 */
function lala_announcement_columns( $columns ) {
    $new_columns = array();
    
    foreach ( $columns as $key => $value ) {
        if ( $key == 'title' ) {
            $new_columns[$key] = $value;
            $new_columns['announcement_type'] = __( 'タイプ', 'lala-global-language' );
            $new_columns['announcement_status'] = __( 'ステータス', 'lala-global-language' );
            $new_columns['announcement_expiry'] = __( '有効期限', 'lala-global-language' );
        } else {
            $new_columns[$key] = $value;
        }
    }
    
    return $new_columns;
}
add_filter( 'manage_announcement_posts_columns', 'lala_announcement_columns' );

/**
 * Display custom column content
 */
function lala_announcement_column_content( $column, $post_id ) {
    switch ( $column ) {
        case 'announcement_type':
            $type = get_post_meta( $post_id, '_announcement_type', true );
            $types = array(
                'info'    => __( '情報', 'lala-global-language' ),
                'warning' => __( '警告', 'lala-global-language' ),
                'success' => __( '成功', 'lala-global-language' ),
                'error'   => __( 'エラー', 'lala-global-language' )
            );
            echo isset( $types[$type] ) ? $types[$type] : $types['info'];
            break;
            
        case 'announcement_status':
            $is_active = get_post_meta( $post_id, '_announcement_active', true );
            $expiry_date = get_post_meta( $post_id, '_announcement_expiry_date', true );
            
            if ( $expiry_date && strtotime( $expiry_date ) < current_time( 'timestamp' ) ) {
                echo '<span style="color: #dc3545;">期限切れ</span>';
            } elseif ( $is_active == '1' ) {
                echo '<span style="color: #28a745;">アクティブ</span>';
            } else {
                echo '<span style="color: #6c757d;">非アクティブ</span>';
            }
            break;
            
        case 'announcement_expiry':
            $expiry_date = get_post_meta( $post_id, '_announcement_expiry_date', true );
            if ( $expiry_date ) {
                echo date_i18n( 'Y年m月d日 H:i', strtotime( $expiry_date ) );
            } else {
                echo __( '無期限', 'lala-global-language' );
            }
            break;
    }
}
add_action( 'manage_announcement_posts_custom_column', 'lala_announcement_column_content', 10, 2 );

/**
 * Make custom columns sortable
 */
function lala_announcement_sortable_columns( $columns ) {
    $columns['announcement_type'] = 'announcement_type';
    $columns['announcement_status'] = 'announcement_status';
    $columns['announcement_expiry'] = 'announcement_expiry';
    return $columns;
}
add_filter( 'manage_edit-announcement_sortable_columns', 'lala_announcement_sortable_columns' );

/**
 * Handle sorting for custom columns
 */
function lala_announcement_column_orderby( $query ) {
    if ( ! is_admin() || ! $query->is_main_query() ) {
        return;
    }
    
    if ( 'announcement_type' === $query->get( 'orderby' ) ) {
        $query->set( 'meta_key', '_announcement_type' );
        $query->set( 'orderby', 'meta_value' );
    }
    
    if ( 'announcement_status' === $query->get( 'orderby' ) ) {
        $query->set( 'meta_key', '_announcement_active' );
        $query->set( 'orderby', 'meta_value' );
    }
    
    if ( 'announcement_expiry' === $query->get( 'orderby' ) ) {
        $query->set( 'meta_key', '_announcement_expiry_date' );
        $query->set( 'orderby', 'meta_value' );
    }
}
add_action( 'pre_get_posts', 'lala_announcement_column_orderby' );

/**
 * Add admin styles for announcement columns
 */
function lala_announcement_admin_styles() {
    global $pagenow, $post_type;
    
    if ( ( $pagenow == 'edit.php' || $pagenow == 'post.php' || $pagenow == 'post-new.php' ) && $post_type == 'announcement' ) {
        ?>
        <style>
            .column-announcement_type { width: 100px; }
            .column-announcement_status { width: 120px; }
            .column-announcement_expiry { width: 180px; }
            
            /* Style the admin editor for announcements */
            .post-type-announcement #titlediv #title {
                height: auto;
                min-height: 40px;
            }
            
            .post-type-announcement .wp-editor-container {
                background: #f8f9fa;
                border: 2px solid #e9ecef;
                border-radius: 8px;
            }
            
            /* Highlight active announcements in the list */
            .post-type-announcement .status-publish {
                background-color: rgba(40, 167, 69, 0.05);
            }
        </style>
        <?php
    }
}
add_action( 'admin_head', 'lala_announcement_admin_styles' );

/**
 * Customizer additions
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}