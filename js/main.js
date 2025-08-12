/**
 * Main JavaScript file for LaLa Global Language theme
 */

(function($) {
    'use strict';

    // DOM ready
    $(document).ready(function() {
        
        // Fix mobile text visibility issues
        if ($(window).width() <= 768) {
            $('.hero-title, .hero-description, .hero-buttons, .hero-stats').removeClass('animate-fade-up').css({
                'opacity': '1',
                'transform': 'none',
                'visibility': 'visible'
            });
        }
        
        // Optimize line breaks for centered text
        function optimizeTextLineBreaks() {
            // Select all centered text elements
            var centeredElements = [
                '.hero-subtitle',
                '.hero-description', 
                '.faq-link-content p',
                '.custom-message p',
                '.form-instruction',
                '.response-time p',
                '.section-subtitle',
                '.philosophy-text',
                '.lead-text',
                '.welcome-message',
                '.position-subtitle',
                '.intro-text'
            ];
            
            centeredElements.forEach(function(selector) {
                $(selector).each(function() {
                    var $element = $(this);
                    var originalText = $element.html();
                    
                    // Skip if element has no-line-break class
                    if ($element.hasClass('no-line-break')) {
                        return;
                    }
                    
                    // Skip if element already has manual <br> tags
                    if (originalText.includes('<br>') || originalText.includes('<br/>')) {
                        return;
                    }
                    
                    // Split text by Japanese sentence endings
                    var sentences = originalText.split(/([。！？])/);
                    var processedSentences = [];
                    
                    // Recombine sentences with their punctuation
                    for (var i = 0; i < sentences.length; i += 2) {
                        if (sentences[i]) {
                            var sentence = sentences[i] + (sentences[i + 1] || '');
                            if (sentence.trim()) {
                                processedSentences.push(sentence);
                            }
                        }
                    }
                    
                    // Apply line break rules
                    if (processedSentences.length === 2) {
                        // For 2 sentences: 1 sentence per line
                        $element.html(processedSentences.join('<br>'));
                    } else if (processedSentences.length === 1) {
                        // For single sentence: check for awkward line breaks
                        var text = processedSentences[0];
                        
                        // Create temporary element to measure text
                        var $temp = $('<div>').css({
                            position: 'absolute',
                            visibility: 'hidden',
                            width: $element.width(),
                            font: $element.css('font'),
                            fontSize: $element.css('fontSize'),
                            lineHeight: $element.css('lineHeight'),
                            padding: $element.css('padding'),
                            whiteSpace: 'normal'
                        }).html(text).appendTo('body');
                        
                        var lineHeight = parseInt($temp.css('lineHeight'));
                        var actualHeight = $temp.height();
                        var lines = Math.round(actualHeight / lineHeight);
                        
                        // If text spans multiple lines, check for orphaned characters
                        if (lines > 1) {
                            // Try adding non-breaking spaces to prevent orphaned characters
                            var words = text.split('');
                            var lastLineChars = 0;
                            var testText = text;
                            
                            // Check if last line has very few characters (1-2)
                            $temp.html(testText);
                            var lastLineText = getLastLineText($temp[0]);
                            
                            if (lastLineText && lastLineText.length <= 2) {
                                // Add non-breaking space before last few characters to keep them together
                                var splitPoint = text.length - 5; // Keep last 5 characters together
                                if (splitPoint > 0) {
                                    testText = text.substring(0, splitPoint) + '\u00A0' + text.substring(splitPoint).replace(/ /g, '\u00A0');
                                    $element.html(testText);
                                }
                            }
                        }
                        
                        $temp.remove();
                    }
                });
            });
        }
        
        // Helper function to get text of last line
        function getLastLineText(element) {
            var $el = $(element);
            var text = $el.text();
            var words = text.split('');
            
            // Create clone to test
            var $clone = $el.clone().css({
                position: 'absolute',
                visibility: 'hidden'
            }).appendTo('body');
            
            var fullHeight = $clone.height();
            var lastLineText = '';
            
            // Binary search to find where last line starts
            for (var i = text.length - 1; i >= 0; i--) {
                $clone.text(text.substring(0, i));
                if ($clone.height() < fullHeight) {
                    lastLineText = text.substring(i);
                    break;
                }
            }
            
            $clone.remove();
            return lastLineText;
        }
        
        // Run optimization on page load
        optimizeTextLineBreaks();
        
        // Re-run on window resize
        var resizeTimer;
        $(window).resize(function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                optimizeTextLineBreaks();
            }, 250);
        });
        
        // Smooth scrolling for anchor links
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            }
        });

        // Add animation classes when elements come into view
        function animateOnScroll() {
            $('.fade-in, .slide-in-left, .slide-in-right').each(function() {
                var elementTop = $(this).offset().top;
                var elementBottom = elementTop + $(this).outerHeight();
                var viewportTop = $(window).scrollTop();
                var viewportBottom = viewportTop + $(window).height();

                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $(this).css('opacity', '1');
                }
            });
        }

        // Run on scroll
        $(window).on('scroll', animateOnScroll);
        
        // Run on page load
        animateOnScroll();

        // Mobile menu toggle
        $('.menu-toggle').click(function() {
            $(this).toggleClass('active');
            $('.menu-container').toggleClass('active');
        });

        // Close mobile menu when clicking outside
        $(document).click(function(event) {
            if (!$(event.target).closest('.menu-toggle, .menu-container').length) {
                $('.menu-toggle').removeClass('active');
                $('.menu-container').removeClass('active');
            }
        });

        // Add floating animation to elements
        $('.floating-shape, .floating-emoji').each(function() {
            var randomDelay = Math.random() * 5;
            $(this).css('animation-delay', randomDelay + 's');
        });

        // Parallax effect for hero section
        $(window).scroll(function() {
            var scrolled = $(window).scrollTop();
            $('.hero-section').css('background-position', 'center ' + (scrolled * 0.5) + 'px');
        });

        // Hero scroll indicator click
        $('.hero-scroll-indicator').click(function() {
            var target = $('#features');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 800);
            }
        });

        // Language item hover effects
        $('.language-item').hover(
            function() {
                $(this).siblings().css('opacity', '0.6');
            },
            function() {
                $(this).siblings().css('opacity', '1');
            }
        );

        // Region card click to smooth scroll to contact
        $('.language-region').click(function() {
            var languageRegion = $(this).data('region');
            console.log('Selected region: ' + languageRegion);
            
            // Scroll to courses section
            var target = $('#courses');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 800);
            }
        });

        // Add ripple effect on language item click
        $('.language-item').click(function(e) {
            var ripple = $('<span class="ripple"></span>');
            $(this).append(ripple);
            
            var x = e.pageX - $(this).offset().left;
            var y = e.pageY - $(this).offset().top;
            
            ripple.css({
                left: x + 'px',
                top: y + 'px'
            });
            
            setTimeout(function() {
                ripple.remove();
            }, 600);
        });

        // Form validation feedback
        $('form').on('submit', function() {
            var $form = $(this);
            var isValid = true;

            $form.find('input[required], textarea[required]').each(function() {
                if (!$(this).val()) {
                    $(this).addClass('error');
                    isValid = false;
                } else {
                    $(this).removeClass('error');
                }
            });

            if (!isValid) {
                event.preventDefault();
                alert('Please fill in all required fields.');
            }
        });

        // Remove error class on input
        $('input, textarea').on('input', function() {
            $(this).removeClass('error');
        });

        // Add hover effect to feature cards
        $('.feature-card').hover(
            function() {
                $(this).find('.feature-icon').addClass('animate-bounce');
            },
            function() {
                $(this).find('.feature-icon').removeClass('animate-bounce');
            }
        );

        // Course card hover effect
        $('.course-card').hover(
            function() {
                $(this).find('.course-flag').addClass('animate-rotate');
            },
            function() {
                $(this).find('.course-flag').removeClass('animate-rotate');
            }
        );

        // Announcement dismiss functionality
        $('.announcement-close').click(function() {
            var $announcement = $(this).closest('.announcement-bar');
            var announcementId = $announcement.data('announcement-id');
            
            // Fade out the announcement
            $announcement.fadeOut(300, function() {
                $(this).remove();
                
                // Check if there are any remaining announcement bars
                if ($('.announcement-bar').length === 0) {
                    // Remove has-announcement class from body
                    $('body').removeClass('has-announcement');
                    // Reset CSS variable
                    document.documentElement.style.setProperty('--announcement-height', '0px');
                }
            });
            
            // Set cookie to remember dismissal (expires in 30 days)
            var date = new Date();
            date.setTime(date.getTime() + (30 * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toUTCString();
            document.cookie = "lala_dismissed_announcement_" + announcementId + "=1" + expires + "; path=/";
            
            // Also store in localStorage as backup
            if (typeof(Storage) !== "undefined") {
                localStorage.setItem('lala_dismissed_announcement_' + announcementId, '1');
            }
        });

        // Check localStorage for dismissed announcements on page load
        $('.announcement-bar').each(function() {
            var announcementId = $(this).data('announcement-id');
            
            // Check if announcement was dismissed
            if (typeof(Storage) !== "undefined") {
                if (localStorage.getItem('lala_dismissed_announcement_' + announcementId) === '1') {
                    $(this).remove();
                }
            }
        });

        // Back to top button
        var $backToTop = $('<button class="back-to-top">↑</button>');
        $('body').append($backToTop);

        $(window).scroll(function() {
            if ($(this).scrollTop() > 300) {
                $backToTop.fadeIn();
            } else {
                $backToTop.fadeOut();
            }
        });

        $backToTop.click(function() {
            $('html, body').animate({ scrollTop: 0 }, 800);
            return false;
        });

        // Announcement expand/collapse functionality
        $('.announcement-expand').click(function() {
            var $this = $(this);
            var announcementId = $this.data('announcement-id');
            var $content = $('#announcement-content-' + announcementId);
            
            if ($content.is(':visible')) {
                $content.slideUp(300);
                $this.removeClass('expanded');
                $this.html('詳しく見る <span class="expand-icon">▼</span>');
            } else {
                $content.slideDown(300);
                $this.addClass('expanded');
                $this.html('閉じる <span class="expand-icon">▼</span>');
            }
        });

        // Weekly Schedule Mobile Tabs - Complete Rewrite
        function setupMobileTabs() {
            console.log('Setting up mobile tabs...');
            
            // Find all tab buttons
            const tabButtons = document.querySelectorAll('.day-tab');
            const tabContents = document.querySelectorAll('.mobile-day-content');
            
            console.log('Found tabs:', tabButtons.length);
            console.log('Found contents:', tabContents.length);
            
            // Initialize: hide all contents except active
            tabContents.forEach(function(content) {
                if (!content.classList.contains('active')) {
                    content.style.display = 'none';
                } else {
                    content.style.display = 'block';
                }
            });
            
            // Add click listeners to each tab
            tabButtons.forEach(function(button) {
                // Remove existing listeners by cloning
                const newButton = button.cloneNode(true);
                button.parentNode.replaceChild(newButton, button);
                
                // Add new listener
                newButton.addEventListener('click', function(e) {
                    console.log('Tab clicked!');
                    e.stopPropagation();
                    
                    const targetDay = this.getAttribute('data-day');
                    console.log('Target day:', targetDay);
                    
                    // Don't do anything if already active
                    if (this.classList.contains('active')) {
                        console.log('Tab already active');
                        return;
                    }
                    
                    // Remove active from all tabs
                    document.querySelectorAll('.day-tab').forEach(function(tab) {
                        tab.classList.remove('active');
                    });
                    
                    // Add active to this tab
                    this.classList.add('active');
                    
                    // Hide all contents
                    document.querySelectorAll('.mobile-day-content').forEach(function(content) {
                        content.classList.remove('active');
                        content.style.display = 'none';
                    });
                    
                    // Show target content
                    const targetContent = document.getElementById(targetDay);
                    if (targetContent) {
                        console.log('Showing content for:', targetDay);
                        targetContent.classList.add('active');
                        targetContent.style.display = 'block';
                    } else {
                        console.error('Content not found for:', targetDay);
                    }
                });
            });
        }
        
        // Run setup immediately
        setupMobileTabs();
        
        // Also run after a delay to catch any dynamic content
        setTimeout(setupMobileTabs, 500);
        
        // Run on window load as backup
        window.addEventListener('load', setupMobileTabs);

        // Schedule slot hover effect
        $('.slot.available').hover(
            function() {
                $(this).siblings('.slot').css('opacity', '0.7');
            },
            function() {
                $(this).siblings('.slot').css('opacity', '1');
            }
        );

    });

    // Window load
    $(window).on('load', function() {
        // Remove preloader if exists
        $('.preloader').fadeOut('slow');
    });

})(jQuery);

// CSS for dynamically added elements
var style = document.createElement('style');
style.textContent = `
    .error {
        border-color: #ff6b6b !important;
    }

    .animate-bounce {
        animation: bounce 0.5s ease-in-out;
    }

    .animate-rotate {
        animation: rotate 0.5s ease-in-out;
    }

    .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background: var(--primary-color);
        color: white;
        border: none;
        border-radius: 50%;
        font-size: 1.5rem;
        cursor: pointer;
        display: none;
        z-index: 1000;
        transition: all 0.3s ease;
    }

    .back-to-top:hover {
        background: var(--secondary-color);
        transform: translateY(-5px);
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    @keyframes rotate {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.6);
        transform: scale(0);
        animation: ripple-animation 0.6s ease-out;
        pointer-events: none;
    }

    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    .language-item {
        transition: opacity 0.3s ease;
    }
`;
document.head.appendChild(style);