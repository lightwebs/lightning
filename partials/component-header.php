<?php

/**
 *
 * Output the component header
 *
 */
if (!function_exists('component_header')) {
    function component_header(string $field_name) { ?>
        <?php if (s($field_name)['title'] || s($field_name)['text']) :
            $is_small_text = s($field_name)['title_type'] == 'small';
            $is_black_text = s($field_name)['text_color'] == 'text-[#000000]';
            $title_class = s($field_name)['text_color'];
            if ($is_small_text) {
                $title_class .= ' !text-xl lg:!text-2xl !uppercase';
            } else {
                $title_class .= ' relative';
            }
        ?>
            <header class="container mb-8 md:mb-10 xl:mb-12 xxl:mb-16 <?php echo s($field_name)['text_align']; ?>">
                <?php if (s($field_name)['title']) : ?>
                    <?php echo '<' . s($field_name)['title_tag'] . ' class="' . $title_class . '" >'; ?>

                    <?php
                    if ($is_small_text) : ?>
                        <div class="!absolute !z-[1] left-0 pointer-events-none mt-3.5 w-full border-t-2 <?php echo $is_black_text ? 'border-text-black' : 'border-text-white'; ?>"></div>
                        <span class="relative px-5 ml-4 <?php echo $is_black_text ? 'bg-white' : 'bg-background-black'; ?>">
                        <?php
                    endif;

                    echo s($field_name)['title'];

                    if ($is_small_text) : ?>
                        </span>
                    <?php
                    endif;
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
