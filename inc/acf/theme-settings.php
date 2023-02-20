<?php
acf_add_local_field_group([
    'key' => 'group_theme_settings',
    'title' => 'Temainställningar',
    'fields' => [
        [
            'key' => 'field_theme_settings_menu_tab',
            'label' => 'Meny',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_theme_settings_logo_image',
            'label' => 'Logga',
            'name' => 'site_logo',
            'type' => 'image',
            'return_format' => 'id',
            'preview_size' => 'medium',
            'library' => 'all',
            'conditional_logic' => [
                [
                    [
                        'field' => 'field_theme_settings_logo_choice',
                        'operator' => '==',
                        'value' => 'logo',
                    ],
                ],
            ],
            'wrapper' => [
                'width' => '50',
            ]
        ],
        [
            'key' => 'field_theme_settings_logo_image_dark',
            'label' => 'Mörk logga',
            'name' => 'site_logo_dark',
            'type' => 'image',
            'return_format' => 'id',
            'preview_size' => 'medium',
            'library' => 'all',
            'conditional_logic' => [
                [
                    [
                        'field' => 'field_theme_settings_logo_choice',
                        'operator' => '==',
                        'value' => 'logo',
                    ],
                ],
            ],
            'wrapper' => [
                'width' => '50',
            ]
        ],
        [
            'key' => 'field_lb_theme_settings_right_menu_btn',
            'label' => __('Knapp till höger', 'lightning'),
            'name' => 'right_menu_btn',
            'type' => 'link',
            'instructions' => __('T.ex. Kontaktknapp', 'lightning'),
            'required' => 0,
            'wrapper' => ['width' => 100]
        ],
        [
            'key' => 'field_theme_settings_404_tab',
            'label' => '404',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_theme_settings_404_text',
            'label' => 'Text',
            'name' => 'four_o_four_text',
            'type' => 'wysiwyg',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'delay' => 0,
        ],
        [
            'key' => 'field_theme_settings_404_text_2',
            'label' => 'Text 2',
            'name' => 'four_o_four_text_two',
            'type' => 'wysiwyg',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'delay' => 0,
        ],
        [
            'key' => 'field_theme_settings_company_info_tab',
            'label' => 'Företagsinformation',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_theme_settings_contact_address',
            'label' => __('Adress', 'lightning'),
            'name' => 'google_maps',
            'type' => 'google_map',
            'center_lat' => '35.681236',
            'center_lng' => '139.767125',
            'zoom' => '10',
            'height' => '400',
            'required' => 0,
            'wrapper' => ['width' => 100]
        ],
        [
            'key' => 'field_theme_settings_contact_phone',
            'label' => __('Telefonnummer', 'lightning'),
            'name' => 'phone',
            'type' => 'text',
            'required' => 0,
            'wrapper' => ['width' => 50]
        ],
        [
            'key' => 'field_theme_settings_contact_email',
            'label' => __('Email', 'lightning'),
            'name' => 'email',
            'type' => 'email',
            'required' => 0,
            'wrapper' => ['width' => 50]
        ],
        [
            'key' => 'field_theme_settings_contact_org_nr',
            'label' => __('Organisationsnummer', 'lightning'),
            'name' => 'org_nr',
            'type' => 'text',
            'required' => 0,
            'wrapper' => ['width' => 50]
        ],
    ],
    'location' => [
        [
            [
                'param' => 'options_page',
                'operator' => '==',
                'value' => 'theme-settings',
            ],
        ],
    ],
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
]);
