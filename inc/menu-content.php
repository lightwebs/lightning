<?php

class Menu_content extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $icon = get_field('icon', $item);
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $class_names = $value = '';

        $li_classes = empty($item->classes) ? array() : (array) $item->classes;

        if (!empty($icon) && $icon != 'None') {
            $li_classes[] = 'has-icon';
        }

        // Sub menu item
        if ($depth > 0) {
            $li_classes[] = 'sub-menu-item';
        } else {
            // Top level menu item
            $li_classes[] = 'parent-item lg:py-8 lg:px-2';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($li_classes), $item));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $output .= $indent . '<li id="menu-item-' . $item->ID . '"' . $value . $class_names . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $attributes .= 'class="inline-flex items-center text-black menu-item-link gap-x-2 dark:text-white"';
        if (!empty($args->before)) {
            $item_output = $args->before;

            if (in_array('menu-item-has-children', $li_classes) && $item->menu_item_parent) {
                $item_output .= '<span class="flex items-center justify-between w-full">';
            }

            $item_output .= '<a' . $attributes . '>';
        } else {

            if (in_array('menu-item-has-children', $li_classes) && $item->menu_item_parent) {
                $item_output = '<span class="flex items-center justify-between w-full">';
                $item_output .= '<a' . $attributes . '>';
            } else {
                $item_output = '<a' . $attributes . '>';
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

        if (in_array('menu-item-has-children', $li_classes)) {
            $item_output .= '<button class="w-4 h-4 p-0 ml-auto lg:ml-2 sub-menu-toggle-button main-item-button"><span class="text-sm text-black duration-300 pointer-events-none dark:text-white material-icons-round">expand_more</span></button>';
            $item_output .= '</span>';
        }

        if (!empty($args->after)) {
            $item_output .= $args->after;
        }

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
