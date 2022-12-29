<?php

acf_add_local_field_group([
    'key' => 'group_testimonial',
    'title' => 'Roll',
    'fields' => [
        [
            'key' => 'field_lb_testimonial',
            'label' => __('Roll/jobbtitel', 'lightning'),
            'name' => 'role',
            'type' => 'text',
            'required' => 0,
            'wrapper' => ['width' => 100]
        ],
    ],
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'testimonial',
            ],
        ],
    ],
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'active'    => true,
]);
