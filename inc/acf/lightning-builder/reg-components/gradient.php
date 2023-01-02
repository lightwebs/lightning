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
            'label' => __('Riktning', 'lightning'),
            'name' => 'gradient_placement',
            'instructions' => 'Välj i vilken riktning gradient ska skina. Tänk likt en lampa som skänker ljus i en viss riktning.',
            'type' => 'button_group',
            'choices' => [
                'left-bottom' => __('↗', 'lightning'),
                'left-top' => __('↘', 'lightning'),
                'center' => __('⊙', 'lightning'),
                'right-top' => __('↙', 'lightning'),
                'right-bottom' => __('↖', 'lightning'),
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
