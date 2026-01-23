<?php
/**
 * Template Name: Contact Page
 * 
 * @package LaLa_Global_Language
 */

get_header(); ?>

<?php lala_breadcrumbs(); ?>

<main id="primary" class="site-main contact-page">
    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="page-title fade-in">お問い合わせ</h1>
                <p class="hero-subtitle fade-in">レッスンや料金についてのご質問、体験レッスンのお申し込みなど<br>お気軽にお問い合わせください</p>
            </div>
        </div>
    </section>

    <!-- Contact Options Section -->
    <section class="contact-options-section">
        <div class="container">
            <div class="contact-options-grid">
                <!-- Phone Contact -->
                <div class="contact-option-card fade-in">
                    <div class="option-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <h3>お電話でのお問い合わせ</h3>
                    <p class="option-description">お急ぎの方はお電話でどうぞ</p>
                    <a href="tel:050-1724-0077" class="phone-number">050-1724-0077</a>
                    <p class="option-note">受付時間：平日 10:00〜18:00</p>
                </div>

                <!-- Booking -->
                <div class="contact-option-card fade-in">
                    <div class="option-icon booking-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                            <path d="M9 16l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3>無料相談を予約する</h3>
                    <p class="option-description">オンラインで日程を選んで予約できます</p>
                    <a href="https://calendar.app.google/1NHanqxGMH3y6XAt6" class="btn btn-booking" target="_blank" rel="noopener noreferrer">相談予約はこちら</a>
                    <p class="option-note">所要時間：約30分（無料）</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Response Time Section -->
    <section class="response-time-section">
        <div class="container">
            <div class="response-time fade-in">
                <p>フォームからのお問い合わせには、通常3営業日以内にご返信いたします</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="form-wrapper">
                <h2 class="section-title">お問い合わせフォーム</h2>
                
                <div class="contact-form-area">
                    <p class="form-instruction">以下のフォームに必要事項をご記入ください。</p>
                    
                    <?php
                    // Display page content (where Contact Form 7 shortcode will be placed)
                    while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile;
                    ?>
                    
                    <?php
                    // If no content, show placeholder
                    if ( empty( get_the_content() ) ) :
                    ?>
                    <div class="contact-form-placeholder">
                        <p>お問い合わせフォームを設定するには：</p>
                        <ol>
                            <li>WordPress管理画面から「お問い合わせ」→「コンタクトフォーム」へ</li>
                            <li>フォームを作成し、ショートコードをコピー</li>
                            <li>このページの編集画面にショートコードを貼り付け</li>
                        </ol>
                        <p>詳しい設定方法は、<a href="<?php echo esc_url( home_url( '/contact-form-7-setup-guide.md' ) ); ?>">設定ガイド</a>をご覧ください。</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Link Section -->
    <section class="faq-link-section">
        <div class="container">
            <div class="faq-link-content">
                <h3>よくあるご質問</h3>
                <p>お問い合わせの前に、よくある質問をご確認ください。</p>
                <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="btn btn-secondary">よくある質問を見る</a>
            </div>
        </div>
    </section>
</main>

<style>
/* Contact Page Specific Styles */
.contact-page {
    background: #f8f9fa;
}

/* Hero Section */
.contact-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 150px 0 100px;
    text-align: center;
    color: white;
    position: relative;
    overflow: hidden;
}

.contact-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
}

.hero-content {
    position: relative;
    z-index: 1;
}

.page-title {
    font-size: 3rem;
    margin-bottom: 20px;
}

.hero-subtitle {
    font-size: 1.3rem;
    opacity: 0.9;
    text-align: center;
}

/* Contact Options Section */
.contact-options-section {
    padding: 60px 0;
    background: white;
}

.contact-options-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 40px;
    max-width: 900px;
    margin: 0 auto;
}

.contact-option-card {
    background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
    border-radius: 24px;
    padding: 50px 40px;
    text-align: center;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.05);
}

.contact-option-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
}

.option-icon {
    width: 90px;
    height: 90px;
    background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
    color: #2e7d32;
}

.option-icon.booking-icon {
    background: linear-gradient(135deg, #fff3e0 0%, #ffe0b2 100%);
    color: #ef6c00;
}

.contact-option-card h3 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 12px;
    font-weight: 700;
}

.option-description {
    font-size: 1rem;
    color: #666;
    margin-bottom: 25px;
}

.phone-number {
    display: inline-block;
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary-color);
    text-decoration: none;
    letter-spacing: 1px;
    transition: all 0.3s ease;
}

.phone-number:hover {
    color: #006666;
    transform: scale(1.05);
}

.btn-booking {
    display: inline-block;
    background: linear-gradient(135deg, #ff9800 0%, #f57c00 100%);
    color: white;
    padding: 18px 45px;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(255, 152, 0, 0.3);
}

.btn-booking:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(255, 152, 0, 0.4);
    color: white;
}

.option-note {
    font-size: 0.9rem;
    color: #888;
    margin-top: 20px;
    margin-bottom: 0;
}

/* Response Time Section */
.response-time-section {
    padding: 30px 0;
    background: #f8f9fa;
}

.response-time {
    text-align: center;
    padding: 20px 30px;
    background: white;
    border-radius: 12px;
    max-width: 500px;
    margin: 0 auto;
    border-left: 4px solid var(--primary-color);
}

.response-time p {
    margin: 0;
    font-size: 1rem;
    color: #555;
}

.form-instruction {
    text-align: center;
    font-size: 1.1rem;
    color: #666;
    margin-bottom: 40px;
}

/* Contact Form Section */
.contact-form-section {
    padding: 0 0 80px;
    background: white;
}

