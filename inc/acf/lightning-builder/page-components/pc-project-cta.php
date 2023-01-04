<?php
if (get_row_layout() == 'project_cta' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $link = get_sub_field('link');
    $is_small = get_sub_field('cta_small');
    $link_color = get_sub_field('link_colors');
?>
    <section id="<?php echo s($prefix)['component_id']; ?>" class="pc-project_cta section <?php echo s($prefix)['bg_color']; ?> ">
        <a href='<?php echo $link['url'] ?>' class='container block group <?php echo $is_small ? 'py-16' : 'pt-48 pb-12'; ?> h-full w-full <?php echo $link_color ?>' target='<?php echo $link['target'] ?>'>
            <div class="max-w-[50%] h-full font-semibold text-4xl md:text-5xl <?php echo s($prefix)['text_color']; ?> ">
                <?php
                echo $link['title']; ?>

                <span class='ml-3 -mt-1 font-semibold align-middle transition-transform duration-300 md:ml-4 text-inherit material-icons-round group-hover:translate-x-1 '>arrow_forward</span>
            </div>

        </a>
    </section>
<?php endif; ?>
