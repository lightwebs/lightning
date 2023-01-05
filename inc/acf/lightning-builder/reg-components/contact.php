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
            'key' => 'field_lb_contact_address',
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
            'key' => 'field_lb_contact_phone',
            'label' => __('Telefonnummer', 'lightning'),
            'name' => 'phone',
            'type' => 'text',
            'required' => 0, 
            'wrapper' => ['width' => 50] 
        ],
        [
            'key' => 'field_lb_contact_email',
            'label' => __('Email', 'lightning'),
            'name' => 'email',
            'type' => 'email',
            'required' => 0, 
            'wrapper' => ['width' => 50] 
        ],
        [
            'key' => 'field_lb_contact_org_nr',
            'label' => __('Organisationsnummer', 'lightning'),
            'name' => 'org_nr',
            'type' => 'text',
            'required' => 0, 
            'wrapper' => ['width' => 50] 
        ],
        [
            'key' => 'field_lb_contact_link_org_nr',
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