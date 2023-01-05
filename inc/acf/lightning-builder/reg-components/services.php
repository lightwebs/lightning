<?php
return [
    'key' => 'layout_services',
    'name' => 'services',
    'label' => 'Tjänster',
    'display' => 'block', 
    'sub_fields' => [
        [
            'key' => 'field_lb_services_comp_head_tab',
            'label' => 'Komponenthuvud',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_services_header',
            'label' => 'Header',
            'name' => 'services',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_header',
            ],
            'display' => 'seamless',
            'prefix_name' => 1
        ],
        [
            'key' => 'field_lb_services_content_tab',
            'label' => 'Innehåll',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_services_rows',
            'label' => 'Rader',
            'name' => 'services_rows',
            'type' => 'repeater',
            'layout' => 'block',
            'collapsed' => 'field_lb_services_cols_title',
            'button_label' => 'Rad +',
            'sub_fields' => [
                [
                    'key' => 'field_lb_services_cols',
                    'label' => 'Kolumner',
                    'name' => 'services_cols',
                    'type' => 'repeater',
                    'instructions' => 'Lägg till upp till 3 kolumner',
                    'layout' => 'block',
                    'collapsed' => 'field_lb_services_cols_title',
                    'min' => 1,
                    'max' => 3,
                    'button_label' => 'Kolumn +',
                    'sub_fields' => [
                        [
                            'key' => 'field_lb_services_cols_title',
                            'label' => 'Rubrik',
                            'name' => 'title',
                            'type' => 'text',
                            'parent_repeater' => 'field_lb_services_cols',
                        ],
                        [
                            'key' => 'field_lb_services_cols_text',
                            'label' => 'Text',
                            'name' => 'text',
                            'type' => 'wysiwyg',
                            'tabs' => 'visual',
                            'toolbar' => 'basic',
                            'media_upload' => 0,
                            'delay' => 1,
                            'parent_repeater' => 'field_lb_services_cols',
                        ],
                        [
                            'key' => 'field_lb_services_cols_link',
                            'label' => 'Knapp/Länk',
                            'name' => 'link',
                            'type' => 'link',
                            'wrapper' => ['width' => '50'],
                            'return_format' => 'array',
                            'parent_repeater' => 'field_lb_services_cols',
                        ],  
                    ],
                ],
            ],
        ],
        [
            'key' => 'field_lb_services_settings_tab',
            'label' => 'Inställningar',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_services_colors',
            'label' => 'Färger',
            'name' => 'services',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_settings',
            ],
            'display' => 'seamless',
            'prefix_name' => 1
        ],
        [
            'key' => 'field_lb_services_component_id',
            'label' => 'Komponentens id (frivillig)',
            'name' => 'component_id',
            'type' => 'text',
            'instructions' => $component_id_instructions,
            'placeholder' => 'my-id',
            'prepend' => '#',
        ]
    ]
];

