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
            'collapsed' => 'field_lb_timeline_repeater', // field key
            'layout' => 'table', // table, block, row
            'button_label' => __('Add entry', 'lightning'),
            'sub_fields' => [
                [
                    'key' => 'field_lb_timeline_year',
                    'label' => __('År', 'lightning'),
                    'name' => 'text',
                    'type' => 'text',
                    'required' => 0, // 0 | 1
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
