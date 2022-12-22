<?php

// ACF settings page for the theme
add_action('acf/init', function () {
    if (function_exists('acf_add_options_page')) {

        $theme_settings = array(
            'page_title' => 'Temainställningar',
            'icon_url' => get_stylesheet_directory_uri() . '/src/assets/theme/theme_lightning.svg',
            'menu_slug' => 'theme-settings',
            'position' => '998.99'
        );
        acf_add_options_page($theme_settings);

        $theme_footer = array(
            'page_title' => 'Sidfoten',
            'icon_url' => get_stylesheet_directory_uri() . '/src/assets/theme/theme_footer.svg',
            'menu_slug' => 'theme-footer',
            'position' => '999.99'
        );
        acf_add_options_page($theme_footer);


        // Include the setting pages
        include_once get_stylesheet_directory() . '/inc/acf/theme-settings.php';
        include_once get_stylesheet_directory() . '/inc/acf/theme-footer.php';
    }


    // Require all files in the field-groups folder, not sub folders
    $field_groups = glob(get_stylesheet_directory() . '/inc/acf/field-groups/*.php');
    foreach ($field_groups as $fields) {
        require $fields;
    }
});


// Adds title to flexible content component from text field
// https://www.advancedcustomfields.com/resources/acf-fields-flexible_content-layout_title/
add_filter('acf/fields/flexible_content/layout_title/name=lb_components', 'acf_fields_flexible_content_layout_title', 10, 4);
add_filter('acf/fields/flexible_content/layout_title/name=ab_components', 'acf_fields_flexible_content_layout_title', 10, 4);

function acf_fields_flexible_content_layout_title($title, $field, $layout, $i) {

    $title = '<img style="margin-right: 8px; margin-bottom: -8px;" src="' . esc_url(get_stylesheet_directory_uri() . '/src/assets/pc/' . $layout['name'] . '.svg') . '" height="26px" />' . $title;

    $title = $title;

    // Load text sub field
    if ($text = get_sub_field('component_name')) {
        $title .= ' - <b style="color:#1e4ca0">' . esc_html($text) . '</b>';
    }

    if (get_sub_field('hide_component')) {
        $title .= ' - <b style="color:#aaa; display: inline-flex; align-items: center;"><span class="material-icons-round" style="font-size:14px;">hide_source</span> Dold</b>';
    }

    return $title;
}


// Check if the component_id field only contains valid characters
function check_component_id($valid, $value, $field, $input_name) {
    // If value is empty, return valid because it's not required
    if (empty($value)) {
        return $valid;
    } else {
        // Bail early if value is already invalid.
        if ($valid !== true) {
            return $valid;
        }

        // Check if string only contains lowercase letters, numbers, underscores and hyphens and doesn't start with a number
        if (!preg_match('/^[a-z][a-z0-9_-]*$/', $value)) {
            $valid = 'Endast små bokstäver, siffror, bindestreck och understreck. Får inte börja med siffra.';
        }

        return $valid;
    }
}
// Apply to all "component_id" fields.
add_filter('acf/validate_value/name=component_id', 'check_component_id', 10, 4);


// add_action('init', function(){
//     global $pagenow;

//     // && ( 'prefix-theme-settings' === $_GET['page'] ) ) {
//     if ( 'post.php' === $pagenow ) {
//             var_dump($_GET['post']);

//     }
//     // echo '<pre>';
//     // var_dump($pagenow);
//     // echo '</pre>';
// });
