<?php
if (get_row_layout() == 'faq' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $faq_picked = get_sub_field('faqs');

    $faqs = new WP_Query([
        'post_type' => 'faq',
        'posts_per_page' => 500,
        'post__in' => $faq_picked,
        'orderby' => 'post__in',
    ]);
?>

    <section <?php component_id($prefix); ?> class="pc-faq section <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?>">
        <div class="container">
            <div class="grid gap-x-16 md:grid-cols-2">
                <div>
                    <?php component_header($prefix, true); ?>
                </div>

                <div>
                    <?php
                    if ($faqs->have_posts()) : ?>
                        <?php while ($faqs->have_posts()) : $faqs->the_post(); ?>
                            <details class="mb-8 faq-item mb-md-12">
                                <summary class="flex items-center justify-between p-4 md:p-8 faq-question">
                                    <h4 class="mb-0">
                                        <?php echo the_title(); ?></h4>
                                </summary>
                                <div class="px-4 pb-6 faq-answer md:pb-8 md:px-8"><?php echo the_content(); ?></div>
                            </details>
                    <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </div>

        <?php component_footer($prefix); ?>

    </section>
<?php endif; ?>