<?php
if (get_row_layout() == 'text_text' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $text_left = get_sub_field('text_text_left');
    $text_right = get_sub_field('text_text_right');
    $show_text_2 = get_sub_field('show_text_2');
?>

    <section <?php component_id($prefix); ?> class="pc-text-text section <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?>">

        <span class="<?php echo s($prefix)['text_color']; ?>">
            <?php component_header($prefix); ?>
        </span>

        <?php if ($text_left) : ?>
            <div class="container">
                <div class="<?php echo $show_text_2 ? 'grid md:grid-cols-2 gap-y-4 md:gap-6 lg:gap-12' : ''; ?>">

                    <div class="<?php echo s($prefix)['text_color']; ?>">
                        <?php echo $text_left; ?>
                    </div>

                    <?php if ($show_text_2 && $text_right) : ?>
                        <div class="<?php echo s($prefix)['text_color']; ?>">
                            <?php echo $text_right; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>