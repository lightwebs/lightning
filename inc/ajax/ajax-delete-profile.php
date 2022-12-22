<?php 
add_action('wp_ajax_delete_profile', 'ajax_delete_profile');
add_action('wp_ajax_nopriv_delete_profile', 'ajax_delete_profile');

function ajax_delete_profile(){
    check_ajax_referer('delete_profile', 'security');
    $user_id = get_current_user_id();

    // Send email to admin with user data
    $user = get_userdata($user_id);
    $user_email = $user->user_email;
    $user_first_name = $user->first_name;
    $user_last_name = $user->last_name;
    $user_username = $user->user_login;

    $to = get_option('admin_email');
    $subject = 'User deleted from SAMCentrum';
    $message = 'User deleted<br> User name: ' . $user_username . '<br> Mail: ' . $user_email . '<br> Name: ' . $user_first_name . ' ' . $user_last_name;
    $headers = array('Content-Type: text/html; charset=UTF-8');

    wp_mail($to, $subject, $message, $headers);

    wp_delete_user($user_id);

    wp_die();
}