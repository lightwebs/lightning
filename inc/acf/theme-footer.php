<?php
include __DIR__ . '/acf-arrays/material-icons.php';

acf_add_local_field_group([
    'key' => 'group_theme_footer',
    'title' => 'Sidfoten',
    'fields' => [
        [
            'key' => 'field_lb_theme_footer_info_tab',
            'label' => 'Formulär',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_theme_footer_form_shortcode',
            'label' => 'Gravity Form shortcode',
            'name' => 'footer_form_shortcode',
            'type' => 'text',
        ],
        [
            'key' => 'field_lb_theme_footer_columns_tab',
            'label' => 'Kolumner',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_theme_footer_columns',
            'label' => 'Kolumner',
            'name' => 'footer_col_repeater',
            'type' => 'repeater',
            'layout' => 'block',
            'button_label' => 'Kolumn +',
            'sub_fields' => [
                [
                    'key' => 'field_lb_theme_footer_columns_title',
                    'label' => 'Rubrik',
                    'name' => 'footer_col_title',
                    'type' => 'text',
                    'parent_repeater' => 'field_lb_theme_footer_columns',
                ],
                [
                    'key' => 'field_lb_theme_footer_col_rows',
                    'label' => 'Rader',
                    'instructions' => 'Använd antingen länk eller text, inte båda.',
                    'name' => 'footer_col_rows',
                    'type' => 'repeater',
                    'layout' => 'table',
                    'button_label' => 'Rad +',
                    'sub_fields' => [
                        [
                            'key' => 'field_lb_theme_footer_col_link',
                            'label' => 'Länk',
                            'name' => 'footer_col_link',
                            'type' => 'link',
                            'return_format' => 'array',
                            'parent_repeater' => 'field_lb_theme_footer_col_rows',
                        ],
                        [
                            'key' => 'field_lb_theme_footer_col_text',
                            'label' => 'Text',
                            'name' => 'footer_col_text',
                            'type' => 'text',
                            'parent_repeater' => 'field_lb_theme_footer_col_rows',
                        ],
                    ],
                    'rows_per_page' => 20,
                    'parent_repeater' => 'field_lb_theme_footer_columns',
                ],
            ],
            'rows_per_page' => 20,
        ],
        [
            'key' => 'field_lb_theme_footer_social_media_tab',
            'label' => 'Sociala medier',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_theme_footer_social_media_repeater',
            'label' => 'Sociala medier',
            'name' => 'footer_col_social_media',
            'type' => 'repeater',
            'layout' => 'table',
            'button_label' => 'SoMe +',
            'sub_fields' => [
                [
                    'key' => 'field_lb_theme_footer_col_link',
                    'label' => 'Länk',
                    'name' => 'footer_col_link',
                    'type' => 'link',
                    'return_format' => 'array',
                ],
            ],
            'rows_per_page' => 20,
        ],
    ],
    'location' => [
        [
            [
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'theme-footer',
            ],
        ],
    ],
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'active' => true,
    'show_in_rest' => 0,
]);
