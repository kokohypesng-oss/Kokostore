jQuery(document).ready(function($) {
    'use strict';
    
    const breakpoints = {
        mobile: 480,
        tablet: 768,
        laptop: 1024,
        desktop: 1200
    };
    
    function detectViewport() {
        const width = $(window).width();
        let deviceType = '';
        
        if (width <= breakpoints.mobile) {
            deviceType = 'mobile';
        } else if (width <= breakpoints.tablet) {
            deviceType = 'tablet';
        } else if (width <= breakpoints.laptop) {
            deviceType = 'laptop';
        } else {
            deviceType = 'desktop';
        }
        
        $('body').removeClass('viewport-mobile viewport-tablet viewport-laptop viewport-desktop')
                 .addClass('viewport-' + deviceType);
        
        return deviceType;
    }
    
    function handleMobileMenu() {
        const $toggle = $('.mobile-menu-toggle');
        const $menu = $('.primary-menu');
        
        $toggle.on('click', function() {
            const isExpanded = $(this).attr('aria-expanded') === 'true';
            $(this).attr('aria-expanded', !isExpanded);
            $menu.slideToggle(300);
        });
        
        $(window).on('resize', function() {
            if ($(window).width() > breakpoints.tablet) {
                $menu.css('display', '');
                $toggle.attr('aria-expanded', 'false');
            }
        });
    }
    
    function optimizeImages() {
        $('img[data-src]').each(function() {
            const $img = $(this);
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        observer.unobserve(img);
                    }
                });
            });
            observer.observe(this);
        });
    }
    
    function handleTouchEvents() {
        if ('ontouchstart' in window) {
            $('body').addClass('touch-device');
            
            $('.product-card').on('touchstart', function() {
                $(this).addClass('touch-active');
            }).on('touchend', function() {
                $(this).removeClass('touch-active');
            });
        }
    }
    
    function handleOrientationChange() {
        $(window).on('orientationchange', function() {
            setTimeout(function() {
                detectViewport();
            }, 200);
        });
    }
    
    function smoothScroll() {
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').on('click', function(e) {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') &&
                location.hostname === this.hostname) {
                let target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                
                if (target.length) {
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 500);
                }
            }
        });
    }
    
    function initResponsiveFeatures() {
        detectViewport();
        handleMobileMenu();
        optimizeImages();
        handleTouchEvents();
        handleOrientationChange();
        smoothScroll();
        
        let resizeTimer;
        $(window).on('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                detectViewport();
            }, 250);
        });
    }
    
    if (typeof kokostoreDevice !== 'undefined') {
        console.log('Device Detection:', kokostoreDevice);
    }
    
    initResponsiveFeatures();
    
    $(window).on('load', function() {
        $('body').addClass('page-loaded');
    });
});
