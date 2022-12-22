<?php
if ($media_type === 'img' || $media_type === 'video') :
    $img = get_sub_field('text_media_img');
    $video = get_sub_field('text_media_video');
    $video_controls = get_sub_field('text_media_video_controls');
    $loop_video = get_sub_field('text_media_video_loop');
    $text_placement = get_sub_field('text_media_placement');
?>

    <div class="container <?php echo $full_width ? 'hidden md:block' : ''; ?>">
        <div class="grid items-center md:grid-cols-2 gap-y-4 md:gap-x-6 lg:gap-x-12">

            <?php if ($text) : ?>
                <div class="order-2 md:order-<?php echo $text_placement; ?>">
                    <div class="<?php echo $full_width ? 'py-4 md:py-12 md:py-20' : ''; ?>">
                        <?php echo $text; ?>

                        <?php if ($link) :
                            btn_l_primary($link, 'mt-4 lg:mt-6');
                        endif; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!$full_width) : ?>
                <?php include(__DIR__ . '/pc-media.php'); ?>
            <?php else : ?>
                <div class="py-0 my-0 order-1 md:order-<?php echo $text_placement === '1' ? '2' : '1'; ?>"></div>
            <?php endif; ?>
        </div>
    </div>

    <?php if ($full_width) : ?>
        <div class="h-full px-0 pointer-events-none md:absolute">
            <div class="grid items-center h-full md:grid-cols-2 gap-x-0">
                <?php include(__DIR__ . '/pc-media.php'); ?>
                <div class="p-4 order-2 md:order-<?php echo $text_placement; ?>">
                    <span class="md:invisible md:opacity-0"><?php echo $text; ?>
                        <?php if ($link) :
                            btn_l_primary($link, 'lg:mt-6');
                        endif; ?>
                    </span>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php endif; ?>