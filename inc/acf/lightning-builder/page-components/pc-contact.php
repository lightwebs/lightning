<?php
if (get_row_layout() == 'contact' && !s(get_row_layout())['hide_component']) :
    $site_logo_dark =
        $prefix = get_row_layout();
    $form_shortcode = get_sub_field('contact_form_shortcode');
    $phone = get_field('phone', 'option');
    $email = get_field('email', 'option');
    $link_org_nr = get_field('link_org_nr', 'option');
    $org_nr = get_field('org_nr', 'option');
    $trimmed_org_nr = str_replace('-', '', $org_nr);
    $location = get_field('google_maps', 'option');
    $address = $location['address'];
?>
    <section id="<?php echo s($prefix)['component_id']; ?>" class="pc-contact relative section p-0 lg:container flex flex-col lg:flex-row <?php echo section_spacing(); ?> <?php echo s($prefix)['bg_color']; ?>">   
        
    <div class="flex flex-col justify-center px-4 py-6 md:p-8 xl:p-16 bg-purple-700 contact-info max-w-max xl:min-h-[638px] z-10 lg:absolute lg:top-28">
                <?php if($location) :   
                    $address = $location['address'];
                    $string = strpos($address,',');
                    if ($string !== false) {
                        $newstring = substr_replace($address,',<br>',$string,strlen(','));
                    }
                    $swe = ', Sverige';
                    $trimmedAdd = str_replace($swe, '', $newstring);?> 
                    <div class="mb-4 lg:mb-6">
                        <p class="mb-2 text-xl font-bold"><?php echo __('Adress', 'lightning') ?></p>
                        <p class="mb-0"><?php echo $trimmedAdd ?></p>
                    </div>
                <?php endif; ?>
                <?php if($phone) : ?>
                    <div class="mb-4 lg:mb-6">
                        <p class="mb-2 text-xl font-bold"><?php echo __('Telefonnummer', 'lightning') ?></p>
                        <a class="text-lg" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                    </div>
                <?php endif; ?>
                <?php if($email) : ?>
                    <div class="mb-4 lg:mb-6">
                        <p class="mb-2 text-xl font-bold"><?php echo __('Mailadress', 'lightning') ?></p>
                        <a class="text-lg" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </div>
                <?php endif; ?>
                <?php if($org_nr) : ?>
                    <div class="mb-4 lg:mb-6">
                        <p class="mb-2 text-xl font-bold"><?php echo __('Organisationsnummer', 'lightning') ?></p>
                        <a class="text-lg" class="<?php echo $link_org_nr ? '' : ' pointer-events-none' ?>" href="https://www.allabolag.se/<?php echo $trimmed_org_nr; ?>" target="_blank"><?php echo $org_nr; ?></a>
                    </div>
                <?php endif; ?>
            </div>

        <div class="relative px-0 bg-purple-800 lg:ml-auto xl:p-16 lg:p-8 lg:w-10/12">
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:gap-12">
                <?php if($location) : ?>     
                    <div class="acf-map lg:max-w-[648px] h-[448px] sm:h-auto px-4 md:p-0 order-last sm:order-first	" data-zoom="16">
                        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
                    </div>
                <?php endif; ?>
                <div class="px-4 py-6 contactform md:p-8">
                    <div class="<?php echo s($prefix)['text_color'] ? s($prefix)['text_color'] : ''; ?>">
                        <?php if (s($prefix)['title']) : ?>
                            <?php echo '<' . s($prefix)['title_tag'] . '>'; ?>
                            <?php echo s($prefix)['title'] ?>
                            <?php echo '</' . s($prefix)['title_tag'] . '>'; ?>
                            <?php if (s($prefix)['text']) : ?>
                                <div class="w-full">
                                    <?php echo s($prefix)['text']; ?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <div class="w-full contact-form ">
                        <?php echo do_shortcode($form_shortcode); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php component_footer($prefix); ?>
    </section>
<?php endif; ?>

<?php
   echo '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBkPNiE5cDrWQbyvMtDOJ7BdZhXitVxe0"></script>';
?>