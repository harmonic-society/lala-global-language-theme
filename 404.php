<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package LaLa_Global_Language
 */

get_header(); ?>

<?php lala_breadcrumbs(); ?>

<main id="primary" class="site-main">
    <section class="error-404 not-found">
        <div class="container">
            <div class="error-content">
                <h1 class="error-title">404</h1>
                <h2>ページが見つかりません</h2>
                <p>申し訳ございません。お探しのページは見つかりませんでした。</p>
                
                <div class="error-actions">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">ホームに戻る</a>
                    <a href="<?php echo esc_url( home_url( '/courses/' ) ); ?>" class="btn btn-secondary">コース一覧を見る</a>
                </div>

                <div class="error-search">
                    <h3>検索してみる</h3>
                    <?php get_search_form(); ?>
                </div>

                <div class="error-suggestions">
                    <h3>人気のコース</h3>
                    <div class="suggestions-grid">
                        <a href="#" class="suggestion-card">
                            <span class="suggestion-icon">🇬🇧</span>
                            <span>英語コース</span>
                        </a>
                        <a href="#" class="suggestion-card">
                            <span class="suggestion-icon">🇨🇳</span>
                            <span>中国語コース</span>
                        </a>
                        <a href="#" class="suggestion-card">
                            <span class="suggestion-icon">🇰🇷</span>
                            <span>韓国語コース</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.error-404 {
    padding: 100px 0;
    text-align: center;
    min-height: 70vh;
    display: flex;
    align-items: center;
}

.error-content {
    max-width: 600px;
    margin: 0 auto;
}

.error-title {
    font-size: 10rem;
    line-height: 1;
    background: var(--gradient-1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 20px;
}

.error-404 h2 {
    font-size: 2rem;
    color: var(--dark-color);
    margin-bottom: 20px;
}

.error-404 p {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 40px;
}

.error-actions {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-bottom: 60px;
}

.error-search {
    margin-bottom: 60px;
}

.error-search h3 {
    margin-bottom: 20px;
}

.error-search form {
    display: flex;
    gap: 10px;
    max-width: 400px;
    margin: 0 auto;
}

.error-search input[type="search"] {
    flex: 1;
    padding: 15px 25px;
    border: 2px solid #eee;
    border-radius: 50px;
    font-size: 1rem;
}

.error-search button {
    padding: 15px 30px;
    background: var(--primary-color);
    color: white;
    border: none;
    border-radius: 50px;
    font-size: 1rem;
    cursor: pointer;
}

.suggestions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 20px;
    margin-top: 30px;
}

.suggestion-card {
    background: white;
    padding: 30px;
    border-radius: 20px;
    text-decoration: none;
    color: var(--dark-color);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}

.suggestion-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.suggestion-icon {
    font-size: 3rem;
}

@media (max-width: 768px) {
    .error-title {
        font-size: 6rem;
    }
    
    .error-actions {
        flex-direction: column;
        align-items: center;
    }
}
</style>

<?php get_footer(); ?>