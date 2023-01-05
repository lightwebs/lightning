<?php
$has_media = $statistics_display === 'media';
if ($has_media) :
    $statistics_img = get_sub_field('statistic_media_image');
endif;
?>

<div class="flex flex-col justify-center h-full order-1 md:order-<?php echo $text_placement === '1' ? '2' : '1';
                                                                    echo $text_placement === '1' ? ' items-end' : ' items-start'; ?>">
    <?php if ($has_media) : ?>
        <div class="xs:w-4/5 -z-10">
            <img src="<?php echo $statistics_img['url']; ?>" alt="<?php echo $media['alt']; ?>" class="aspect-4/3 w-full" />
        </div>
    <?php endif; ?>

    <div class="flex items-center   <?php
                                    echo $text_placement === '1' ? ' justify-start' : ' justify-end';
                                    echo $has_media ? ' place-end' : ' self-center';
                                    ?> text-white w-full">


        <div class="xs:-translate-y-20 w-full py-12 max-w-container-1/2 bg-[#400093] xs:w-fit">
            <div class="flex container gap-12">
                <?php if (have_rows('statistics_repeater')) :
                    while (have_rows('statistics_repeater')) : the_row();
                        $title = get_sub_field('statistic_title');
                        $type = get_sub_field('statistic_type');
                        $should_animate = get_sub_field('should_animate');
                        $is_simple = $type === 'simple';
                        $is_division = $type === 'division';

                        if ($is_simple) {
                            $unit = get_sub_field('statistic_unit');
                            $n = get_sub_field('statistic_value');
                        }

                        if ($is_division) {
                            $n = get_sub_field('statistic_numerator');
                            $d = get_sub_field('statistic_denominator');
                        }

                ?>

                        <div class="flex flex-col gap-4">
                            <p class="text-3xl sm:text-4xl xl:!text-5xl font-bold font-space mb-0">
                                <span class="<?php echo $should_animate ? 'counter' : ''; ?>">
                                    <?php echo $n; ?>
                                </span>
                                <?php if ($is_simple) :
                                    echo ' ' . $unit;
                                elseif ($is_division) :
                                    echo '/ ' . $d;
                                endif; ?>
                            </p>
                            <h3 class="text-xl font-medium mb-0"><?php echo $title; ?></h3>
                        </div>

                <?php
                    endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</div>
