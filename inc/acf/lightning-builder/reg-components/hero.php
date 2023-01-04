<?php
return [
    'key' => 'layout_hero',
    'name' => 'hero',
    'label' => 'Hero',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_lb_hero_comp_head_tab',
            'label' => 'Komponenthuvud',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_hero_subtitle',
            'label' => __('Titel', 'lightning'),
            'name' => 'title',
            'type' => 'text',
            'instructions' => __('Rubrik visas ovanför header som H1.', 'lightning'),
            'required' => 0,
            'wrapper' => ['width' => 100]
        ],
        [
            'key' => 'field_lb_hero_header',
            'label' => 'Header',
            'name' => 'hero',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_header',
            ],
            'display' => 'seamless',
            'prefix_name' => 1
        ],
        [
            'key' => 'field_lb_hero_content_tab',
            'label' => 'Innehåll',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_hero_key_info',
            'label' => __('Nyckelinfo', 'lightning'),
            'name' => 'key_info_repeater',
            'type' => 'repeater',
            'instructions' => __('Fyll i nyckelinformation. Visas under ingressen som text med en lila trinagel till höger', 'lightning'),
            'collapsed' => 'field_lb_hero_key_info_title',
            'layout' => 'table',
            'button_label' => __('Add Key Info', 'lightning'),
            'sub_fields' => [
                [
                    'key' => 'field_lb_hero_key_info_title',
                    'label' => __('Key info', 'lightning'),
                    'name' => 'key_info_title',
                    'type' => 'text',
                    'instructions' => __('Single key info displayed. This is the data displayed on the frontend.', 'lightning'),
                    'required' => 1,
                    'wrapper' => ['width' => 100]
                ],
            ],
            'wrapper' => ['width' => 100]
        ],
        [
            'key' => 'field_lb_hero_buttons',
            'label' => __('Knappar', 'lightning'),
            'name' => 'buttons_repeater',
            'type' => 'repeater',
            'instructions' => __('CTA buttons', 'lightning'),
            'collapsed' => 'field_lb_hero_button_text',
            'min' => 0,
            'max' => 2,
            'layout' => 'block',
            'button_label' => __('Add Button', 'lightning'),

            'sub_fields' => [
                [
                    'key' => 'field_lb_hero_button_link',
                    'label' => __('Länk', 'lightning'),
                    'name' => 'link',
                    'type' => 'link',
                    'instructions' => __('Välj länk och text till knappen', 'lightning'),
                    'required' => 0,
                    'wrapper' => ['width' => 33]
                ],
                [
                    'key' => 'field_lb_hero_button_type',
                    'label' => __('Knapptyp', 'lightning'),
                    'name' => 'button_type',
                    'type' => 'button_group',
                    'instructions' => __('Välj hur knappen ska visas i frontend', 'lightning'),
                    'choices' => [
                        'primary' => __('Primär', 'lightning'),
                        'secondary' => __('Sekundär', 'lightning'),
                    ],
                    'default_value' => 'primary',
                    'layout' => 'horizontal',
                    'wrapper' => ['width' => 33]
                ],
                [
                    'key' => 'field_lb_hero_button_show_icon',
                    'label' => __('Visa ikon', 'lightning'),
                    'name' => 'show_icon',
                    'type' => 'true_false',
                    'instructions' => __('Bestämmer om en pil ska visas i frontend', 'lightning'),
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => 'Ja',
                    'ui_off_text' => 'Nej',
                    'wrapper' => ['width' => 33]
                ],
            ],
        ],
        [
            'key' => 'field_lb_hero_image',
            'label' => __('Bild', 'lightning'),
            'name' => 'image',
            'type' => 'image',
            'instructions' => __('Välj bild som visas till höger i heron', 'lightning'),
            'preview_size' => 'thumbnail',
            'mime_types' => 'svg, png, jpg, jpeg',
            'return_format' => 'array',
            'required' => 0,
            'wrapper' => ['width' => 100],
        ],
        [
            'key' => 'field_lb_hero_settings_tab',
            'label' => 'Inställningar',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_hero_colors',
            'label' => 'Färger',
            'name' => 'hero',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_settings',
            ],
            'display' => 'seamless',
            'layout' => 'block',
            'prefix_name' => 1,
        ],
        [
            'key' => 'field_lb_hero_component_id',
            'label' => 'Komponentens id (frivillig)',
            'name' => 'component_id',
            'type' => 'text',
            'instructions' => $component_id_instructions,
            'placeholder' => 'my-id',
            'prepend' => '#',
        ]
    ]
];
