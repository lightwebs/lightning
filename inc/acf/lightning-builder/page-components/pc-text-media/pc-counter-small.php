<?php
$has_media = $statistics_display === 'media';
?>

<div class="flex items-center order-1 md:order-<?php echo $text_placement === '1' ? '2' : '1';
                                                echo $text_placement === '1' ? ' justify-start' : ' justify-end';
                                                echo $has_media ? ' place-end' : ' self-center';
                                                ?> w-full bg-[#400093] text-white ">

    <div class="py-12 max-w-container-1/2 w-full">
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
