<?php
return [
    'key' => 'layout_cover',
    'name' => 'cover',
    'label' => 'Cover',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_lb_cover_comp_head_tab',
            'label' => 'Komponenthuvud',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_cover_header',
            'label' => 'Header',
            'name' => 'cover',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_header',
            ],
            'display' => 'seamless',
            'layout' => 'block',
            'prefix_name' => 1,
        ],
        [
            'key' => 'field_lb_cover_content_tab',
            'label' => 'Innehåll',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_cover_btn',
            'label' => 'Knapp',
            'name' => 'cover_btn',
            'type' => 'link',
            'return_format' => 'array',
            'wrapper' => [
                'width' => '50',
            ],
        ],
        [
            'key' => 'field_lb_cover_media_type',
            'label' => 'Mediatyp',
            'name' => 'cover_media_type',
            'type' => 'button_group',
            'choices' => [
                'img' => 'Bild',
                'video' => 'Video',
            ],
            'allow_null' => 0,
            'layout' => 'horizontal',
            'return_format' => 'value',
        ],
        [
            'key' => 'field_lb_cover_img',
            'label' => 'Bild',
            'name' => 'cover_img',
            'type' => 'image',
            'conditional_logic' => [
                [
                    [
                        'field' => 'field_lb_cover_media_type',
                        'operator' => '==',
                        'value' => 'img',
                    ],
                ],
            ],
            'wrapper' => [
                'width' => '50',
            ],
            'return_format' => 'id',
            'preview_size' => 'medium',
            'library' => 'all',
        ],
        [
            'key' => 'field_lb_cover_video',
            'label' => 'Video',
            'name' => 'cover_video',
            'type' => 'file',
            'instructions' => 'Endast mp4-format',
            'conditional_logic' => [
                [
                    [
                        'field' => 'field_lb_cover_media_type',
                        'operator' => '==',
                        'value' => 'video',
                    ],
                ],
            ],
            'wrapper' => [
                'width' => '50',
            ],
            'return_format' => 'id',
            'library' => 'all',
            'mime_types' => 'mp4',
        ],
        [
            'key' => 'field_lb_cover_settings_tab',
            'label' => 'Inställningar',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_cover_colors',
            'label' => 'Färger',
            'name' => 'cover',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_settings',
            ],
            'display' => 'seamless',
            'layout' => 'block',
            'prefix_name' => 1,
        ],
        [
            'key' => 'field_lb_cover_small_cover',
            'label' => 'Smal cover?',
            'name' => 'cover_small',
            'type' => 'true_false',
            'instructions' => 'Används på t.ex. kategorisidor.',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => 'Ja',
            'ui_off_text' => 'Nej',
        ],
        [
            'key' => 'field_lb_cover_component_id',
            'label' => 'Komponentens id (frivilligt]',
            'name' => 'component_id',
            'type' => 'text',
            'instructions' => $component_id_instructions,
            'placeholder' => 'my-id',
            'prepend' => '#',
        ]
    ]
];
