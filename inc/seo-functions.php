<?php
/**
 * SEO Functions for LaLa Global Language
 *
 * @package LaLa_Global_Language
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add meta description tag
 */
function lala_add_meta_description() {
    $description = '';
    
    if ( is_front_page() ) {
        $description = 'LaLa Global Languageは、35言語に対応したオンライン語学スクール。バイリンガル講師による質の高いレッスンで、英語・中国語・韓国語・フランス語など世界中の言語を自宅で学べます。無料体験レッスン実施中。';
    } elseif ( is_page() ) {
        $page_slug = get_post_field( 'post_name', get_the_ID() );
        $page_descriptions = array(
            'about' => 'LaLa Global Languageについて。世界35言語に対応した革新的な語学学習プラットフォーム。経験豊富なバイリンガル講師陣が、あなたの語学力向上を全力でサポートします。',
            'courses' => '英語・中国語・韓国語・フランス語など35言語のコース一覧。初心者から上級者まで、あなたのレベルに合わせた最適なカリキュラムをご提供。マンツーマン・グループレッスン対応。',
            'instructors' => '世界各国出身のバイリンガル講師陣をご紹介。ネイティブスピーカーによる本格的な語学レッスンで、実践的な会話力を身につけられます。',
            'contact' => 'LaLa Global Languageへのお問い合わせ・無料体験レッスンのお申し込みはこちら。語学学習に関するご相談も承っております。',
            'faq' => 'よくある質問とその回答。料金・レッスン内容・予約方法など、LaLa Global Languageのサービスに関する疑問にお答えします。',
            'recruitment' => 'LaLa Global Language講師募集。あなたの語学力を活かして、世界中の生徒に言語の楽しさを伝えませんか？柔軟な勤務体制・充実した研修制度。',
            'privacy-policy' => 'LaLa Global Languageのプライバシーポリシー。お客様の個人情報の取り扱いについて詳しくご説明しています。',
            'terms' => 'LaLa Global Language利用規約。サービスのご利用にあたっての規約・条件をご確認ください。'
        );
        
        if ( isset( $page_descriptions[$page_slug] ) ) {
            $description = $page_descriptions[$page_slug];
        } else {
            $description = get_the_excerpt() ? get_the_excerpt() : 'LaLa Global Language - ' . get_the_title();
        }
    } elseif ( is_single() ) {
        // Check for custom SEO description first
        $custom_description = get_post_meta( get_the_ID(), '_lala_seo_description', true );
        if ( $custom_description ) {
            $description = $custom_description;
        } else {
            $description = get_the_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 30 );
        }
    } elseif ( is_category() ) {
        $description = 'LaLa Global Language ' . single_cat_title( '', false ) . 'カテゴリーの記事一覧。語学学習に役立つ情報を定期的に発信しています。';
    } elseif ( is_tag() ) {
        $description = 'LaLa Global Language ' . single_tag_title( '', false ) . 'タグの記事一覧。';
    } elseif ( is_archive() ) {
        $description = 'LaLa Global Language アーカイブページ。過去の記事を月別・カテゴリー別にご覧いただけます。';
    } elseif ( is_search() ) {
        $description = 'LaLa Global Language 検索結果: ' . get_search_query();
    } elseif ( is_404() ) {
        $description = 'お探しのページが見つかりません。LaLa Global Languageのトップページへお戻りください。';
    } else {
        $description = get_bloginfo( 'description' );
    }
    
    if ( $description ) {
        echo '<meta name="description" content="' . esc_attr( wp_strip_all_tags( $description ) ) . '">' . "\n";
    }
}
add_action( 'wp_head', 'lala_add_meta_description', 1 );

/**
 * Add meta keywords tag
 */
function lala_add_meta_keywords() {
    if ( is_single() ) {
        $keywords = get_post_meta( get_the_ID(), '_lala_seo_keywords', true );
        if ( $keywords ) {
            echo '<meta name="keywords" content="' . esc_attr( $keywords ) . '">' . "\n";
        }
    }
}
add_action( 'wp_head', 'lala_add_meta_keywords', 1 );

