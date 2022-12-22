<?php

add_action('wp_ajax_load_more', 'load_more_callback');
add_action('wp_ajax_nopriv_load_more', 'load_more_callback');

function load_more_callback() {
    error_log(print_r($_POST, true));
    check_ajax_referer('load_more', 'security');
    $paged = $_POST['paged'];
    $cat_id = $_POST['cat_id'];
    $filter = [$_POST['filter']];
    $search = $_POST['search_query'];
    $post_type = $_POST['post_type'];
    $exclude = [$_POST['exclude']];
    $exclude = explode(',', $exclude[0]);
    $exclude = array_filter($exclude);
    
    
    $is_filters = $filter[0] != null || $filter[0] != '';

    // Make a valid array of ids
    if ( $is_filters ) {
        $filters = array_map('intval', explode(',', str_replace('"', '', $filter[0])));
    }
    
    $args = [
        'post_type'         => $post_type,
        'post_status'       => 'publish',
	    'order'             => 'DESC',
        'orderby'           => 'date',
        'posts_per_page'    => 12,
        'post__not_in'      => $exclude,
    ];

    if ( $search ) {
        $args['s'] = $search;
        $args['orderby'] = $search;
    } else {
        $args['orderby'] = 'date';
    }

    if ( $is_filters ) {
        $args['tax_query'] = [
            [
                'taxonomy'      => 'post_tag',
                'field'         => 'term_id',
                'terms'         => $filters,
                'operator'      => 'IN',
            ]
        ];
    }

    if ($cat_id) {
        $args['cat'] = $cat_id;
    }

    $lb_posts = new WP_Query( $args );
    
    if ( $lb_posts->have_posts() ) {
        while ( $lb_posts->have_posts() ) {
            $lb_posts->the_post();
            ob_start();
            if ( $search ) {
                small_card(get_the_ID());
            } else {
                card(get_the_ID());
            }
            $post_array[] = ob_get_clean();
        }
    }
    $total_posts = $lb_posts->found_posts;
    wp_reset_postdata();

    $posts = [
        'posts'                 => $post_array,
        'found_posts'           => $total_posts,
        'filter'                => $filter,
        'paged'                 => $paged,
        'search'                => $search,
        'post_type'             => $post_type,
        'exclude'               => $exclude,
    ];
    
    if ($total_posts <= 12 ) {
        $posts['load_more_btn_text'] = __('Inga mer inlägg', 'lightning');
    } else {
        $posts['load_more_btn_text'] = __('Ladda fler', 'lightning');
    }

    wp_send_json_success($posts);

    wp_send_json_error(
        array(
            'message' => 'Hittade inga inlägg'
        )
    );
}