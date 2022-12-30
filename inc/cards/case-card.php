<?php

/**
 * 
 * Get Case card
 * 
 */

if (!function_exists('case_card')) {

    function case_card($post_id, $class = null, $excerpt_length = 20) {
        $title = get_the_title();
        $link = get_permalink();
        $image_id = get_post_thumbnail_id($post_id);
        $post_type = get_post_type($post_id);
        $category = $post_type . '_category';

?>
        <div class="card group" data-post-id="<?php echo $post_id; ?>">
            <div class="h-full <?php echo $class; ?>">
                <a class="block" href="<?php echo $link; ?>">

                    <div class="w-full mb-3 overflow-hidden card-image md:mb-4">
                        <?php echo image($image_id, 'medium_large', 'object-cover w-full aspect-4/3 group-hover:scale-105 transition-transform duration-300') ?>
                    </div>

                    <div class="flex flex-col md:col-span-3 card-body">

                        <h4 class="mb-2"><?php echo $title; ?></h4>
                        <div class="mb-2"><?php echo custom_excerpt($excerpt_length, 'case_excerpt', $post_id); ?></div>

                    </div>
                </a>
            </div>
        </div>
<?php
    }
}