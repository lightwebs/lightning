<?php
if (get_row_layout() == 'project_cta' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $text = get_sub_field('text');
    $url = get_sub_field('url');
?>
    <section id="<?php echo s($prefix)['component_id']; ?>" class="pc-project_cta section  <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?>">
        <?php component_header($prefix); ?>
        <div class=" <?php echo s($prefix)['text_color']; ?> flex items-end w-full md:h-[360px]">
            <a href="<?php echo $url; ?>" class="py-9 md:py-12 px-4 md:px-20">
                        arrow_forward
                    </span></h1>

            </a>
        </div>
    </section>
<?php endif; ?>
