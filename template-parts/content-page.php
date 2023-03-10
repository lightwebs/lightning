<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lightning
 */

?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
