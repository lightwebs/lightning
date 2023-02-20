<?php

/**
 *
 * Output the component header
 *
 */
if (!function_exists('component_header')) {
    function component_header(string $field_name, $text_only = false) { ?>
        <?php if (s($field_name)['title'] || s($field_name)['text']) :
            $title_class = s($field_name)['text_color'];
        ?>
            <?php
            if (!$text_only) : ?>
                <header class="container mb-8 md:mb-10 xl:mb-12 xxl:mb-16 <?php echo s($field_name)['text_align']; ?>">
                <?php
            endif;

            if (s($field_name)['title']) :
                echo '<' . s($field_name)['title_tag'] . ' class="' . $title_class . '" >';
                echo s($field_name)['title'];
                echo '</' . s($field_name)['title_tag'] . '>';
            endif;

            if (s($field_name)['text']) : ?>
                    <div class="preamble relative <?php echo s($field_name)['text_color']; ?>">
                        <?php echo s($field_name)['text']; ?>
                    </div>
                <?php
            endif;
            if (!$text_only) : ?>
                </header>
<?php
            endif;
        endif;
    }
}
