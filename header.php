<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php 
// Display announcement bar
get_template_part( 'template-parts/announcement', 'bar' ); 
?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lala-global-language' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="mobile-header">
                <div class="site-branding slide-in-left">
                    <?php if ( has_custom_logo() ) : ?>
                        <div class="site-logo">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php else : ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        </h1>
                        <?php
                        $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) :
                            ?>
                            <p class="site-description"><?php echo $description; ?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="menu-toggle-bar"></span>
                    <span class="menu-toggle-bar"></span>
                    <span class="menu-toggle-bar"></span>
                </button>
            </div>

            <nav id="site-navigation" class="main-navigation slide-in-right">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'container'      => 'div',
                        'container_class' => 'menu-container',
                        'fallback_cb'    => 'lala_global_language_fallback_menu',
                    )
                );
                ?>
            </nav>
        </div>

        <!-- Fun floating elements (desktop only) -->
        <div class="floating-shape desktop-only" style="top: 20%; left: 10%; width: 50px; height: 50px; background: var(--accent-color); border-radius: 50%;"></div>
        <div class="floating-shape desktop-only" style="top: 60%; right: 5%; width: 30px; height: 30px; background: var(--secondary-color); border-radius: 50%;"></div>
    </header>

    <style>
    /* Mobile header layout */
    .mobile-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }
    
    /* ロゴスタイルの改善 */
    .site-title {
        font-size: 1.8rem;
        margin: 0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        position: relative;
        display: inline-block;
    }
    
    .site-title a {
        color: white !important;
        font-weight: 800;
        letter-spacing: -0.5px;
        position: relative;
        display: inline-block;
        transition: all 0.3s ease;
    }
    
    .site-title a::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 3px;
        background: var(--accent-color);
        transition: width 0.3s ease;
        border-radius: 2px;
    }
    
    .site-title a:hover::after {
        width: 100%;
    }
    
    .site-title a:hover {
        transform: scale(1.05);
        text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.4);
    }
    
    .site-description {
        color: rgba(255, 255, 255, 0.95);
        font-size: 0.9rem;
        margin-top: 3px;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        animation: fadeInUp 0.6s ease-out 0.3s both;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .menu-toggle {
        display: none;
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 8px;
        cursor: pointer;
        padding: 10px;
        position: relative;
        width: 48px;
        height: 48px;
        transition: all 0.3s ease;
    }
    
    .menu-toggle:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: rgba(255, 255, 255, 0.5);
    }

    .menu-toggle-bar {
        display: block;
        width: 25px;
        height: 3px;
        background: white;
        margin: 5px auto;
        transition: all 0.3s ease;
        border-radius: 3px;
    }

    .menu-toggle[aria-expanded="true"] .menu-toggle-bar:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .menu-toggle[aria-expanded="true"] .menu-toggle-bar:nth-child(2) {
        opacity: 0;
    }

    .menu-toggle[aria-expanded="true"] .menu-toggle-bar:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px);
    }

    /* Menu animations on page load */
    @keyframes menuSlideDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .menu-container ul li {
        animation: menuSlideDown 0.5s ease-out forwards;
        opacity: 0;
    }
    
    .menu-container ul li:nth-child(1) { animation-delay: 0.1s; }
    .menu-container ul li:nth-child(2) { animation-delay: 0.2s; }
    .menu-container ul li:nth-child(3) { animation-delay: 0.3s; }
    .menu-container ul li:nth-child(4) { animation-delay: 0.4s; }
    .menu-container ul li:nth-child(5) { animation-delay: 0.5s; }
    .menu-container ul li:nth-child(6) { animation-delay: 0.6s; }
    
    /* Desktop: Hide mobile header structure */
    @media (min-width: 769px) {
        .mobile-header {
            display: contents;
        }
        
        .menu-toggle {
            display: none !important;
        }
    }
    
    /* Default WordPress menu fallback */
    .menu-container {
        flex: 1;
        display: flex;
        justify-content: flex-end;
    }
    
    .menu-container ul {
        list-style: none;
        display: flex;
        gap: 15px;
        margin: 0;
        padding: 0;
    }

    .menu-container ul li {
        position: relative;
    }

    .menu-container ul li a {
        color: var(--light-color);
        text-decoration: none;
        font-weight: 600;
        padding: 10px 20px;
        border-radius: 50px;
        transition: all 0.3s ease;
        display: block;
        font-size: 0.95rem;
        white-space: nowrap;
        position: relative;
        overflow: hidden;
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .menu-container ul li a::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.3) 0%, transparent 70%);
        transform: translate(-50%, -50%);
        transition: width 0.6s ease, height 0.6s ease;
        border-radius: 50%;
    }
    
    .menu-container ul li a:hover::before {
        width: 300px;
        height: 300px;
    }

    .menu-container ul li a:hover,
    .menu-container ul li.current-menu-item a {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        border-color: rgba(255, 255, 255, 0.4);
    }
    
    .menu-container ul li.current-menu-item a {
        background: rgba(255, 255, 255, 0.3);
        box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.5);
    }
    
    /* Menu item icon animation */
    .menu-container ul li a::after {
        content: '→';
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%) translateX(10px);
        opacity: 0;
        transition: all 0.3s ease;
        font-size: 1.2rem;
    }
    
    .menu-container ul li a:hover::after {
        transform: translateY(-50%) translateX(0);
        opacity: 1;
    }

    /* Dropdown menu */
    .menu-container ul li ul {
        position: absolute;
        top: calc(100% + 10px);
        left: 50%;
        transform: translateX(-50%) translateY(-10px);
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        min-width: 220px;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        border-radius: 15px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        flex-direction: column;
        gap: 0;
        padding: 15px 0;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .menu-container ul li:hover ul {
        opacity: 1;
        visibility: visible;
        transform: translateX(-50%) translateY(0);
    }
    
    /* Dropdown arrow */
    .menu-container ul li ul::before {
        content: '';
        position: absolute;
        top: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-bottom: 8px solid rgba(255, 255, 255, 0.95);
    }

    .menu-container ul li ul li a {
        color: var(--dark-color);
        padding: 12px 25px;
        border-radius: 0;
        background: transparent;
        border: none;
        text-transform: none;
        letter-spacing: normal;
        font-weight: 500;
        position: relative;
        overflow: hidden;
    }
    
    .menu-container ul li ul li a::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 3px;
        height: 0;
        background: var(--primary-color);
        transition: height 0.3s ease;
    }

    .menu-container ul li ul li a:hover {
        background: var(--primary-color);
        color: white;
        transform: translateX(5px);
        box-shadow: none;
    }
    
    .menu-container ul li ul li a:hover::before {
        height: 100%;
    }

    /* Mobile Navigation */
    @media (max-width: 768px) {
        .site-header {
            padding: 10px 0;
        }
        
        .site-header .container {
            padding: 0 15px;
        }
        
        .mobile-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        
        .site-branding {
            flex: 1;
            animation: none;
        }
        
        .site-title {
            font-size: 1.4rem;
        }
        
        .site-description {
            font-size: 0.8rem;
        }
        
        .menu-toggle {
            display: block;
            z-index: 1001;
            flex-shrink: 0;
            margin-left: 15px;
        }
        
        .main-navigation {
            display: block;
        }

        .menu-container {
            position: fixed;
            top: 0;
            left: -100%;
            width: 85%;
            max-width: 320px;
            height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: left 0.3s ease;
            overflow-y: auto;
            z-index: 1000;
            box-shadow: 2px 0 20px rgba(0, 0, 0, 0.2);
        }

        .menu-container.toggled {
            left: 0;
        }
        
        /* Overlay */
        .menu-container.toggled::after {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .menu-container ul {
            flex-direction: column;
            padding: 80px 20px 20px;
            gap: 5px;
        }
        
        .menu-container ul li a {
            padding: 15px 20px;
            font-size: 1.1rem;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            margin-bottom: 5px;
            display: block;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            text-transform: none;
            letter-spacing: normal;
            position: relative;
            overflow: visible;
        }
        
        .menu-container ul li a::before {
            display: none;
        }
        
        .menu-container ul li a::after {
            display: none;
        }
        
        .menu-container ul li a:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateX(5px);
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .menu-container ul li ul {
            position: static;
            opacity: 1;
            visibility: visible;
            transform: none;
            background: rgba(0, 0, 0, 0.1);
            margin: 10px 0;
            padding: 10px;
            border-radius: 10px;
        }
        
        /* Close menu when clicking overlay */
        body.menu-open {
            overflow: hidden;
        }
        
        /* Hide floating shapes on mobile */
        .floating-shape {
            display: none !important;
        }
    }
    
    /* Extra small devices */
    @media (max-width: 480px) {
        .site-title {
            font-size: 1.2rem;
        }
        
        .menu-container {
            width: 90%;
        }
        
        .menu-container ul li a {
            font-size: 1rem;
        }
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.querySelector('.menu-toggle');
        const menuContainer = document.querySelector('.menu-container');
        const body = document.body;
        
        // Calculate and set announcement bar height
        function updateAnnouncementHeight() {
            const announcementBar = document.querySelector('.announcement-bar');
            if (announcementBar) {
                const height = announcementBar.offsetHeight;
                document.documentElement.style.setProperty('--announcement-height', height + 'px');
            }
        }
        
        // Update on load and resize
        updateAnnouncementHeight();
        window.addEventListener('resize', updateAnnouncementHeight);
        
        if (menuToggle) {
            menuToggle.addEventListener('click', function() {
                const expanded = this.getAttribute('aria-expanded') === 'true' || false;
                this.setAttribute('aria-expanded', !expanded);
                menuContainer.classList.toggle('toggled');
                body.classList.toggle('menu-open');
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                if (menuContainer.classList.contains('toggled') && 
                    !menuContainer.contains(event.target) && 
                    !menuToggle.contains(event.target)) {
                    menuToggle.setAttribute('aria-expanded', 'false');
                    menuContainer.classList.remove('toggled');
                    body.classList.remove('menu-open');
                }
            });
            
            // Close menu when clicking on a link
            const menuLinks = menuContainer.querySelectorAll('a');
            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    menuToggle.setAttribute('aria-expanded', 'false');
                    menuContainer.classList.remove('toggled');
                    body.classList.remove('menu-open');
                });
            });
        }
    });
    </script>