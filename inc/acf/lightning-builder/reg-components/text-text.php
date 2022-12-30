<?php
return [
    'key' => 'layout_text_text',
    'name' => 'text_text',
    'label' => 'Text & text',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_lb_text_text_comp_head_tab',
            'label' => 'Komponenthuvud',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_text_text_header',
            'label' => 'Header',
            'name' => 'text_text',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_header',
            ],
            'display' => 'seamless',
            'layout' => 'block',
            'prefix_name' => 1,
        ],
        [
            'key' => 'field_lb_text_text_content_tab',
            'label' => 'Innehåll',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_text_text_show_text_2',
            'label' => __('Text i 2 kolumner?', 'lightning'),
            'name' => 'show_text_2',
            'type' => 'true_false',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => 'Ja',
            'ui_off_text' => 'Nej',
        ],
        [
            'key' => 'field_lb_text_text_left',
            'label' => 'Text - vänster',
            'name' => 'text_text_left',
            'type' => 'wysiwyg',
            'tabs' => 'visual',
            'toolbar' => 'full',
            'media_upload' => 0,
            'delay' => 0,
        ],
        [
            'key' => 'field_lb_text_text_right',
            'label' => 'Text - höger',
            'name' => 'text_text_right',
            'type' => 'wysiwyg',
            'tabs' => 'visual',
            'toolbar' => 'full',
            'media_upload' => 0,
            'delay' => 0,
            'conditional_logic' => [
                [
                    [
                        'field' => 'field_lb_text_text_show_text_2',
                        'operator' => '==',
                        'value' => '1',
                    ],
                ],
            ],
        ],
        [
            'key' => 'field_lb_text_text_settings_tab',
            'label' => 'Inställningar',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_text_text_colors',
            'label' => 'Färger',
            'name' => 'text_text',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_settings',
            ],
            'display' => 'seamless',
            'layout' => 'block',
            'prefix_name' => 1,
        ],
        [
            'key' => 'field_lb_text_text_compontent_id',
            'label' => 'Komponentens id (frivillig)',
            'name' => 'component_id',
            'type' => 'text',
            'instructions' => $component_id_instructions,
            'placeholder' => 'my-id',
            'prepend' => '#',
        ]
    ]
];
