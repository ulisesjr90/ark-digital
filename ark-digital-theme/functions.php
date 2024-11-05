<?php

function ark_digital_enqueue_styles() {
    // Get the theme directory path
    $theme_dir = get_template_directory();
    
    // Enqueue the main stylesheet
    wp_enqueue_style(
        'ark-digital-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue the compiled CSS file
    wp_enqueue_style(
        'ark-digital-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array('ark-digital-style'),
        filemtime($theme_dir . '/assets/css/main.css')
    );

    // If you're using Contact Form 7, make sure its styles are loading
    if (class_exists('WPCF7')) {
        wp_enqueue_style('contact-form-7');
    }
}
add_action('wp_enqueue_scripts', 'ark_digital_enqueue_styles');

// Add this to ensure Contact Form 7 styles are not removed
add_filter('wpcf7_load_css', '__return_true');

// Debug function to check if files exist
function check_file_paths() {
    $theme_dir = get_template_directory();
    $main_css = $theme_dir . '/assets/css/main.css';
    
    error_log('Theme Directory: ' . $theme_dir);
    error_log('Main CSS path: ' . $main_css);
    error_log('Main CSS exists: ' . (file_exists($main_css) ? 'yes' : 'no'));
    error_log('Main CSS modified time: ' . filemtime($main_css));
}
add_action('init', 'check_file_paths');

// Enqueue domain checker scripts and styles
function ark_enqueue_domain_checker() {
    if (is_page_template('page-templates/new-website.php')) {
        wp_enqueue_script(
            'domain-checker', 
            get_template_directory_uri() . '/assets/js/modules/domain-checker.js', 
            array('jquery'), 
            '1.0.0', 
            true
        );

        wp_localize_script(
            'domain-checker',
            'domainCheckerVars',
            array(
                'ajaxurl' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce('domain_checker_nonce')
            )
        );
    }
}
add_action('wp_enqueue_scripts', 'ark_enqueue_domain_checker');

// AJAX handler for domain checking
function ark_check_domain() {
    // Verify nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'domain_checker_nonce')) {
        wp_send_json_error(array('message' => 'Invalid security token'));
    }

    // Get and sanitize domain
    $domain = isset($_POST['domain']) ? sanitize_text_field($_POST['domain']) : '';
    if (empty($domain)) {
        wp_send_json_error(array('message' => 'Please enter a domain name'));
    }

    // GoDaddy API credentials - store these securely in wp-config.php
    $api_key = defined('GODADDY_API_KEY') ? GODADDY_API_KEY : '';
    $api_secret = defined('GODADDY_API_SECRET') ? GODADDY_API_SECRET : '';

    if (empty($api_key) || empty($api_secret)) {
        wp_send_json_error(array('message' => 'API configuration error'));
    }

    // Initialize cURL
    $ch = curl_init();
    
    // Set cURL options for GoDaddy API
    curl_setopt_array($ch, [
        CURLOPT_URL => "https://api.godaddy.com/v1/domains/available?domain=" . urlencode($domain),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            'Authorization: sso-key ' . $api_key . ':' . $api_secret,
            'Accept: application/json'
        ],
        CURLOPT_TIMEOUT => 10
    ]);

    // Execute cURL request
    $response = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);

    if ($err) {
        wp_send_json_error(array('message' => 'Error checking domain availability'));
    }

    $result = json_decode($response);
    
    // Check domain availability
    $available = isset($result->available) && $result->available === true;

    wp_send_json_success(array(
        'available' => $available,
        'domain' => $domain
    ));
}
add_action('wp_ajax_check_domain', 'ark_check_domain');
add_action('wp_ajax_nopriv_check_domain', 'ark_check_domain');