/**
 * Add robots meta tag
 */
function lala_add_robots_meta() {
    $robots = array();
    
    if ( is_single() ) {
        $noindex = get_post_meta( get_the_ID(), '_lala_seo_noindex', true );
        $nofollow = get_post_meta( get_the_ID(), '_lala_seo_nofollow', true );
        
        if ( $noindex == '1' ) {
            $robots[] = 'noindex';
        }
        
        if ( $nofollow == '1' ) {
            $robots[] = 'nofollow';
        }
        
        if ( ! empty( $robots ) ) {
            echo '<meta name="robots" content="' . esc_attr( implode( ', ', $robots ) ) . '">' . "\n";
        }
    }
}
add_action( 'wp_head', 'lala_add_robots_meta', 1 );

/**
 * Filter the document title
 */
function lala_filter_document_title( $title ) {
    if ( is_single() ) {
        $custom_title = get_post_meta( get_the_ID(), '_lala_seo_title', true );
        if ( $custom_title ) {
            return $custom_title;
        }
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'lala_filter_document_title', 10 );

/**
 * Add Open Graph tags
 */
function lala_add_open_graph_tags() {
    global $post;
    
    // Check for custom OGP title on single posts
    $og_title = '';
    if ( is_single() ) {
        $custom_ogp_title = get_post_meta( get_the_ID(), '_lala_ogp_title', true );
        $custom_seo_title = get_post_meta( get_the_ID(), '_lala_seo_title', true );
        
        if ( $custom_ogp_title ) {
            $og_title = $custom_ogp_title;
        } elseif ( $custom_seo_title ) {
            $og_title = $custom_seo_title;
        } else {
            $og_title = wp_get_document_title();
        }
    } else {
        $og_title = is_front_page() ? get_bloginfo( 'name' ) : wp_get_document_title();
    }
    $og_type = is_single() ? 'article' : 'website';
    $og_url = get_permalink();
    $og_site_name = get_bloginfo( 'name' );
    $og_locale = 'ja_JP';
    
    // Get description from meta description function logic
    $og_description = '';
    if ( is_front_page() ) {
        $og_description = 'LaLa Global Languageは、35言語に対応したオンライン語学スクール。バイリンガル講師による質の高いレッスンで、世界中の言語を自宅で学べます。';
    } elseif ( is_single() || is_page() ) {
        // Check for custom OGP description on single posts
        if ( is_single() ) {
            $custom_ogp_description = get_post_meta( get_the_ID(), '_lala_ogp_description', true );
            $custom_seo_description = get_post_meta( get_the_ID(), '_lala_seo_description', true );
            
            if ( $custom_ogp_description ) {
                $og_description = $custom_ogp_description;
            } elseif ( $custom_seo_description ) {
                $og_description = $custom_seo_description;
            } else {
                $og_description = get_the_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 30 );
            }
        } else {
            $og_description = get_the_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 30 );
        }
    } else {
        $og_description = get_bloginfo( 'description' );
    }
    
    // Get image
    $og_image = '';
    if ( is_single() ) {
        // Check for custom OGP image first
        $custom_ogp_image_id = get_post_meta( get_the_ID(), '_lala_ogp_image_id', true );
        if ( $custom_ogp_image_id ) {
            $og_image = wp_get_attachment_url( $custom_ogp_image_id );
        } elseif ( has_post_thumbnail() ) {
            $og_image = get_the_post_thumbnail_url( $post->ID, 'large' );
        }
    } else {
        // Use site logo or default image
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        if ( $custom_logo_id ) {
            $og_image = wp_get_attachment_image_url( $custom_logo_id, 'full' );
        } else {
            $og_image = get_template_directory_uri() . '/images/default-og-image.jpg';
        }
    }
    
    ?>
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?php echo esc_attr( $og_type ); ?>">
    <meta property="og:url" content="<?php echo esc_url( $og_url ); ?>">
    <meta property="og:title" content="<?php echo esc_attr( $og_title ); ?>">
    <meta property="og:description" content="<?php echo esc_attr( wp_strip_all_tags( $og_description ) ); ?>">
    <meta property="og:image" content="<?php echo esc_url( $og_image ); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr( $og_site_name ); ?>">
    <meta property="og:locale" content="<?php echo esc_attr( $og_locale ); ?>">
    
    <?php if ( is_single() ) : ?>
    <meta property="article:published_time" content="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
    <meta property="article:modified_time" content="<?php echo esc_attr( get_the_modified_date( 'c' ) ); ?>">
    <meta property="article:author" content="<?php echo esc_attr( get_the_author() ); ?>">
    <?php endif; ?>
    
    <?php
}
add_action( 'wp_head', 'lala_add_open_graph_tags', 5 );

