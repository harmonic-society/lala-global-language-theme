/**
 * Enhanced Single Post JavaScript - Dramatic UI/UX Improvements
 */

(function() {
    'use strict';

    // Initialize when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        initReadingProgress();
        initTableOfContents();
        initThemeToggle();
        initFontSizeControl();
        initSearchFeature();
        initSpeechSynthesis();
        initPrintFunction();
        initImageLightbox();
        initCodeCopyButtons();
        initShareButtons();
        initReactions();
        initBookmarks();
        initLikeButton();
        initSmoothScroll();
        initParallaxEffects();
        initRelatedCarousel();
        initViewCounter();
        initReadingTimeEstimate();
        initTooltips();
        initAnimations();
    });

    /**
     * Reading Progress Bar
     */
    function initReadingProgress() {
        const progressBar = document.querySelector('.progress-bar');
        const progressPercentage = document.querySelector('.progress-percentage');
        
        if (!progressBar) return;
        
        function updateProgress() {
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrolled = window.scrollY;
            const progress = (scrolled / docHeight) * 100;
            
            progressBar.style.width = progress + '%';
            if (progressPercentage) {
                progressPercentage.textContent = Math.round(progress) + '%';
            }
        }
        
        window.addEventListener('scroll', updateProgress);
        updateProgress();
    }

    /**
     * Table of Contents Generation and Tracking
     */
    function initTableOfContents() {
        const tocNav = document.getElementById('toc-nav');
        const articleBody = document.querySelector('.article-body');
        
        if (!tocNav || !articleBody) return;
        
        const headings = articleBody.querySelectorAll('h2, h3');
        if (headings.length === 0) return;
        
        // Generate TOC
        const tocList = document.createElement('ul');
        headings.forEach((heading, index) => {
            const id = 'heading-' + index;
            heading.setAttribute('id', id);
            
            const li = document.createElement('li');
            const a = document.createElement('a');
            a.href = '#' + id;
            a.textContent = heading.textContent;
            
            if (heading.tagName === 'H3') {
                a.classList.add('toc-h3');
            }
            
            li.appendChild(a);
            tocList.appendChild(li);
        });
        
        tocNav.appendChild(tocList);
        
        // Active state tracking
        const tocLinks = tocNav.querySelectorAll('a');
        let currentActive = null;
        
        function updateActiveLink() {
            let current = '';
            headings.forEach(heading => {
                const rect = heading.getBoundingClientRect();
                if (rect.top < 200 && rect.top > -rect.height) {
                    current = heading.getAttribute('id');
                }
            });
            
            tocLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                    currentActive = link;
                }
            });
        }
        
        window.addEventListener('scroll', updateActiveLink);
        updateActiveLink();
        
        // Smooth scroll
        tocLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            });
        });
        
        // TOC Toggle
        const tocToggle = document.querySelector('.toc-toggle');
        const tocContent = document.querySelector('.toc-content');
        
        if (tocToggle && tocContent) {
            tocToggle.addEventListener('click', function() {
                tocContent.classList.toggle('collapsed');
                tocToggle.classList.toggle('collapsed');
            });
        }
    }

    /**
     * Theme Toggle (Dark/Light Mode)
     */
    function initThemeToggle() {
        const themeToggle = document.getElementById('theme-toggle');
        if (!themeToggle) return;
        
        // Check for saved theme preference
        const currentTheme = localStorage.getItem('theme') || 'light';
        if (currentTheme === 'dark') {
            document.body.classList.add('dark-mode');
            themeToggle.classList.add('active');
        }
        
        themeToggle.addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            this.classList.toggle('active');
            
            const theme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
            localStorage.setItem('theme', theme);
            
            showToast(theme === 'dark' ? 'ダークモードに切り替えました' : 'ライトモードに切り替えました');
        });
    }

    /**
     * Font Size Control
     */
    function initFontSizeControl() {
        const fontSizeToggle = document.getElementById('font-size-toggle');
        const fontSizePanel = document.getElementById('font-size-panel');
        
        if (!fontSizeToggle || !fontSizePanel) return;
        
        fontSizeToggle.addEventListener('click', function() {
            fontSizePanel.classList.toggle('active');
        });
        
        const sizeButtons = fontSizePanel.querySelectorAll('button');
        sizeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const size = this.dataset.size;
                
                // Remove all size classes
                document.body.classList.remove('font-small', 'font-medium', 'font-large', 'font-xlarge');
                // Add selected size class
                document.body.classList.add('font-' + size);
                
                // Update active button
                sizeButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Save preference
                localStorage.setItem('fontSize', size);
                
                // Close panel
                fontSizePanel.classList.remove('active');
                
                showToast('フォントサイズを変更しました');
            });
        });
        
        // Load saved font size
        const savedSize = localStorage.getItem('fontSize');
        if (savedSize) {
            document.body.classList.add('font-' + savedSize);
            const activeButton = fontSizePanel.querySelector(`button[data-size="${savedSize}"]`);
            if (activeButton) {
                sizeButtons.forEach(btn => btn.classList.remove('active'));
                activeButton.classList.add('active');
            }
        }
        
        // Close panel when clicking outside
        document.addEventListener('click', function(e) {
            if (!fontSizeToggle.contains(e.target) && !fontSizePanel.contains(e.target)) {
                fontSizePanel.classList.remove('active');
            }
        });
    }

    /**
     * Article Search Feature
     */
    function initSearchFeature() {
        const searchButton = document.getElementById('search-article');
        const searchOverlay = document.getElementById('search-overlay');
        const searchInput = document.getElementById('search-input');
        const closeSearch = document.getElementById('close-search');
        const searchResults = document.querySelector('.search-results');
        
        if (!searchButton || !searchOverlay) return;
        
        searchButton.addEventListener('click', function() {
            searchOverlay.classList.add('active');
            searchInput.focus();
        });
        
        closeSearch.addEventListener('click', function() {
            searchOverlay.classList.remove('active');
            searchInput.value = '';
            searchResults.innerHTML = '';
        });
        
        // Search functionality
        let searchTimeout;
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            const query = this.value.trim();
            
            if (query.length < 2) {
                searchResults.innerHTML = '';
                return;
            }
            
            searchTimeout = setTimeout(() => {
                performSearch(query);
            }, 300);
        });
        
        function performSearch(query) {
            const articleBody = document.querySelector('.article-body');
            if (!articleBody) return;
            
            // Remove previous highlights
            const highlighted = articleBody.querySelectorAll('mark.search-highlight');
            highlighted.forEach(mark => {
                const parent = mark.parentNode;
                parent.replaceChild(document.createTextNode(mark.textContent), mark);
                parent.normalize();
            });
            
            // Search in text content
            const walker = document.createTreeWalker(
                articleBody,
                NodeFilter.SHOW_TEXT,
                null,
                false
            );
            
            const matches = [];
            let node;
            
            while (node = walker.nextNode()) {
                const text = node.textContent;
                const regex = new RegExp(query, 'gi');
                
                if (regex.test(text)) {
                    const parent = node.parentElement;
                    if (parent && parent.tagName !== 'SCRIPT' && parent.tagName !== 'STYLE') {
                        matches.push({
                            node: node,
                            text: text,
                            parent: parent
                        });
                    }
                }
            }
            
            // Display results
            searchResults.innerHTML = '';
            if (matches.length > 0) {
                const resultText = document.createElement('div');
                resultText.className = 'search-result-count';
                resultText.textContent = `${matches.length}件の結果が見つかりました`;
                searchResults.appendChild(resultText);
                
                // Highlight matches in article
                matches.forEach(match => {
                    const regex = new RegExp(`(${query})`, 'gi');
                    const highlighted = match.text.replace(regex, '<mark class="search-highlight">$1</mark>');
                    const span = document.createElement('span');
                    span.innerHTML = highlighted;
                    match.parent.replaceChild(span, match.node);
                });
                
                // Scroll to first match
                const firstMatch = articleBody.querySelector('mark.search-highlight');
                if (firstMatch) {
                    firstMatch.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            } else {
                searchResults.innerHTML = '<div class="no-results">結果が見つかりませんでした</div>';
            }
        }
        
        // Close on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && searchOverlay.classList.contains('active')) {
                searchOverlay.classList.remove('active');
            }
        });
    }

    /**
     * Speech Synthesis (Text-to-Speech)
     */
    function initSpeechSynthesis() {
        const speakButton = document.getElementById('speak-article');
        if (!speakButton) return;
        
        let isSpeaking = false;
        let speechUtterance = null;
        
        speakButton.addEventListener('click', function() {
            if (!window.speechSynthesis) {
                showToast('お使いのブラウザは音声読み上げに対応していません');
                return;
            }
            
            if (isSpeaking) {
                window.speechSynthesis.cancel();
                isSpeaking = false;
                this.classList.remove('active');
                showToast('読み上げを停止しました');
            } else {
                const articleBody = document.querySelector('.article-body');
                if (!articleBody) return;
                
                const text = articleBody.textContent;
                speechUtterance = new SpeechSynthesisUtterance(text);
                speechUtterance.lang = 'ja-JP';
                speechUtterance.rate = 1.0;
                speechUtterance.pitch = 1.0;
                
                speechUtterance.onstart = () => {
                    isSpeaking = true;
                    this.classList.add('active');
                    showToast('記事の読み上げを開始します');
                };
                
                speechUtterance.onend = () => {
                    isSpeaking = false;
                    this.classList.remove('active');
                    showToast('読み上げが完了しました');
                };
                
                window.speechSynthesis.speak(speechUtterance);
            }
        });
    }

    /**
     * Print Function
     */
    function initPrintFunction() {
        const printButton = document.getElementById('print-article');
        if (!printButton) return;
        
        printButton.addEventListener('click', function() {
            window.print();
        });
    }

    /**
     * Image Lightbox
     */
    function initImageLightbox() {
        const lightbox = document.getElementById('lightbox');
        if (!lightbox) return;
        
        const lightboxImage = lightbox.querySelector('.lightbox-image');
        const lightboxCaption = lightbox.querySelector('.lightbox-caption');
        const lightboxClose = lightbox.querySelector('.lightbox-close');
        
        // Add click event to all images in article
        const articleImages = document.querySelectorAll('.article-body img');
        
        articleImages.forEach(img => {
            img.style.cursor = 'zoom-in';
            img.addEventListener('click', function() {
                lightboxImage.src = this.src;
                lightboxCaption.textContent = this.alt || '';
                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });
        
        // Close lightbox
        lightboxClose.addEventListener('click', closeLightbox);
        lightbox.addEventListener('click', function(e) {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });
        
        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        }
        
        // Close on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && lightbox.classList.contains('active')) {
                closeLightbox();
            }
        });
    }

    /**
     * Code Copy Buttons
     */
    function initCodeCopyButtons() {
        const codeBlocks = document.querySelectorAll('.article-body pre');
        
        codeBlocks.forEach(block => {
            const button = document.createElement('button');
            button.className = 'code-copy-btn';
            button.textContent = 'コピー';
            
            button.addEventListener('click', function() {
                const code = block.querySelector('code') || block;
                const text = code.textContent;
                
                navigator.clipboard.writeText(text).then(() => {
                    button.textContent = 'コピーしました！';
                    button.classList.add('copied');
                    
                    setTimeout(() => {
                        button.textContent = 'コピー';
                        button.classList.remove('copied');
                    }, 2000);
                }).catch(() => {
                    showToast('コピーに失敗しました');
                });
            });
            
            block.style.position = 'relative';
            block.appendChild(button);
        });
    }

    /**
     * Share Buttons
     */
    function initShareButtons() {
        const shareButtons = document.querySelectorAll('.share-btn, .share-article');
        const shareModal = document.getElementById('share-modal');
        
        shareButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                
                if (shareModal) {
                    shareModal.classList.add('active');
                    
                    // Update share URLs
                    const url = window.location.href;
                    const title = document.title;
                    
                    const twitterLink = shareModal.querySelector('.share-option.twitter');
                    const facebookLink = shareModal.querySelector('.share-option.facebook');
                    const lineLink = shareModal.querySelector('.share-option.line');
                    const linkedinLink = shareModal.querySelector('.share-option.linkedin');
                    
                    if (twitterLink) {
                        twitterLink.href = `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent(title)}`;
                    }
                    
                    if (facebookLink) {
                        facebookLink.href = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
                    }
                    
                    if (lineLink) {
                        lineLink.href = `https://line.me/R/msg/text/?${encodeURIComponent(title + ' ' + url)}`;
                    }
                    
                    if (linkedinLink) {
                        linkedinLink.href = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`;
                    }
                }
            });
        });
        
        // Copy link buttons
        const copyLinkButtons = document.querySelectorAll('.copy-link, .copy-url');
        
        copyLinkButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const url = this.dataset.url || window.location.href;
                
                navigator.clipboard.writeText(url).then(() => {
                    showToast('URLをコピーしました！');
                    if (shareModal) {
                        setTimeout(() => {
                            shareModal.classList.remove('active');
                        }, 1000);
                    }
                }).catch(() => {
                    showToast('コピーに失敗しました');
                });
            });
        });
        
        // Close modal
        if (shareModal) {
            const modalClose = shareModal.querySelector('.modal-close');
            
            modalClose.addEventListener('click', function() {
                shareModal.classList.remove('active');
            });
            
            shareModal.addEventListener('click', function(e) {
                if (e.target === shareModal) {
                    shareModal.classList.remove('active');
                }
            });
        }
    }

    /**
     * Reactions
     */
    function initReactions() {
        const reactionButtons = document.querySelectorAll('.reaction-btn');
        
        reactionButtons.forEach(button => {
            const reaction = button.dataset.reaction;
            const postId = document.querySelector('.article-enhanced').id.replace('post-', '');
            const storageKey = `reaction-${postId}-${reaction}`;
            
            // Check if already reacted
            if (localStorage.getItem(storageKey)) {
                button.classList.add('active');
            }
            
            // Load count from localStorage (in real app, this would be from server)
            const countKey = `reaction-count-${postId}-${reaction}`;
            let count = parseInt(localStorage.getItem(countKey) || '0');
            button.querySelector('.reaction-count').textContent = count;
            
            button.addEventListener('click', function() {
                if (this.classList.contains('active')) {
                    // Remove reaction
                    this.classList.remove('active');
                    localStorage.removeItem(storageKey);
                    count = Math.max(0, count - 1);
                } else {
                    // Add reaction
                    // Remove other reactions first
                    reactionButtons.forEach(btn => {
                        if (btn !== this && btn.classList.contains('active')) {
                            btn.classList.remove('active');
                            const otherReaction = btn.dataset.reaction;
                            const otherStorageKey = `reaction-${postId}-${otherReaction}`;
                            const otherCountKey = `reaction-count-${postId}-${otherReaction}`;
                            localStorage.removeItem(otherStorageKey);
                            
                            let otherCount = parseInt(localStorage.getItem(otherCountKey) || '0');
                            otherCount = Math.max(0, otherCount - 1);
                            localStorage.setItem(otherCountKey, otherCount);
                            btn.querySelector('.reaction-count').textContent = otherCount;
                        }
                    });
                    
                    this.classList.add('active');
                    localStorage.setItem(storageKey, 'true');
                    count++;
                    
                    // Animate reaction
                    const emoji = this.querySelector('.reaction-emoji');
                    emoji.style.transform = 'scale(1.5)';
                    setTimeout(() => {
                        emoji.style.transform = 'scale(1)';
                    }, 300);
                }
                
                localStorage.setItem(countKey, count);
                this.querySelector('.reaction-count').textContent = count;
            });
        });
    }

    /**
     * Bookmarks
     */
    function initBookmarks() {
        const bookmarkButtons = document.querySelectorAll('.bookmark-btn, .bookmark-article');
        
        bookmarkButtons.forEach(button => {
            const postId = button.dataset.postId;
            const storageKey = `bookmark-${postId}`;
            
            // Check if already bookmarked
            if (localStorage.getItem(storageKey)) {
                button.classList.add('active');
                const span = button.querySelector('span');
                if (span) span.textContent = '保存済み';
            }
            
            button.addEventListener('click', function() {
                if (this.classList.contains('active')) {
                    // Remove bookmark
                    this.classList.remove('active');
                    localStorage.removeItem(storageKey);
                    const span = this.querySelector('span');
                    if (span) span.textContent = '保存';
                    showToast('ブックマークを解除しました');
                } else {
                    // Add bookmark
                    this.classList.add('active');
                    localStorage.setItem(storageKey, JSON.stringify({
                        title: document.title,
                        url: window.location.href,
                        date: new Date().toISOString()
                    }));
                    const span = this.querySelector('span');
                    if (span) span.textContent = '保存済み';
                    showToast('記事をブックマークしました');
                }
            });
        });
    }

    /**
     * Like Button
     */
    function initLikeButton() {
        const likeButton = document.querySelector('.like-article');
        if (!likeButton) return;
        
        const postId = likeButton.dataset.postId;
        const storageKey = `like-${postId}`;
        const countKey = `like-count-${postId}`;
        
        // Load like status
        if (localStorage.getItem(storageKey)) {
            likeButton.classList.add('active');
        }
        
        // Load like count
        let count = parseInt(localStorage.getItem(countKey) || '0');
        const countElement = likeButton.querySelector('.like-count');
        if (countElement) {
            countElement.textContent = count;
        }
        
        likeButton.addEventListener('click', function() {
            if (this.classList.contains('active')) {
                // Unlike
                this.classList.remove('active');
                localStorage.removeItem(storageKey);
                count = Math.max(0, count - 1);
            } else {
                // Like
                this.classList.add('active');
                localStorage.setItem(storageKey, 'true');
                count++;
                
                // Heart animation
                createHeartAnimation(this);
            }
            
            localStorage.setItem(countKey, count);
            if (countElement) {
                countElement.textContent = count;
            }
        });
    }

    /**
     * Create Heart Animation
     */
    function createHeartAnimation(element) {
        const heart = document.createElement('div');
        heart.className = 'heart-animation';
        heart.innerHTML = '❤️';
        heart.style.cssText = `
            position: fixed;
            z-index: 9999;
            font-size: 30px;
            animation: floatUp 2s ease-out forwards;
            pointer-events: none;
        `;
        
        const rect = element.getBoundingClientRect();
        heart.style.left = rect.left + rect.width / 2 + 'px';
        heart.style.top = rect.top + 'px';
        
        document.body.appendChild(heart);
        
        setTimeout(() => {
            heart.remove();
        }, 2000);
        
        // Add CSS animation if not exists
        if (!document.querySelector('#heart-animation-style')) {
            const style = document.createElement('style');
            style.id = 'heart-animation-style';
            style.textContent = `
                @keyframes floatUp {
                    0% {
                        opacity: 1;
                        transform: translateY(0) scale(1);
                    }
                    100% {
                        opacity: 0;
                        transform: translateY(-100px) scale(1.5);
                    }
                }
            `;
            document.head.appendChild(style);
        }
    }

    /**
     * Smooth Scroll
     */
    function initSmoothScroll() {
        // Add smooth scroll behavior to all internal links
        const links = document.querySelectorAll('a[href^="#"]');
        
        links.forEach(link => {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }
            });
        });
    }

    /**
     * Parallax Effects
     */
    function initParallaxEffects() {
        const parallaxElements = document.querySelectorAll('[data-parallax]');
        
        function updateParallax() {
            const scrolled = window.pageYOffset;
            
            parallaxElements.forEach(element => {
                const speed = element.dataset.parallaxSpeed || 0.5;
                const yPos = -(scrolled * speed);
                element.style.transform = `translateY(${yPos}px)`;
            });
        }
        
        window.addEventListener('scroll', updateParallax);
        updateParallax();
    }

    /**
     * Related Posts Carousel
     */
    function initRelatedCarousel() {
        const carousel = document.querySelector('.related-carousel');
        if (!carousel) return;
        
        const track = carousel.querySelector('.carousel-track');
        const items = track.querySelectorAll('.related-item');
        const prevBtn = document.querySelector('.carousel-prev');
        const nextBtn = document.querySelector('.carousel-next');
        
        if (!track || items.length === 0) return;
        
        let currentIndex = 0;
        const itemsPerView = window.innerWidth > 768 ? 3 : 1;
        const maxIndex = Math.max(0, items.length - itemsPerView);
        
        function updateCarousel() {
            const itemWidth = items[0].offsetWidth + 30; // Including gap
            track.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
            
            // Update button states
            prevBtn.disabled = currentIndex === 0;
            nextBtn.disabled = currentIndex >= maxIndex;
        }
        
        prevBtn.addEventListener('click', function() {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });
        
        nextBtn.addEventListener('click', function() {
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateCarousel();
            }
        });
        
        // Touch/swipe support
        let startX = 0;
        let currentX = 0;
        let isDragging = false;
        
        track.addEventListener('touchstart', handleTouchStart, { passive: true });
        track.addEventListener('touchmove', handleTouchMove, { passive: true });
        track.addEventListener('touchend', handleTouchEnd);
        
        track.addEventListener('mousedown', handleTouchStart);
        track.addEventListener('mousemove', handleTouchMove);
        track.addEventListener('mouseup', handleTouchEnd);
        track.addEventListener('mouseleave', handleTouchEnd);
        
        function handleTouchStart(e) {
            isDragging = true;
            startX = e.type.includes('mouse') ? e.clientX : e.touches[0].clientX;
            track.style.transition = 'none';
        }
        
        function handleTouchMove(e) {
            if (!isDragging) return;
            
            e.preventDefault();
            currentX = e.type.includes('mouse') ? e.clientX : e.touches[0].clientX;
            const diff = currentX - startX;
            const currentTransform = -(currentIndex * (items[0].offsetWidth + 30));
            track.style.transform = `translateX(${currentTransform + diff}px)`;
        }
        
        function handleTouchEnd() {
            if (!isDragging) return;
            
            isDragging = false;
            track.style.transition = '';
            
            const diff = currentX - startX;
            if (Math.abs(diff) > 50) {
                if (diff > 0 && currentIndex > 0) {
                    currentIndex--;
                } else if (diff < 0 && currentIndex < maxIndex) {
                    currentIndex++;
                }
            }
            
            updateCarousel();
        }
        
        updateCarousel();
    }

    /**
     * View Counter (Mock implementation)
     */
    function initViewCounter() {
        const viewCountElement = document.getElementById('view-count');
        if (!viewCountElement) return;
        
        const postId = document.querySelector('.article-enhanced').id.replace('post-', '');
        const viewKey = `views-${postId}`;
        
        // Get current views
        let views = parseInt(localStorage.getItem(viewKey) || '0');
        
        // Increment views on first visit to this article in session
        const sessionKey = `viewed-${postId}`;
        if (!sessionStorage.getItem(sessionKey)) {
            views++;
            localStorage.setItem(viewKey, views);
            sessionStorage.setItem(sessionKey, 'true');
        }
        
        // Animate counter
        animateCounter(viewCountElement, 0, views, 1000);
    }

    /**
     * Reading Time Estimate
     */
    function initReadingTimeEstimate() {
        const timeProgress = document.querySelector('.time-progress');
        const remainingTimeElement = document.getElementById('remaining-time');
        
        if (!timeProgress || !remainingTimeElement) return;
        
        const articleBody = document.querySelector('.article-body');
        if (!articleBody) return;
        
        const totalWords = articleBody.textContent.split(/\s+/).length;
        const wordsPerMinute = 200; // Average reading speed
        const totalMinutes = Math.ceil(totalWords / wordsPerMinute);
        
        function updateRemainingTime() {
            const scrollPercentage = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
            const remainingPercentage = Math.max(0, 100 - scrollPercentage);
            const remainingMinutes = Math.ceil((remainingPercentage / 100) * totalMinutes);
            
            timeProgress.style.width = scrollPercentage + '%';
            remainingTimeElement.textContent = remainingMinutes;
        }
        
        window.addEventListener('scroll', updateRemainingTime);
        updateRemainingTime();
    }

    /**
     * Tooltips
     */
    function initTooltips() {
        const tooltipElements = document.querySelectorAll('[data-tooltip]');
        
        tooltipElements.forEach(element => {
            const tooltip = document.createElement('div');
            tooltip.className = 'tooltip';
            tooltip.textContent = element.dataset.tooltip;
            tooltip.style.cssText = `
                position: absolute;
                background: #2d3748;
                color: white;
                padding: 8px 12px;
                border-radius: 8px;
                font-size: 12px;
                white-space: nowrap;
                z-index: 1000;
                opacity: 0;
                pointer-events: none;
                transition: opacity 0.3s;
            `;
            
            element.addEventListener('mouseenter', function(e) {
                document.body.appendChild(tooltip);
                const rect = this.getBoundingClientRect();
                tooltip.style.left = rect.left + rect.width / 2 - tooltip.offsetWidth / 2 + 'px';
                tooltip.style.top = rect.top - tooltip.offsetHeight - 10 + 'px';
                tooltip.style.opacity = '1';
            });
            
            element.addEventListener('mouseleave', function() {
                tooltip.style.opacity = '0';
                setTimeout(() => {
                    if (tooltip.parentNode) {
                        tooltip.parentNode.removeChild(tooltip);
                    }
                }, 300);
            });
        });
    }

    /**
     * Animations on Scroll
     */
    function initAnimations() {
        const animatedElements = document.querySelectorAll('.fade-in, .slide-in, .zoom-in');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '50px'
        });
        
        animatedElements.forEach(element => {
            observer.observe(element);
        });
    }

    /**
     * Utility: Show Toast Notification
     */
    function showToast(message) {
        const toast = document.getElementById('toast');
        if (!toast) return;
        
        const toastMessage = toast.querySelector('.toast-message');
        toastMessage.textContent = message;
        
        toast.classList.add('show');
        
        setTimeout(() => {
            toast.classList.remove('show');
        }, 3000);
    }

    /**
     * Utility: Animate Counter
     */
    function animateCounter(element, start, end, duration) {
        const range = end - start;
        const increment = range / (duration / 16);
        let current = start;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= end) {
                element.textContent = end.toLocaleString();
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current).toLocaleString();
            }
        }, 16);
    }

})();