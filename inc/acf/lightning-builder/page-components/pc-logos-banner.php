<?php
if (get_row_layout() == 'logos_banner' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $count = count(get_sub_field('logos_banner_logotypes'));
?>

    <section <?php component_id($prefix); ?> class="pc-columns section <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?> <?php echo s($prefix)['text_color']; ?>">

        <?php component_header($prefix); ?>
        <?php if (have_rows('logos_banner_logotypes')) : ?>
            <div class="container grid grid-cols-3 md:grid-cols-<?php echo $count ?> items-center gap-11 <?php section_spacing(); ?> ">
                <?php
                while (have_rows('logos_banner_logotypes')) : the_row();
                    $logo = get_sub_field('logotype');
                ?>

                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="h-12 w-full object-contain mx-auto" />
                <?php
                endwhile; ?>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>
