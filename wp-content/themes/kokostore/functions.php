<?php
/**
 * Kokostore Theme Functions
 * Responsive functionality for laptops, tablets, and phones
 */

if (!defined('ABSPATH')) {
    exit;
}

function kokostore_theme_setup() {
    add_theme_support('title-tag');
    
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(400, 300, true);
    
    add_image_size('kokostore-laptop', 1200, 600, true);
    add_image_size('kokostore-tablet', 768, 500, true);
    add_image_size('kokostore-phone', 480, 320, true);
    
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    add_theme_support('responsive-embeds');
    
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 300,
        'flex-height' => true,
        'flex-width' => true,
    ));
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'kokostore'),
        'footer' => __('Footer Menu', 'kokostore'),
    ));
    
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'kokostore_theme_setup');

function kokostore_detect_device() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    
    $is_mobile = false;
    $is_tablet = false;
    $is_desktop = false;
    
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', $user_agent)) {
        $is_tablet = true;
    } elseif (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', $user_agent)) {
        $is_mobile = true;
    } else {
        $is_desktop = true;
    }
    
    return array(
        'is_mobile' => $is_mobile,
        'is_tablet' => $is_tablet,
        'is_desktop' => $is_desktop
    );
}

function kokostore_body_classes($classes) {
    $device = kokostore_detect_device();
    
    if ($device['is_mobile']) {
        $classes[] = 'device-mobile';
    } elseif ($device['is_tablet']) {
        $classes[] = 'device-tablet';
    } else {
        $classes[] = 'device-desktop';
    }
    
    return $classes;
}
add_filter('body_class', 'kokostore_body_classes');

function kokostore_enqueue_scripts() {
    wp_enqueue_style('kokostore-style', get_stylesheet_uri(), array(), '1.0.0');
    
    wp_enqueue_script('kokostore-responsive', get_template_directory_uri() . '/js/responsive.js', array('jquery'), '1.0.0', true);
    
    $device_info = kokostore_detect_device();
    wp_localize_script('kokostore-responsive', 'kokostoreDevice', $device_info);
    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'kokostore_enqueue_scripts');

function kokostore_viewport_meta() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">';
}
add_action('wp_head', 'kokostore_viewport_meta', 1);

function kokostore_responsive_image_sizes() {
    return '(max-width: 480px) 480px, (max-width: 768px) 768px, (max-width: 1024px) 1024px, 1200px';
}
add_filter('wp_calculate_image_sizes', 'kokostore_responsive_image_sizes', 10, 2);

function kokostore_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'kokostore'),
        'id' => 'sidebar-1',
        'description' => __('Main sidebar widget area', 'kokostore'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    
    register_sidebar(array(
        'name' => __('Footer Widget Area', 'kokostore'),
        'id' => 'footer-1',
        'description' => __('Footer widget area', 'kokostore'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="footer-widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'kokostore_widgets_init');

function kokostore_custom_excerpt_length($length) {
    $device = kokostore_detect_device();
    
    if ($device['is_mobile']) {
        return 20;
    } elseif ($device['is_tablet']) {
        return 30;
    } else {
        return 55;
    }
}
add_filter('excerpt_length', 'kokostore_custom_excerpt_length', 999);

function kokostore_mobile_menu_toggle() {
    ?>
    <button class="mobile-menu-toggle" aria-label="Toggle Menu" aria-expanded="false">
        <span class="menu-bar"></span>
        <span class="menu-bar"></span>
        <span class="menu-bar"></span>
    </button>
    <?php
}

function kokostore_get_responsive_image($attachment_id, $alt = '') {
    $device = kokostore_detect_device();
    
    if ($device['is_mobile']) {
        return wp_get_attachment_image($attachment_id, 'kokostore-phone', false, array('alt' => $alt));
    } elseif ($device['is_tablet']) {
        return wp_get_attachment_image($attachment_id, 'kokostore-tablet', false, array('alt' => $alt));
    } else {
        return wp_get_attachment_image($attachment_id, 'kokostore-laptop', false, array('alt' => $alt));
    }
}

function kokostore_content_width() {
    $GLOBALS['content_width'] = apply_filters('kokostore_content_width', 1200);
}
add_action('after_setup_theme', 'kokostore_content_width', 0);

function kokostore_customize_register($wp_customize) {
    $wp_customize->add_section('kokostore_responsive_settings', array(
        'title' => __('Responsive Settings', 'kokostore'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('kokostore_mobile_breakpoint', array(
        'default' => '768',
        'sanitize_callback' => 'absint',
    ));
    
    $wp_customize->add_control('kokostore_mobile_breakpoint', array(
        'label' => __('Mobile Breakpoint (px)', 'kokostore'),
        'section' => 'kokostore_responsive_settings',
        'type' => 'number',
    ));
    
    $wp_customize->add_setting('kokostore_tablet_breakpoint', array(
        'default' => '1024',
        'sanitize_callback' => 'absint',
    ));
    
    $wp_customize->add_control('kokostore_tablet_breakpoint', array(
        'label' => __('Tablet Breakpoint (px)', 'kokostore'),
        'section' => 'kokostore_responsive_settings',
        'type' => 'number',
    ));
}
add_action('customize_register', 'kokostore_customize_register');

add_filter('wp_lazy_loading_enabled', '__return_true');

function kokostore_performance_hints() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="dns-prefetch" href="https://fonts.googleapis.com">';
}
add_action('wp_head', 'kokostore_performance_hints', 1);
