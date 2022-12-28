<?php
$form_shortcode = get_field('footer_form_shortcode', 'option');
?>

<footer class="py-6 text-white bg-black site-footer md:py-9 xl:py-20">

	<!-- Footer top -->
	<div class="container">
		<div class="flex items-end justify-between">
			<div class="footer-form max-w-[400px]">
				<?php echo do_shortcode($form_shortcode); ?>
			</div>
			<div class="flex flex-col ">
				<?php while (have_rows('footer_col_repeater', 'options')) : the_row();
					$title = get_sub_field('footer_col_title', 'options');
					// $qty = count(get_field('footer_col_repeater', 'options'));
				?>

					<div class="flex flex-col items-end mt-12">
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
	<div class="container ">
		<div class="flex justify-between mt-24 ">
			<p class="text-base font-semibold uppercase ">&copy; <?php echo date('Y'); ?> Lightweb AB</p>

			<div class="flex">
				<?php while (have_rows('footer_col_social_media', 'options')) : the_row();
					$link = get_sub_field('footer_col_link');
				?>

					<a class="ml-8 text-base font-semibold uppercase opacity-50 hover:opacity-100" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
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