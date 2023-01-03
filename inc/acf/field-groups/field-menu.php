<?php

acf_add_local_field_group([
    'key' => 'group_lb_menu',
    'title' => 'Meny',
    'fields' => [
        [
            'key' => 'field_lb_menu_description',
            'label' => 'Undertext',
            'name' => 'description',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => 'Bör endast användas på undermenyer',
        ]
    ],
    'location' => [
        [
            [
                'param' => 'nav_menu_item',
                'operator' => '==',
                'value' => 'all',
            ],
        ],
    ],
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'active'    => true,
]);
