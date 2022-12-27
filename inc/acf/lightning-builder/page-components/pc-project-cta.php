<?php
if (get_row_layout() == 'project_cta' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $text = get_sub_field('text');
    $url = get_sub_field('url');
?>
    <section id="<?php echo s($prefix)['component_id']; ?>" class="pc-project_cta section <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?>">

        <?php component_header($prefix); ?>
        <a href="<?php echo $url; ?>">
            <div class=" <?php echo s($prefix)['text_color']; ?> flex items-end pb-6 pl-10 w-full  max-w-[549px]">
                <h1 class="m-0 "><?php echo $text; ?></h1>
            <div class=" <?php echo s($prefix)['text_color']; ?> flex items-end pb-6 pl-10 w-full  max-w-[550px]">
            </div>
        </a>
    </section>
<?php endif; ?>
