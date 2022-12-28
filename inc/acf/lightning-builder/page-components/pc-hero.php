<?php
if (get_row_layout() == 'hero' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $description = get_sub_field('description');
    $image = get_sub_field('image');
    $key_info = get_sub_field('key_info_repeater');
    $buttons = get_sub_field('buttons_repeater');
?>
    <section id="<?php echo s($prefix)['component_id']; ?>" class="pc-hero section <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?>">

        <?php component_header($prefix); ?>

        <div class="container <?php echo s($prefix)['text_color']; ?>  gap-4 md:flex">
            <div class="w-full flex flex-col gap-4 md:gap-6">
                <h3 class="text-purple-500"><?= $subtitle; ?></h3>
                <h1><?= $title; ?></h1>
                <p><?= $description; ?></p>
                <div class="flex gap-5">
                    <?php
                    if (have_rows('key_info_repeater')) :
                        while (have_rows('key_info_repeater')) : the_row();
                            $title = get_sub_field('key_info_title');
                    ?>
                            <div class="flex gap-2 md:gap-4">
                                <span class="material-icons-round text-purple-500">change_history</span>
                                <p class="font-medium"> <?= $title ?> </p>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>

                </div>
                <div class="flex flex-col md:flex-row gap-4 md:gap-6 md:items-stretch items-start">

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
            <div class="w-full mt-4 md:mt-0 ">
                <? if (!empty($image)) : ?>
                    <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" class="h-full object-cover" />
                <? endif; ?>
            </div>

        </div>
    </section>
<?php endif; ?>
