<?php
if (get_row_layout() == 'timeline' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();

?>
    <section id="<?php echo s($prefix)['component_id']; ?>" class="pc-timeline section <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?>">

        <?php component_header($prefix); ?>

        <div class="container <?php echo s($prefix)['text_color']; ?>">
            <h1>hej</h1>
        </div>

        <?php component_footer($prefix); ?>

    </section>
<?php endif; ?>