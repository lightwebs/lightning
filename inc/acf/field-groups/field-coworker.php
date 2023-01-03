<?php

acf_add_local_field_group([
    'key' => 'group_coworker',
    'title' => 'Kontaktuppgifter',
    'fields' => [
        [
            'key' => 'field_lb_coworker_email',
            'label' => __('Medarbetaren E-post', 'lightning'),
            'name' => 'coworker_email',
            'type' => 'text',
            'maxlength' => 50,
            'required' => 0, 
            'wrapper' => ['width' => 50] 
        ],

        [
            'key' => 'field_lb_coworker_phone',
            'label' => __('Medarbetaren Telefonnummer', 'lightning'),
            'name' => 'coworker_phone',
            'type' => 'text',
            'maxlength' => 50,
            'required' => 0, 
            'wrapper' => ['width' => 50] 
        ],
    ],
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'coworker',
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