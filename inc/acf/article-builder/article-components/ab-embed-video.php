<?php
if (get_row_layout() == 'embed_video' && !s(get_row_layout())['hide_component']) :
    $prefix = get_row_layout();
    $anchor_target = sanitize_title(s($prefix)['title']);
    $url = get_sub_field('embed_video_url');
    $youtube_url = parse_url($url);
    $youtube_id = $youtube_url['query'];
    parse_str($youtube_id, $youtube_id);
    $youtube_id = $youtube_id['v'];
?>


    <section id="<?php echo $anchor_target; ?>" class="pb-4 pc-text-text section md:pb-6 dark:text-white">
        <?php if (s($prefix)['title']) : ?>
            <?php echo '<' . s($prefix)['title_tag'] . '>'; ?>
            <?php echo s($prefix)['title']; ?>
            <?php echo '</' . s($prefix)['title_tag'] . '>'; ?>
        <?php endif; ?>

        <div class="aspect-video">
            <iframe class="w-full h-full" src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>


    </section>
<?php endif; ?>