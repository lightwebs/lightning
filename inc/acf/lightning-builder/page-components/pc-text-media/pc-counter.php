<?php
$show_as_grid = get_sub_field('text_media_statistics_display') === 'grid';
?>

<div class="flex items-center order-1 md:order-<?php echo $text_placement === '1' ? '2' : '1';
                                                echo $text_placement === '1' ? ' justify-start' : ' justify-end'; ?> w-full bg-[#400093] text-white h-full ">

    <div class="py-12 max-w-container-1/2 w-full">
        <div class="<?php echo $show_as_grid ? 'grid grid-cols-2 '  : 'flex flex-col ' ?> container gap-12">
            <?php if (have_rows('statistics_repeater')) :
                while (have_rows('statistics_repeater')) : the_row();
                    $title = get_sub_field('statistic_title');
                    $type = get_sub_field('statistic_type');
                    $should_animate = get_sub_field('should_animate');
                    $is_simple = $type === 'simple';
                    $is_division = $type === 'division';

                    if ($is_simple) {
                        $unit = get_sub_field('statistic_unit');
                        $number = get_sub_field('statistic_value');
                    }

                    if ($is_division) {
                        $number = get_sub_field('statistic_numerator');
                        $denominator = get_sub_field('statistic_denominator');
                    }

            ?>

                    <div class="flex flex-col gap-4">
                        <p class="text-3xl sm:text-4xl xl:!text-5xl font-bold font-space mb-0">
                            <span class="<?php echo $should_animate ? 'counter' : ''; ?>">
                                <?php echo $number; ?>
                            </span>
                            <?php if ($is_simple) :
                                echo ' ' . $unit;
                            elseif ($is_division) :
                                echo '/ ' . $denominator;
                            endif; ?>
                        </p>
                        <h3 class="text-xl font-medium mb-0 font-sans"><?php echo $title; ?></h3>
                    </div>

            <?php
                endwhile;
            endif; ?>
        </div>
    </div>
</div>