/**
 * Add Twitter Card tags
 */
function lala_add_twitter_card_tags() {
    global $post;
    
    // Get Twitter card type
    $twitter_card = 'summary_large_image';
    if ( is_single() ) {
        $custom_twitter_card = get_post_meta( get_the_ID(), '_lala_twitter_card', true );
        if ( $custom_twitter_card ) {
            $twitter_card = $custom_twitter_card;
        }
    }
    
    // Get title
    $twitter_title = '';
    if ( is_single() ) {
        $custom_ogp_title = get_post_meta( get_the_ID(), '_lala_ogp_title', true );
        $custom_seo_title = get_post_meta( get_the_ID(), '_lala_seo_title', true );
        
        if ( $custom_ogp_title ) {
            $twitter_title = $custom_ogp_title;
        } elseif ( $custom_seo_title ) {
            $twitter_title = $custom_seo_title;
        } else {
            $twitter_title = wp_get_document_title();
        }
    } else {
        $twitter_title = is_front_page() ? get_bloginfo( 'name' ) : wp_get_document_title();
    }
    
    // Get description
    $twitter_description = '';
    if ( is_front_page() ) {
        $twitter_description = 'LaLa Global Languageは、35言語に対応したオンライン語学スクール。バイリンガル講師による質の高いレッスンで、世界中の言語を自宅で学べます。';
    } elseif ( is_single() ) {
        $custom_ogp_description = get_post_meta( get_the_ID(), '_lala_ogp_description', true );
        $custom_seo_description = get_post_meta( get_the_ID(), '_lala_seo_description', true );
        
        if ( $custom_ogp_description ) {
            $twitter_description = $custom_ogp_description;
        } elseif ( $custom_seo_description ) {
            $twitter_description = $custom_seo_description;
        } else {
            $twitter_description = get_the_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 30 );
        }
    } elseif ( is_page() ) {
        $twitter_description = get_the_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 30 );
    } else {
        $twitter_description = get_bloginfo( 'description' );
    }
    
    // Get image
    $twitter_image = '';
    if ( is_single() ) {
        // Check for custom OGP image first
        $custom_ogp_image_id = get_post_meta( get_the_ID(), '_lala_ogp_image_id', true );
        if ( $custom_ogp_image_id ) {
            $twitter_image = wp_get_attachment_url( $custom_ogp_image_id );
        } elseif ( has_post_thumbnail() ) {
            $twitter_image = get_the_post_thumbnail_url( $post->ID, 'large' );
        }
    }
    
    if ( ! $twitter_image ) {
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        if ( $custom_logo_id ) {
            $twitter_image = wp_get_attachment_image_url( $custom_logo_id, 'full' );
        } else {
            $twitter_image = get_template_directory_uri() . '/images/default-og-image.jpg';
        }
    }
    
    ?>
    <!-- Twitter Card -->
    <meta name="twitter:card" content="<?php echo esc_attr( $twitter_card ); ?>">
    <meta name="twitter:title" content="<?php echo esc_attr( $twitter_title ); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr( wp_strip_all_tags( $twitter_description ) ); ?>">
    <meta name="twitter:image" content="<?php echo esc_url( $twitter_image ); ?>">
    <?php
}
add_action( 'wp_head', 'lala_add_twitter_card_tags', 5 );

