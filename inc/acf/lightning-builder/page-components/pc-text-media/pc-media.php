<?php
$h_full = $full_width ? 'h-full' : '';

if ($is_img) :
    $img = get_sub_field('text_media_img');
elseif ($is_video) :
    $video = get_sub_field('text_media_video');
    $video_controls = get_sub_field('text_media_video_controls');
    $loop_video = get_sub_field('text_media_video_loop');
endif;
?>

<div class="flex w-full <?php
                        echo $text_placement === '1' ? 'justify-self-start' : 'justify-self-end';
                        echo $full_width ? 'w-full !px-0 h-full' : '' ?> order-1 md:order-<?php echo $text_placement === '1' ? '2' : '1'; ?>">
    <?php if ($media_type === 'img') : ?>
        <?php if ($img) :
            image($img, 'full', $full_width ? 'w-full h-full object-cover' : 'object-cover aspect-4/3 w-full');
        endif; ?>
    <?php endif; ?>

    <?php if ($media_type === 'video') : ?>
        <?php
        if ($video) :
            $url = wp_get_attachment_url($video);
            $title = get_the_title($video);
        ?>
            <video class="object-cover <?php echo $full_width ? 'h-full' : 'aspect-video'; ?>" <?php echo $video_controls ? ' controls' : ' autoplay muted playsinline'; ?><?php echo $loop_video ? ' loop autoplay playsinline muted' : ''; ?>>
                <source src="<?php echo $url; ?>" type="video/mp4">
                <source src="<?php echo $url; ?>" type="video/mp4">
            </video>
        <?php endif; ?>

    <?php endif; ?>
</div>
