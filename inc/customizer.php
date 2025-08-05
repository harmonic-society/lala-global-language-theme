<?php
/**
 * LaLa Global Language Theme Customizer
 *
 * @package LaLa_Global_Language
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lala_global_language_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'lala_global_language_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'lala_global_language_customize_partial_blogdescription',
            )
        );
    }

    // Add Theme Options Panel
    $wp_customize->add_panel( 'lala_theme_options', array(
        'title'       => __( 'LaLa Theme Options', 'lala-global-language' ),
        'description' => __( 'Customize your LaLa Global Language theme', 'lala-global-language' ),
        'priority'    => 30,
    ) );

    // Color Settings Section
    $wp_customize->add_section( 'lala_color_settings', array(
        'title'    => __( 'Color Settings', 'lala-global-language' ),
        'panel'    => 'lala_theme_options',
        'priority' => 10,
    ) );

    // Primary Color
    $wp_customize->add_setting( 'primary_color', array(
        'default'           => '#008080',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label'    => __( 'Primary Color (Teal Blue - GLOBAL LANGUAGE)', 'lala-global-language' ),
        'section'  => 'lala_color_settings',
        'settings' => 'primary_color',
    ) ) );

    // Secondary Color
    $wp_customize->add_setting( 'secondary_color', array(
        'default'           => '#F88379',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
        'label'    => __( 'Secondary Color (Coral Pink - LaLa Logo)', 'lala-global-language' ),
        'section'  => 'lala_color_settings',
        'settings' => 'secondary_color',
    ) ) );

    // Accent Color
    $wp_customize->add_setting( 'accent_color', array(
        'default'           => '#FFD700',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
        'label'    => __( 'Accent Color (Bright Yellow - Music notes & accents)', 'lala-global-language' ),
        'section'  => 'lala_color_settings',
        'settings' => 'accent_color',
    ) ) );

    // Hero Section
    $wp_customize->add_section( 'lala_hero_section', array(
        'title'    => __( 'Hero Section', 'lala-global-language' ),
        'panel'    => 'lala_theme_options',
        'priority' => 20,
    ) );

    // Hero Title
    $wp_customize->add_setting( 'hero_title', array(
        'default'           => '世界中のことばを、ここ日本で。',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'hero_title', array(
        'label'    => 'ヒーロータイトル',
        'section'  => 'lala_hero_section',
        'type'     => 'text',
    ) );

    // Hero Description
    $wp_customize->add_setting( 'hero_description', array(
        'default'           => '英語はもちろん、欧米、アジア、アフリカのことばも。駅前留学？ホテル留学？LaLaなら "自宅留学"！',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'hero_description', array(
        'label'    => 'ヒーロー説明文',
        'section'  => 'lala_hero_section',
        'type'     => 'textarea',
    ) );

    // Hero Background Image
    $wp_customize->add_setting( 'hero_background_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_background_image', array(
        'label'    => 'ヒーロー背景画像',
        'section'  => 'lala_hero_section',
        'settings' => 'hero_background_image',
        'description' => '推奨サイズ: 1920x1080px以上の高解像度画像',
    ) ) );

    // Hero Background Overlay
    $wp_customize->add_setting( 'hero_overlay_opacity', array(
        'default'           => '0.4',
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( 'hero_overlay_opacity', array(
        'label'       => 'オーバーレイの透明度',
        'description' => '背景画像の上に重ねる色の透明度（0-100%）',
        'section'     => 'lala_hero_section',
        'type'        => 'range',
        'input_attrs' => array(
            'min'  => 0,
            'max'  => 100,
            'step' => 10,
        ),
    ) );

    // Hero Text Color
    $wp_customize->add_setting( 'hero_text_color', array(
        'default'           => '#FFFFFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hero_text_color', array(
        'label'    => 'ヒーローテキストカラー',
        'section'  => 'lala_hero_section',
        'settings' => 'hero_text_color',
    ) ) );

    // Pricing Section
    $wp_customize->add_section( 'lala_pricing_section', array(
        'title'    => __( 'Pricing Section', 'lala-global-language' ),
        'panel'    => 'lala_theme_options',
        'priority' => 25,
    ) );

    // Pricing Image
    $wp_customize->add_setting( 'pricing_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pricing_image', array(
        'label'       => '料金例セクションの画像',
        'section'     => 'lala_pricing_section',
        'settings'    => 'pricing_image',
        'description' => '料金例の見出しの下に表示される画像です。推奨サイズ: 1200x400px',
    ) ) );

    // Custom Class Section
    $wp_customize->add_section( 'lala_custom_class_section', array(
        'title'    => __( 'Custom Class Section', 'lala-global-language' ),
        'panel'    => 'lala_theme_options',
        'priority' => 26,
    ) );

    // Custom Class Image
    $wp_customize->add_setting( 'custom_class_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'custom_class_image', array(
        'label'       => 'カスタムクラスセクションの画像',
        'section'     => 'lala_custom_class_section',
        'settings'    => 'custom_class_image',
        'description' => 'カスタムクラス紹介文の下に表示される画像です。推奨サイズ: 1200x600px',
    ) ) );

    // Features Section
    $wp_customize->add_section( 'lala_features_section', array(
        'title'    => __( 'Features Section', 'lala-global-language' ),
        'panel'    => 'lala_theme_options',
        'priority' => 27,
    ) );

    // Features Image
    $wp_customize->add_setting( 'features_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'features_image', array(
        'label'       => '選ばれる理由セクションの画像',
        'section'     => 'lala_features_section',
        'settings'    => 'features_image',
        'description' => '「LaLa Global Language が選ばれる理由」の見出しの下に表示される画像です。推奨サイズ: 1200x400px',
    ) ) );

    // Social Media Section
    $wp_customize->add_section( 'lala_social_media', array(
        'title'    => __( 'Social Media Links', 'lala-global-language' ),
        'panel'    => 'lala_theme_options',
        'priority' => 30,
    ) );

    // Facebook URL
    $wp_customize->add_setting( 'facebook_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'facebook_url', array(
        'label'    => __( 'Facebook URL', 'lala-global-language' ),
        'section'  => 'lala_social_media',
        'type'     => 'url',
    ) );

    // Twitter URL
    $wp_customize->add_setting( 'twitter_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'twitter_url', array(
        'label'    => __( 'Twitter URL', 'lala-global-language' ),
        'section'  => 'lala_social_media',
        'type'     => 'url',
    ) );

    // Instagram URL
    $wp_customize->add_setting( 'instagram_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'instagram_url', array(
        'label'    => __( 'Instagram URL', 'lala-global-language' ),
        'section'  => 'lala_social_media',
        'type'     => 'url',
    ) );

    // YouTube URL
    $wp_customize->add_setting( 'youtube_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'youtube_url', array(
        'label'    => __( 'YouTube URL', 'lala-global-language' ),
        'section'  => 'lala_social_media',
        'type'     => 'url',
    ) );

    // About Page Section
    $wp_customize->add_section( 'lala_about_page', array(
        'title'    => __( 'About Page Settings', 'lala-global-language' ),
        'panel'    => 'lala_theme_options',
        'priority' => 40,
    ) );

    // Brand Core Image
    $wp_customize->add_setting( 'brand_core_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'brand_core_image', array(
        'label'       => 'ブランドの核セクションの画像',
        'section'     => 'lala_about_page',
        'settings'    => 'brand_core_image',
        'description' => 'ブランドの核セクションの下に表示される画像です。推奨サイズ: 1200x800px',
    ) ) );

    // Courses Page Section
    $wp_customize->add_section( 'lala_courses_page', array(
        'title'    => __( 'Courses Page Settings', 'lala-global-language' ),
        'panel'    => 'lala_theme_options',
        'priority' => 50,
    ) );

    // Single Lesson Image
    $wp_customize->add_setting( 'single_lesson_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'single_lesson_image', array(
        'label'       => 'シングルレッスンの画像',
        'section'     => 'lala_courses_page',
        'settings'    => 'single_lesson_image',
        'description' => 'シングルレッスンの見出しの下に表示される画像です。推奨サイズ: 800x600px',
    ) ) );

    // Pair/Trio Lesson Image
    $wp_customize->add_setting( 'pair_trio_lesson_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pair_trio_lesson_image', array(
        'label'       => 'ペアレッスン・トリオレッスンの画像',
        'section'     => 'lala_courses_page',
        'settings'    => 'pair_trio_lesson_image',
        'description' => 'ペアレッスン・トリオレッスンの見出しの下に表示される画像です。推奨サイズ: 800x600px',
    ) ) );

    // Recruitment Page Section
    $wp_customize->add_section( 'lala_recruitment_page', array(
        'title'    => __( 'Recruitment Page Settings', 'lala-global-language' ),
        'panel'    => 'lala_theme_options',
        'priority' => 60,
    ) );

    // All Comrades Image
    $wp_customize->add_setting( 'all_comrades_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'all_comrades_image', array(
        'label'       => 'すべての仲間たちへセクションの画像',
        'section'     => 'lala_recruitment_page',
        'settings'    => 'all_comrades_image',
        'description' => '「すべての仲間たちへ」セクションの下に表示される画像です。推奨サイズ: 1200x800px',
    ) ) );
}
add_action( 'customize_register', 'lala_global_language_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function lala_global_language_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function lala_global_language_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function lala_global_language_customize_preview_js() {
    wp_enqueue_script( 'lala-global-language-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '1.0.0', true );
}
add_action( 'customize_preview_init', 'lala_global_language_customize_preview_js' );

/**
 * Output custom CSS to live site
 */
