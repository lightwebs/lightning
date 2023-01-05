<?php
return [
    'key' => 'layout_timeline',
    'name' => 'timeline',
    'label' => 'Timeline',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_lb_timeline_comp_head_tab',
            'label' => 'Komponenthuvud',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_timeline_header',
            'label' => 'Header',
            'name' => 'timeline',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_header',
            ],
            'display' => 'seamless',
            'prefix_name' => 1
        ],
        [
            'key' => 'field_lb_timeline_content_tab',
            'label' => 'Innehåll',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_timeline_repeater',
            'label' => __('Timeline', 'lightning'),
            'name' => 'timeline',
            'type' => 'repeater',
            'instructions' => __('INSTRUCTIONS', 'lightning'),
            'collapsed' => 'field_lb_timeline_repeater',
            'layout' => 'block',
            'button_label' => __('År +', 'lightning'),
            'sub_fields' => [
                [
                    'key' => 'field_lb_timeline_year',
                    'label' => __('År', 'lightning'),
                    'name' => 'year',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_lb_timeline_title',
                    'label' => __('Rubrik', 'lightning'),
                    'name' => 'title',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_lb_timeline_content',
                    'label' => __('Text', 'lightning'),
                    'name' => 'content',
                    'type' => 'textarea',
                ],
                [
                    'key' => 'field_lb_timeline_image',
                    'label' => __('Bild', 'lightning'),
                    'name' => 'image',
                    'type' => 'image',
                    'instructions' => __('Välj bild som visas bredvid texten', 'lightning'),
                    'preview_size' => 'thumbnail',
                    'mime_types' => 'svg, png, jpg, jpeg',
                    'return_format' => 'array',
                    'required' => 0,
                    'wrapper' => ['width' => 100],
                ],
                [
                    'key' => 'field_lb_timeline_image_placement',
                    'label' => 'Sida för bild',
                    'name' => 'image_placement',
                    'type' => 'button_group',
                    'wrapper' => [
                        'width' => '40',
                    ],
                    'choices' => [
                        1 => 'Vänster',
                        2 => 'Höger',
                    ],
                    'allow_null' => 0,
                    'default_value' => 1,
                    'layout' => 'horizontal',
                    'return_format' => 'value',
                ],
            ],
        ],
        [
            'key' => 'field_lb_timeline_settings_tab',
            'label' => 'Inställningar',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_timeline_colors',
            'label' => 'Färger',
            'name' => 'timeline',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_settings',
            ],
            'display' => 'seamless',
            'prefix_name' => 1
        ],
        [
            'key' => 'field_lb_timeline_component_id',
            'label' => 'Komponentens id (frivillig)',
            'name' => 'component_id',
            'type' => 'text',
            'instructions' => $component_id_instructions,
            'placeholder' => 'my-id',
            'prepend' => '#',
        ]
    ]
];
