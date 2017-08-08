<?php

/*
Template Name: OnSight
*/

get_header();

?>

<div id="onsight__hero">
	<div class="wrapper">
		<h1><small class="carestream">Carestream</small>OnSight<sup>&reg;</sup><small>Conebeam Imaging System</small></h1>
		<!-- <h1>On Target.<br class="responsive-NOPE-mobile"> On Budget.<br class="responsive-NOPE-mobile"> On Site.</h1> -->
		<h2>Meet the new solution<br class="responsive--mobile"> for affordable 3D<br class="responsive--mobile"> extremity exams</h2>
		<p>Get conebeam imaging right at the point of care, for faster diagnosis and treatment. The surprise? It’s a fraction of the cost of CT. The Onsight keeps the imaging service and potential revenue stream in-house. Install in your practice for convenient imaging, diagnosis and treatment planning in one visit. With a small footprint and simplified design we’ve cut the time and cost of system installation too. You get the highest quality imaging, plus features like a revolutionary all-touch screen, with minimal installation cost and high up time. It doesn’t get better than OnSight.</p>
		<div class="image">
			<?php PS_SVG('page-onsight/hero'); ?>
			<?php PS_SVG('page-onsight/3d-callout'); ?>
		</div>
	</div>
</div>

<div id="onsight__extremities">
	<div class="wrapper">
		<h2>See it Clearly</h2>
		<p>OnSight offers versatility of both high-resolution 2D and 3D exam capability, for performance of both exam types with the same system – for fast workflow and high productivity. Plus, OnSight is designed specifically for imaging of extremities including the: hand, wrist, elbow, knee, ankle, and foot. It’s a fast, affordable, convenient imaging process for accurate diagnosis and commencement of treatment.</p>
		<div class="icons">
			<figure>
				<i><?php PS_SVG('page-onsight/hand'); ?></i>
				<figcaption>Hand</figcaption>
			</figure>
			<figure>
				<i><?php PS_SVG('page-onsight/wrist'); ?></i>
				<figcaption>Wrist</figcaption>
			</figure>
			<figure>
				<i><?php PS_SVG('page-onsight/elbow'); ?></i>
				<figcaption>Elbow</figcaption>
			</figure>
			<figure>
				<i><?php PS_SVG('page-onsight/knee'); ?></i>
				<figcaption>Knee</figcaption>
			</figure>
			<figure>
				<i><?php PS_SVG('page-onsight/ankle'); ?></i>
				<figcaption>Ankle</figcaption>
			</figure>
			<figure>
				<i><?php PS_SVG('page-onsight/foot'); ?></i>
				<figcaption>Foot</figcaption>
			</figure>
		</div>
		<div
			class="lazyload image"
			data-bgset="<?php echo responsive_image('page-onsight/extremities.png') ?>"
			data-sizes="auto">
		</div>
	</div>
</div>

<div id="onsight__weight-bearing">
	<div class="wrapper">
		<h2>Weight-Bearing Advantage</h2>
		<p>With an easy-open bore and patient access the OnSight allows weight-bearing studies not possible with traditional CT. With accommodation for knee, foot, and ankle the OnSight allows physicians to view these extremities under natural load. It’s another reason the OnSight is hailed as best new radiology device.</p>
		<div class="image"><?php PS_SVG('page-onsight/weight-bearing'); ?></div>
	</div>
</div>

