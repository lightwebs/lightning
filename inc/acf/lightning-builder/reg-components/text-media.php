<?php
return [
    'key' => 'layout_text_media',
    'name' => 'text_media',
    'label' => 'Text & Media',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_lb_text_media_comp_head_tab',
            'label' => 'Komponenthuvud',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_text_media_header',
            'label' => 'Header',
            'name' => 'text_media',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_header',
            ],
            'display' => 'seamless',
            'layout' => 'block',
            'prefix_name' => 1,
        ],
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
            'key' => 'field_lb_text_media_media_btn',
            'label' => 'Knapp',
            'name' => 'text_media_btn',
            'type' => 'link',
            'return_format' => 'array',
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
            ],
            'return_format' => 'value',
            'allow_null' => 0,
            'layout' => 'horizontal',
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
