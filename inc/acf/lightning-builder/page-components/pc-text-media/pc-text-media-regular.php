<?php
$is_media = $media_type === 'img';
$is_video = $media_type === 'video';
$is_statistics = $media_type === 'statistics';
$text_placement = get_sub_field('text_media_placement');
?>


    <div class="grid items-center md:grid-cols-2 <?php echo !$full_width ? 'gap-y-4 md:gap-x-6 lg:gap-x-12 container' : ''; ?>">
        <?php if ($text) : ?>
            <div class="mr-0 ml-0 order-2 md:order-<?php echo $text_placement;
                                                    echo $text_placement === '1' ? ' justify-self-end' : ' justify-self-start';
                                                    echo $full_width ? ' max-w-container-1/2' : '';
                                                    ?>">

                <div class="pc-text-media-text <?php echo $full_width ? 'container' . compensate_padding($text_placement) : ''; ?>">
                    <?php echo $text; ?>
                    <?php if ($link) :
                        btn_l_primary($link, 'mt-4 lg:mt-6');
                    endif; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($is_media || $is_video) :
            include __DIR__ . '/pc-media.php';
        elseif ($is_statistics) :
            include __DIR__ . '/pc-counter.php';
        endif; ?>
    </div>


<?php endif; ?>