/**
 * Add canonical URL
 */
function lala_add_canonical_url() {
    $canonical_url = '';
    
    if ( is_front_page() ) {
        $canonical_url = home_url( '/' );
    } elseif ( is_single() || is_page() ) {
        // Check for custom canonical URL on single posts
        if ( is_single() ) {
            $custom_canonical = get_post_meta( get_the_ID(), '_lala_seo_canonical', true );
            if ( $custom_canonical ) {
                $canonical_url = $custom_canonical;
            } else {
                $canonical_url = get_permalink();
            }
        } else {
            $canonical_url = get_permalink();
        }
    } elseif ( is_category() ) {
        $canonical_url = get_category_link( get_queried_object_id() );
    } elseif ( is_tag() ) {
        $canonical_url = get_tag_link( get_queried_object_id() );
    } elseif ( is_author() ) {
        $canonical_url = get_author_posts_url( get_queried_object_id() );
    } elseif ( is_date() ) {
        if ( is_day() ) {
            $canonical_url = get_day_link( get_query_var( 'year' ), get_query_var( 'monthnum' ), get_query_var( 'day' ) );
        } elseif ( is_month() ) {
            $canonical_url = get_month_link( get_query_var( 'year' ), get_query_var( 'monthnum' ) );
        } elseif ( is_year() ) {
            $canonical_url = get_year_link( get_query_var( 'year' ) );
        }
    }
    
    if ( $canonical_url ) {
        echo '<link rel="canonical" href="' . esc_url( $canonical_url ) . '">' . "\n";
    }
}
add_action( 'wp_head', 'lala_add_canonical_url', 1 );

/**
 * Add structured data (JSON-LD)
 */