function lala_global_language_customizer_css() {
    $hero_bg_image = get_theme_mod( 'hero_background_image', '' );
    $hero_overlay_opacity = get_theme_mod( 'hero_overlay_opacity', '40' ) / 100;
    $hero_text_color = get_theme_mod( 'hero_text_color', '#FFFFFF' );
    ?>
    <style type="text/css">
        :root {
            --primary-color: <?php echo esc_attr( get_theme_mod( 'primary_color', '#008080' ) ); ?>;
            --secondary-color: <?php echo esc_attr( get_theme_mod( 'secondary_color', '#F88379' ) ); ?>;
            --accent-color: <?php echo esc_attr( get_theme_mod( 'accent_color', '#FFD700' ) ); ?>;
            --hero-text-color: <?php echo esc_attr( $hero_text_color ); ?>;
        }
        
        <?php if ( $hero_bg_image ) : ?>
        .hero-section {
            background-image: url('<?php echo esc_url( $hero_bg_image ); ?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
        }
        
        .hero-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(248, 131, 121, <?php echo esc_attr( $hero_overlay_opacity ); ?>) 0%, rgba(245, 107, 95, <?php echo esc_attr( $hero_overlay_opacity ); ?>) 100%);
            z-index: 1;
        }
        
        .hero-section .container {
            position: relative;
            z-index: 2;
        }
        
        .hero-section .hero-title,
        .hero-section .hero-description {
            color: white;
        }
        <?php endif; ?>
    </style>
    <?php
}
add_action( 'wp_head', 'lala_global_language_customizer_css' );