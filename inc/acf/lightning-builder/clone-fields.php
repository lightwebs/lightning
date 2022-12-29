<?php

if (function_exists('acf_add_local_field_group')) {
    // Include the clone fields
    include get_template_directory() . '/inc/acf/acf-arrays/colors.php';

    acf_add_local_field_group([
        'key' => 'group_clone_component_header',
        'title' => 'Component header',
        'fields' => [
            [
                'key' => 'field_clone_title',
                'label' => 'Rubrik',
                'name' => 'title',
                'type' => 'text',
                'wrapper' => [
                    'width' => '80'
                ],
            ],
            [
                'key' => 'field_clone_title_tag',
                'label' => 'Rubrikstorlek',
                'name' => 'title_tag',
                'type' => 'select',
                'wrapper' => [
                    'width' => '20',
                ],
                'choices' => [
                    'h1' => 'H1',
                    'h2' => 'H2',
                    'h3' => 'H3',
                    'h4' => 'H4',
                ],
                'default_value' => 'h2',
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'value',
            ],
            [
                'key' => 'field_clone_title_tag_message',
                'label' => 'OBS VIKTIGT!',
                'type' => 'message',
                'conditional_logic' => [
                    [
                        [
                            'field' => 'field_clone_title_tag',
                            'operator' => '==',
                            'value' => 'h1',
                        ],
                    ],
                ],
                'message' => 'Använd endast en (1 st] H1 per sida för en bra SEO!',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ],
            [
                'key' => 'field_clone_text',
                'label' => 'Text',
                'name' => 'text',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'toolbar' => 'basic',
                'media_upload' => 0,
                'delay' => 1,
            ],
            [
                'key' => 'field_clone_text_align',
                'label' => 'Textjustering',
                'name' => 'text_align',
                'type' => 'button_group',
                'choices' => [
                    'text-left' => __('Vänster', 'lightning'),
                    'text-center' => __('Center', 'lightning'),
                ],
                'allow_null' => 0,
                'layout' => 'horizontal',
                'return_format' => 'value',
            ],
        ],
    ]);

    acf_add_local_field_group([
        'key' => 'group_clone_component_footer',
        'title' => 'Component footer',
        'fields' => [
            [
                'key' => 'field_clone_bg_colors',
                'label' => 'Bakgrundsfärger',
                'name' => 'bg_colors',
                'type' => 'button_group',
                'conditional_logic' => 0,
                'wrapper' => [
                    'class' => 'colors-group',
                ],
                'choices' => $bg_colors,
                'default_value' => 'transparent',
                'return_format' => 'value',
                'allow_null' => 0,
                'layout' => 'horizontal',
            ],
            [
                'key' => 'field_clone_text_colors',
                'label' => 'Textfärger',
                'name' => 'text_colors',
                'type' => 'button_group',
                'wrapper' => [
                    'class' => 'colors-group text-colors-group',
                ],
                'choices' => $text_colors,
                'return_format' => 'value',
                'allow_null' => 0,
                'layout' => 'horizontal',
            ],
            [
                'key' => 'field_clone_component_name',
                'label' => 'Komponentens namn',
                'name' => 'component_name',
                'type' => 'text',
                'instructions' => 'Endast för ordning och reda i admin, visas ej på hemsidan.',
            ],
            [
                'key' => 'field_lb_clone_component_hide_component',
                'label' => __('Dölj komponenten', 'lightning'),
                'name' => 'hide_component',
                'type' => 'true_false',
                'message' => 'Döljer komponenten på hemsidan',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Dölj',
                'ui_off_text' => 'Visa',
            ],
        ],
    ]);

    acf_add_local_field_group([
        'key' => 'group_clone_ab_component_header',
        'title' => 'Component header',
        'fields' => [
            [
                'key' => 'field_ab_clone_title',
                'label' => 'Rubrik',
                'name' => 'title',
                'type' => 'text',
                'wrapper' => [
                    'width' => '80'
                ],
            ],
            [
                'key' => 'field_ab_clone_title_tag',
                'label' => 'Rubrikstorlek',
                'name' => 'title_tag',
                'type' => 'select',
                'wrapper' => [
                    'width' => '20',
                ],
                'choices' => [
                    'h1' => 'H1',
                    'h2' => 'H2',
                    'h3' => 'H3',
                    'h4' => 'H4',
                ],
                'default_value' => 'h2',
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'value',
            ],
            [
                'key' => 'field_ab_clone_title_tag_message',
                'label' => 'OBS VIKTIGT!',
                'type' => 'message',
                'conditional_logic' => [
                    [
                        [
                            'field' => 'field_ab_clone_title_tag',
                            'operator' => '==',
                            'value' => 'h1',
                        ],
                    ],
                ],
                'message' => 'Använd endast en (1 st] H1 per sida för en bra SEO!',
                'new_lines' => 'wpautop',
                'esc_html' => 0,
            ]
        ]
    ]);

    acf_add_local_field_group([
        'key' => 'group_clone_ab_component_footer',
        'title' => 'Component footer',
        'fields' => [
            [
                'key' => 'field_clone_ab_component_name',
                'label' => 'Komponentens namn',
                'name' => 'component_name',
                'type' => 'text',
                'instructions' => 'Endast för ordning och reda i admin, visas ej på hemsidan.',
            ],
            [
                'key' => 'field_ab_clone_component_hide_component',
                'label' => __('Göm komponenten', 'lightning'),
                'name' => 'hide_component',
                'type' => 'true_false',
                'message' => 'Döljer komponenten på hemsidan',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Ja',
                'ui_off_text' => 'Nej',
            ],
        ],
    ]);
}
