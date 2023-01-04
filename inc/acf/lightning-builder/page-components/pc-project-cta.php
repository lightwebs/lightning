<?php
if (get_row_layout() == 'project_cta' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $link = get_sub_field('link');
    $is_small = get_sub_field('cta_small');
?>
    <section id="<?php echo s($prefix)['component_id']; ?>" class="pc-project_cta section <?php echo s($prefix)['bg_color']; ?>">
        <div class=" <?php echo s($prefix)['text_color']; ?> flex items-end w-full <?php echo $is_small ? '' : 'md:min-h-[360px]'; ?>">
            <div class="container py-9 md:py-[60px] "><?php custom_link($link, '
            text-4xl md:text-5xl m-0 uppercase md:w-1/2'); ?></div>
        </div>
    </section>
<?php endif; ?>