.form-wrapper {
    max-width: 800px;
    margin: 0 auto;
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    color: var(--primary-color);
    margin-bottom: 50px;
}

/* Contact Form 7 Styling Override */
.contact-form-section .wpcf7,
.contact-form-area .lala-contact-form {
    background: white;
    padding: 50px;
    border-radius: 30px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}

.contact-form-section .wpcf7-form {
    display: block;
}

.contact-form-section .wpcf7-form p {
    margin-bottom: 25px;
}

.contact-form-section .wpcf7-form label {
    display: block;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
    font-size: 1.1rem;
}

.contact-form-section .wpcf7-form input[type="text"],
.contact-form-section .wpcf7-form input[type="email"],
.contact-form-section .wpcf7-form input[type="tel"],
.contact-form-section .wpcf7-form textarea,
.contact-form-section .wpcf7-form select {
    width: 100%;
    padding: 15px 20px;
    font-size: 1rem;
    border: 2px solid #e0e0e0;
    border-radius: 10px;
    background: #f8f9fa;
    transition: all 0.3s ease;
}

.contact-form-section .wpcf7-form input[type="text"]:focus,
.contact-form-section .wpcf7-form input[type="email"]:focus,
.contact-form-section .wpcf7-form input[type="tel"]:focus,
.contact-form-section .wpcf7-form textarea:focus,
.contact-form-section .wpcf7-form select:focus {
    outline: none;
    border-color: var(--primary-color);
    background: white;
}

.contact-form-section .wpcf7-form textarea {
    resize: vertical;
    min-height: 150px;
}

.contact-form-section .wpcf7-form .wpcf7-submit {
    background: linear-gradient(135deg, var(--primary-color) 0%, #006666 100%);
    color: white;
    padding: 18px 50px;
    font-size: 1.1rem;
    font-weight: 600;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: block;
    margin: 30px auto 0;
}

.contact-form-section .wpcf7-form .wpcf7-submit:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(0, 128, 128, 0.3);
}

/* Privacy Policy Link Styling */
.contact-form-section .privacy-text a,
.contact-form-section .wpcf7-form a {
    color: var(--primary-color);
    text-decoration: underline;
    font-weight: 500;
}

.contact-form-section .privacy-text a:hover,
.contact-form-section .wpcf7-form a:hover {
    text-decoration: none;
    color: #006666;
}

/* Contact Form Placeholder */
.contact-form-placeholder {
    background: #f8f9fa;
    padding: 60px;
    border-radius: 20px;
    text-align: center;
}

.contact-form-placeholder p {
    font-size: 1.1rem;
    color: #666;
    margin-bottom: 20px;
}

.contact-form-placeholder a {
    color: var(--primary-color);
    text-decoration: underline;
}

/* FAQ Link Section */
.faq-link-section {
    padding: 60px 0;
    background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%);
}

.faq-link-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.faq-link-content h3 {
    font-size: 2rem;
    color: var(--primary-color);
    margin-bottom: 20px;
}

.faq-link-content p {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 30px;
    text-align: center;
}

.btn-secondary {
    background: white;
    color: var(--primary-color);
    padding: 15px 40px;
    border: 2px solid var(--primary-color);
    font-weight: 600;
}

.btn-secondary:hover {
    background: var(--primary-color);
    color: white;
}

/* Animations */
.fade-in {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeIn 0.8s ease forwards;
}

.fade-in:nth-child(1) { animation-delay: 0.1s; }
.fade-in:nth-child(2) { animation-delay: 0.2s; }
.fade-in:nth-child(3) { animation-delay: 0.3s; }

@keyframes fadeIn {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    /* Hero Section */
    .contact-hero {
        padding: 120px 0 80px;
    }

    .page-title {
        font-size: 2rem;
    }

    .hero-subtitle {
        font-size: 1.1rem;
        padding: 0 20px;
    }

    .hero-subtitle br {
        display: none;
    }

    /* Contact Options */
    .contact-options-section {
        padding: 40px 0;
    }

    .contact-options-grid {
        grid-template-columns: 1fr;
        gap: 25px;
        padding: 0 15px;
    }

    .contact-option-card {
        padding: 35px 25px;
    }

    .option-icon {
        width: 70px;
        height: 70px;
    }

    .option-icon svg {
        width: 36px;
        height: 36px;
    }

    .contact-option-card h3 {
        font-size: 1.3rem;
    }

    .phone-number {
        font-size: 1.6rem;
    }

    .btn-booking {
        padding: 15px 35px;
        font-size: 1rem;
    }

    /* Response Time */
    .response-time-section {
        padding: 20px 0;
    }

    .response-time {
        padding: 15px 20px;
    }

    .response-time p {
        font-size: 0.9rem;
    }

    /* Form Section */
    .contact-form-section {
        padding: 40px 0 60px;
    }

    .section-title {
        font-size: 1.8rem;
        margin-bottom: 30px;
    }

    .contact-form-section .wpcf7 {
        padding: 30px 20px;
        border-radius: 20px;
    }

    .contact-form-section .wpcf7-form input[type="text"],
    .contact-form-section .wpcf7-form input[type="email"],
    .contact-form-section .wpcf7-form input[type="tel"],
    .contact-form-section .wpcf7-form textarea,
    .contact-form-section .wpcf7-form select {
        font-size: 16px; /* Prevent iOS zoom */
    }

    /* FAQ Link */
    .faq-link-section {
        padding: 40px 0;
    }

    .faq-link-content h3 {
        font-size: 1.5rem;
    }

    .faq-link-content p {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .page-title {
        font-size: 1.6rem;
    }

    .contact-form-placeholder {
        padding: 30px 20px;
    }

    .phone-number {
        font-size: 1.4rem;
    }
}
</style>

<?php get_footer(); ?>