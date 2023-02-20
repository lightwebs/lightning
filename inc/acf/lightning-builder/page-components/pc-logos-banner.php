<?php
if (get_row_layout() == 'logos_banner' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $count = count(get_sub_field('logos_banner_logotypes'));
?>

    <section <?php component_id($prefix); ?> class="pc-columns section  py-6 md:py-12 <?php echo s($prefix)['bg_color']; ?> <?php echo s($prefix)['text_color']; ?>">
        <?php component_header($prefix); ?>

        <div class="container grid <?php echo $count < 3 ? 'grid-cols-' . $count : 'grid-cols-3'; ?> md:grid-cols-<?php echo $count ?> gap-4 sm:gap-12 ">
            <?php if (have_rows('logos_banner_logotypes')) : ?>
                <?php
                while (have_rows('logos_banner_logotypes')) : the_row();
                    $logo = get_sub_field('logotype');
                ?>

                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="object-contain h-12 mx-auto" />
                <?php
                endwhile; ?>
        </div>
        </div>
    <?php endif; ?>
    </section>
<?php endif; ?>