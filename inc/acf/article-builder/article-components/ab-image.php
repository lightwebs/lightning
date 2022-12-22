<?php
if (get_row_layout() == 'image' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $anchor_target = sanitize_title(s($prefix)['title']);
    $image_id = get_sub_field('image_id');
?>


    <section id="<?php echo $anchor_target; ?>" class="pb-4 pc-text-text section md:pb-6 dark:text-white">
        <?php if (s($prefix)['title']) : ?>
            <?php echo '<' . s($prefix)['title_tag'] . '>'; ?>
            <?php echo s($prefix)['title']; ?>
            <?php echo '</' . s($prefix)['title_tag'] . '>'; ?>
        <?php endif; ?>
        <?php echo image($image_id, 'full', 'max-w-full'); ?>
    </section>
<?php endif; ?>