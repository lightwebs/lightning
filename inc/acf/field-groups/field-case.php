<?php

acf_add_local_field_group([
    'key' => 'group_case_excerpt',
    'title' => 'Kort projektbeskrivning',
    'fields' => [
        [
            'key' => 'field_lb_case_excerpt',
            'label' => __('Kort projektbeskrivning', 'lightning'),
            'name' => 'case_excerpt',
            'type' => 'text',
            'instructions' => __('Kort beskrivande text som syns i case listning', 'lightning'),
            'required' => 1,
            'wrapper' => ['width' => 100]
        ],
    ],
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'case',
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
