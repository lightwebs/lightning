<?php

class Menu_content extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $icon = get_field('icon', $item);
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $li_classes = $value = '';

        $extra_li_classes = empty($item->classes) ? array() : (array) $item->classes;

        $extra_li_classes[] = 'mb-4 lg:mb-0';
        $a_classes = 'flex items-center font-semibold uppercase font-space text-white menu-item-link gap-x-2';

        if (in_array('menu-item-has-children', $extra_li_classes)) {
            $extra_li_classes[] = 'w-full md:w-auto relative';
        }

        if (!empty($icon) && $icon != 'None') {
            $extra_li_classes[] = 'has-icon';
        }
        // if (in_array('menu-item', $extra_li_classes) && ! $item->menu_item_parent) {
        //     $extra_li_classes[] = '';
        // }

        $li_classes = join(' ', apply_filters('nav_menu_css_class', array_filter($extra_li_classes), $item));
        $li_classes = ' class="' . esc_attr($li_classes) . '"';

        $output .= $indent . '<li id="menu-item-' . $item->ID . '"' . $value . $li_classes . '>';

        $link_attributes  = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $link_attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $link_attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $link_attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $link_attributes .= 'class="' . esc_attr($a_classes) . '"';

        if (!empty($args->before)) {
            $item_output = $args->before;

            if (in_array('menu-item-has-children', $extra_li_classes)) {
                $item_output .= '<span class="flex items-center w-full lg:w-auto md:justify-start gap-x-2">';
            }

            $item_output .= '<a' . $link_attributes . '>';
        } else {

            if (in_array('menu-item-has-children', $extra_li_classes)) {
                $item_output = '<span class="flex items-center w-full lg:w-auto md:justify-start gap-x-2">';
                $item_output .= '<a' . $link_attributes . '>';
            } else {
                $item_output = '<a' . $link_attributes . '>';
            }
        }

        if (!empty($icon) && $icon != 'None') {
            $item_output .= $icon;
        }

        if (!empty($args->link_before)) {
            $item_output .= $args->link_before;
        }

        $item_output .= apply_filters('the_title', $item->title, $item->ID);

        if (!empty($args->link_after)) {
            $item_output .= $args->link_after;
        }

        $item_output .= '</a>';

        if (in_array('menu-item-has-children', $extra_li_classes)) {
            $item_output .= '<button class="w-4 h-4 p-0 ml-auto lg:ml-1 sub-menu-toggle-button main-item-button"><span class="text-white duration-300 pointer-events-none material-icons-round">expand_more</span></button>';
            $item_output .= '</span>';
        }

        if (!empty($args->after)) {
            $item_output .= $args->after;
        }

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
