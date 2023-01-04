<?php
$form_shortcode = get_field('footer_form_shortcode', 'option');
?>

<footer class="py-12 text-white bg-black site-footer md:py-16 lg-18 xl:py-20 xxl:py-24">

	<!-- Footer top -->
	<div class="container">
		<div class="flex flex-col md:justify-between items-d md:flex-row">
			<div class="footer-form md:max-w-[400px]">
				<?php echo do_shortcode($form_shortcode); ?>
			</div>
			<div class="flex flex-col">
				<?php while (have_rows('footer_col_repeater', 'options')) : the_row();
					$title = get_sub_field('footer_col_title', 'options');
				?>

					<div class="flex flex-col mt-12 md:items-end">
						<h4 class="mb-2 font-serif text-xl font-medium"><?php echo $title; ?></h4>

						<?php while (have_rows('footer_col_rows', 'options')) : the_row();
							$link = get_sub_field('footer_col_link');
							$text = get_sub_field('footer_col_text');

						?>

							<!-- Only link OR text should exist, checking link first. -->
							<?php if ($link !== '') : ?>
								<a class="text-lg" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
									<?php echo $link['title']; ?>
								</a>
							<?php elseif ($text !== '') : ?>
								<p class="text-lg"><?php echo $text; ?></p>
							<?php endif; ?>

						<?php endwhile; ?>
					</div>


				<?php endwhile; ?>
			</div>
		</div>
	</div>

	<!-- Footer bottom -->
	<div class="container">
		<div class="flex flex-col-reverse mt-12 md:mt-24 md:justify-between md:flex-row">
			<p class="text-base font-semibold uppercase">&copy; <?php echo date('Y'); ?> Lightweb AB</p>

			<div class="flex flex-col mb-10 md:flex-row md:mb-0">
				<?php while (have_rows('footer_col_social_media', 'options')) : the_row();
					$link = get_sub_field('footer_col_link');
				?>

					<a class="mb-2 text-base font-semibold uppercase opacity-50 md:ml-8 md:mb-0 hover:opacity-100" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
						<?php echo $link['title']; ?>
					</a>

				<?php endwhile; ?>
			</div>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>