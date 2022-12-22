<?php
if (get_row_layout() == 'flexible_content_name' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $sub_field_name = get_sub_field('sub_field_name');
?>
    <section <?php component_id($prefix); ?> class="pc-flexible_content_name section py-48 py-md-80 <?php echo s($prefix)['bg_color']; ?>">

        <?php component_header($prefix); ?>

        <div class="container <?php echo s($prefix)['text_color']; ?>">
            <?php echo $sub_field_name; ?>
        </div>
    </section>
<?php endif; ?>