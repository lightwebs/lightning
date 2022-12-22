<?php
return [
    'key' => 'layout_faq',
    'name' => 'faq',
    'label' => 'FAQs',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_lb_faq_comp_head_tab',
            'label' => 'Komponenthuvud',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_faq_header',
            'label' => 'Header',
            'name' => 'faq',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_header',
            ],
            'display' => 'seamless',
            'prefix_name' => 1,
        ],
        [
            'key' => 'field_lb_faq_content_tab',
            'label' => 'Innehåll',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_faq_faqs',
            'label' => 'FAQ:er',
            'name' => 'faqs',
            'type' => 'relationship',
            'post_type' => [
                0 => 'faq',
            ],
            'filters' => [
                0 => 'search',
                1 => 'taxonomy',
            ],
            'return_format' => 'id',
        ],
        [
            'key' => 'field_lb_faq_settings_tab',
            'label' => 'Inställningar',
            'type' => 'tab',
            'placement' => 'top',
        ],
        [
            'key' => 'field_lb_faq_colors',
            'label' => 'Färger',
            'name' => 'faq',
            'type' => 'clone',
            'clone' => [
                0 => 'group_clone_component_footer',
            ],
            'display' => 'seamless',
            'prefix_name' => 1,
        ],
        [
            'key' => 'field_lb_faq_component_id',
            'label' => 'Komponentens id (frivillig)',
            'name' => 'component_id',
            'type' => 'text',
            'instructions' => $component_id_instructions,
            'placeholder' => 'my-id',
            'prepend' => '#',
        ]
    ]
];