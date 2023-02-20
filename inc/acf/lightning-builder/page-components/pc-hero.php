<?php
if (get_row_layout() == 'hero' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $link = get_sub_field('hero_link');
    $hero_small = get_sub_field('hero_small');
    $hero_media_type = get_sub_field('hero_media_type');
    $video = get_sub_field('hero_video');
    $hero_img = get_sub_field('hero_img');
?>
    <section id="<?php echo s($prefix)['component_id']; ?>" class="pc-hero section <?php echo s($prefix)['bg_color']; ?>">
        <div class="container px-0 md:px-4">
            <div class="flex flex-col md:flex-row md:py-16 <?php
                                                            echo s($prefix)['has_color_bg']
                                                                ? 'items-end md:items-center pt-0 lg:py-20'
                                                                : 'items-center lg:py-20';
                                                            echo s($prefix)['text_align'] == 'text-center' ? ' justify-center' : '';
                                                            echo $hero_small ? ' min-h-[350px]' : ' min-h-[400px] lg:min-h-[600px]';
                                                            ?>">
                <div class="order-2 w-full md:order-1 md:w-2/3 lg:w-1/2">
                    <div class="hero-content p-4 <?php echo s($prefix)['bg_color'] ? s($prefix)['bg_color'] : '';
                                                    echo s($prefix)['has_color_bg'] ? ' md:p-6' : ' md:p-0 my-4 md:my-0';
                                                    echo s($prefix)['text_color'] !== 'text-black' ? ' text-black md:text-white' : '';
                                                    echo ' ' . s($prefix)['text_align']; ?>">

                        <?php if (s($prefix)['title']) : ?>
                            <?= '<' . s($prefix)['title_tag'] . '>'; ?>
                            <?= s($prefix)['title']; ?>
                            <?= '</' . s($prefix)['title_tag'] . '>'; ?>
                        <?php endif; ?>

                        <?php if (s($prefix)['text']) : ?>
                            <div class="preamble"><?= s($prefix)['text']; ?></div>
                        <?php endif; ?>

                        <?php btn_l_primary($link, 'mt-8'); ?>
                    </div>
                </div>
                <div class="relative top-0 left-0 order-1 h-full px-0 hero-img md:order-2 md:absolute md:-z-10 md:w-full">
                    <?php if ($hero_media_type === 'img') : ?>
                        <?php image($hero_img, 'full', 'hero-bg-img object-cover h-full'); ?>
                    <?php endif; ?>
                    <?php if ($hero_media_type === 'video') : ?>
                        <?php
                        if ($video) :
                            $url = wp_get_attachment_url($video);
                            $title = get_the_title($video);
                        ?>
                            <video class="object-cover w-full h-full hero-bg-img" playsinline autoplay muted loop>
                                <source src="<?= $url; ?>" type="video/mp4">
                            </video>
                        <?php endif; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>