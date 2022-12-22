<?php

/**
 * 
 * Get regular card
 * 
 */

if (!function_exists('card')) {

    function card($post_id, $class = null, $excerpt_length = 20) {
        $title = get_the_title();
        $link = get_permalink();
        $preamble = get_field('preamble', $post_id);
        $date = get_the_date();
        $image_id = get_post_thumbnail_id($post_id);
        $category = '';
        if (get_post_type($post_id) === 'post') {
            $category = 'category';
        } else {
            $category = get_post_type($post_id) . '_category';
        }
        // $taxonomies = get_object_taxonomies(get_post_type($post_id));
?>

        <div class="card group" data-post-id="<?php echo $post_id; ?>">
            <div class="pb-8 bg-white h-full md:rounded dark:bg-white/5 <?php echo $class; ?>">
                <a class="block" href="<?php echo $link; ?>">

                    <div class="w-full mb-3 overflow-hidden rounded card-image md:mb-4">
                        <?php echo image($image_id, 'medium_large', 'object-cover aspect-4/3 group-hover:scale-105 transition-transform duration-300') ?>
                    </div>

                    <div class="flex flex-col md:col-span-3 card-body <?php echo str_contains($class, 'bg-[transparent]') ? 'p-0' : 'p-4 xl:p-6'; ?>">

                        <?php get_post_terms($post_id, $category, 'mb-4'); ?>

                        <h4 class="mb-2 dark:text-white"><?php echo $title; ?></h4>
                        <div class="mb-2 dark:text-white"><?php echo custom_excerpt($excerpt_length, 'preamble', $post_id); ?></div>

                        <?php get_author($post_id, 'date', 'small'); ?>
                    </div>
                </a>
            </div>
        </div>
<?php
    }
}
