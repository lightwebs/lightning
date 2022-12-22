<?php 

add_action('wp_ajax_update_profile', 'ajax_update_profile');
add_action('wp_ajax_nopriv_update_profile', 'ajax_update_profile');

function ajax_update_profile(){
    check_ajax_referer('update_profile', 'security');    

    // update user data
    
    $user_id = get_current_user_id();
    $user_mail = $_POST['user_email'];
    $user_first_name = $_POST['first_name'];
    $user_last_name = $_POST['last_name'];
    $user_user_pass = $_POST['user_pass'];
    
    wp_update_user([
        'ID' => $user_id,
        'user_email' => $user_mail,
        'first_name' => $user_first_name,
        'last_name' => $user_last_name,
        'user_pass' => $user_user_pass,
    ]);

    $response = array(
        'success' => true,
        'message' => 'Profile updated successfully',
        'user' => $user_id
    );
    
    wp_send_json($response);
    
    wp_die();
}