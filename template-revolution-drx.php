<?php

/*
Template Name: Revolution
*/

get_header();

?>

<div id="revolution__hero">
	<div class="wrapper">
		<h1><small class="carestream">Carestream</small>Revolution<sup>&reg;</sup><small>Mobile X-Ray Unit</small></h1>
		<h2>Meet Portable Ingenuity</h2>
		<p>The Revolution has innovative features that make it the most versatile mobile X-Ray unit in the industry. The Revolution improves productivity, simplifies workflow, and most importantly makes patients the focus of care.</p>
		<div class="image"><?php PS_SVG('page-revolution/hero'); ?></div>
	</div>
</div>

<div id="revolution__maneuverability">
	<div class="wrapper">
		<h2>Maneuverability</h2>
		<h3>A revolutionary imaging system that drives like a dream.</h3>
		<p>With ultra-smooth motion, the Revolution is easy to maneuver in tight medical environments. Glide past work stations, dart through hectic hallways, turn completely around (because you just got paged to the ICU), and maneuver in and out of rooms without missing a beat. The Revolution gets you where you need to go, effortlessly.</p>
		<?php PS_SVG('page-revolution/maneuverability'); ?>
		<!-- <div class="image" data-lazyload="revolution__hero">
			<?php PS_SVG('page-revolution/turning'); ?>
		</div> -->
	</div>
</div>

<div id="revolution__tube">
	<div class="wrapper">
		<h2>Keeping It All in Sight</h2>
		<h3>The First-Ever Collapsible Tube Column</h3>
		<p class="copy">The Revolution is the only portable unit that offers a motorized collapsible tube column. A collapsible column gives technologists an unobstructed view as they make their way around. They’ll get where they’re needed faster - and more safely.</p>
		<div class="interactive">
			<p>Drag the slider below to get a closer look</p>
			<div class="zoomer">
				<div class="nub"></div>
				<div class="track"></div>
			</div>
		</div>
		<div class="image">
			<?php PS_SVG('page-revolution/tube'); ?>
		</div>
	</div>
	<script>
	var verticalTranslate = 0;
	jQuery(document).ready(function($) {
		var tubeWrapper = document.getElementById('revolution__tube');
		var percentage, transform, currentTransform, newTransform, currentTranslateX, currentTranslateY, newTranslateX, newTranslateY, newLeft, position, midpoint;
		var transform;
		var svgHeight = 3361;
		document.getElementById('tube-head').setAttribute('transform', 'translate(0 1) scale(1)');
		$(window).scroll(function (event) {
			midpoint = tubeWrapper.offsetTop + (tubeWrapper.offsetHeight / 2)
			position = getScrollTop() + (window.innerHeight / 2) - midpoint;
			percentage = position / tubeWrapper.offsetHeight;
			if(percentage > -0.18 && percentage < 0.1515 ) {
			} else if(percentage < -0.18) {
				percentage = -0.18;
			} else {
				percentage = 0.1515;
			}
			verticalTranslate = percentage * svgHeight;
			transform = 'translateY(' + percentage * 100 + '%)';
			document.getElementById('tube-arm').setAttribute('transform', 'translate(0 '+ verticalTranslate+')');
			currentTransform = document.getElementById('tube-head').getAttribute('transform');
			currentTranslateX = currentTransform.match(/translate\(([-\d\.]+) [-\d\.]+\)/)[1];
			newTransform = currentTransform.replace(/translate\([-\d\.]+ [-\d\.]+\)/, 'translate(' + currentTranslateX + ' '+ verticalTranslate +')');
			document.getElementById('tube-head').setAttribute('transform', newTransform);
			transform = 'translateY(' + (percentage * $('#revolution__tube .image').height()) + 'px)';
		});

		var dragging = false;
		var sliderMax = $('#revolution__tube .zoomer').width() - $('#revolution__tube .nub').width();
		var track = document.querySelector('#revolution__tube .track');
		$('#revolution__tube .zoomer')
			.on('mousedown touchstart', function (event) {
				dragging = true;
			})
			.on('mouseup touchend', function (event) {
				dragging = false;
			})
			.on('mousemove touchmove', function (event) {
				// If the left button is being pressed
				var minOffset = Number(getComputedStyle(track).getPropertyValue('left').replace('px', ''));
				if(dragging) {
					var newLeft = event.offsetX - minOffset;
					// Overflow checking
					if(newLeft > (sliderMax - (minOffset * 2))) newLeft = (sliderMax - (minOffset * 2));
					if(newLeft < 0) newLeft = 0;
					// if(newLeft < min) newLeft = min;
					$('#revolution__tube .zoomer .nub').css('transform', 'translateX(' + newLeft + 'px)');
					percentage = Number(newLeft / (sliderMax - (minOffset * 2)));
					currentTransform = document.getElementById('tube-head').getAttribute('transform');
					newTransform = currentTransform.replace(/scale\([-\d\.]+\)/, 'scale('+ ((percentage * 2) + 1) +')');
					currentTranslateX = currentTransform.match(/translate\(([-\d\.]+) [-\d\.]+\)/)[1];
					currentTranslateY = currentTransform.match(/translate\([-\d\.]+ ([-\d\.]+)\)/)[1];
					// Magic numbers! Based on a rough multiplication of the tube head's width
					newTranslateX = -4550 * percentage;
					newTranslateY = verticalTranslate + (500 * percentage);
					newTransform = newTransform.replace(/translate\([-\d\.]+ [-\d\.]+\)/, 'translate(' + newTranslateX + ' ' + newTranslateY + ')');
					document.getElementById('tube-head').setAttribute('transform', newTransform);
					document.getElementById('blur-filter-effect').setAttribute('stdDeviation', percentage * 20);
					blur = 'blur(' + percentage * 12 + 'px)';
					if(percentage === 0) blur = 'none';
					$('#revolution__tube p, #revolution__tube h2, #revolution__tube h3').css('filter', blur);
				}
			})
	});
	</script>
