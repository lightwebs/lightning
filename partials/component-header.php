<?php

/**
 *
 * Output the component header
 *
 */
if (!function_exists('component_header')) {
    function component_header(string $field_name) { ?>
        <?php if (s($field_name)['title'] || s($field_name)['text']) :
            $title_class = s($field_name)['text_color'];
        ?>
            <header class="container mb-8 md:mb-10 xl:mb-12 xxl:mb-16 <?php echo s($field_name)['text_align']; ?>">
                <?php if (s($field_name)['title']) : ?>
                    <?php echo '<' . s($field_name)['title_tag'] . ' class="' . $title_class . '" >'; ?>

                    <?php
                    echo s($field_name)['title'];

                    echo '</' . s($field_name)['title_tag'] . '>'; ?>
                <?php endif; ?>

                <?php if (s($field_name)['text']) : ?>
                    <div class="preamble relative <?php echo s($field_name)['text_color']; ?>"><?php echo s($field_name)['text']; ?></div>
                <?php endif; ?>
            </header>
<?php
        endif;
    }
}
