<?php
if (get_row_layout() == 'gradient' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $gradient_placement = get_sub_field('gradient_placement');
?>
    <section id="<?php echo s($prefix)['component_id']; ?>" class="relative pc-gradient">

        <?php if ($gradient_placement) :
            $img_class = 'absolute z-0 w-full pointer-events-none';
            if (strpos($gradient_placement, 'bottom') !== false) {
                $img_class .= ' bottom-0';
            }
            if (strpos($gradient_placement, 'top') !== false) {
                $img_class .= ' top-0';
            }
        ?>
            <img class="<?php echo $img_class; ?>" src="<?php echo get_template_directory_uri() . '/src/assets/gradients/gradient-' . $gradient_placement . '.svg'; ?>" alt="">
        <?php endif; ?>

        <?php /*
                <span class="absolute top-0 right-0 z-0 w-full h-full bg-no-repeat bg-[length:50%] bg-gradient-<?php echo $gradient_placement; ?> bg-<?php echo $gradient_placement; ?>"></span>
             
            */ ?>

    </section>
<?php endif; ?>