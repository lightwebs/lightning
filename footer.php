<?php
$logo = get_field('footer_logo', 'options');
$logo_dark = get_field('footer_logo_dark', 'options');
$text = get_field('footer_text', 'options');
$social_media_text = get_field('footer_col_social_media_text', 'options');
?>

<footer class="py-6 mt-16 md:mt-20 site-footer md:py-9 xl:py-16 dark:bg-white/5">
	<div class="container">
		<div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4 md:gap-6 lg:gap-12">
			<div class="footer-col">
				<?php if ($logo) : ?>
					<div class="footer-logo">
						<?php image($logo, 'full dark:hidden'); ?>

						<?php if ($logo_dark) : ?>
							<?php image($logo_dark, 'full hidden dark:block'); ?>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<?php if ($text) : ?>
					<div class="mt-2 text-white footer-text lg:mt-4 dark:text-white">
						<?php echo $text; ?>
					</div>
				<?php endif; ?>
			</div>

			<?php if (have_rows('footer_col_repeater', 'options')) : ?>

				<?php while (have_rows('footer_col_repeater', 'options')) : the_row();
					$title = get_sub_field('footer_col_title', 'options');
					$qty = count(get_field('footer_col_repeater', 'options'));
				?>

					<div class="pb-2 bg-white dark:bg-slate-900 md:!bg-transparent footer-col">
						<?php if ($title) : ?>
							<h4 class="text-xl px-3 pt-2 mb-0 after:content-['\e5cf'] md:after:!content-none text-white footer-col-title md:mb-3 dark:text-white ac-header"><?php echo $title; ?></h4>
						<?php endif; ?>

						<?php if (have_rows('footer_col_links', 'options')) : ?>
							<ul class="hidden px-3 pt-2 m-0 md:block">
								<?php while (have_rows('footer_col_links', 'options')) : the_row();
									$link = get_sub_field('footer_col_link');
									$icon = get_sub_field('icon');

									if ($link) : ?>
										<li class="mb-2">
											<a class="inline-flex items-center text-white dark:text-white footer-col-link gap-x-2" href="<?php echo $link['url']; ?>">
												<?php if ($icon) : ?>
													<?php echo $icon; ?>
												<?php endif; ?>
												<?php echo $link['title']; ?>
											</a>
										</li>
								<?php
									endif;
								endwhile; ?>
							</ul>
						<?php endif; ?>

					</div>
				<?php endwhile; ?>
			<?php endif; ?>

			<?php if (have_rows('footer_col_social_media', 'options')) : ?>

				<div class="ml-auto footer-col-so-me">

					<?php if (get_field('footer_title_social_media', 'options')) : ?>
						<h4 class="mb-0 text-xl text-white footer-col-title md:mb-3 dark:text-white">
							<?php echo get_field('footer_title_social_media', 'options'); ?>
						</h4>
					<?php endif; ?>

					<?php while (have_rows('footer_col_social_media', 'options')) : the_row();
						$link = get_sub_field('footer_col_link');
						$icon_id = get_sub_field('footer_col_icon');
						$icon_dark_id = get_sub_field('footer_col_icon_dark');
						$img =  wp_get_attachment_image_src($icon_id, 'thumbnail');
						$img_dark =  wp_get_attachment_image_src($icon_dark_id, 'thumbnail');
					?>
						<?php if ($link) : ?>
							<a class="flex items-center justify-start footer-col-link" href="<?php echo $link['url']; ?>">
								<?php if ($icon_id) : ?>
									<img src="<?php echo $img[0]; ?>" alt="<?php echo $img[1]; ?>" class="dark:hidden footer-col-icon">
								<?php endif; ?>

								<?php if ($icon_dark_id) : ?>
									<img src="<?php echo $img_dark[0]; ?>" alt="<?php echo $img_dark[1]; ?>" class="hidden dark:block footer-col-icon">
								<?php endif; ?>
								<span class="ml-1 text-sm text-white dark:text-white">
									<?php echo $link['title']; ?>
								</span>
							</a>
						<?php endif; ?>
					<?php endwhile; ?>

					<?php if ($social_media_text) : ?>
						<div class="mt-4 text-white footer-text dark:text-white">
							<?php echo $social_media_text; ?>
						</div>
					<?php endif; ?>

				</div>
			<?php endif; ?>


		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>