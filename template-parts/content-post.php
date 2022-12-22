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
	<?php echo card(get_the_ID()); ?>
</article><!-- #post-<?php the_ID(); ?> -->