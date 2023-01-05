<?php
return [
    'key' => 'layout_text_media',
    'name' => 'text_media',
    'label' => 'Text & Media',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_lb_text_media_content_tab',
            'label' => 'Innehåll',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_text_media_text_content',
            'label' => 'Text',
            'name' => 'text_media_text_content',
            'type' => 'wysiwyg',
            'tabs' => 'visual',
            'toolbar' => 'full',
            'media_upload' => 0,
        ],
        [
            'key' => 'field_lb_text_media_link',
            'label' => 'Länk',
            'name' => 'text_media_link',
            'type' => 'link',
            'return_format' => 'array',
            'wrapper' => [
                'width' => '60',
            ],
        ],
        [
            'key' => 'field_lb_text_media_link_type',
            'label' => __('Visa länk som', 'lightning'),
            'name' => 'text_media_link_type',
            'type' => 'button_group',
            'choices' => [
                'button' => __('Knapp', 'lightning'),
                'link' => __('Länk', 'lightning'),
            ],
            'default_value' => 'button',
            'layout' => 'horizontal',
            'conditional_logic' => [
                [
                    [
                        'field' => 'field_lb_text_media_link',
                        'operator' => '!=empty',
                    ],
                ],
            ],
            'wrapper' => [
                'width' => '40',
            ],
        ],

        [
            'key' => 'field_lb_text_media_type',
            'label' => 'Mediatyp',
            'name' => 'text_media_type',
            'type' => 'button_group',
            'wrapper' => [
                'width' => '60',
            ],
            'choices' => [
                'img' => 'Bild',
                'video' => 'Video',
                'statistics' => 'Statistik',
            ],
            'return_format' => 'value',
            'allow_null' => 0,
            'layout' => 'horizontal',
        ],
        [
            'key' => 'field_lb_text_alignment',
            'label' => __('Textposition', 'lightning'),
            'name' => 'text_media_text_alignment',
            'type' => 'button_group',
            'instructions' => 'Välj textpositionen för denna komponent.',
            'layout' => 'vertical',
            'wrapper' => [
                'width' => '60',
            ],
            'choices' => [
                'start' => __('Toppen ↑', 'lightning'),
                'center' => __('Mitten →', 'lightning'),
                'end' => __('Botten ↓', 'lightning'),
            ],
            'default_value' => 'center',
        ],
        [
            'key' => 'field_lb_text_media_placement',
            'label' => 'Sida för text',
            'name' => 'text_media_placement',
            'type' => 'button_group',
            'conditional_logic' => [
                [
                    [
                        'field' => 'field_lb_text_media_type',
                        'operator' => '!=',
                        'value' => 'split',
                    ],
                ],
            ],
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

        [
            'key' => 'field_lb_text_media_img',
            'label' => 'Bild',
            'name' => 'text_media_img',
            'type' => 'image',
            'instructions' => 'Bildformat: 4:3',
            'conditional_logic' => [
                [
                    [
                        'field' => 'field_lb_text_media_type',
                        'operator' => '==',
                        'value' => 'img',
                    ],
                ],
            ],
            'wrapper' => [
                'width' => '60',
            ],
            'return_format' => 'id',
            'preview_size' => 'medium',
            'library' => 'all',
        ],
        [
            'key' => 'field_lb_text_media_video',
            'label' => 'Video',
            'name' => 'text_media_video',
            'type' => 'file',
            'instructions' => 'Filformat: mp4, bildformat: 16:9',
            'conditional_logic' => [
                [
                    [
                        'field' => 'field_lb_text_media_type',
                        'operator' => '==',
                        'value' => 'video',
                    ],
                ],
            ],
            'wrapper' => [
                'width' => '60',
            ],
            'return_format' => 'id',
            'library' => 'all',
            'mime_types' => 'mp4',
        ],
        [
            'key' => 'field_lb_text_media_full_media',
            'label' => __('Fullbred media', 'lightning'),
            'name' => 'text_media_full',
            'type' => 'true_false',
            'ui' => 1,
            'ui_on_text' => __('Ja', 'lightning'),
            'ui_off_text' => __('Nej', 'lightning'),
            'wrapper' => [
                'width' => '40',
            ],

        ],
        [
            'key' => 'field_lb_text_media_video_loop',
            'label' => 'Loopa video',
            'name' => 'text_media_video_loop',
            'type' => 'true_false',
            'conditional_logic' => [
                [
                    [
                        'field' => 'field_lb_text_media_type',
                        'operator' => '==',
                        'value' => 'video',
                    ],
                ],
            ],
            'wrapper' => [
                'width' => '50',
            ],
            'message' => 'Videon autostartar. Den loopar och är mutad',
            'ui_on_text' => 'Ja',
            'ui_off_text' => 'Nej',
            'ui' => 1,
        ],
        [
            'key' => 'field_lb_text_media_633463f6fd0dd',
            'label' => 'Visa videoknappar',
            'name' => 'text_media_video_controls',
            'type' => 'true_false',
            'conditional_logic' => [
                [
                    [
                        'field' => 'field_lb_text_media_type',
                        'operator' => '==',
                        'value' => 'video',
                    ],
                ],
            ],
            'wrapper' => [
                'width' => '50',
            ],
            'message' => 'Visar t.ex. play-knapp osv.',
            'ui_on_text' => 'Ja',
            'ui_off_text' => 'Nej',
            'ui' => 1,
        ],
        [
            'key' => 'field_lb_text_statistics_display',
            'label' => __('Visa som', 'lightning'),
            'name' => 'text_media_statistics_display',
            'type' => 'button_group',
            'choices' => [
                'col' => __('Stapel', 'lightning'),
                'row' => __('Rad', 'lightning'),
                'grid' => __('Två kolumner', 'lightning'),
            ],
            'default_value' => 'grid',
            'conditional_logic' => [
                [
                    [
                        'field' => 'field_lb_text_media_type',
                        'operator' => '==',
                        'value' => 'statistics',
                    ],
                ],
            ],
            'wrapper' => [
                'width' => '50',
            ],
        ],
        [
            'key' => 'field_lb_text_media_statstics_repeater',
            'label' => __('Statistik', 'lightning'),
            'name' => 'statistics_repeater',
            'type' => 'repeater',
            'collapsed' => 'field_lb_statistics_title',
            'min' => 1,
            'layout' => 'block',
            'button_label' => __('Lägg till statistikrad', 'lightning'),
            'conditional_logic' => [
                [
                    [
                        'field' => 'field_lb_text_media_type',
                        'operator' => '==',
                        'value' => 'statistics',
                    ],
                ],
            ],
            'sub_fields' => [
                [
                    'key' => 'field_lb_statistics_title',
                    'label' => __('Rubrik', 'lightning'),
                    'name' => 'statistic_title',
                    'type' => 'text',
                    'instructions' => __('Rubrik som visas över statistiken', 'lightning'),
                    'required' => 1,
                    'wrapper' => ['width' => 60]
                ],
                [
                    'key' => 'field_lb_text_statistics_type',
                    'label' => 'Statistiktyp',
                    'name' => 'statistic_type',
                    'type' => 'button_group',
                    'wrapper' => [
                        'width' => 20,
                    ],
                    'choices' => [
                        'simple' => 'Enkel',
                        'division' => 'Bråk',
                    ],
                    'return_format' => 'value',
                    'allow_null' => 0,
                    'layout' => 'horizontal',
                ],
                [
                    'key' => 'field_lb_text_statistics_should_animate',
                    'label' => __('Animera värdet', 'lightning'),
                    'name' => 'should_animate',
                    'type' => 'true_false',
                    'message' => '',
                    'default_value' => 1,
                    'ui' => 1,
                    'ui_on_text' => 'Ja',
                    'ui_off_text' => 'Nej',
                    'wrapper' => [
                        'width' => 20,
                    ],
                ],
                [
                    'key' => 'field_lb_statistics_value',
                    'label' => __('Värde', 'lightning'),
                    'name' => 'statistic_value',
                    'type' => 'number',
                    'instructions' => __('Värdet som visas i frontend', 'lightning'),
                    'required' => 1,
                    'wrapper' => ['width' => 60],
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'field_lb_text_statistics_type',
                                'operator' => '==',
                                'value' => 'simple',
                            ],
                        ],
                    ],
                ],
                [
                    'key' => 'field_lb_statistics_unit',
                    'label' => __('Enhet', 'lightning'),
                    'name' => 'statistic_unit',
                    'type' => 'text',
                    'instructions' => __('Ange vilken enhet som ska visas bredvid siffran', 'lightning'),
                    'required' => 0,
                    'wrapper' => ['width' => 40],
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'field_lb_text_statistics_type',
                                'operator' => '==',
                                'value' => 'simple',
                            ],
                        ],
                    ],
                ],
                [
                    'key' => 'field_lb_statistics_division_numerator',
                    'label' => __('Täljare', 'lightning'),
                    'name' => 'statistic_numerator',
                    'type' => 'number',
                    'instructions' => __('Täljaren i bråket. Visas till höger', 'lightning'),
                    'required' => 1,
                    'wrapper' => ['width' => 50],
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'field_lb_text_statistics_type',
                                'operator' => '==',
                                'value' => 'division',
                            ],
                        ],
                    ],
                ],
                [
                    'key' => 'field_lb_statistics_division_denominator',
                    'label' => __('Nämnare', 'lightning'),
                    'name' => 'statistic_denominator',
                    'type' => 'number',
                    'instructions' => __('Nämnaren i bråket. Visas till vänster', 'lightning'),
                    'required' => 1,
                    'wrapper' => ['width' => 50],
                    'conditional_logic' => [
                        [
                            [
                                'field' => 'field_lb_text_statistics_type',
                                'operator' => '==',
                                'value' => 'division',
                            ],
                        ],
                    ],
                ],
            ],
            'wrapper' => ['width' => 100]
        ],
        [
            'key' => 'field_lb_text_media_settings_tab',
            'label' => 'Inställningar',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_text_media_6315e113d469c',
            'label' => 'Färger',
            'name' => 'text_media',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_settings',
            ],
            'display' => 'seamless',
            'layout' => 'block',
            'prefix_name' => 1,
        ],
        [
            'key' => 'field_lb_text_media_63173ef3e9f0e',
            'label' => 'Komponentens id (frivillig)',
            'name' => 'component_id',
            'type' => 'text',
            'instructions' => $component_id_instructions,
            'placeholder' => 'my-id',
            'prepend' => '#',
        ]
    ]
];
