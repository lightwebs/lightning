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
                $v = get_sub_field('statistic_value');
            }

            if ($is_division) {
                $n = get_sub_field('statistic_numerator');
                $d = get_sub_field('statistic_denominator');
            }

    ?>
            <?php if ($is_simple) : ?>
                <div class="">
                    <p class="text-5xl font-bold"><span class="counter"><?php echo $v ?></span><?php echo ' ' . $unit; ?></p>
                    <p class="text-xl"><?php echo $title; ?></p>
                </div>
            <?php endif; ?>
            <?php if ($is_division) : ?>
                <div class="">
                    <p class="text-5xl font-bold"><?php echo $n . '/' . $d ?></p>
                    <p class="text-xl"><?php echo $title; ?></p>
                </div>
            <?php endif; ?>
    <?php
        endwhile;
    endif; ?>
</div>
