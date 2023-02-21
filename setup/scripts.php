<?php
// Enqueue scripts and styles.

function lightning_scripts() {
    wp_enqueue_style('lightning-style', get_stylesheet_uri(), array(), _S_VERSION);

    // CSS
    wp_enqueue_style('lw-app-css', get_template_directory_uri() . '/dist/app.css', filemtime(get_template_directory() . '/dist/app.css'));

    // JS
    wp_enqueue_script('lw-app-js', get_template_directory_uri() . '/dist/app.js', array('jquery'), filemtime(get_template_directory() . '/dist/app.js'), true);

    wp_localize_script('lw-app-js', 'liGlobal', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'homeUrl' => home_url(),
        'templateDirectory' => get_template_directory_uri(),
        'ABSPATH' => str_replace('/wp-content/themes/lwlightning', '', get_template_directory_uri()),
        'restBase' => get_rest_url() . 'lw',
        'loadMore' => wp_create_nonce('load_more'),
        'isLoggedIn' => is_user_logged_in(),
    ));

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'lightning_scripts');

function admin_scripts() {
    wp_enqueue_style('material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons+Round');
    wp_enqueue_style('lightning-style', get_stylesheet_directory_uri() . '/admin/lightning-builder.css');
    wp_enqueue_script('admin-script-js', get_stylesheet_directory_uri() . '/admin/admin.js', null, null, true);
}
add_action('admin_enqueue_scripts', 'admin_scripts', 999);

function remove_wp_block_library_css() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'remove_wp_block_library_css', 100);


// Setting the Google Maps API key for ACF
function my_acf_google_map_api($api) {
    $api['key'] = 'AIzaSyBBkPNiE5cDrWQbyvMtDOJ7BdZhXitVxe0';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
