<?php

/*
Template Name: DRX Retrofit
*/

get_header();

?>

<div id="drx_retrofit__hero">
	<div class="wrapper">
		<h1>DRX Retrofit Kits</h1>
		<p>Maximize your current investment and upgrade to digital radiography productivity with our easy-to-install kits. Our DRX Retrofit Kits are designed to integrate seamlessly with your existing mobile x-ray equipment, so you can upgrade in a matter of hours.</p>
		<span class="tagline">Upgrade to the power of dr in a matter of hours</span>
		<blockquote>
			<p>Being able to upgrade existing equipment has been a real bonus. Upgrades have saved the organization a great deal of money.</p>
			<cite>
				<strong>Candace Tretter,</strong>
				Director of Radiology Services<br>
				Blessing Hospital, Quincy, IL USA
			</cite>
		</blockquote>
		<div class="image"><?php PS_SVG('page-drx/panel-straight'); ?></div>
	</div>
</div>

<div id="drx_retrofit__selling_points">
	<div class="wrapper">
		<figure>
			<div class="image"><?php PS_SVG('page-drx-retrofit/integrate'); ?></div>
			<figcaption>Integrates seamlessly with your existing mobile x-ray</figcaption>
		</figure>
		<figure>
			<div class="image"><?php PS_SVG('page-drx-retrofit/quality'); ?></div>
			<figcaption>Capture, view, and share high-quality medical images from the bedside</figcaption>
		</figure>
		<figure>
			<div class="image"><?php PS_SVG('page-drx-retrofit/touch'); ?></div>
			<figcaption>17 inch lcd touch screen display with 1280 x 1024 resolution</figcaption>
		</figure>
		<figure>
			<div class="image"><?php PS_SVG('page-drx-retrofit/power'); ?></div>
			<figcaption>Self-powered and rechargeable</figcaption>
		</figure>
	</div>
</div>

<div id="drx_retrofit__brands">
	<div class="wrapper">
		<h2>Take your GE and Shimadzu systems to a new level of productivity</h2>
		<p>Our DRX Retrofit Kits Easily Upgrade These GE and Shimadzu Systems</p>
		<ul id="ge-models">
			<li>GE AMX-4</li>
			<li>GE AMX-4 PLUS</li>
		</ul>
		<ul id="shimadzu-models">
			<li>Shimadzu Mobileart</li>
			<li>Shimadzu Mobileart Plus</li>
			<li>Shimadzu Mobileart Evolution</li>
		</ul>
		<span class="tagline">Don't have a GE or Shimadzu Portable?</span>
		<p>With the DRX-Universal Mobile Retrofit Kit we can upgrade mobile systems from nearly any other manufacturer.</p>
		<ul id="brands">
			<li>
				<?php PS_SVG('page-drx-retrofit/shimadzu'); ?>
			</li>
			<li>
				<?php PS_SVG('page-drx-retrofit/ge'); ?>
			</li>
			<li>
				<?php PS_SVG('page-drx-retrofit/other'); ?>
			</li>
		</ul>
		<ul class="selling-points">
			<li>The removable tablet PC allows for increased mobility.</li>
			<li>Just about any portable x-ray equipment can convert to DR in hours</li>
			<li>Multiple tablet PC mounting options to fit your mobile x-ray system</li>
			<li>Electronics fit in the existing cassette bin</li>
			<li>12.1 inch LCD touch screen display with 1280 x 1024 resolution</li>
			<li>Self-powered and rechargeable</li>
		</ul>
	</div>
</div>

<div id="drx_retrofit__areas">
	<div class="wrapper">
		<h2>DRX Wireless Detectors</h2>
		<p>One detector works seamlessly across the entire line-up of DRX products. So you can Go from the ER, to the ICU, to the pediatric unit without missing a beat.</p>
		<div class="areas">
			<figure id="er">
				<figcaption>ER</figcaption>
			</figure>
			<figure id="icu">
				<figcaption>ICU</figcaption>
			</figure>
			<figure id="pediatric">
				<figcaption>Pediatric</figcaption>
			</figure>
		</div>
	</div>
</div>

<div class="split-pane" id="drx_retrofit__ease">
	<div class="image"></div>
	<div class="copy">Exceptionally easy to use, all of our mobile solutions eliminate annoying tethers and cables during exams. This allows the detector to be easily positioned, while the hygienic, cable-free handling minimizes infection risk.</div>
</div>

<div class="split-pane" id="drx_retrofit__capture">
	<div class="image"></div>
	<div class="copy">Captured images are transferred wirelessly and are available immediately for viewing,to support prompt reads and quicker diagnoses.</div>
</div>

<div class="split-pane" id="drx_retrofit__compliance">
	<div class="image"></div>
	<div class="copy">Full compliance with the ANSI standard for 35 x 43 cassettes means you can use your existing grids with the DRX Plus Detectors.</div>
</div>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/elements/page-drx-retrofit.css">
<?php get_footer(); ?>
