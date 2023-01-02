<?php

/**
 * @param Int $image_id
 * @param String $size
 * @param String $class
 */
function image($image_id, $size = 'full', string $class = null) {
    // Pass in image id and size
    echo wp_get_attachment_image($image_id, $size, false, $class ? ["class" => $class] : '');
}


/**
 *
 * Get fields from clone fields
 * s stands for settings, just wanted to keep it short
 * Useage example: s($prefix)['title']
 */
function s($prefix, bool $sub = true) {
    if ($sub) {
        $title = get_sub_field($prefix . '_title');
        $title_tag = get_sub_field($prefix . '_title_tag');
        $title_type = get_sub_field($prefix . '_title_type');
        $text_align = get_sub_field($prefix . '_text_align');
        $text = get_sub_field($prefix . '_text');
        $link = get_sub_field($prefix . '_component_link');
        $bg_color = get_sub_field($prefix . '_bg_colors');
        $hide_component = get_sub_field($prefix . '_hide_component');
        $gradient = get_sub_field($prefix . '_gradient');
        $gradient_placement = get_sub_field($prefix . '_gradient_placement');
        $text_color = get_sub_field($prefix . '_text_colors');
        $component_id = get_sub_field('component_id');
        $has_color_bg = $bg_color !== 'bg-[transparent]';
    } else {
        $title = get_field($prefix . '_title');
        $title_tag = get_field($prefix . '_title_tag');
        $title_type = get_field($prefix . '_title_type');
        $text_align = get_field($prefix . '_text_align');
        $text = get_field($prefix . '_text');
        $link = get_field($prefix . '_component_link');
        $bg_color = get_field($prefix . '_bg_colors');
        $hide_component = get_field($prefix . '_hide_component');
        $gradient = get_field($prefix . '_gradient');
        $gradient_placement = get_field($prefix . '_gradient_placement');
        $text_color = get_field($prefix . '_text_colors');
        $component_id = get_field('component_id');
        $has_color_bg = $bg_color !== 'bg-[transparent]';
    }

    return [
        'bg_color' => $bg_color,
        'hide_component' => $hide_component,
        'gradient' => $gradient,
        'gradient_placement' => $gradient_placement,
        'text_color' => $text_color,
        'text' => $text,
        'link' => $link,
        'title' => $title,
        'title_tag' => $title_tag,
        'title_type' => $title_type,
        'text_align' => $text_align,
        'component_id' => $component_id,
        'has_color_bg' => $has_color_bg
    ];
}


/**
 *
 * Output component id if set
 *
 */

function component_id($prefix) {
    if (s($prefix)['component_id']) {
        echo 'id="' . s($prefix)['component_id'] . '"';
    }
}


/**
 *
 * Get location by user ip
 *
 */

// function getLocationInfoByIp() {
//     $client  = @$_SERVER['HTTP_CLIENT_IP'];
//     $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
//     $remote  = @$_SERVER['REMOTE_ADDR'];

//     if(filter_var($client, FILTER_VALIDATE_IP)){
//         $ip = $client;
//     }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
//         $ip = $forward;
//     }else{
//         $ip = $remote;
//     }
//     $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
//     if($ip_data && $ip_data->geoplugin_countryName != null){
//         $result = $ip_data->geoplugin_countryCode;
//     }
//     return $result;
// }


/**
 *
 * Hide component for specific countries
 *
 */
// function hide_country($prefix) {
//     $country_codes = get_sub_field($prefix . '_country_codes');
//     if (!$country_codes) {
//         return;
//     }

//     $countries = [];
//     foreach ($country_codes as $code) {
//         $code = preg_replace('/ :.*/', '', $code);
//         $countries[] = $code;
//     }
//     return in_array(getLocationInfoByIp(), $countries);
// }


/**
 *
 * Get categories as tags for post
 *
 */
function get_post_terms($post_id, string $taxonomy, $class = null, $term_class = null) {
    $taxonomy = get_the_terms($post_id, $taxonomy);

    if (!$taxonomy) {
        return;
    } ?>

    <div class="flex flex-wrap gap-1 <?php echo $class; ?>">
        <?php foreach ($taxonomy as $tax) : ?>
            <div class="px-2 py-1 mr-1 text-xs font-semibold text-purple-700 bg-purple-100 rounded <?php echo $term_class; ?>">
                <?php echo $tax->name; ?>
            </div>
        <?php endforeach; ?>
    </div>

<?php }


/**
 *
 * Get a page url by template name
 * Call it like this: get_page_url_by_template('the-template-name');
 */
function url_by_template($template_name) {
    $pages = get_posts(array(
        'post_type' => 'page',
        'meta_key' => '_wp_page_template',
        'meta_value' => $template_name . '.php'
    ));
    if (!empty($pages)) {
        return get_permalink($pages[0]->ID);
    } else {
        return false;
    }
}


/**
 * Get the path to the lightning builder.
 * @return "get_template_directory() . '/inc/acf/lightning-builder/'"
 */
function lb_path() {
    return get_template_directory() . '/inc/acf/lightning-builder/';
}


