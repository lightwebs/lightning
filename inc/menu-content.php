<?php

class Menu_Content extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {



        // Prepare all li classes.
        $li_classes = $value = '';
        $extra_li_classes = empty($item->classes) ? array() : (array) $item->classes;

        if ($depth === 0) {
            // Top level
            $extra_li_classes[] = 'top-level';
        } elseif ($depth === 1) {
            // Sub menu
            $extra_li_classes[] = 'sub-level';
        }


        $li_classes = join(' ', apply_filters('nav_menu_css_class', array_filter($extra_li_classes), $item));
        $li_classes = 'class="' . esc_attr($li_classes) . '"';


        $output .= '<li id="menu-item-' . $item->ID . '"' . $value . $li_classes . '>';

        // Prepare all a attributes.
        $a_classes = '';

        $link_attributes  = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $link_attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $link_attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $link_attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $link_attributes .= 'class="' . esc_attr($a_classes) . '"';

        $item_output = '';

        if ($depth === 0 && in_array('menu-item-has-children', $extra_li_classes)) {
            $item_output .= '<div class="menu-item-with-arrow">';
        }


        $item_output .= '<a' . $link_attributes . '>';


        if ($depth === 0) {
            // Acctual link text
            $item_output .= apply_filters('the_title', $item->title, $item->ID);
        } elseif ($depth === 1) {
            $description = get_field('description', $item);
            $item_output .= '<span class="sub-menu-title">' . apply_filters('the_title', $item->title, $item->ID) . '</span>';
            $item_output .= '<span class="sub-menu-description">' . $description . '</span>';
        }
        $item_output .= '</a>';

        // Dropdown icon
        if ($depth === 0 && in_array('menu-item-has-children', $extra_li_classes)) {
            $item_output .= '<button class="sub-menu-toggle-button"><span class="material-icons-round">expand_more</span></button>';
            $item_output .= '</div>';
        }

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
