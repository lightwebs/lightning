<?php
return [
    'key' => 'layout_logos_banner',
    'name' => 'logos_banner',
    'label' => 'Logotyper',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_lb_logos_banner_content_tab',
            'label' => 'Innehåll',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_logos_banner_logos',
            'label' => __('Logotyper', 'lightning'),
            'name' => 'logos_banner_logotypes',
            'type' => 'repeater',
            'collapsed' => 'field_lb_logos_banner_name', // field key
            'min' => 1,
            'max' => 6,
            'layout' => 'table',
            'button_label' => __('Lägg till logotyp', 'lightning'),
            'sub_fields' => [
                [
                    'key' => 'field_lb_logos_banner_name',
                    'label' => __('Företagsnamn', 'lightning'),
                    'name' => 'name',
                    'type' => 'text',
                    'instructions' => __('Används för att göra admin enklare. Visas inte på frontend', 'lightning'),
                    'required' => 1,
                    'wrapper' => ['width' => 60]
                ],
                [
                    'key' => 'field_lb_logos_banner_logotype',
                    'label' => __('Logotyp', 'lightning'),
                    'name' => 'logotype',
                    'type' => 'image',
                    'preview_size' => 'thumbnail',
                    'return_format' => 'array',
                    'required' => 1,
                    'wrapper' => ['width' => 40]
                ],
            ],
            'wrapper' => ['width' => 100]
        ],
        [
            'key' => 'field_lb_logos_banner_settings_tab',
            'label' => 'Inställningar',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_logos_banner_colors',
            'label' => 'Färger',
            'name' => 'logos_banner',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_settings',
            ],
            'display' => 'seamless',
            'layout' => 'block',
            'prefix_name' => 1,
        ],
        [
            'key' => 'field_lb_logos_banner_small_logos_banner',
            'label' => 'Smal logos_banner?',
            'name' => 'logos_banner_small',
            'type' => 'true_false',
            'instructions' => 'Används på t.ex. kategorisidor.',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => 'Ja',
            'ui_off_text' => 'Nej',
        ],
        [
            'key' => 'field_lb_logos_banner_component_id',
            'label' => 'Komponentens id (frivilligt]',
            'name' => 'component_id',
            'type' => 'text',
            'instructions' => $component_id_instructions,
            'placeholder' => 'my-id',
            'prepend' => '#',
        ]
    ]
];
