<?php

/**
 * 
 * Get coworker card
 * 
 */

if (!function_exists('coworker_card')) {

    function coworker_card($post_id, $class = null, $excerpt_length = 20) {
        $title = get_the_title();
        $image_id = get_post_thumbnail_id($post_id);
        $email = get_field('coworker_email', $post_id);
        $phone = get_field('coworker_phone', $post_id);
        $terms =  get_the_terms( $post->ID , 'coworker_category' );
    ?>
        
        <div class="card group" data-post-id="<?php echo $post_id; ?>">
            <div class="h-full <?php echo $class; ?>">
              
                <div class="w-full mb-3 overflow-hidden card-image md:mb-4">
                    <?php echo image($image_id, 'medium_large', 'min-h-[192px] object-cover w-full aspect-2/3 group-hover:scale-105 transition-transform duration-300') ?>
                </div>

                <div class="flex flex-col md:col-span-3 card-body">

                    <p class="mb-1 text-base font-bold font-space"><?php echo $title; ?></p>
                    
                    <?php foreach ( $terms as $term ) : ?>
                            <p class="text-sm"> <?php echo $term->name ?> </p>
                    <?php endforeach; ?>
                                            
                    <div class="contact-links">
                        <?php if($phone) :?>
                            <a class="mb-1" href="tel:<?php echo $phone; ?>">
                                <span class="text-xl material-icons-round ">call</span>
                            </a>
                        <?php endif; ?>
                        <?php if($email) :?>
                            <a class="mb-1" href="mailto:<?php echo $email; ?>">
                                <span class="text-xl material-icons-round">mail_outline</span>
                            </a>
                        <?php endif; ?>
                    </div>
                    
                </div>
              
            </div>
        </div>
<?php
    }
}