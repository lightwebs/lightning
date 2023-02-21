<?php
$related_articles = get_field('related');
$continue_reading = get_field('continue_reading');
?>

<?php if ($continue_reading) :
    foreach ($continue_reading as $next_part_id) : ?>
        <a class="flex items-center justify-between p-4 mt-4 bg-white border rounded md:p-6 dark:bg-white/5 dark:border-white/5 group continue-reading-card" href="<?php echo get_permalink($next_part_id) ?>">
            <div class="d-block dark:text-white">
                <small class="mb-4 d-block"><?php echo __('Fortsätt läsa', 'lightning'); ?></small>

                <p class="mb-0 text-primary-700 hover:text-primary-800 dark:text-white">
                    <strong><?php echo get_the_title($next_part_id); ?></strong>
                </p>
            </div>
            <span class="text-primary-700 transition-transform duration-300 material-icons-round group-hover:translate-x-1 hover:text-primary-800 dark:text-white">
                chevron_right
            </span>
        </a>
    <?php endforeach; ?>
<?php endif; ?>

<h5 class="mt-6 text-sm text-center lg:hidden dark:text-white "><?php echo __('Dela', 'lightning'); ?></h5>
<div class="sticky text-white bottom-6 md:bottom-9">
    <?php echo social_share(get_the_ID(), 'row', 'justify-center py-2 rounded-full'); ?>
</div>

<footer class="my-10">
    <div class="related">
        <h3 class="mb-6 dark:text-white"><?php echo __('Relaterat', 'lightning'); ?></h3>
        <?php if (!$related_articles) :
            $terms = get_the_terms(get_the_ID(), 'category');
            $related_articles = get_posts([
                'post_type' => get_post_type(),
                'posts_per_page' => 3,
                'post__not_in' => [get_the_ID()],
                'orderby' => 'date',
                'tax_query' => [
                    [
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => $terms[0]->term_id,
                    ]
                ]
            ]);
        endif;
        foreach ($related_articles as $article_id) :
            $link = get_permalink($article_id);
            $image_id = get_post_thumbnail_id($article_id);
            $categories = get_the_terms($article_id, 'category');
            $categories = join(', ', wp_list_pluck($categories, 'name'));
            $title = get_the_title($article_id);
            $date = get_the_date('Y/m/d', $article_id);
        ?>
            <a class="grid grid-cols-4 py-3 mb-2 text-primary-700 transition-opacity duration-300 border-t hover:text-primary-800 dark:border-white/5 dark:px-4 dark:md:p-6 dark:rounded dark:bg-white/5 dark:text-white last:border-b gap-x-3 md:gap-x-4 md:py-4 hover:opacity-80" href="<?php echo $link; ?>">
                <?php if ($image_id) : ?>
                    <div class="col-span-1">
                        <?php echo image($image_id, 'medium', 'object-cover h-full w-full'); ?>
                    </div>
                <?php endif; ?>

                <div class="col-span-3 related-card-body">
                    <h4 class="mb-1 text-lg"><strong><?php echo $title; ?></strong></h4>
                    <p class="hidden mb-1 sm:block"><?php echo custom_excerpt(10, 'preamble', $article_id); ?></p>
                    <small class="text-xs date"><?php echo $date; ?></small>
                </div>
            </a>
        <?php endforeach;
        wp_reset_postdata(); ?>
    </div>
</footer>