<?php

/**
 *
 * Output the component header
 *
 */
if (!function_exists('component_footer')) {
    /**
     *
     * Output the component footer
     *
     */
    function component_footer(string $field_name) {
        if (s($field_name)['link']) :
            $is_small_text = s($field_name)['title_type'] == 'small';
            $is_black_text = s($field_name)['text_color'] == 'text-[#000000]';
            $link_class = s($field_name)['text_color'] . ' !uppercase';
            if ($is_small_text) {
                $link_class .= ' !text-xl lg:!text-2xl italic';
            } ?>
            <footer class="container mt-8 md:mt-10 xl:mt-12 xxl:mt-16 flex <?php echo $is_small_text ? 'justify-end' : ''; ?> ">
                <?php
                if ($is_small_text) : ?>
                    <div class="absolute !z-[1] left-0 pointer-events-none mt-3.5 w-full border-t-2 <?php echo $is_black_text ? 'border-text-black' : 'border-text-white'; ?>"></div>
                    <span class="relative <?php echo $is_black_text ? 'bg-white mr-4 px-5' : 'bg-black mr-4 px-5'; ?>">

                    <?php
                endif;
                custom_link(s($field_name)['link'], $link_class);
                if ($is_small_text) : ?>
                    </span>
                <?php
                endif; ?>
            </footer>
<?php
        endif;
    }
}
