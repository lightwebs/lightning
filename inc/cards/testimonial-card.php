<?php

/**
 * 
 * Get Testimonial card
 * 
 */

if (!function_exists('testimonial_card')) {

    function testimonial_card($post_id, $class = null) {
        $title = get_the_title();
        $role = get_field('role', $post_id);
        $content = get_the_content();
        $image_id = get_post_thumbnail_id($post_id);
?>
        <div class="card group" data-post-id="<?php echo $post_id; ?>">
            <div class="h-full border border-purple-100 p-4 md:p-6 flex flex-col gap-4 <?php echo $class; ?>">

                <div class="mb-2 cursor-pointer card-body line-clamp-5 xxl:line-clamp-4"><?php echo $content; ?></div>

                <div class="flex items-center gap-4">
                    <?php echo image($image_id, 'thumbnail', 'object-cover aspect-square rounded-full border w-10 h-10') ?>
                    <div>
                        <p class="mb-0 text-sm font-semibold"><?php echo $title; ?></p>
                        <?php if ($role) : ?>
                            <small class="text-sm opacity-70"><?php echo $role; ?></small>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
<?php
    }
}
