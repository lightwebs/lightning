<?php

//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype($output) {
    return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'add_opengraph_doctype');

//Lets add Open Graph Meta Info

function og_tags_in_head() {
    global $post;
    if (!is_singular()) //if it is not a post or a page
        return;
    echo '<meta property="fb:admins" content="A50BdSM2pBKilfv8_fvtooU"/>';
    echo '<meta property="og:title" content="' . get_the_title() . '"/>';
    echo '<meta property="og:description" content="' . get_the_excerpt() . '"/>';
    echo '<meta property="og:type" content="article"/>';
    echo '<meta property="og:url" content="' . get_permalink() . '"/>';
    echo '<meta property="og:site_name" content="Lightweb"/>';
    if (!has_post_thumbnail($post->ID)) { //the post does not have featured image, use a default image
        $default_image = get_stylesheet_directory_uri() . '/src/assets/icons/icon-eye.svg'; //replace this with a default image on your server or an image in your media library
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    } else {
        $thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
        echo '<meta property="og:image" content="' . esc_attr($thumbnail_src[0]) . '"/>';
    }
    echo "
    ";
}
add_action('wp_head', 'og_tags_in_head', 0);
