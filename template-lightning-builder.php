<?php
// Template Name: Lightning Builder
// Template Post Type: page, case
get_header();
?>

<main id="primary" class="site-main">
    <!-- 
    Keep for Tailwind postcss
    !block
-->

    <?php
    while (have_posts()) :
        the_post(); ?>
        <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="lightning-content">
                <?php get_template_part('page', 'builder'); ?>
            </div>
        </article>

    <?php
    endwhile; ?>

</main>

<?php
get_footer();
