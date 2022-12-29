<?php

?>

<div class="container flex flex-col justify-center gap-12 py-12 order-1 md:order-<?php echo $text_placement === '1' ? '2' : '1'; ?> w-full bg-purple-500 text-white">
    <?php if (have_rows('statistics_repeater')) :
        while (have_rows('statistics_repeater')) : the_row();
            $title = get_sub_field('statistic_title');
            $type = get_sub_field('statistic_type');
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
                <p class="text-5xl font-bold">
                    <span class="counter">
                        <?php echo $n ?>
                    </span>
                    <?php if ($is_simple) :
                        echo ' ' . $unit;
                    elseif ($is_division) :
                        echo '/' . $d;
                    endif; ?>
                </p>
                <p class="text-xl"><?php echo $title; ?></p>
            </div>
    <?php
        endwhile;
    endif; ?>
</div>
