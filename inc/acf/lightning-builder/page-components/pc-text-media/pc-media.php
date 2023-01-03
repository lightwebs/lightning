<?php
$h_full = $full_width ? 'h-full' : '';
$text_media_img = get_sub_field('text_media_img');
?>

<div class=" <?php echo $text_placement === '1' ? 'justify-self-start' : 'justify-self-end';
                $full_width ? 'w-full !px-0 h-full' : '' ?> order-1 md:order-<?php echo $text_placement === '1' ? '2' : '1'; ?>">
    <?php if ($media_type === 'img') : ?>
        <div class="h-full self-end max-w-[700px]">
            <?php if ($img) :
                image($text_media_img, 'full', $full_width ? 'w-full object-cover aspect-4/3 h-full' : 'object-cover aspect-4/3');
            endif; ?>
        </div>
    <?php endif; ?>

    <?php if ($media_type === 'video') : ?>
        <?php
        if ($video) :
            $url = wp_get_attachment_url($video);
            $title = get_the_title($video);
        ?>
            <div class="<?php echo $full_width ? 'h-full' : ''; ?>">
                <video class="object-cover <?php echo $full_width ? 'aspect-4/3 h-full' : 'aspect-video'; ?>" <?php echo $video_controls ? ' controls' : ''; ?><?php echo $loop_video ? ' loop autoplay playsinline muted' : ''; ?>>
                    <source src="<?php echo $url; ?>" type="video/mp4">
                    <source src="<?php echo $url; ?>" type="video/mp4">
                </video>
            </div>
        <?php endif; ?>

    <?php endif; ?>
</div>
