<?php
// Include all files in the acf-arrays folder
$acf_arrays = glob(get_template_directory() . '/inc/acf/acf-arrays/*.php');
foreach ($acf_arrays as $acf_array) {
    include $acf_array;
}

// Include the clone fields
include lb_path() . 'clone-fields.php';


// Include the lightning builder
if (function_exists('acf_add_local_field_group')) {
    $fields = [
        [
            'key' => 'field_lb',
            'label' => 'Lightning Builder',
            'name' => 'lb_components',
            'type' => 'flexible_content',
            'wrapper' => [
                'width' => '',
                'class' => 'main-builder-component',
                'id' => '',
            ],
            'layouts' => [],
            'button_label' => 'Komponent +',
        ]
    ];

    $handle = opendir(__DIR__ . '/reg-components/');

    if ($handle) {
        while (false !== ($file_name = readdir($handle))) {
            if ('.' === $file_name || '..' === $file_name || '.gitkeep' === $file_name) {
                continue;
            }

            $component_layout = include_once __DIR__ . '/reg-components/' . $file_name;

            if (empty($component_layout)) {
                continue;
            }

            $fields[0]['layouts'][] = $component_layout;

            if (isset($fields[0]['layouts'])) {
                asort($fields[0]['layouts']);
            }
        }

        closedir($handle);
    }

    acf_add_local_field_group([
        'key' => 'group_lightning_builder',
        'title' => 'Lightning builder',
        'fields' => $fields,
        'location' => [
            [
                [
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-lightning-builder.php',
                ],
            ],
        ],
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => [
            0 => 'the_content',
            1 => 'discussion',
            2 => 'comments',
            3 => 'revisions',
            4 => 'slug',
            5 => 'send-trackbacks',
        ],
    ]);
};
