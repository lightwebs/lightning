<?php
if (get_row_layout() == 'timeline' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $timeline_color = '';
    $text_color = s($prefix)['text_color'];
    s($prefix)['text_color'] === 'text-[#000000]' ? $timeline_color = 'bg-black' : $timeline_color = 'bg-white';
?>
    <section id="<?php echo s($prefix)['component_id']; ?>" class="pc-timeline section <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?>">

        <?php component_header($prefix); ?>

        <?php if (have_rows('timeline')) : ?>
            <div class="inline-flex gap-8 transition-transform duration-300 timeline-selector md:gap-20">
                <?php while (have_rows('timeline')) : the_row(); ?>
                    <div class="font-light opacity-50 cursor-pointer select-none flex justify-center font-space text-4xl min-w-[85px] hover:opacity-100 md:text-8xl md:min-w-[250px] <?php echo $text_color; ?>">
                        <?php the_sub_field('year'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <!-- Timeline -->
        <div class="relative my-8 flex items-center justify-center w-full h-[2px] lg:my-12 <?php echo $timeline_color; ?>">
            <div class="absolute w-6 h-6 rounded-full <?php echo $timeline_color; ?>"></div>
        </div>

        <?php if (have_rows('timeline')) : ?>
            <div class="container <?php echo $text_color; ?>">
                <?php while (have_rows('timeline')) : the_row(); ?>
                    <?php
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                    $image = get_sub_field('image');
                    $image_placement = get_sub_field('image_placement');
                    $image_placement === '1' ? $image_placement = 'md:order-1' : $image_placement = 'md:order-2';

                    $content_classes = '';
                    if ($image === false) {
                        $content_classes = 'w-full md:max-w-[600px] md:mx-auto';
                    }
                    ?>
                    <div class="flex-col items-center hidden gap-12 md:flex-row timeline-item md:gap-16 lg:gap-18 xl:gap-24 xxl:gap-28">
                        <?php if ($image !== false) : ?>
                            <div class="flex items-center justify-center flex-1 order-2 <?php echo $image_placement; ?>">
                                <?php echo image($image['ID'], 'full'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="flex flex-col flex-1 order-1 <?php echo $content_classes; ?>">
                            <h3><?php echo $title; ?></h3>
                            <p><?php echo $content; ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php component_footer($prefix); ?>
    </section>
<?php endif; ?>