/**
 * Get the path to the acf folder in inc.
 * @return "get_template_directory() . '/inc/acf/'"
 */
function acf_path() {
    return get_template_directory() . '/inc/acf/';
}


/**
 * Get the page id of the current page if it's a parent page.
 * If it's a child page, get the id of the parent page.
 * @return int
 */
function ancestor_id() {
    if (wp_get_post_parent_id() == 0) {
        $page_id = get_the_ID();
    } else {
        $page_id = get_post_ancestors(get_the_ID());
        // get last value in array
        $page_id = end($page_id);
    }
    return $page_id;
}


/**
 * Get custom amount of words from the exerpt.
 * @return int
 */
function excerpt($limit, $post_id = null) {
    $excerpt = explode(' ', get_the_excerpt($post_id), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    return $excerpt;
}


/**
 * Get custom amount of words from custom field.
 * @return int
 */
function custom_excerpt($limit, $field, $post_id = null) {
    $excerpt = explode(' ', get_field($field, $post_id), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    return $excerpt;
}


/**
 *
 * Get the spacing for sections
 *
 */
function section_spacing() {
    echo 'py-12 md:py-16 lg:py-18 xl:py-24 xxl:py-28';
}


/**
 *
 * Link as button - Primary
 *
 */
function btn_l_primary($link, string $class = null, $data = null) {
    if ($link) {
        echo "<a class='inline-flex px-5 py-3 text-sm font-semibold text-white bg-purple-500 hover:bg-purple-400 active:bg-purple-300 md:px-6 md:text-base transition-colors duration-300 {$class}' {$data}' href='{$link['url']}'>{$link['title']}</a>";
    }
}


/**
 *
 * Link as button - Secondary
 *
 */
function btn_l_secondary($btn, string $class = null, $data = null) {
    if ($btn) {
        echo "<a class='inline-flex px-5 py-3 text-sm font-semibold text-white bg-transparent hover:bg-purple-500 btn btn-primary md:px-6 md:text-base transition-colors duration-300{$class}' {$data}' href='{$btn['url']}'>{$btn['title']}</a>";
    }
}


/**
 *
 * Primary button
 *
 */
function btn_primary(string $text, string $class = null, $data = null) {
    if ($text) {
        echo "<button class='px-5 text-center py-3 text-sm font-semibold text-white bg-purple-500 hover:bg-purple-400 active:bg-purple-300 btn btn-primary md:px-6 md:text-base transition-colors duration-300 {$class}' {$data}>" . __($text, 'lightning') . "</button>";
    }
}

/**
 *
 * Secondary button
 *
 */
function btn_secondary(string $text, string $class = null, $data = null) {
    if ($text) {
        echo "<button class='px-5 py-3 text-sm font-semibold text-white bg-purple-500 hover:bg-purple-400 active:bg-purple-300 btn btn-primary md:px-6 md:text-base transition-colors duration-300 {$class}' {$data}>" . __($text, 'lightning') . "</button>";
    }
}


/**
 *
 * Link
 *
 */
function custom_link($link, string $class = null, string $icon_class = null, string $icon_name = null) {
    if ($link) {
        $icon_name = $icon_name ? $icon_name : 'arrow_forward';
        $link_color = get_sub_field('link_colors');
        echo "<a class='inline-block font-semibold group md:text-lg {$link_color} {$class}' href='{$link['url']}'>{$link['title']}<span class='ml-3 -mt-1 font-semibold align-middle transition-transform duration-300 md:ml-4 text-inherit material-icons-round group-hover:translate-x-1 {$icon_class}'>{$icon_name}</span></a>";
    }
}


/**
 *
 * Get related posts by category.
 *
 */
function get_related_posts($post_id, $limit = 3) {
    $categories = get_the_category($post_id);
    $category_ids = [];
    foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;
    $args = [
        'category__in' => $category_ids,
        'post__not_in' => [$post_id],
        'posts_per_page' => $limit,
        'ignore_sticky_posts' => 1
    ];
    $related_posts = new WP_Query($args);
    return $related_posts;
}

/**
 *
 * Get posts by ids from acf field.
 *
 */
function get_related_posts_by_field($post_id, $field, $limit = 3) {
    $args = [
        'post__in' => get_field($field, $post_id),
        'posts_per_page' => $limit,
        'ignore_sticky_posts' => 1
    ];
    $posts = new WP_Query($args);
    return $posts;
}


/**
 *
 * List partials
 *
 */
include_once get_template_directory() . '/partials/component-header.php';
include_once get_template_directory() . '/partials/component-footer.php';
include_once get_template_directory() . '/partials/social-share.php';
include_once get_template_directory() . '/partials/author.php';

/**
 * 
 * List cards
 * 
 */
include_once get_template_directory() . '/inc/cards/small-card.php';
include_once get_template_directory() . '/inc/cards/post-card.php';
include_once get_template_directory() . '/inc/cards/case-card.php';
include_once get_template_directory() . '/inc/cards/testimonial-card.php';
