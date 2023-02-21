<?php
$is_img = $media_type === 'img';
$is_video = $media_type === 'video';
$text_placement = get_sub_field('text_media_placement');
$text_alignment = get_sub_field('text_media_text_alignment');
if ($is_img || $is_video) :
?>


    <div class="grid items-<?php echo $text_alignment ?> md:grid-cols-2 <?php echo !$full_width ? 'gap-y-6 md:gap-x-6 lg:gap-x-12 container ' : 'gap-y-6 pb-12 md:pb-0'; ?> ">
        <?php if ($text) : ?>
            <div class="mr-0 ml-0 order-2 md:order-<?php echo $text_placement;
                                                    echo $text_placement === '1' ? ' justify-self-end' : ' justify-self-start';
                                                    echo $full_width ? ' max-w-container-1/2' : '';
                                                    ?>">

                <div class=" <?php echo $full_width ? 'container' . compensate_padding($text_placement) : '';
                                ?>">
                    <div class="<?php
                                if ($full_width) : echo 'md:py-6';
                                elseif ($text_alignment === 'start') : echo 'md:pt-6';
                                elseif ($text_alignment === 'end') : echo 'pb-4 md:pb-6';
                                endif; ?>
                                ">
                        <?php echo $text; ?>
                        <?php if ($link) :
                            $link_type === 'button' ? btn_l_primary($link, 'mt-4 lg:mt-6') : custom_link($link, 'text-primary-500 mt-4 lg:mt-6');
                        endif; ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($is_img || $is_video) :
            include __DIR__ . '/pc-media.php';
        endif; ?>
    </div>


<?php endif; ?>