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

        <div class="container <?php echo s($prefix)['text_color']; ?> flex flex-col md:flex-row">
            <div class="w-full">
                <h3 class="text-purple-500"><?= $subtitle; ?></h3>
                <h1><?= $title; ?></h1>
                <p><?= $description; ?></p>
                <div class="flex gap-4">
                    <?php
                    if (have_rows('key_info_repeater')) :
                        while (have_rows('key_info_repeater')) : the_row();
                            $title = get_sub_field('key_info_title');
                    ?>
                            <span class="material-icons-round text-purple-500">change_history</span>
                            <p> <?= $title ?> </p>
                    <?php
                        endwhile;
                    endif;
                    ?>

                </div>
                <div class="flex gap-4 items-stretch">

                    <?php
                    if (have_rows('buttons_repeater')) :
                        while (have_rows('buttons_repeater')) : the_row();
                            $link = get_sub_field('link');
                            $show_icon = get_sub_field('show_icon');
                            $is_external = get_sub_field('is_external');
                            $type = get_sub_field('button_type');
                            if ($show_icon) {
                                $link['title'] = $link['title'] . '<span class="material-icons-round text-purple-500">arrow_forward</span>';
                            }
                            $type == 'primary' ? btn_l_primary($link, 'items-center') : btn_l_secondary($link, ' justify-center text-purple-500 border-solid border-purple-500 hover:text-white border-box');
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
            <div class="w-full">
                <? if (!empty($image)) : ?>
                    <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" />
                <? endif; ?>
            </div>

        </div>
    </section>
<?php endif; ?>
