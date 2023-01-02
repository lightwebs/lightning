<?php
return [
    'key' => 'layout_gradient',
    'name' => 'gradient',
    'label' => 'Gradient',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_lb_gradient_content_tab',
            'label' => 'Innehåll',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_gradient_gradient_placement',
            'label' => __('Position', 'lightning'),
            'name' => 'gradient_placement',
            'type' => 'button_group',
            'choices' => [
                'left-top' => __('↖', 'lightning'),
                'right-top' => __('↗', 'lightning'),
                'center' => __('⊙', 'lightning'),
                'left-bottom' => __('↙', 'lightning'),
                'right-bottom' => __('↘', 'lightning'),
            ],
            'default_value' => 'upleft',
            'wrapper' => ['width' => 100]
        ],
        [
            'key' => 'field_lb_gradient_settings_tab',
            'label' => 'Inställningar',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_gradient_component_id',
            'label' => 'Komponentens id (frivillig)',
            'name' => 'component_id',
            'type' => 'text',
            'instructions' => $component_id_instructions,
            'placeholder' => 'my-id',
            'prepend' => '#',
        ]
    ]
];
