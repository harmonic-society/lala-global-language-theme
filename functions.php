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

    return $classes;
}
add_filter( 'body_class', 'lala_global_language_body_classes' );

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