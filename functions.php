<?php
/**
 * Jager Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

require_once get_template_directory() . '/inc/post-type.php';

/**
 * Theme Setup
 */
function jager_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'jager'),
        'footer'  => esc_html__('Footer Menu', 'jager'),
    ));
}
add_action('after_setup_theme', 'jager_setup');

/**
 * Enqueue Scripts and Styles
 */
function jager_scripts() {

    // Enqueue theme stylesheet
    wp_enqueue_style('jager-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0');
    
    // Enqueue Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true);

    // Enqueue AOS CSS and JS
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
    
    // Enqueue comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'jager_scripts');

/**
 * Register Widget Areas
 */
function jager_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Primary Sidebar', 'jager'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here to appear in your sidebar.', 'jager'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widgets', 'jager'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'jager'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'jager_widgets_init');

/**
 * Custom Excerpt Length
 */
function jager_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'jager_excerpt_length');

/**
 * Custom Excerpt More Link
 */
function jager_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'jager_excerpt_more');

/**
 * Custom Logo Support
 */
function jager_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'jager_custom_logo_setup');

/**
 * Custom Header Support
 */
function jager_custom_header_setup() {
    add_theme_support('custom-header', array(
        'default-image'          => '',
        'default-text-color'     => '000',
        'width'                  => 1200,
        'height'                 => 300,
        'flex-width'             => true,
        'flex-height'            => true,
    ));
}
add_action('after_setup_theme', 'jager_custom_header_setup');

/**
 * Customizer Settings
 */
function jager_customize_register($wp_customize) {
    // Add a setting for footer text
    $wp_customize->add_setting('jager_footer_text', array(
        'default'           => 'Copyright © ' . date('Y') . ' Your Site Name',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('jager_footer_text', array(
        'label'       => __('Footer Text', 'jager'),
        'section'     => 'title_tagline',
        'type'        => 'text',
    ));
}
add_action('customize_register', 'jager_customize_register');

/**
 * Template Tags
 */

/**
 * Display navigation to next/previous set of posts when applicable.
 */
function jager_posts_navigation() {
    $navigation = get_the_posts_navigation(array(
        'prev_text' => __('Older posts', 'jager'),
        'next_text' => __('Newer posts', 'jager'),
    ));

    echo $navigation;
}

/**
 * Display navigation to next/previous post when applicable.
 */
function jager_post_navigation() {
    $navigation = get_the_post_navigation(array(
        'prev_text' => __('Previous post: %title', 'jager'),
        'next_text' => __('Next post: %title', 'jager'),
    ));

    echo $navigation;
}

/**
 * Security enhancements
 */
function jager_remove_version() {
    return '';
}
add_filter('the_generator', 'jager_remove_version');

// Remove WordPress version from RSS feeds
function jager_remove_wp_version_rss() {
    return '';
}
add_filter('the_generator', 'jager_remove_wp_version_rss');