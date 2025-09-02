<?php
/**
 * Template Name: Instructors Page
 * Description: 講師紹介ページ（Coming Soon）
 *
 * @package LaLa_Global_Language
 */

get_header(); ?>

<?php lala_breadcrumbs(); ?>

<main id="primary" class="site-main coming-soon-page">
    <section class="coming-soon-section">
        <div class="container">
            <div class="coming-soon-content">
                <div class="coming-soon-icon">👩‍🏫</div>
                <h1 class="coming-soon-title">COMING SOON</h1>
                <p class="coming-soon-subtitle">講師紹介ページ準備中</p>
                
                <div class="coming-soon-message">
                    <p>LaLa GLOBAL LANGUAGEの素晴らしい講師陣を<br>
                    ご紹介するページを準備しています。</p>
                    <p>35言語を教える個性豊かな講師たちの<br>
                    プロフィールをお楽しみに！</p>
                </div>
                
                <div class="language-icons">
                    <span class="icon-item">🇯🇵</span>
                    <span class="icon-item">🇺🇸</span>
                    <span class="icon-item">🇨🇳</span>
                    <span class="icon-item">🇰🇷</span>
                    <span class="icon-item">🇪🇸</span>
                    <span class="icon-item">🇫🇷</span>
                    <span class="icon-item">🇩🇪</span>
                    <span class="icon-item">🇮🇹</span>
                </div>
                
                <div class="cta-buttons">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">ホームに戻る</a>
                    <a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>" class="btn btn-secondary">コース一覧を見る</a>
                </div>
            </div>
        </div>
        
        <!-- Background decoration -->
        <div class="bg-decoration">
            <div class="circle circle-1"></div>
            <div class="circle circle-2"></div>
            <div class="circle circle-3"></div>
        </div>
    </section>
</main>

<style>
/* Coming Soon Page Styles */
.coming-soon-page {
    min-height: calc(100vh - 200px);
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
    overflow: hidden;
}

.coming-soon-section {
    width: 100%;
    padding: 80px 0;
    position: relative;
    z-index: 1;
}

.coming-soon-content {
    text-align: center;
    background: rgba(255, 255, 255, 0.95);
    padding: 80px 60px;
    border-radius: 30px;
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 0 auto;
    backdrop-filter: blur(10px);
}

.coming-soon-icon {
    font-size: 5rem;
    margin-bottom: 30px;
    animation: bounce 2s infinite;
}

.coming-soon-title {
    font-size: 4rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 20px;
    font-weight: 800;
    letter-spacing: 2px;
}

.coming-soon-subtitle {
    font-size: 1.5rem;
    color: var(--secondary-color);
    margin-bottom: 40px;
    font-weight: 600;
}

.coming-soon-message {
    font-size: 1.2rem;
    line-height: 1.8;
    color: var(--text-color);
    margin-bottom: 50px;
}

.coming-soon-message p {
    margin-bottom: 20px;
}

.language-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    margin-bottom: 50px;
}

.icon-item {
    font-size: 2.5rem;
    filter: grayscale(0%);
    transition: all 0.3s ease;
    animation: fadeInUp 0.6s ease-out forwards;
    opacity: 0;
}

.icon-item:nth-child(1) { animation-delay: 0.1s; }
.icon-item:nth-child(2) { animation-delay: 0.2s; }
.icon-item:nth-child(3) { animation-delay: 0.3s; }
.icon-item:nth-child(4) { animation-delay: 0.4s; }
.icon-item:nth-child(5) { animation-delay: 0.5s; }
.icon-item:nth-child(6) { animation-delay: 0.6s; }
.icon-item:nth-child(7) { animation-delay: 0.7s; }
.icon-item:nth-child(8) { animation-delay: 0.8s; }

.icon-item:hover {
    transform: scale(1.2) rotate(10deg);
    filter: grayscale(0%);
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-buttons .btn {
    padding: 18px 40px;
    font-size: 1.1rem;
}

/* Background decoration */
.bg-decoration {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
    z-index: 0;
}

.circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
}

.circle-1 {
    width: 300px;
    height: 300px;
    top: -150px;
    left: -150px;
    animation: float 20s ease-in-out infinite;
}

.circle-2 {
    width: 200px;
    height: 200px;
    bottom: -100px;
    right: -100px;
    animation: float 15s ease-in-out infinite reverse;
}

.circle-3 {
    width: 150px;
    height: 150px;
    top: 50%;
    right: 10%;
    animation: float 25s ease-in-out infinite;
}

/* Animations */
@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-20px);
    }
    60% {
        transform: translateY(-10px);
    }
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
    from {
        opacity: 0;
        transform: translateY(20px);
    }
}

@keyframes float {
    0%, 100% {
        transform: translate(0, 0) scale(1);
    }
    33% {
        transform: translate(30px, -30px) scale(1.1);
    }
    66% {
        transform: translate(-20px, 20px) scale(0.9);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .coming-soon-content {
        padding: 60px 30px;
    }
    
    .coming-soon-icon {
        font-size: 4rem;
    }
    
    .coming-soon-title {
        font-size: 2.5rem;
    }
    
    .coming-soon-subtitle {
        font-size: 1.2rem;
    }
    
    .coming-soon-message {
        font-size: 1rem;
    }
    
    .language-icons {
        gap: 15px;
    }
    
    .icon-item {
        font-size: 2rem;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .cta-buttons .btn {
        width: 100%;
        max-width: 280px;
    }
    
    /* Disable animations on mobile */
    .coming-soon-icon,
    .icon-item,
    .circle {
        animation: none !important;
    }
    
    .icon-item {
        opacity: 1;
    }
}

@media (max-width: 480px) {
    .coming-soon-content {
        padding: 40px 20px;
    }
    
    .coming-soon-title {
        font-size: 2rem;
    }
    
    .coming-soon-subtitle {
        font-size: 1rem;
    }
    
    .language-icons {
        gap: 10px;
    }
    
    .icon-item {
        font-size: 1.5rem;
    }
}

/* Reduced motion preference */
@media (prefers-reduced-motion: reduce) {
    * {
        animation: none !important;
        transition: none !important;
    }
    
    .icon-item {
        opacity: 1;
    }
}
</style>

<?php get_footer(); ?>