function lala_add_structured_data() {
    $structured_data = array();
    
    // Organization schema for all pages
    $organization = array(
        '@context' => 'https://schema.org',
        '@type' => 'EducationalOrganization',
        'name' => 'LaLa Global Language',
        'url' => home_url( '/' ),
        'logo' => get_template_directory_uri() . '/images/logo.png',
        'description' => 'LaLa Global Languageは、35言語に対応したオンライン語学スクール。',
        'address' => array(
            '@type' => 'PostalAddress',
            'addressCountry' => 'JP'
        ),
        'sameAs' => array(
            'https://www.facebook.com/lalagloballanguage',
            'https://twitter.com/lalagloballang',
            'https://www.instagram.com/lalagloballanguage'
        )
    );
    
    // Page-specific schemas
    if ( is_front_page() ) {
        // Website schema
        $website = array(
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => 'LaLa Global Language',
            'url' => home_url( '/' ),
            'potentialAction' => array(
                '@type' => 'SearchAction',
                'target' => array(
                    '@type' => 'EntryPoint',
                    'urlTemplate' => home_url( '/?s={search_term_string}' )
                ),
                'query-input' => 'required name=search_term_string'
            )
        );
        $structured_data[] = $website;
        
        // Language School schema
        $language_school = array(
            '@context' => 'https://schema.org',
            '@type' => 'LanguageSchool',
            'name' => 'LaLa Global Language',
            'description' => '35言語に対応したオンライン語学スクール',
            'url' => home_url( '/' ),
            'priceRange' => '¥¥',
            'aggregateRating' => array(
                '@type' => 'AggregateRating',
                'ratingValue' => '4.8',
                'reviewCount' => '356'
            )
        );
        $structured_data[] = $language_school;
    } elseif ( is_page( 'courses' ) ) {
        // Course schema
        $course = array(
            '@context' => 'https://schema.org',
            '@type' => 'Course',
            'name' => '語学コース',
            'description' => '英語・中国語・韓国語・フランス語など35言語のコース',
            'provider' => array(
                '@type' => 'Organization',
                'name' => 'LaLa Global Language',
                'url' => home_url( '/' )
            ),
            'courseMode' => 'online',
            'isAccessibleForFree' => false
        );
        $structured_data[] = $course;
    } elseif ( is_page( 'faq' ) ) {
        // FAQ schema
        $faq = array(
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array(
                array(
                    '@type' => 'Question',
                    'name' => 'レッスンの予約方法は？',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'マイページから24時間いつでも予約可能です。'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => '無料体験レッスンはありますか？',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'はい、初回30分の無料体験レッスンをご用意しています。'
                    )
                )
            )
        );
        $structured_data[] = $faq;
    } elseif ( is_single() ) {
        // Article schema
        global $post;
        $article = array(
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => get_the_title(),
            'description' => get_the_excerpt(),
            'image' => has_post_thumbnail() ? get_the_post_thumbnail_url( $post->ID, 'large' ) : '',
            'datePublished' => get_the_date( 'c' ),
            'dateModified' => get_the_modified_date( 'c' ),
            'author' => array(
                '@type' => 'Person',
                'name' => get_the_author()
            ),
            'publisher' => array(
                '@type' => 'Organization',
                'name' => 'LaLa Global Language',
                'logo' => array(
                    '@type' => 'ImageObject',
                    'url' => get_template_directory_uri() . '/images/logo.png'
                )
            ),
            'mainEntityOfPage' => array(
                '@type' => 'WebPage',
                '@id' => get_permalink()
            )
        );
        $structured_data[] = $article;
        
        // BreadcrumbList schema
        $breadcrumb = array(
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => array(
                array(
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'ホーム',
                    'item' => home_url( '/' )
                ),
                array(
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'ブログ',
                    'item' => home_url( '/blog/' )
                ),
                array(
                    '@type' => 'ListItem',
                    'position' => 3,
                    'name' => get_the_title(),
                    'item' => get_permalink()
                )
            )
        );
        $structured_data[] = $breadcrumb;
    }
    
    // Always add organization schema
    $structured_data[] = $organization;
    
    // Output all structured data
    foreach ( $structured_data as $data ) {
        echo '<script type="application/ld+json">' . "\n";
        echo wp_json_encode( $data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT );
        echo "\n" . '</script>' . "\n";
    }
}
add_action( 'wp_head', 'lala_add_structured_data', 10 );

/**
 * Add additional SEO meta tags
 */
function lala_add_additional_seo_tags() {
    ?>
    <!-- Additional SEO Meta Tags -->
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">
    <meta name="bingbot" content="index, follow">
    <meta name="keywords" content="語学学習,オンライン英会話,中国語,韓国語,フランス語,スペイン語,ドイツ語,イタリア語,ポルトガル語,ロシア語,アラビア語,日本語教育,バイリンガル講師,マンツーマンレッスン,語学スクール">
    <meta name="author" content="LaLa Global Language">
    <meta name="copyright" content="LaLa Global Language">
    <meta name="language" content="Japanese">
    <meta name="revisit-after" content="7 days">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">
    
    <!-- Geo Tags -->
    <meta name="geo.region" content="JP">
    <meta name="geo.placename" content="Japan">
    
    <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicon-16x16.png">
    
    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php
}
add_action( 'wp_head', 'lala_add_additional_seo_tags', 2 );

/**
 * Generate XML sitemap
 */
