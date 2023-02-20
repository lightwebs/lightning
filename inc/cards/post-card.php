<?php

/**
 * 
 * Get Post card
 * 
 */

if (!function_exists('post_card')) {

    function post_card($post_id, $class = null, $excerpt_length = 20, $post_number = false) {
        $title = get_the_title();
        $link = get_permalink();
        $date = get_the_date();
        $show_cats = get_sub_field('show_cats');
        $image_id = get_post_thumbnail_id($post_id);
        $image_classes = 'object-cover group-hover:scale-105 transition-transform duration-300 h-full w-full aspect-4/3';

        if ($post_number == 0 || $post_number == 2) {
            $image_classes .= ' md:row-span-2';
        }
?>
        <div class="col-span-2 lg:col-span-1 card group" data-post-id="<?php echo $post_id; ?>">

            <div class="h-full <?php echo $class; ?> <?php echo str_contains($class, 'bg-[transparent]') ? '' : 'shadow-md'; ?>">
                <a class="flex flex-col h-full" href="<?php echo $link; ?>">

                    <div class="w-full overflow-hidden card-image">
                        <?php echo image($image_id, 'medium_large', $image_classes); ?>
                    </div>

                    <div class="flex flex-col md:col-span-3 card-body p-4 xl:p-6 <?php echo str_contains($class, 'bg-[transparent]') ? '!px-0' : ''; ?>">

                        <?php if ($show_cats) : ?>
                            <?php get_post_terms($post_id, 'category', 'mb-4'); ?>
                        <?php endif; ?>

                        <h4 class="mb-2"><?php echo $title; ?></h4>
                        <small class="mb-4"><?php echo $date; ?></small>
                        <div class=""><?php echo custom_excerpt($excerpt_length, 'preamble', $post_id); ?></div>

                    </div>
                </a>
            </div>
        </div>
<?php
    }
}
