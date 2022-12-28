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
            'key' => 'field_lb_hero_subtitle',
            'label' => __('Subtitle', 'lightning'),
            'name' => 'subtitle',
            'type' => 'text',
            'instructions' => __('Subtitle displayed in color above the title', 'lightning'),
            'required' => 0,
            'wrapper' => ['width' => 100]
        ],
        [
            'key' => 'field_lb_hero_title',
            'label' => __('Title', 'lightning'),
            'name' => 'title',
            'type' => 'text',
            'instructions' => __('Title displayed as H1 in the header block', 'lightning'),
            'required' => 0,
            'wrapper' => ['width' => 100]
        ],
        [
            'key' => 'field_lb_hero_description',
            'label' => __('Description', 'lightning'),
            'name' => 'description',
            'type' => 'text',
            'instructions' => __('The description shown below the H1 title', 'lightning'),
            'required' => 0,
            'wrapper' => ['width' => 100]
        ],
        [
            'key' => 'field_lb_hero_key_info',
            'label' => __('Key info', 'lightning'),
            'name' => 'key_info_repeater',
            'type' => 'repeater',
            'instructions' => __('Enter key info displayed as text with purple triangle icon', 'lightning'),
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
            'label' => __('Buttons', 'lightning'),
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
                    'label' => __('Link', 'lightning'),
                    'name' => 'link',
                    'type' => 'link',
                    'instructions' => __('The link and title of the button', 'lightning'),
                    'required' => 0, // 0 | 1
                    'wrapper' => ['width' => 33] // 0-100
                ],

                [
                    'key' => 'field_lb_hero_button_type',
                    'label' => __('Button type', 'lightning'),
                    'name' => 'button_type',
                    'type' => 'select',
                    'instructions' => __('Select if the button should be displayed as primary or secondary', 'lightning'),
                    'choices' => [
                        'primary' => __('Primary', 'lightning'),
                        'secondary' => __('Secondary', 'lightning'),
                    ],
                    'default_value' => [
                        'value',
                    ],
                    'allow_null' => 0,
                    'multiple' => 0,
                    'ui' => 0,
                    'return_format' => 'value',
                    'ajax' => 0,
                    'placeholder' => __('Placeholder', 'lightning'),
                    'required' => 0,
                    'wrapper' => ['width' => 33]
                ],
                [
                    'key' => 'field_lb_hero_button_show_icon',
                    'label' => __('Display icon', 'lightning'),
                    'name' => 'show_icon',
                    'type' => 'true_false',
                    'instructions' => __('Check the box if the button should display an arrow icon next to it in the frontend', 'lightning'),
                    'default_value' => 0,
                    'ui' => 0,
                    'ui_on_text' => 'Show icon',
                    'ui_off_text' => 'Hide icon',
                    'wrapper' => ['width' => 33]
                ],
            ],
        ],
        [
            'key' => 'field_lb_hero_image',
            'label' => __('Hero Image', 'lightning'),
            'name' => 'image',
            'type' => 'image',
            'instructions' => __('The header image displayed to the right of the content', 'lightning'),
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
                0 => 'group_clone_component_footer',
            ],
            'display' => 'seamless',
            'prefix_name' => 1
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
