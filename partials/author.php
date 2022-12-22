<?php

/**
 * 
 * Get the author
 * 
 */

if (!function_exists('get_author')) {

    function get_author($post_id, $extra = 'date' | 'description', $size = 'small' | 'medium' | 'large', $class = null) {
        $date = get_the_date('Y-m-d', $post_id);
        $updated = get_the_modified_date('Y-m-d', $post_id);
        if ($size == 'small') {
            $img_size = 'w-10';
            $text_size = 'text-sm';
            $margin = 'pt-3 mt-3 md:pt-6 md:mt-auto';
        } elseif ($size == 'medium') {
            $img_size = 'w-16';
            $text_size = 'text-base';
            $margin = 'p-3 md:p-4 my-4';
        } elseif ($size == 'large') {
            $img_size = 'w-20';
            $text_size = 'text-lg';
        }

        $description = get_the_author_meta('description');
        $name = get_the_author_meta('user_firstname') . ' ' . get_the_author_meta('user_lastname');
        $image = get_field('profile_image', 'user_' . get_the_author_meta('ID'));
?>
        <div class="flex items-center <?php echo $margin; ?> <?php echo $class; ?> gap-x-4 dark:text-white">
            <?php if ($image) : ?>
                <div class="flex-shrink-0 <?php echo $img_size; ?>">
                    <?php echo image($image, 'thumbnail', 'rounded-full object-contain'); ?>
                </div>
            <?php endif; ?>

            <div class="w-auto">
                <h4 class="mb-0 <?php echo $text_size; ?>"><strong><?php echo $name; ?></strong></h4>

                <?php if ($extra == 'description' && $description) : ?>
                    <div class="text-sm"><?php echo $description; ?></div>
                <?php endif; ?>

                <?php if ($extra == 'date' && $date) : ?>
                    <div class="flex items-center">
                        <small class="text-xs flex items-center date <?php echo $updated ? 'lighter' : ''; ?>" data-tooltip-top="<?php echo __('Publicerades', 'lightning'); ?>">
                            <span class="mr-1 text-sm material-icons-round">create</span>
                            <?php echo $date; ?>
                        </small>
                        <?php if ($updated) : ?>
                            <small class="flex items-center ml-3 text-xs text-gray-400 date updated" data-tooltip-top="<?php echo __('Uppdaterades', 'lightning'); ?>">
                                <span class="mr-1 text-sm material-icons-round">update</span>
                                <?php echo $updated; ?>
                            </small>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
<?php
    }
}
