<?php
if (get_row_layout() == 'hero' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $key_info = get_sub_field('key_info_repeater');
    $buttons = get_sub_field('buttons_repeater');
?>
    <section id="<?php echo s($prefix)['component_id']; ?>" class="pc-hero section <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?> py-4 md:py-0 lg:py-0 xl:py-0 xxl:py-0 pt-6 md:pt-9 xl:pt-10 xxl:pt-12">


        <div class="container <?php echo s($prefix)['text_color']; ?>  gap-4 md:gap-24 md:flex">
            <div class="w-full flex flex-col gap-4 md:gap-6 py-6 justify-center">
                <h1 class="text-2xl md:text-3xl text-purple-500"><?= $title; ?></h1>
                <?php if (s($prefix)['title']) : ?>
                    <?php echo '<' . s($prefix)['title_tag'] . '>'; ?>
                    <?php echo s($prefix)['title'] ?>
                    <?php echo '</' . s($prefix)['title_tag'] . '>'; ?>
                <?php endif; ?>
                <p class="text-xl"><?php echo  s($prefix)['text']; ?></p>


                <div class="flex gap-5 flex-wrap">
                    <?php
                    if (have_rows('key_info_repeater')) :
                        while (have_rows('key_info_repeater')) : the_row();
                            $title = get_sub_field('key_info_title');
                    ?>
                            <div class="flex gap-2 md:gap-4 items-center">
                                <span class="material-icons-round text-purple-500">change_history</span>
                                <p class="font-medium"> <?= $title ?> </p>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>

                </div>

                <div class="flex flex-col md:flex-row gap-4 md:gap-6 md:items-stretch items-start flex-wrap">

                    <?php
                    if (have_rows('buttons_repeater')) :
                        while (have_rows('buttons_repeater')) : the_row();
                            $link = get_sub_field('link');
                            $show_icon = get_sub_field('show_icon');
                            $is_external = get_sub_field('is_external');
                            $type = get_sub_field('button_type');
                            if ($show_icon) {
                                $link['title'] = $link['title'] . '<span class="material-icons-round text-purple-500 group-hover:text-white transition-color duration-300">arrow_forward</span>';
                            }
                            $type == 'primary' ? btn_l_primary($link, 'items-center', 'group flex gap-4') : btn_l_secondary($link, ' justify-center text-purple-500 border-solid border-purple-500 hover:text-white border-box group flex gap-4');
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>

            <div class="w-full  md:mt-0 flex items-end">
                <? if (!empty($image)) : ?>
                    <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" class="object-contain " />
                <? endif; ?>
            </div>

        </div>
    </section>
<?php endif; ?>
