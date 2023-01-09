<?php
$image = get_field('cta_image', 'option');
$content = get_field('cta_content', 'option', false, false);
$status = get_field('cta_status', 'option');
?>
<div class="flex fixed bottom-10 items-center gap-4 right-10 cta-active z-[9999] hover:bg-white p-4 group">
    <div class="relative shrink-0"><img src="<?php echo $image['url'] ?>" alt="<?php $image['alt'] ?>" class="h-20 w-20 object-cover rounded-full border-solid border-4 border-white">
        <span class="material-icons-round absolute -top-0 -right-2 bg-purple-500 p-1 rounded-full group-hover:hidden">
            waving_hand
        </span>
    </div>
    <div id="floating-cta-content" class="w-[260px] hidden p-4 bg-white !text-sm text-black !mb-0 group-hover:block">
        <?php echo $content ?>
    </div>
</div>
