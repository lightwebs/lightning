<?php
if (get_row_layout() == 'roadmap' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $number = 0;
    $text_color = s($prefix)['text_color'];
    $border_black = $text_color == 'text-[#000000]' ? 'after:odd:border-t-black before:border-l-black after:border-b-black last:border-b-black' : 'after:odd:border-t-white before:border-l-white after:border-b-white last:border-b-white';
    $col_count = count(get_sub_field('roadmap_repeater'));
    $col_count = $col_count % 2 == 0 ? 'even' : 'odd';
?>

    <section id="<?php echo s($prefix)['component_id']; ?>" class="pc-roadmap section <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?>">

        <?php component_header($prefix); ?>

        <div class="container <?php echo $text_color; ?>">
            <?php if (have_rows('roadmap_repeater')) : ?>
                <div class="relative">
                    <span class="absolute text-4xl -top-[1.2rem] -left-[1.08rem] material-icons-round">
                        arrow_drop_down
                    </span>
                    <div class="flex flex-col <?php echo $col_count == 'odd' ? 'border-b-2' : ''; ?> <?php echo $text_color == 'text-[#000000]' ? 'border-b-black' : ''; ?>">
                        <?php while (have_rows('roadmap_repeater')) : the_row();
                            $number++;
                            $title = get_sub_field('title');
                            $text = get_sub_field('text');
                        ?>
                            <div class="relative flex even:ml-8 odd:after:w-[calc(2rem+2px)] sm:odd:after:w-[calc(100%+2px)] first:after:!border-t-transparent last:after:!border-b-transparent sm:w-1/2 even:sm:self-end before:border-l-2 after:border-b-2 after:absolute after:bottom-0 after:even:border-b-transparent after:odd:border-t-2 after:odd:top-0 <?php echo $col_count == 'even' ? 'last:border-b-2' : ''; ?> <?php echo $border_black; ?> ">
                                <div class="px-4 py-6 md:p-6 lg:p-8 xl:p-12 xxl:p-16">
                                    <h4><span class="mr-2"><?php echo $number . '.'; ?></span><?php echo $title; ?></h4>
                                    <?php echo $text; ?>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>
                    <span class="absolute text-4xl -bottom-[1.2rem] -right-[1.1rem] material-icons-round">
                        arrow_right
                    </span>
                </div>
            <?php endif; ?>
        </div>

        <?php component_footer($prefix); ?>

    </section>
<?php endif; ?>