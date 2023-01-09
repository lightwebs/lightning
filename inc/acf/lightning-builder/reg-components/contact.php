<?php
return [
    'key' => 'layout_contact',
    'name' => 'contact',
    'label' => 'Kontakt',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_lb_contact_comp_head_tab',
            'label' => 'Komponenthuvud',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_contact_header',
            'label' => 'Header',
            'name' => 'contact',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_header',
            ],
            'display' => 'seamless',
            'prefix_name' => 1
        ],
        [
            'key' => 'field_lb_contact_content_tab',
            'label' => 'Innehåll',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_contact_form_shortcode',
            'label' => 'Gravity Form shortcode',
            'name' => 'contact_form_shortcode',
            'type' => 'text',
        ],
        [
            'key' => 'field_lb_contact_settings_tab',
            'label' => 'Inställningar',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_contact_colors',
            'label' => 'Färger',
            'name' => 'contact',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_settings',
            ],
            'display' => 'seamless',
            'prefix_name' => 1
        ],
        [
            'key' => 'field_lb_contact_component_id',
            'label' => 'Komponentens id (frivillig)',
            'name' => 'component_id',
            'type' => 'text',
            'instructions' => $component_id_instructions,
            'placeholder' => 'my-id',
            'prepend' => '#',
        ]
    ]
];
