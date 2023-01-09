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
            'key' => 'field_theme_settings_floating_CTA_tab',
            'label' => 'Flytande CTA',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_theme_settings_floating_cta_image',
            'label' => __('Bild', 'lightning'),
            'name' => 'cta_image',
            'type' => 'image',
            'instructions' => __('Bild på kontaktpersonen i CTA', 'lightning'),
            'preview_size' => 'thumbnail',
            'return_format' => 'array',
            'required' => 1,
            'wrapper' => ['width' => 20]
        ],
        [
            'key' => 'field_lb_theme_settings_floating_cta_content',
            'label' => __('Innehåll', 'lightning'),
            'name' => 'cta_content',
            'type' => 'wysiwyg',
            'tabs' => 'all',
            'toolbar' => 'basic',
            'media_upload' => 0,
            'delay' => 1,
            'required' => 1,
            'wrapper' => ['width' => 60]
        ],
        [
            'key' => 'field_lb_theme_settings_floating_cta_status',
            'label' => __('Status', 'lightning'),
            'name' => 'cta_status',
            'type' => 'true_false',
            'instructions' => __('Aktivera CTA?', 'lightning'),
            'default_value' => 1,
            'ui' => 1,
            'ui_on_text' => 'Ja',
            'ui_off_text' => 'Nej',
            'wrapper' => ['width' => 20]
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
        [
            'key' => 'field_theme_settings_contact_link_org_nr',
            'label' => __('Länka till Allabolag i ny flik?', 'lightning'),
            'name' => 'link_org_nr',
            'type' => 'true_false',
            'message' => '',
            'default_value' => 0,
            'ui' => 1,
            'ui_on_text' => 'Ja',
            'ui_off_text' => 'Nej',
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
