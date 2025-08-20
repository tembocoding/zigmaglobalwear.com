<?php
/**
 * Zigma Global Wear Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function zigma_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => 'Primary Navigation',
        'footer' => 'Footer Navigation',
    ));
}
add_action('after_setup_theme', 'zigma_theme_setup');

/**
 * Enqueue scripts and styles
 */
function zigma_theme_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style('zigma-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue responsive CSS
    wp_enqueue_style('zigma-responsive', get_template_directory_uri() . '/css/responsive.css', array('zigma-style'), '1.0.0');
    
    // Enqueue sticky header CSS
    wp_enqueue_style('zigma-sticky-header', get_template_directory_uri() . '/css/sticky-header.css', array('zigma-style'), '1.0.0');
    
    // Enqueue main JavaScript
    wp_enqueue_script('zigma-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
    
    // Enqueue sticky header JavaScript
    wp_enqueue_script('zigma-sticky-header', get_template_directory_uri() . '/js/sticky-header.js', array('jquery'), '1.0.0', true);
    
    // Enqueue form validation JavaScript
    wp_enqueue_script('zigma-form-validation', get_template_directory_uri() . '/js/form-validation.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'zigma_theme_scripts');

/**
 * Register widget areas
 */
function zigma_widgets_init() {
    register_sidebar(array(
        'name'          => 'Footer Widget Area',
        'id'            => 'footer-widget-area',
        'description'   => 'Widgets in this area will be shown in the footer.',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'zigma_widgets_init');

/**
 * Contact form handler
 */
function zigma_handle_contact_form() {
    if (isset($_POST['zigma_contact_form']) && wp_verify_nonce($_POST['zigma_contact_nonce'], 'zigma_contact_form_action')) {
        
        $name = sanitize_text_field($_POST['contact_name']);
        $email = sanitize_email($_POST['contact_email']);
        $company = sanitize_text_field($_POST['contact_company']);
        $phone = sanitize_text_field($_POST['contact_phone']);
        $inquiry_type = sanitize_text_field($_POST['inquiry_type']);
        $message = sanitize_textarea_field($_POST['contact_message']);
        
        // Prepare email
        $to = get_option('admin_email');
        $subject = 'New Contact Form Submission - ' . $inquiry_type;
        $body = "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Company: $company\n";
        $body .= "Phone: $phone\n";
        $body .= "Inquiry Type: $inquiry_type\n\n";
        $body .= "Message:\n$message";
        
        $headers = array('Content-Type: text/html; charset=UTF-8');
        
        // Send email
        if (wp_mail($to, $subject, $body, $headers)) {
            wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
            exit;
        } else {
            wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
            exit;
        }
    }
}
add_action('init', 'zigma_handle_contact_form');

/**
 * Custom excerpt length
 */
function zigma_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'zigma_excerpt_length');

/**
 * Custom excerpt more text
 */
function zigma_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'zigma_excerpt_more');

/**
 * Add custom CSS classes to body
 */
function zigma_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    if (is_page('products')) {
        $classes[] = 'products-page';
    }
    if (is_page('contact')) {
        $classes[] = 'contact-page';
    }
    return $classes;
}
add_filter('body_class', 'zigma_body_classes');

/**
 * Customize login page
 */
function zigma_login_styles() {
    wp_enqueue_style('zigma-login', get_template_directory_uri() . '/css/login.css');
}
add_action('login_enqueue_scripts', 'zigma_login_styles');

/**
 * Add theme customizer options
 */
function zigma_customize_register($wp_customize) {
    // Add contact information section
    $wp_customize->add_section('zigma_contact_info', array(
        'title'    => 'Contact Information',
        'priority' => 120,
    ));
    
    // Phone number setting
    $wp_customize->add_setting('zigma_phone', array(
        'default'           => '07440 268282',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('zigma_phone', array(
        'label'   => 'Phone Number',
        'section' => 'zigma_contact_info',
        'type'    => 'text',
    ));
    
    // Email setting
    $wp_customize->add_setting('zigma_email', array(
        'default'           => 'info@zigmaglobalwear.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('zigma_email', array(
        'label'   => 'Email Address',
        'section' => 'zigma_contact_info',
        'type'    => 'email',
    ));
    
    // Address setting
    $wp_customize->add_setting('zigma_address', array(
        'default'           => 'UK Address Here',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('zigma_address', array(
        'label'   => 'Business Address',
        'section' => 'zigma_contact_info',
        'type'    => 'textarea',
    ));
}
add_action('customize_register', 'zigma_customize_register');

/**
 * Get theme option with fallback
 */
function zigma_get_option($option, $default = '') {
    return get_theme_mod($option, $default);
}

/**
 * Display contact phone number
 */
function zigma_phone_number() {
    return zigma_get_option('zigma_phone', '07440 268282');
}

/**
 * Display contact email
 */
function zigma_email_address() {
    return zigma_get_option('zigma_email', 'info@zigmaglobalwear.com');
}

/**
 * Display business address
 */
function zigma_business_address() {
    return zigma_get_option('zigma_address', '[Content container - full UK address]');
}

/**
 * Security: Remove WordPress version info
 */
function zigma_remove_version() {
    return '';
}
add_filter('the_generator', 'zigma_remove_version');

/**
 * Limit login attempts (basic security)
 */
function zigma_limit_login_attempts() {
    if (isset($_POST['log'])) {
        $attempts = get_transient('login_attempts_' . md5($_SERVER['REMOTE_ADDR']));
        if ($attempts && $attempts >= 5) {
            wp_die('Too many login attempts. Please try again later.');
        }
    }
}
add_action('wp_login', 'zigma_limit_login_attempts');

/**
 * Track failed login attempts
 */
function zigma_track_failed_login($username) {
    $key = 'login_attempts_' . md5($_SERVER['REMOTE_ADDR']);
    $attempts = get_transient($key);
    $attempts = $attempts ? $attempts + 1 : 1;
    set_transient($key, $attempts, 15 * MINUTE_IN_SECONDS);
}
add_action('wp_login_failed', 'zigma_track_failed_login');

/**
 * Performance optimization: Remove unnecessary scripts
 */
function zigma_cleanup_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'zigma_cleanup_head');

?> 