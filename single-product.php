<?php
/**
 * Read up on the WP Template Hierarchy for
 * when this file is used
 *
 */
?>
<?php get_header(); ?>

	<?php while(have_posts()): the_post(); ?>
		<main>
			<?php woocommerce_template_single_meta(); ?>
			<?php woocommerce_show_product_images(); ?>
			<div class="product_description">
				<?php woocommerce_template_single_title(); ?>
				<?php the_content(); ?>
				<?php woocommerce_template_single_price(); ?>
				<?php woocommerce_template_single_add_to_cart(); ?>
			</div>
			<?php woocommerce_output_related_products(); ?>
			<?php //echo do_shortcode('[product_page id="' . get_the_ID() . '"]') ?>
		</main>
	<?php endwhile; ?>

<?php get_footer(); ?>
