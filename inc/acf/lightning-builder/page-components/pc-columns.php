<?php
if (get_row_layout() == 'columns' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $card_view = get_sub_field('card_view');
    $cols = get_sub_field('col_qty');
?>

    <section <?php component_id($prefix); ?> class="pc-columns <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?> <?php echo s($prefix)['text_color']; ?>">
        <?php component_header($prefix); ?>
        <div class="container sm:px-4 <?php echo $card_view ? 'px-0' : 'px-4'; ?>">
            <div class="grid md:grid-cols-2 xl:grid-cols-<?php echo $cols; ?> gap-6 lg:gap-8 xxl:gap-12">
                <?php if (have_rows('columns_cols')) : ?>

                    <?php while (have_rows('columns_cols')) : the_row();
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        $media_type = get_sub_field('media_type');
                        $image_id = get_sub_field('img');
                        $video = get_sub_field('video');
                        $icon = get_sub_field('icon');
                        $link = get_sub_field('link');
                        $is_button = $link && $link['title'] && $card_view;
                        $inherit_colors = get_sub_field('inherit');
                        $is_video = ($media_type === 'video');
                        $is_image = ($media_type === 'img');
                        $is_icon = ($media_type === 'icon');
                        $col_bg_color = s('col_color')['bg_color'];
                        $col_text_color = s('col_color')['text_color'];

                        $classNames = 'column flex flex-col h-full overflow-hidden relative';
                        if ($link) {
                            $classNames .= ' group';
                        }
                        if ($card_view) {
                            $classNames .= ' shadow-md';
                        }

                        if (!$inherit_colors) {
                            $classNames .= ' ' . $col_bg_color . ' ' . $col_text_color;
                        }

                        if ($col_bg_color && !$inherit_colors && !$card_view) {
                            $classNames .= ' p-4';
                        }
                    ?>

                        <?php if ($link) : ?>
                            <a class="<?php echo $classNames; ?>" href="<?php echo $link['url'] ?>">
                            <?php else : ?>
                                <div class="<?php echo $classNames; ?>">
                                <?php endif; ?>
                                <?php
                                // IMAGE
                                if ($is_image) : ?>
                                    <div class="overflow-hidden">
                                        <?php image($image_id, 'full', 'aspect-4/3 object-cover transition-transform duration-300 group-hover:scale-105'); ?>
                                    </div>
                                <?php endif; ?>

                                <?php
                                // VIDEO
                                if ($is_video) :
                                    if ($video) :
                                        $url = wp_get_attachment_url($video);
                                ?>
                                        <div class="overflow-hidden">
                                            <video playsinline autoplay muted loop class="object-cover transition-transform duration-300 aspect-4/3 group-hover:scale-105">
                                                <source src="<?php echo $url; ?>" type="video/mp4">
                                            </video>
                                        </div>
                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php

                                // TEXT CONTENT
                                if ($text) :
                                    $text_classes = 'text lg:p-6';
                                    if ($is_icon) {
                                        $text_classes .= ' has-icon xl:p-6';
                                    }

                                    if ($card_view) {
                                        $text_classes .= ' p-4';
                                    } else {
                                        $text_classes .= ' !pt-4 md:!pt-6 !p-0';
                                    }

                                    if ($inherit_colors) {
                                        $text_classes .= ' ' . s($prefix)['text_color'];
                                    }

                                ?>
                                    <div class="<?php echo $text_classes; ?>">
                                        <?php if ($is_icon) : ?>
                                            <div class="inline-flex items-center p-3 mb-4 rounded-full sm:mb-4 lg:mb-6 bg-violet-100">
                                                <?php echo $icon; ?>
                                            </div>
                                        <?php endif; ?>

                                        <h3><?php echo $title; ?></h2>
                                            <?php echo $text; ?>
                                    </div>
                                <?php endif; ?>

                                <?php
                                // BUTTON
                                if ($is_button) :
                                    btn_primary($link['title'], 'mx-4 mt-auto mb-4 sm:mx-0 sm:w-full');
                                ?>
                                <?php endif; ?>

                                <?php
                                // LINK (IF NOT USING CARD VIEW)
                                if ($link && $link['title'] && !$card_view) : ?>
                                    <p class="inline-flex items-center mt-2 font-semibold sm:mt-4 md:mt-6 gap-x-4">
                                        <?php echo $link['title']; ?>
                                        <span class="text-base transition-transform duration-300 material-icons-round group-hover:translate-x-1">arrow_forward_ios</span>
                                    </p>
                                <?php endif; ?>

                                <?php if ($link) : ?>
                            </a>
                        <?php else : ?>
            </div>
        <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>


        </div>
        </div>
    </section>
<?php endif; ?>