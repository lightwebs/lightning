<?php

/**
 * The template for displaying archive pages
 *
 * @package lightning
 */

$found_posts = $wp_query->found_posts;
$cat_id = get_queried_object_id();
get_header();
?>

<main id="primary" class="site-main">

	<?php if (have_posts()) : ?>

		<header class="py-4 lg:py-8 page-header">
			<div class="container">
				<h1 class="page-title dark:text-white"><?php echo the_archive_title(); ?></h1>
				<div class="archive-description"><?php echo the_archive_description(); ?></div>
			</div>
		</header>

		<div class="container px-0 md:px-4">
			<div class="grid-cols-3 gap-4 md:grid lg:gap-6 post-listing">
				<?php while (have_posts()) :
					the_post();
					if ('post' === get_post_type()) : ?>
						<?php echo card(get_the_ID(), 'bg-white text-black', 10); ?>
					<?php else :
						get_template_part('template-parts/content', get_post_type());
					endif; ?>
				<?php endwhile; ?>
			</div>
			<?php
			if ($found_posts > 12) : ?>
				<div class="flex justify-center my-8">
					<?php echo btn_primary('Ladda fler', 'load-more mx-auto block', 'data-post-type="' . get_post_type() . '" data-cat-id="' . $cat_id . '"'); ?>
				</div>
			<?php
			endif; ?>
		</div>

	<?php
	else :

		get_template_part('template-parts/content', 'none'); ?>
	<?php endif; ?>
</main>

<?php
get_sidebar();
get_footer();
