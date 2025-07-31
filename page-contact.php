<?php
/**
 * Template Name: Contact Page
 * 
 * @package LaLa_Global_Language
 */

get_header(); ?>

<main id="primary" class="site-main contact-page">
    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="page-title fade-in">お問い合わせ</h1>
                <p class="hero-subtitle fade-in">LaLa GLOBAL LANGUAGEへのご質問・ご相談はこちらから</p>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="contact-info-section">
        <div class="container">
            <div class="contact-info-grid">
                <div class="info-card fade-in">
                    <div class="info-icon">📧</div>
                    <h3>メール</h3>
                    <p>info@lala-global-language.com</p>
                    <span class="info-note">24時間受付</span>
                </div>
                
                <div class="info-card fade-in">
                    <div class="info-icon">📞</div>
                    <h3>お電話</h3>
                    <p>03-XXXX-XXXX</p>
                    <span class="info-note">平日 10:00-18:00</span>
                </div>
                
                <div class="info-card fade-in">
                    <div class="info-icon">💬</div>
                    <h3>LINE</h3>
                    <p>@lala-global</p>
                    <span class="info-note">友達追加で簡単相談</span>
                </div>
            </div>
            
            <div class="response-time fade-in">
                <p>📝 お問い合わせへの返信は、通常3営業日以内に行います。</p>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="form-wrapper">
                <h2 class="section-title">お問い合わせフォーム</h2>
                
                <?php
                // Check if Contact Form 7 is active
                if ( function_exists( 'wpcf7' ) ) {
                    // Replace with your actual Contact Form 7 shortcode
                    echo do_shortcode( '[contact-form-7 id="YOUR_FORM_ID" title="Contact form"]' );
                } else {
                    // Fallback form
                    ?>
                    <div class="contact-form-placeholder">
                        <p>お問い合わせフォームを表示するには、Contact Form 7プラグインをインストール・有効化してください。</p>
                        <p>詳しい設定方法は、<a href="/contact-form-7-setup-guide.md">設定ガイド</a>をご覧ください。</p>
                    </div>
                    <?php
                }
                ?>
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
}

/* Contact Information Section */
.contact-info-section {
    padding: 80px 0 40px;
    background: white;
}

.contact-info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 40px;
    margin-bottom: 50px;
}

.info-card {
    text-align: center;
    padding: 40px 30px;
    background: #f8f9fa;
    border-radius: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.info-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.info-card h3 {
    font-size: 1.5rem;
    color: var(--primary-color);
    margin-bottom: 15px;
}

.info-card p {
    font-size: 1.2rem;
    color: #333;
    margin-bottom: 10px;
    font-weight: 600;
}

.info-note {
    font-size: 0.9rem;
    color: #666;
}

.response-time {
    text-align: center;
    padding: 25px;
    background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
    border-radius: 15px;
    max-width: 600px;
    margin: 0 auto;
}

.response-time p {
    margin: 0;
    font-size: 1.1rem;
    color: #1976d2;
    font-weight: 500;
}

/* Contact Form Section */
.contact-form-section {
    padding: 60px 0 80px;
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
.contact-form-section .wpcf7 {
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
    
    /* Contact Info */
    .contact-info-section {
        padding: 60px 0 30px;
    }
    
    .contact-info-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }
    
    .info-card {
        padding: 30px 20px;
    }
    
    .info-icon {
        font-size: 2.5rem;
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
}
</style>

<?php get_footer(); ?>