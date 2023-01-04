<?php
return [
    'key' => 'layout_roadmap',
    'name' => 'roadmap',
    'label' => 'Roadmap',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_lb_roadmap_comp_head_tab',
            'label' => 'Komponenthuvud',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_roadmap_header',
            'label' => 'Header',
            'name' => 'roadmap',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_header',
            ],
            'display' => 'seamless',
            'prefix_name' => 1
        ],
        [
            'key' => 'field_lb_roadmap_content_tab',
            'label' => 'Innehåll',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_roadmap_repeater',
            'label' => __('Steg', 'lightning'),
            'name' => 'roadmap_repeater',
            'type' => 'repeater',
            'instructions' => __('Lägg till steg i roadmapen', 'lightning'),
            'collapsed' => 'field_lb_roadmap_title',
            'min' => 0,
            'layout' => 'block',
            'button_label' => __('Steg +', 'lightning'),
            'sub_fields' => [
                [
                    'key' => 'field_lb_roadmap_title',
                    'label' => __('Rubrik', 'lightning'),
                    'name' => 'title',
                    'type' => 'text',
                    'required' => 1,
                ],
                [
                    'key' => 'field_lb_roadmap_wysiwyg',
                    'label' => __('Text', 'lightning'),
                    'name' => 'text',
                    'type' => 'wysiwyg',
                    'tabs' => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 0,
                    'delay' => 1,
                ],
            ],
        ],
        [
            'key' => 'field_lb_roadmap_settings_tab',
            'label' => 'Inställningar',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_roadmap_colors',
            'label' => 'Färger',
            'name' => 'roadmap',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_settings',
            ],
            'display' => 'seamless',
            'prefix_name' => 1
        ],
        [
            'key' => 'field_lb_roadmap_component_id',
            'label' => 'Komponentens id (frivillig)',
            'name' => 'component_id',
            'type' => 'text',
            'instructions' => $component_id_instructions,
            'placeholder' => 'my-id',
            'prepend' => '#',
        ]
    ]
];
