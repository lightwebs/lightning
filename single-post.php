<?php

/**
 * @package lightning
 */
$preamble = get_field('preamble');
$article_components = glob(acf_path() . 'article-builder/reg-article-components/*.php');
$tags = get_the_tags();
$tags = join(', ', wp_list_pluck($tags, 'name'));
$hide_sidebar = get_field('hide_sidebar');
$featured_image_id = get_post_thumbnail_id();

get_header();
?>
<main id="primary" class="site-main">

	<article id="article-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container">
			<div class="<?php echo !$hide_sidebar ? 'grid md:grid-cols-12 md:gap-x-4 lg:gap-x-6 py-4 lg:py-8' : 'py-4 lg:py-8'; ?>">
				<div class="lg:col-span-6 md:col-span-8">
					<header class="entry-header">
						<div class="<?php echo !$featured_image_id ? 'mb-6' : ''; ?>">
							<h1 class="entry-title dark:text-white"><?php the_title(); ?></h1>
							<?php get_post_terms(get_the_ID(), 'category'); ?>
						</div>

						<?php if ($featured_image_id) :
							image($featured_image_id, 'full', 'w-full h-auto py-4');
						endif; ?>

						<?php if ($preamble) : ?>
							<div class="font-semibold preamble dark:text-white">
								<?php echo $preamble; ?>
							</div>
						<?php endif; ?>

						<?php get_author(get_the_ID(), 'date', 'medium', 'border-t border-b dark:border-white/5'); ?>

					</header>

					<div class="entry-content">
						<?php get_template_part('article', 'builder') ?>
					</div>

					<?php get_template_part('partials/post', 'footer'); ?>
				</div>

				<?php if (!$hide_sidebar) : ?>
					<?php get_template_part('sidebar', 'builder'); ?>
				<?php endif; ?>

			</div>
		</div>
	</article>
</main>
<?php

get_footer();