</div>

<div id="revolution__drx" style="display: none">
	<div class="wrapper">
		<h2>Headline about DRX</h2>
		<p>At the heart of the DRX Family is the world's first wireless, casette-sized detector. It works across all DRX imaging eqipment and allows you to share detectors across facilities, wherever they are needed the most.</p>
		<div class="image image--detector"></div>
		<div class="copy copy--standards">
			<h3>Setting new standards in efficiency and reliability</h3>
			<p>The original Carestream DRX detector set a new standard for detector performance. The new DRX Plus detector now delivers greater speed, easier handling and improved reliability.</p>
		</div>
		<div class="copy copy--features">
			<h3>Carestream's DRX Detectors Feature:</h3>
			<ul>
				<li>
					<strong>Wireless connectivity</strong>
					to eliminate the hassles and hazards of cables and reduce the risk of infection.
				</li>
				<li>
					<strong>Instant access</strong>
					to images to speed decisions on patient care between any DRX room or any mobile DRX system. A separate battery charger that allows the detector to be used while a spare battery is being charged.
				</li>
			</ul>
		</div>
		<div class="image image--operator">
			<?php PS_SVG('page-revolution/operator'); ?>
		</div>
	</div>
</div>

<div id="revolution__image">
	<div class="wrapper">
		<h2>Image Quality</h2>
		<p>Unique Tube &amp; Grid Alignment System optimizes image quality and encourages grid use.</p>
		<div class="copy">
			<!-- <h3>Get consistent, precise images</h3> -->
			<ul>
				<li>
					<strong>Fewer Retakes</strong>
					A powerful 32kW generator, dual-focal spot tube and EVP Plus image processing combine to further optimize images. This means fewer retakes for faster, more accurate diagnoses.
				</li>
				<li>
					<strong>Image Review</strong>
					The Revolution offers prior image review, including techniques and exposure history, with its PACS-based query/retrieve capability.
				</li>
				<li>
					<strong>Optional Tube &amp; Line Visualization</strong>
					Software instantly verifies placement of tubes and peripherally inserted central catheter lines in seriously ill or injured patients.
				</li>
			</ul>
		</div>
		<div class="image--wrapper">
			<div class="image"><?php PS_SVG('page-revolution/image'); ?></div>
		</div>
	</div>
