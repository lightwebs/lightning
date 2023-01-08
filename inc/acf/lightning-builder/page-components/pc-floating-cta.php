<?php
$image = get_field('cta_image', 'option');
$content = get_field('cta_content', 'option');
$status = get_field('cta_status', 'option');
?>
<section id="floating-contact-cta" class="pc-contact-cta bg-white">
    <div class=" fixed bottom-10 right-10 cta-active z-[9999] ">
        <div class="relative"><img src="<?php echo $image['url'] ?>" alt="<?php $image['alt'] ?>" class="h-20 w-20 object-cover rounded-full border-solid border-4 border-white">
            <span class="material-icons-round absolute -top-0 -right-2 bg-purple-500 p-1 rounded-full">
                waving_hand
            </span>
        </div>

    </div>
</section>
