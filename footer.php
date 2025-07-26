    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-widget">
                    <h3>LaLa Global Languageについて</h3>
                    <p>35ヶ国語から選べる、日本人のための語学スクール。楽しく学んで、世界とつながろう！</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><span class="emoji-animation">📘</span></a>
                        <a href="#" aria-label="Twitter"><span class="emoji-animation">🐦</span></a>
                        <a href="#" aria-label="Instagram"><span class="emoji-animation">📷</span></a>
                        <a href="#" aria-label="YouTube"><span class="emoji-animation">📺</span></a>
                    </div>
                </div>

                <div class="footer-widget">
                    <h3>クイックリンク</h3>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_class'     => 'footer-menu',
                            'depth'          => 1,
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                </div>

                <div class="footer-widget">
                    <h3>対応言語（35言語）</h3>
                    <ul class="language-list">
                        <li><span class="language-flag">🌏</span> アジア（12言語）</li>
                        <li><span class="language-flag">🌏</span> 南アジア（7言語）</li>
                        <li><span class="language-flag">🌍</span> ヨーロッパ（7言語）</li>
                        <li><span class="language-flag">🌍</span> 東欧・ロシア（4言語）</li>
                        <li><span class="language-flag">🌍</span> 中東・アフリカ（5言語）</li>
                    </ul>
                    <a href="#languages" class="footer-link">全言語リストを見る →</a>
                </div>

            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
                <p class="made-with-love">語学を学ぶすべての人へ <span class="heart-animation">❤️</span></p>
            </div>
        </div>

        <!-- Fun floating elements (desktop only) -->
        <div class="footer-decoration desktop-only">
            <span class="floating-emoji" style="animation-delay: 0s;">🌍</span>
            <span class="floating-emoji" style="animation-delay: 1s;">🗣️</span>
            <span class="floating-emoji" style="animation-delay: 2s;">📚</span>
            <span class="floating-emoji" style="animation-delay: 3s;">✨</span>
        </div>
    </footer>

    <style>
    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }

    .social-links a {
        display: inline-block;
        font-size: 1.5rem;
        transition: transform 0.3s ease;
    }

    .social-links a:hover {
        transform: scale(1.2);
    }

    .footer-menu {
        list-style: none;
        padding: 0;
    }

    .footer-menu li {
        margin-bottom: 10px;
    }

    .footer-menu a {
        color: var(--light-color);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-menu a:hover {
        color: var(--accent-color);
    }

    .language-list {
        list-style: none;
        padding: 0;
    }

    .language-list li {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .language-flag {
        font-size: 1.5rem;
    }


    .heart-animation {
        display: inline-block;
        animation: heartbeat 1.5s ease-in-out infinite;
    }

    @keyframes heartbeat {
        0% { transform: scale(1); }
        14% { transform: scale(1.3); }
        28% { transform: scale(1); }
        42% { transform: scale(1.3); }
        70% { transform: scale(1); }
    }

    .footer-decoration {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
    }

    .floating-emoji {
        position: absolute;
        font-size: 2rem;
        opacity: 0.1;
        animation: floatUp 10s infinite;
    }

    @keyframes floatUp {
        0% {
            transform: translateY(100vh) rotate(0deg);
            opacity: 0;
        }
        10% {
            opacity: 0.1;
        }
        90% {
            opacity: 0.1;
        }
        100% {
            transform: translateY(-100vh) rotate(360deg);
            opacity: 0;
        }
    }

    .floating-emoji:nth-child(1) { left: 10%; }
    .floating-emoji:nth-child(2) { left: 30%; }
    .floating-emoji:nth-child(3) { left: 60%; }
    .floating-emoji:nth-child(4) { left: 85%; }

    .made-with-love {
        margin-top: 10px;
        font-size: 0.9rem;
        opacity: 0.8;
    }
    
    .footer-link {
        display: inline-block;
        margin-top: 15px;
        color: var(--accent-color);
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    
    .footer-link:hover {
        color: var(--light-color);
    }

    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
        }
        
        /* Disable all footer animations on mobile */
        .footer-decoration {
            display: none !important;
        }
        
        .floating-emoji {
            animation: none !important;
            display: none !important;
        }
        
        .heart-animation {
            animation: none !important;
        }
        
        /* Disable hover animations on mobile */
        .social-links a:hover {
            transform: none;
        }
        
        .footer-link:hover {
            transform: none;
        }
    }
    </style>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>