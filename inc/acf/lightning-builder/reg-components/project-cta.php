<?php
return [
    'key' => 'layout_project_cta',
    'name' => 'project_cta',
    'label' => 'Projekt CTA',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_lb_project_cta_comp_head_tab',
            'label' => 'Komponenthuvud',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_project_cta_header',
            'label' => 'Header',
            'name' => 'project_cta',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_header',
            ],
            'display' => 'seamless',
            'prefix_name' => 1
        ],
        [
            'key' => 'field_lb_project_cta_content_tab',
            'label' => 'Innehåll',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_project_cta_link',
            'label' => __('Link', 'lightning'),
            'name' => 'link',
            'type' => 'link',
            'instructions' => __('Välj länk och rubrik för CTA', 'lightning'),
            'required' => 0, // 0 | 1
            'wrapper' => ['width' => 100] // 0-100
        ],
        [
            'key' => 'field_lb_project_cta_settings_tab',
            'label' => 'Inställningar',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_project_cta_colors',
            'label' => 'Färger',
            'name' => 'project_cta',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_settings',
            ],
            'display' => 'seamless',
            'prefix_name' => 1
        ],
        [
            'key' => 'field_lb_cta_small_cta',
            'label' => 'Smal CTA?',
            'name' => 'cta_small',
            'type' => 'true_false',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => 'Ja',
            'ui_off_text' => 'Nej',
        ],
        [
            'key' => 'field_lb_project_cta_component_id',
            'label' => 'Komponentens id (frivillig)',
            'name' => 'component_id',
            'type' => 'text',
            'instructions' => $component_id_instructions,
            'placeholder' => 'my-id',
            'prepend' => '#',
        ]
    ]
];
