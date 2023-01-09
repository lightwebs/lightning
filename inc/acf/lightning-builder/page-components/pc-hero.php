<?php
if (get_row_layout() == 'hero' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $key_info = get_sub_field('key_info_repeater');
    $buttons = get_sub_field('buttons_repeater');
?>
    <section id="<?php echo s($prefix)['component_id']; ?>" class="pc-hero section  <?php echo s($prefix)['bg_color']; ?>">


        <div class="container <?php echo s($prefix)['text_color']; ?>  gap-4 md:gap-24 lg:flex">
            <div class="w-full flex flex-col gap-4 md:gap-6 py-6 justify-center md:pt-8 md:pb-12">
                <h1 class="text-[22px] md:text-[28px] text-purple-500 mb-0"><?php echo $title; ?></h1>

                <?php if (s($prefix)['title']) : ?>
                    <?php echo '<' . s($prefix)['title_tag'] . ' class="m-0 text-5xl leading-[61.25px] md:text-[80px] md:leading-[80px]"> '; ?>

                    <?php echo s($prefix)['title'] ?>

                    <?php echo '</' . s($prefix)['title_tag'] . '>'; ?>
                <?php endif; ?>
                <p class="text-[22px] leading-[35px] mb-0"><?php echo  s($prefix)['text']; ?></p>


                <div class="flex gap-5 flex-wrap">
                    <?php
                    if (have_rows('key_info_repeater')) :
                        while (have_rows('key_info_repeater')) : the_row();
                            $title = get_sub_field('key_info_title');
                    ?>
                            <div class="flex gap-2 md:gap-4 items-center">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/src/assets/icons/icon-triangle-filled.svg' ?>" alt="Decoration icon" class="h-[14px] w-[14px]" aria-hidden="true">
                                <p class="font-medium text-[18px] md:text-[20px] mb-0"> <?php echo $title ?> </p>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>

                </div>

                <div class="flex gap-4 md:items-stretch items-start flex-wrap">

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
                            $type == 'primary' ? btn_l_primary($link, 'items-center text-base', 'group flex gap-4') : btn_l_secondary($link, ' justify-center  text-purple-500 border-solid border-purple-500 hover:text-white border-box group flex gap-4 text-base uppercase');
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>

            <div class="w-full mt-0 flex items-end">
                <? if (!empty($image)) : ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="object-contain " />
                <? endif; ?>
            </div>

        </div>
    </section>
<?php endif; ?>
