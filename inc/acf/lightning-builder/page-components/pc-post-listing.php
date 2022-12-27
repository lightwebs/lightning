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
    $picked_post = get_sub_field('picked_post');
    $picked_case = get_sub_field('picked_case');
    $columns = get_sub_field('columns');

    $args = [
        'post_type' => $post_type,
        'post_status' => 'publish',
    ];

    if ($content_type == 'latest') {
        $args['orderby'] = 'date';
        $args['order'] = 'DESC';
    }

    if ($content_type == 'picked' && $post_type == 'case') {
        $args['post__in'] = $picked_case;
    }

    if ($content_type == 'picked' && $post_type == 'post') {
        $args['post__in'] = $picked_post;
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

        <span class="<?php echo s($prefix)['text_color']; ?>">
            <?php component_header($prefix); ?>
        </span>

        <?php include __DIR__ . '/pc-post-listing/pc-search.php'; ?>

        <div class="px-0 md:px-4 container <?php echo s($prefix)['text_color']; ?>">
            <div class="grid items-stretch md:grid-cols-2 xl:grid-cols-<?php echo $columns; ?> gap-4 post-container search-result">
                <?php if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>

                        <?php card(get_the_ID(), $card_text_colors . ' ' . $card_bg_colors); ?>

                    <?php endwhile; ?>
                <?php endif;
                wp_reset_postdata(); ?>
            </div>

            <?php
            if ($found_posts > 12 && $qty < 1) :  ?>
                <div class="flex justify-center my-8">
                    <?php echo btn_primary('Ladda fler', 'pc-load-more mx-auto block', 'data-post-type="' . $post_type . '" data-qty="' . $qty . '"'); ?>
                </div>
            <?php
            endif; ?>
        </div>
    </section>
<?php endif; ?>