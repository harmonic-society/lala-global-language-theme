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