function lala_generate_sitemap() {
    if ( isset( $_GET['sitemap'] ) && $_GET['sitemap'] == 'xml' ) {
        header( 'Content-Type: text/xml; charset=utf-8' );
        echo '<?xml version="1.0" encoding="UTF-8"?>';
        ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- Homepage -->
    <url>
        <loc><?php echo home_url( '/' ); ?></loc>
        <lastmod><?php echo date( 'c' ); ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    
    <!-- Pages -->
    <?php
    $pages = get_pages();
    foreach ( $pages as $page ) : ?>
    <url>
        <loc><?php echo get_permalink( $page->ID ); ?></loc>
        <lastmod><?php echo get_the_modified_date( 'c', $page->ID ); ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    <?php endforeach; ?>
    
    <!-- Posts -->
    <?php
    $posts = get_posts( array( 'numberposts' => -1 ) );
    foreach ( $posts as $post ) : ?>
    <url>
        <loc><?php echo get_permalink( $post->ID ); ?></loc>
        <lastmod><?php echo get_the_modified_date( 'c', $post->ID ); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
    <?php endforeach; ?>
    
    <!-- Categories -->
    <?php
    $categories = get_categories();
    foreach ( $categories as $category ) : ?>
    <url>
        <loc><?php echo get_category_link( $category->term_id ); ?></loc>
        <changefreq>weekly</changefreq>
        <priority>0.5</priority>
    </url>
    <?php endforeach; ?>
</urlset>
        <?php
        exit;
    }
}
add_action( 'init', 'lala_generate_sitemap' );

/**
 * Add robots.txt rules
 */
function lala_robots_txt( $output, $public ) {
    if ( $public ) {
        $output .= "Sitemap: " . home_url( '/?sitemap=xml' ) . "\n";
        $output .= "User-agent: *\n";
        $output .= "Allow: /\n";
        $output .= "Disallow: /wp-admin/\n";
        $output .= "Disallow: /wp-includes/\n";
        $output .= "Disallow: /?s=\n";
        $output .= "Disallow: /search/\n";
        $output .= "Crawl-delay: 1\n";
    }
    return $output;
}
add_filter( 'robots_txt', 'lala_robots_txt', 10, 2 );

/**
 * Optimize images with proper alt text
 */
function lala_auto_image_alt( $response, $attachment, $meta ) {
    if ( empty( $response['alt'] ) ) {
        $response['alt'] = $response['title'];
    }
    return $response;
}
add_filter( 'wp_prepare_attachment_for_js', 'lala_auto_image_alt', 10, 3 );

/**
 * Add WebP support
 */
function lala_add_webp_support( $mime_types ) {
    $mime_types['webp'] = 'image/webp';
    return $mime_types;
}
add_filter( 'upload_mimes', 'lala_add_webp_support' );

/**
 * Minify HTML output
 */
function lala_minify_html( $buffer ) {
    if ( ! is_admin() ) {
        $search = array(
            '/\>[^\S ]+/s',     // strip whitespaces after tags
            '/[^\S ]+\</s',     // strip whitespaces before tags
            '/(\s)+/s',         // shorten multiple whitespace sequences
            '/<!--(.|\s)*?-->/' // remove HTML comments
        );
        $replace = array(
            '>',
            '<',
            '\\1',
            ''
        );
        $buffer = preg_replace( $search, $replace, $buffer );
    }
    return $buffer;
}

function lala_buffer_start() {
    ob_start( 'lala_minify_html' );
}

function lala_buffer_end() {
    if ( ob_get_level() ) {
        ob_end_flush();
    }
}

// Disable HTML minification - it was breaking JavaScript
// add_action( 'init', 'lala_buffer_start' );
// add_action( 'wp_footer', 'lala_buffer_end', 100 );

/**
 * Add performance optimization headers
 */
function lala_add_performance_headers() {
    if ( ! is_admin() ) {
        header( 'X-Content-Type-Options: nosniff' );
        header( 'X-Frame-Options: SAMEORIGIN' );
        header( 'X-XSS-Protection: 1; mode=block' );
        header( 'Referrer-Policy: strict-origin-when-cross-origin' );
        header( 'Cache-Control: public, max-age=31536000' );
    }
}
add_action( 'send_headers', 'lala_add_performance_headers' );

/**
 * Lazy load images
 */
function lala_add_lazy_loading( $content ) {
    if ( ! is_admin() ) {
        $content = preg_replace( '/<img(.*?)src=/i', '<img$1loading="lazy" src=', $content );
    }
    return $content;
}
add_filter( 'the_content', 'lala_add_lazy_loading' );
add_filter( 'post_thumbnail_html', 'lala_add_lazy_loading' );
add_filter( 'widget_text', 'lala_add_lazy_loading' );