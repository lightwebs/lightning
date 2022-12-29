<?php
if (get_row_layout() == 'project_cta' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $link = get_sub_field('link');
?>
    <section id="<?php echo s($prefix)['component_id']; ?>" class="pc-project_cta section  <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?>">
        <?php component_header($prefix); ?>
        <div class=" <?php echo s($prefix)['text_color']; ?> flex items-end w-full md:min-h-[360px]">
            <div class="py-9 md:py-12 px-4 md:px-20"><?php custom_link($link, '
            !inline-block text-4xl md:text-5xl m-0 uppercase'); ?></div>

        </div>
    </section>
<?php endif; ?>
