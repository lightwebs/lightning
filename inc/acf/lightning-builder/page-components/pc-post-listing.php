<?php
if (get_row_layout() == 'post_listing' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $post_type = get_sub_field('post_type');
    $qty = get_sub_field('qty');
    $offset = get_sub_field('offset');
    $show_search = get_sub_field('show_search');
    $card_text_colors = get_sub_field('card_text_colors');
    $card_bg_colors = get_sub_field('card_bg_colors');
    $content_type = get_sub_field('content_type');
    $columns = get_sub_field('columns');
    $post_number = 0;

    $card_classes = $card_text_colors;

    if ($post_type == 'post') {
        $card_classes .= ' ' . $card_bg_colors;
    }

    $args = [
        'post_type' => $post_type,
        'post_status' => 'publish',
    ];

    if ($content_type == 'latest') {
        $args['orderby'] = 'date';
        $args['order'] = 'DESC';
    }

    // Gets the post types from the acf-arrays folder and checks if the post type is in the array
    // If it is, it will get the posts from the picked post type

    if ($content_type == 'picked') {
        include acf_path() . 'acf-arrays/post-types.php';
        foreach ($post_types as $key => $type) {
            if ($key == $post_type) {
                $args['post__in'] = get_sub_field('picked_' . $key);
                $args['orderby'] = 'post__in';
            }
        }
    }

    if ($qty > 0) {
        $args['posts_per_page'] = $qty;
    } else {
        $args['posts_per_page'] = 12;
    }

    if ($offset > 0) {
        $args['offset'] = $offset;
    }

    $query = new WP_Query($args);
    $found_posts = $query->found_posts;
    $taxonomies = get_taxonomies(['object_type' => [$post_type]]);

?>

    <section <?php component_id($prefix); ?> class="pc-post-listing section <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?>" data-card-bg="<?php echo $card_bg_colors; ?>" data-card-text="<?php echo $card_text_colors; ?>">

        <?php component_header($prefix); ?>

        <?php include __DIR__ . '/pc-post-listing/pc-search.php'; ?>

        <div class="container <?php echo s($prefix)['text_color']; ?>">

            <div class="grid gap-6 lg:gap-8 xxl:gap-12 post-container search-result <?php
                                                                                    echo $post_type == 'post' ? 'md:grid-cols-4' : 'md:grid-cols-2';
                                                                                    echo $post_type == 'testimonial' ? ' items-start' : ' items-stretch';
                                                                                    echo $post_type == 'coworker' ? ' grid-cols-2 md:grid-cols-3' : '';
                                                                                    ?> lg:grid-cols-<?php echo $columns; ?>">
                <?php
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        if ($post_type == 'post') {
                            post_card(get_the_ID(), $card_classes, 20, $post_number);
                        }

                        if ($post_type == 'testimonial') {
                            testimonial_card(get_the_ID(), $card_classes, 10);
                        }

                        if ($post_type == 'coworker') {
                            coworker_card(get_the_ID(), $card_classes, 10);
                        }

                        $post_number++;
                    endwhile;
                endif;
                wp_reset_postdata(); ?>
            </div>

            <?php
            if ($found_posts > 12 && $qty < 1) :  ?>
                <div class="flex justify-center my-8">
                    <?php echo btn_primary('Ladda fler', 'pc-load-more mx-auto block', 'data-post-type="' . $post_type . '" data-qty="' . $qty . '"' . '"'); ?>
                </div>
            <?php
            endif; ?>
        </div>

        <?php component_footer($prefix); ?>

    </section>
<?php endif; ?>