<div id="onsight__xray">
	<div class="wrapper">
		<h2>3-Source X-Ray Tube</h2>
		<p>OnSight provides a 3 source X-Ray tube which gives you a 50% increased reconstruction volume. With 3 X-Ray sources cone beam artifacts are reduced, and the overall field of view is improved. Plus, see full anatomy of interest in a single scan.</p>
		<button class="button--orange" id="toggle-3-source">View 3-Source X-Ray</button>
		<?php PS_SVG('page-onsight/xray'); ?>
		<figure id="xray__reconstruction">
			<div class="image"><?php PS_SVG('page-onsight/fifty') ?></div>
			<figcaption>Increased<br>Reconstruction Volume</figcaption>
		</figure>
		<figure id="xray__artifacts">
			<div class="image"><?php PS_SVG('page-onsight/compare'); ?></div>
			<figcaption>Reduction in Cone<br>Beam Artifacts</figcaption>
		</figure>
		<figure id="xray__fov">
			<div class="image"><?php PS_SVG('page-onsight/FOV'); ?></div>
			<figcaption>Improved Field<br>of View</figcaption>
		</figure>
	</div>
	<script>
	jQuery(document).ready(function($) {
		syncSVGTransforms(document.querySelectorAll('.triple-beam'));
		$('#xray .triple').hide();
		var visible = false;
		$('#toggle-3-source').click(function (event) {
			$('#xray .single').fadeToggle();
			if(visible) {
				$('#xray .emitter-label, #xray .emitter-line').fadeOut();
				$('#xray .beam-emitter').fadeOut();
				$('#xray .triple-beam').removeClass('visible');
				$('#triple-source-reconstruction').fadeOut();
				$('#xray .triple.label').fadeOut();
				$('#toggle-3-source').text('View 3-Source X-Ray');
				setTimeout(function () {
					visible = false;
					syncSVGTransforms(document.querySelectorAll('.triple-beam'));
				}, 500);
			} else {
				visible = true;
				$('#xray .emitter-label, #xray .emitter-line').fadeIn(500, 'swing', function () {
					$('#xray .beam-emitter').fadeIn(500, 'swing', function () {
						$('#xray .triple-beam').addClass('visible');
						setTimeout(function () {
							$('#triple-source-reconstruction').fadeIn(500, 'swing', function () {
								$('#xray .triple.label').fadeIn();
								$('#toggle-3-source').text('Hide 3-Source X-Ray');
								syncSVGTransforms(document.querySelectorAll('.triple-beam'));
							});
						}, 500);
					})
				})
			}
		});
	});
	</script>
</div>

<div class="split-pane" id="onsight__exposure">
	<div class="lazyload image" data-sizes="auto" data-bgset="<?php echo responsive_image('page-onsight/exposure.jpg'); ?>"></div>
	<div class="copy">
		<h3>Reduced Rates of Exposure</h3>
		<p>The OnSight 3D Extremity System is designed to utilize lower-dose radiation, but this doesn’t compromise imaging. Instead you get high resolution images and reduced rates of exposure, so there’s no compromise on patient care.</p>
		<?php PS_SVG('page-onsight/one-cycle'); ?>
	</div>
</div>

<div class="split-pane" id="onsight__visualization">
	<div class="image">
		<figure class="lazyload" data-bg="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-onsight/visualization-1.jpg"></figure>
		<span><strong>Cadaver tibio-femoral joint:</strong> Traditional CT (left) vs CBCT (right)</span>
		<figure class="lazyload" data-bg="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-onsight/visualization-2.jpg"></figure>
	</div>
	<div class="copy">
		<h3>Improved Visualization</h3>
		<p>With high resolution isotropic image capture, and high-resolution 3D images that can help to reveal subtle or occult fractures, you’ll get better results and faster diagnosis. Plus, our advanced metal and scatter correction algorithms are the best in the industry.</p>
		<img src="" alt="">
	</div>
</div>

<div class="split-pane" id="onsight__budget">
	<div class="image">
		<figure class="lazyload" data-bgset="<?php echo responsive_image('page-onsight/budget.png'); ?>"></figure>
	</div>
	<div class="copy">
		<h3>Built for Any Budget</h3>
		<p>The OnSight system design will typically not require a large shielded room or specialized electrical service, enhancing the ease and cost effectiveness of installation. The bottom line? A fast, affordable, convenient imaging process for timely, accurate diagnosis.</p>
	</div>
</div>

<?php
	echo aray_player(
		'QomztfgvQj8',
		'onsight__overview',
		array(
			'related' => array(
				'cJ4HVUUErOY',
				'vSv-aa_R5pU',
				'cJ4HVUUErOY'
			),
			'background' => 'page-onsight/overview.jpg'
		)
	);
?>

<?php echo aray_block_partners(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/elements/page-onsight.css">

<?php get_footer(); ?>
