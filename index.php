<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lightning
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container px-0 md:px-4">
			<div class="grid-cols-12 md:grid gap-x-4 lg:gap-x-6">
				<div class="col-span-8">
				<?php
				if ( have_posts() ) : ?>
					<?php
					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title dark:text-white screen-reader-text">
								<?php single_post_title(); ?>
							</h1>
						</header>
						<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;
					the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' ); ?>
				<?php 
				endif;
				?>
			</div>
			<?php get_template_part( 'sidebar', 'builder' ); ?>
		</div>
	</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
