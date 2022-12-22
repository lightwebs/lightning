<?php
// Template Name: Lightning Builder
// Template Post Type: page, case
$hide_sidebar = get_field('hide_sidebar');
get_header();
?>

<main id="primary" class="site-main">
    <!-- 
    Keep for Tailwind postcss
    lg:grid-cols-1
    lg:grid-cols-2
    lg:grid-cols-3
    lg:grid-cols-4
    xl:grid-cols-1
    xl:grid-cols-2
    xl:grid-cols-3
    xl:grid-cols-4
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
get_sidebar();
get_footer();