</div>

<div id="revolution__scatter">
	<div class="wrapper">
		<figure id="without">
			<div class="lazyload image" data-bg="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-revolution/no-anti-scatter.jpg"></div>
			<figcaption>Without Anti-Scatter</figcaption>
		</figure>
		<figure id="with">
			<div class="lazyload image" data-bg="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-revolution/anti-scatter.jpg"></div>
			<figcaption>With Anti-Scatter</figcaption>
		</figure>
		<figure>
			<div class="image"><?php PS_SVG('page-revolution/vibes'); ?></div>
			<figcaption>Signals from 8 receivers</figcaption>
		</figure>
	</div>
	<script>
	jQuery(document).ready(function($) {
		$('#revolution__scatter .image')
			.mouseenter(function (event) {
				$('#revolution__scatter').addClass('hover');
			})
			.mouseleave(function (event) {
				$('#revolution__scatter').removeClass('hover');
			});
	});
	</script>
</div>

<div id="revolution__efficiency">
	<div class="wrapper">
		<h2>Efficiency and Value</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit aliquid doloremque obcaecati tempore, fugiat, blanditiis illum dolor repellendus. Perspiciatis, ex.</p>
	</div>
</div>

<div id="revolution__productivity">
	<div class="wrapper">
		<h2>Mobilize Your Productivity</h2>
		<p>Revolution optimizes workflow with features developed from technologist feedback.</p>
		<div class="image">
			<?php PS_SVG('page-revolution/productivity'); ?>
			<div class="copy">Bagging a detector can be a hassle, but Revolution simplifies the process by providing a holder for easy bagging.</div>
		</div>
	</div>
</div>

<div id="revolution__reach">
	<div class="wrapper">
		<h2>More Reach</h2>
		<div class="image" data-lazyload="revolution__productivity">
			<?php PS_SVG('page-revolution/reach'); ?>
			<div class="copy">With extended tube head reach you get better patient access and more accurate positioning, even in crowded rooms.</div>
		</div>
	</div>
</div>

<div id="revolution__workflow">
	<div class="wrapper">
		<h2>Improved Workflow</h2>
		<p>Two touchscreen displays enable quick image review or technique changes from the console or the tube, improving workflow.</p>
		<figure>
			<div class="image" id="two_monitors">
				<span class="two">2</span>
				<span class="monitors">Monitors</span>
			</div>
			<div class="lazyload image touchscreen touchscreen-1" data-bgset="<?php echo responsive_image('page-revolution/touchscreen-1.jpg'); ?>"></div>
			<div class="lazyload image touchscreen touchscreen-2" data-bgset="<?php echo responsive_image('page-revolution/touchscreen-2.jpg'); ?>"></div>
		</figure>
	</div>
	<script>
	jQuery(document).ready(function($) {
		var workflowPane = document.getElementById('revolution__workflow');
		var vhPast = 10;
		$(window).scroll(function (event) {
			var triggerDistance = workflowPane.offsetTop + workflowPane.offsetHeight;
			if((getScrollTop() || window.pageYOffset || getScrollTop()) + window.innerHeight > triggerDistance + (vhPast * (window.innerHeight / 100))) {
				$('#revolution__workflow figure').addClass('peek');
			} else {
				$('#revolution__workflow figure').removeClass('peek');
			}
		})
	});
	</script>
</div>

<?php
	echo aray_player(
		'jADxr3KRjIo',
		'revolution__overview',
		array(
			'background' => 'page-revolution/overview.jpg'
		)
	);
?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/elements/page-revolution-drx.css">

<?php get_footer(); ?>
