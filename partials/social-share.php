<?php

/**
 * 
 * Get social share
 * 
 */

if (!function_exists('social_share')) {

    function social_share($post_id, $type = 'row' | 'col', $class = null) {
        if ($type == 'row') {
            $class .= '';
        } elseif ($type == 'col') {
            $class .= ' flex-col';
        }
?>

        <div class="gap-3 flex items-center <?php echo $class; ?>">
            <?php if ($type == 'col') : ?>
                <h5 class="mb-4 text-sm"><?php echo __('Dela', 'lightning'); ?></h5>
            <?php endif; ?>

            <a class="facebook-share" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="popup" title="Dela på Facebook" data-tooltip-top="Dela på Facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>', 'popup', 'width=600,height=600'); return false;">

                <img class="dark:hidden" src="<?php echo get_stylesheet_directory_uri() . '/src/assets/icons/social/icon-fb-d.svg' ?>" alt="Dela på Facebook">
                <img class="hidden dark:block" src="<?php echo get_stylesheet_directory_uri() . '/src/assets/icons/social/icon-fb-l.svg' ?>" alt="Dela på Facebook">
            </a>

            <a class="twitter-share" href="https://twitter.com/intent/tweet?hashtags=lightweb&original_referer=<?php the_permalink(); ?>&ref_src=twsrc%5Etfw&related=lightweb&text=<?php the_title(); ?> <?php the_permalink(); ?>&via=lightweb" target="_blank" title="Dela på Twitter" data-tooltip-top="Dela på Twitter">

                <img class="dark:hidden" src="<?php echo get_stylesheet_directory_uri() . '/src/assets/icons/social/icon-tw-d.svg' ?>" alt="Dela på Facebook">
                <img class="hidden dark:block" src="<?php echo get_stylesheet_directory_uri() . '/src/assets/icons/social/icon-tw-l.svg' ?>" alt="Dela på Facebook">
            </a>

            <a class="linkedin-share" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank" alt="LinkedIn" title="LinkedIn" data-tooltip-top="Dela på LinkedIn">

                <img class="dark:hidden" src="<?php echo get_stylesheet_directory_uri() . '/src/assets/icons/social/icon-li-d.svg' ?>" alt="Dela på Facebook">
                <img class="hidden dark:block" src="<?php echo get_stylesheet_directory_uri() . '/src/assets/icons/social/icon-li-l.svg' ?>" alt="Dela på Facebook">

            </a>

            <div class="flex flex-col gap-3 share-more">
                <div class="<?php echo $type == 'row' ? 'ac-open-top' : 'ac-header'; ?> cursor-pointer after:!content-none" data-tooltip-top="Dela mer">
                    <div class="text-primary-700 pointer-events-none dark:text-white material-icons-round">share</div>
                </div>

                <div class="absolute flex-col hidden gap-3 lg:relative">
                    <a class="whatsapp-share" href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" target="_blank" alt="WhatsApp" title="WhatsApp" data-tooltip-top="Dela i WhatsApp">

                        <img class="dark:hidden" src="<?php echo get_stylesheet_directory_uri() . '/src/assets/icons/social/icon-wa-d.svg' ?>" alt="Dela på Facebook">
                        <img class="hidden dark:block" src="<?php echo get_stylesheet_directory_uri() . '/src/assets/icons/social/icon-wa-l.svg' ?>" alt="Dela på Facebook">

                    </a>

                    <a class="mail-share" href="mailto:?subject=Lightweb: <?php the_title(); ?>&body=<?php echo 'Läs på Lightweb: ' . get_the_title() . '%0D%0A' . get_the_permalink(); ?>" target="_blank" alt="E-post" title="E-post" data-tooltip-top="Maila">

                        <div class="text-3xl leading-none text-primary-700 dark:text-white material-icons-round">email</div>

                    </a>
                </div>
            </div>
        </div>
<?php
    }
}
