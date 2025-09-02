<?php
/**
 * Breadcrumbs functionality for LaLa Global Language
 *
 * @package LaLa_Global_Language
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Generate breadcrumbs with structured data
 */
function lala_breadcrumbs() {
    // Don't show on homepage
    if ( is_front_page() ) {
        return;
    }
    
    // Settings
    $separator = '<span class="breadcrumb-separator" aria-hidden="true"></span>';
    $home_title = 'ホーム';
    $prefix = '<div class="breadcrumb-wrapper"><div class="container">';
    $suffix = '</div></div>';
    $breadcrumb_id = 'breadcrumb';
    $breadcrumb_class = 'breadcrumbs';
    $home_icon = '<svg class="breadcrumb-home-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><polyline points="9 22 9 12 15 12 15 22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
    
    // Get the query & post info
    global $post, $wp_query;
    
    // Initialize
    $breadcrumb_trail = array();
    $breadcrumb_trail[] = array(
        'title' => $home_title,
        'link' => home_url('/'),
        'icon' => $home_icon
    );
    
    // Build the breadcrumb trail
    if ( is_single() ) {
        // Single post
        $categories = get_the_category();
        if ( $categories ) {
            $category = $categories[0];
            $breadcrumb_trail[] = array(
                'title' => 'ブログ',
                'link' => home_url('/blog/')
            );
            $breadcrumb_trail[] = array(
                'title' => $category->name,
                'link' => get_category_link( $category->term_id )
            );
        }
        $breadcrumb_trail[] = array(
            'title' => get_the_title(),
            'link' => ''
        );
        
    } elseif ( is_page() ) {
        // Page
        if ( $post->post_parent ) {
            // Child page
            $ancestors = array_reverse( get_post_ancestors( $post->ID ) );
            foreach ( $ancestors as $ancestor ) {
                $breadcrumb_trail[] = array(
                    'title' => get_the_title( $ancestor ),
                    'link' => get_permalink( $ancestor )
                );
            }
        }
        
        // Current page
        $breadcrumb_trail[] = array(
            'title' => get_the_title(),
            'link' => ''
        );
        
    } elseif ( is_category() ) {
        // Category archive
        $breadcrumb_trail[] = array(
            'title' => 'ブログ',
            'link' => home_url('/blog/')
        );
        
        $category = get_queried_object();
        if ( $category->parent ) {
            $parent_categories = get_ancestors( $category->term_id, 'category' );
            $parent_categories = array_reverse( $parent_categories );
            foreach ( $parent_categories as $parent_category ) {
                $parent = get_category( $parent_category );
                $breadcrumb_trail[] = array(
                    'title' => $parent->name,
                    'link' => get_category_link( $parent->term_id )
                );
            }
        }
        
        $breadcrumb_trail[] = array(
            'title' => single_cat_title( '', false ),
            'link' => ''
        );
        
    } elseif ( is_tag() ) {
        // Tag archive
        $breadcrumb_trail[] = array(
            'title' => 'ブログ',
            'link' => home_url('/blog/')
        );
        $breadcrumb_trail[] = array(
            'title' => 'タグ: ' . single_tag_title( '', false ),
            'link' => ''
        );
        
    } elseif ( is_date() ) {
        // Date archive
        $breadcrumb_trail[] = array(
            'title' => 'ブログ',
            'link' => home_url('/blog/')
        );
        
        if ( is_year() ) {
            $breadcrumb_trail[] = array(
                'title' => get_the_date( 'Y年' ),
                'link' => ''
            );
        } elseif ( is_month() ) {
            $breadcrumb_trail[] = array(
                'title' => get_the_date( 'Y年' ),
                'link' => get_year_link( get_the_date( 'Y' ) )
            );
            $breadcrumb_trail[] = array(
                'title' => get_the_date( 'F' ),
                'link' => ''
            );
        } elseif ( is_day() ) {
            $breadcrumb_trail[] = array(
                'title' => get_the_date( 'Y年' ),
                'link' => get_year_link( get_the_date( 'Y' ) )
            );
            $breadcrumb_trail[] = array(
                'title' => get_the_date( 'F' ),
                'link' => get_month_link( get_the_date( 'Y' ), get_the_date( 'm' ) )
            );
            $breadcrumb_trail[] = array(
                'title' => get_the_date( 'j日' ),
                'link' => ''
            );
        }
        
    } elseif ( is_author() ) {
        // Author archive
        $breadcrumb_trail[] = array(
            'title' => 'ブログ',
            'link' => home_url('/blog/')
        );
        $breadcrumb_trail[] = array(
            'title' => '著者: ' . get_the_author(),
            'link' => ''
        );
        
    } elseif ( is_search() ) {
        // Search results
        $breadcrumb_trail[] = array(
            'title' => '検索結果: ' . get_search_query(),
            'link' => ''
        );
        
    } elseif ( is_404() ) {
        // 404 page
        $breadcrumb_trail[] = array(
            'title' => 'ページが見つかりません',
            'link' => ''
        );
        
    } elseif ( is_home() ) {
        // Blog home
        $breadcrumb_trail[] = array(
            'title' => 'ブログ',
            'link' => ''
        );
    }
    
    // Generate structured data
    $structured_data = array(
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => array()
    );
    
    $position = 1;
    foreach ( $breadcrumb_trail as $item ) {
        $list_item = array(
            '@type' => 'ListItem',
            'position' => $position,
            'name' => wp_strip_all_tags( $item['title'] )
        );
        
        if ( ! empty( $item['link'] ) ) {
            $list_item['item'] = $item['link'];
        }
        
        $structured_data['itemListElement'][] = $list_item;
        $position++;
    }
    
    // Output breadcrumbs
    echo $prefix;
    echo '<nav id="' . esc_attr( $breadcrumb_id ) . '" class="' . esc_attr( $breadcrumb_class ) . '" aria-label="パンくずリスト">';
    echo '<ol class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">';
    
    $breadcrumb_count = count( $breadcrumb_trail );
    $i = 1;
    
    foreach ( $breadcrumb_trail as $key => $item ) {
        $is_last = ( $i == $breadcrumb_count );
        
        echo '<li class="breadcrumb-item' . ( $is_last ? ' breadcrumb-item-current' : '' ) . '" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        
        if ( ! empty( $item['link'] ) && ! $is_last ) {
            echo '<a href="' . esc_url( $item['link'] ) . '" itemprop="item" class="breadcrumb-link">';
            if ( isset( $item['icon'] ) ) {
                echo $item['icon'];
            }
            echo '<span itemprop="name">' . esc_html( $item['title'] ) . '</span>';
            echo '</a>';
        } else {
            echo '<span class="breadcrumb-current" aria-current="page">';
            if ( isset( $item['icon'] ) ) {
                echo $item['icon'];
            }
            echo '<span itemprop="name">' . esc_html( wp_trim_words( $item['title'], 10, '...' ) ) . '</span>';
            echo '</span>';
        }
        
        echo '<meta itemprop="position" content="' . esc_attr( $i ) . '" />';
        
        if ( ! $is_last ) {
            echo $separator;
        }
        
        echo '</li>';
        $i++;
    }
    
    echo '</ol>';
    echo '</nav>';
    
    // Output structured data
    echo '<script type="application/ld+json">' . wp_json_encode( $structured_data ) . '</script>';
    
    echo $suffix;
}

/**
 * Display breadcrumbs with custom settings
 *
 * @param array $args Custom arguments for breadcrumb display
 */
function lala_display_breadcrumbs( $args = array() ) {
    $defaults = array(
        'show_on_home' => false,
        'show_current' => true,
        'before' => '',
        'after' => ''
    );
    
    $args = wp_parse_args( $args, $defaults );
    
    // Don't show on homepage unless specified
    if ( is_front_page() && ! $args['show_on_home'] ) {
        return;
    }
    
    echo $args['before'];
    lala_breadcrumbs();
    echo $args['after'];
}