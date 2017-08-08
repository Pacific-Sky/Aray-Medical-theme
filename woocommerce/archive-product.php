<?php get_header(); ?>

<main class="shop">
	<h1>Products</h1>
	<span class="tagline">Easy one-step ordering process</span>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ea minima, hic sed voluptatibus maiores cumque illum inventore a voluptatem.</p>
	<ul class="products">
	<?php while(have_posts()): the_post(); ?>
		<li>
			<a href="<?php the_permalink(); ?>">
				<div class="image"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())); ?>" alt=""></div>
				<h2><?php the_title(); ?></h2>
			</a>
			<span class="price">Cost: $<?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?></span>
			<a class="button" href="<?php echo get_bloginfo('url'); ?>/cart/?add-to-cart=<?php echo get_the_ID(); ?>">Add to Cart</a>
		</li>
	<?php endwhile; ?>
	<?php the_posts_pagination(array(
		'prev_text' => '◀︎',
		'next_text' => '▶︎'
	)); ?>
	</ul>
</main>


<?php get_footer(); ?>
