<?php get_header(); ?>

<div id="hero">
	<div class="wrapper">
		<span class="bullshit bullshit--ingenuity">Ingenuity</span>
		<span class="dash">&bull;</span>
		<span class="bullshit bullshit--precision">Precision</span>
		<span class="dash">&bull;</span>
		<span class="bullshit bullshit--reliability">Reliability</span>
	</div>
	<script>
	jQuery(document).ready(function($) {
		var video = document.createElement('video');
		video.setAttribute('autoplay', 'autoplay');
		video.setAttribute('loop', 'loop');
		video.dataset.objectFit = 'cover'
		var webm = document.createElement('source');
		webm.src = "<?php echo get_bloginfo('url'); ?>/aray-background.webm";
		video.appendChild(webm);
		var mp4 = document.createElement('source');
		mp4.src = "<?php echo get_bloginfo('url'); ?>/aray-background.mp4";
		video.appendChild(mp4);
		var hero = document.getElementById('hero');
		hero.insertBefore(video, hero.firstChild);
	});
	</script>
</div>

<div id="selling_points">
	<div class="wrapper">
		<figure>
			<?php PS_SVG('front-page/image_quality'); ?>
			<figcaption>Proven Image Quality</figcaption>
		</figure>
		<figure>
			<?php PS_SVG('front-page/flexibility'); ?>
			<figcaption>Flexibility</figcaption>
		</figure>
		<figure>
			<?php PS_SVG('front-page/technology'); ?>
			<figcaption>Leading Edge Technology</figcaption>
		</figure>
		<figure>
			<?php PS_SVG('front-page/intuitive'); ?>
			<figcaption>Intuitive Interfaces</figcaption>
		</figure>
	</div>
</div>

<div id="simplified">
	<div class="background"></div>
	<div class="wrapper">
		<div class="graphics">
			<figure class="technology"></figure>
			<figure class="service"></figure>
		</div>
		<div class="text">
			<section>
				<h2>Technology<br><strong>Simplified</strong></h2>
				<p>Aray brings you medical imaging equipment designed with breakthrough technology. We’ve enhanced workflow and productivity capabilities, improved ergonomics, and increased reliability and uptime. It’s equipment that changes the standard of care, right at the point of care. </p>
			</section>
			<section>
				<h2>Service<br><strong>Simplified</strong></h2>
				<p>Aray Medical brings you comprehensive service from a caring team of professionals. We are committed to providing you with fast, personalized customer care so you can focus on your patients and practice.</p>
			</section>
		</div>
	</div>
</div>

<script async defer src="<?php echo get_template_directory_uri(); ?>/assets/js/home.js"></script>

<?php get_footer(); ?>
