<?php
if (get_row_layout() == 'cover' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $btn = get_sub_field('cover_btn');
    $cover_small = get_sub_field('cover_small');
    $cover_media_type = get_sub_field('cover_media_type');
    $video = get_sub_field('cover_video');
    $cover_img = get_sub_field('cover_img');
?>

    <section <?php component_id($prefix); ?> class="relative pc-cover">
        <div class="container">
            <div class="flex flex-col md:flex-row md:py-16 <?php
                                                            echo s($prefix)['has_color_bg']
                                                                ? 'items-end md:items-center pt-0 lg:py-20'
                                                                : 'justify-center md:justify-start items-center lg:py-20';
                                                            echo s($prefix)['text_align'] == 'text-center' ? ' justify-center' : '';
                                                            echo $cover_small ? ' min-h-[350px]' : ' min-h-[400px] lg:min-h-[600px]';
                                                            ?>">
                <div class="z-10 w-full md:w-2/3 lg:w-1/2">
                    <div class="cover-content p-4 <?php echo s($prefix)['bg_color'] ? s($prefix)['bg_color'] : '';
                                                    echo s($prefix)['has_color_bg'] ? ' md:p-12' : ' md:p-0 my-4 md:my-0';

                                                    echo ' ' . s($prefix)['text_align']; ?>">
                        <div class="<?php echo s($prefix)['text_color'] ? s($prefix)['text_color'] : ''; ?>">
                            <?php if (s($prefix)['title']) : ?>
                                <?php echo '<' . s($prefix)['title_tag'] . '>'; ?>
                                <?php echo s($prefix)['title'] ?>
                                <?php echo '</' . s($prefix)['title_tag'] . '>'; ?>
                            <?php endif; ?>


                            <?php if (s($prefix)['text']) : ?>
                                <div class="<?php
                                            echo s($prefix)['has_color_bg'] ? '' : 'preamble' ?>">
                                    <?php echo s($prefix)['text']; ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="flex flex-wrap items-center gap-3 py-3">
                            <?php btn_l_primary($btn); ?>
                        </div>
                    </div>
                </div>
                <div class="relative top-0 left-0 z-0 w-full px-0 md:absolute h-72 md:h-full cover-img">
                    <?php if ($cover_media_type === 'img') : ?>
                        <?php image($cover_img, 'full', 'cover-bg-img object-cover h-full w-full'); ?>
                    <?php endif; ?>
                    <?php if ($cover_media_type === 'video') : ?>
                        <?php
                        if ($video) :
                            $url = wp_get_attachment_url($video);
                            $title = get_the_title($video);
                        ?>
                            <video class="object-cover h-full min-w-full cover-bg-img" playsinline autoplay muted loop>
                                <source src="<?php echo $url; ?>" type="video/mp4">
                            </video>
                        <?php endif; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>