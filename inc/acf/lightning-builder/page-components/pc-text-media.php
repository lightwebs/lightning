<?php
if (get_row_layout() == 'text_media' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $media_type = get_sub_field('text_media_type');
    $text = get_sub_field('text_media_text_content');
    $link = get_sub_field('text_media_btn');
    $full_width = get_sub_field('text_media_full');
?>

    <section <?php component_id($prefix); ?> class="pc-text-media relative section <?php echo $full_width ? 'full-width md:flex items-center !py-0 ratio-4x3-md-height' : section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?> <?php echo s($prefix)['text_color']; ?>">
        <?php
        component_header($prefix);
        include __DIR__ . '/pc-text-media/pc-text-media-regular.php'; ?>
    </section>
<?php endif; ?>