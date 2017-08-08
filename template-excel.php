<?php

/*
Template Name: Excel
*/

get_header();

?>

<div id="excel__hero">
	<div class="wrapper">
		<h1><small class="carestream">Carestream</small>Excel Plus<sup>&reg;</sup><small>Fluoroscopy &amp; Radiology<small></h1>
		<!-- <h1>Total Flexibility</h1> -->
		<h2>With the Excel Plus You Get Fluoroscopy and Radiology in a Single System</h2>
		<p>The Excel Plus System combines both fluoroscopy and general radiology capabilities in one compact unit. With powerful presets and robotic positioning you get exceptional versatility and ease of use, plus the ability to perform cross-table and weight-bearing exams. We designed the Excel with details drawn from technologist feedback, so you get higher productivity and accelerated workflow too.</p>
		<blockquote><p>The whole is more than the sum of its parts</p><cite>Aristotle</cite></blockquote>
		<div class="image"></div>
	</div>
</div>

<div id="excel__features">
	<div class="wrapper">
		<h2>Total Accessibility</h2>
		<p>The Excel Plus gives you more accessibility than any other machine out there. With full system access from every side technologists are able to easily transfer patients from a gurney. Our table lowers to 19 inches making it accessible for wheelchair patients. With features like &plusmn;90&deg; tilting the Excel simply outperforms other machines. Our powerful auto-piloted positioning eases strain, reducing work related injury, and accelerating workflow.</p>
		<figure class="machine">
			<div class="image">
				<?php PS_SVG('page-excel/features'); ?>
			</div>
			<div class="copy">
				<h3>Key Features Include</h3>
				<ul>
					<li>Shorter tabletops</li>
					<li>Automatic tube rotation</li>
					<li>Lower table-weight limits</li>
					<li>Four-way table top</li>
					<li>Ability to adjust any lower than 65cm</li>
					<li>Limited source-to-image distance limit of 26"</li>
				</ul>
			</div>
		</figure>
		<div class="features">
			<figure id="access">
				<div class="lazyload image" data-bgset="<?php echo responsive_image('page-excel/access.jpg'); ?>"></div>
				<figcaption>Accessible From All Sides</figcaption>
			</figure>
			<figure id="wheelchair">
				<div class="lazyload image" data-bgset="<?php echo responsive_image('page-excel/wheelchair.jpg'); ?>"></div>
				<figcaption>Easily Accommodates Wheelchair Patients</figcaption>
			</figure>
			<figure id="tilting">
				<div class="lazyload image" data-bgset="<?php echo responsive_image('page-excel/tilting.jpg'); ?>"></div>
				<figcaption>&plusmn;90&deg; Tilting with Auto-Piloted Positioning</figcaption>
			</figure>
		</div>
	</div>
</div>

<div id="excel__care">
	<div class="wrapper">
		<h2>Total Care</h2>
		<p>We’ve designed the Excel with the patient in mind to create a warmer, more positive patient experience based on feedback from technologists. Providing total care, while maintaining high performance that’s cost effective - that’s the reason hospitals all over the world choose Excel over other machines.</p>
		<div class="image">
			<figure id="care__hero">
				<div class="glow">
					<?php PS_SVG('page-excel/mood'); ?>
				</div>
			</figure>
			<figure class="care--small">
				<div class="image"><?php PS_SVG('page-excel/length'); ?></div>
				<figcaption>Extended Table Length</figcaption>
			</figure>
			<figure class="care--small">
				<div class="image"><?php PS_SVG('page-excel/capacity'); ?></div>
				<figcaption>Higher Weight Capacity</figcaption>
			</figure>
			<figure class="care--small" id="ambiance">
				<div class="image"><?php PS_SVG('page-excel/ambiance'); ?></div>
				<figcaption>Ambient Light &amp; Music</figcaption>
			</figure>
			<figure class="care--small">
				<div class="image"><?php PS_SVG('page-excel/sizes'); ?></div>
				<figcaption>Fits More Patient Types</figcaption>
			</figure>
		</div>
	</div>
	<script>
	var addNote;
	var noteDelayDefault = 1000;
	var noteDelay = noteDelayDefault;
	var prefix = window.location.origin.indexOf('pacificsky') > -1 ? '/araymed.com' : '';
	jQuery(document).ready(function($) {
		var audio = new Audio(prefix + '/excel-song.mp3');
		// Some note paths, sorted by length
		var notes = [
			'M6.6,0C6.3,0,5.9,0,5.9,0v15.1c-0.4-0.3-1-0.5-1.5-0.5c-0.8,0-1.6,0.3-2.3,0.7C1.1,16,0,16.9,0,18.4c0,1.2,1.1,1.8,2.2,1.8 c0.8,0,1.6-0.3,2.3-0.7c0.9-0.6,2.1-1.5,2.1-3c0-0.1,0-0.1,0-0.2c0,0,0,0,0,0V5.2C8,6.7,9.9,8.7,9.9,10.8c0,1.3-0.3,2.6-0.8,3.8 C9,15,9.2,15.2,9.5,15.2c0.1,0,0.3-0.1,0.4-0.2c0.5-1.3,0.8-2.7,0.8-4.1C10.7,6.9,6.6,3.9,6.6,0z',//eight
			'M6.6,0H5.9v15.1c-0.4-0.3-1-0.5-1.5-0.5c-0.8,0-1.6,0.3-2.3,0.7C1.1,16,0,16.9,0,18.4c0,1.2,1.1,1.8,2.2,1.8 c0.8,0,1.6-0.3,2.3-0.7c0.9-0.6,2.1-1.5,2.1-3c0-0.1,0-0.1,0-0.2c0,0,0,0,0,0V0z',//quarter
			'M5.9,0v15.1c-0.4-0.3-1-0.5-1.5-0.5c-0.8,0-1.6,0.3-2.3,0.7C1.1,16,0,16.9,0,18.4c0,1.2,1.1,1.8,2.2,1.8 c0.8,0,1.6-0.3,2.3-0.7c0.9-0.6,2.1-1.5,2.1-3c0-0.1,0-0.1,0-0.2c0,0,0,0,0,0V0.6h9.1v14.5c-0.4-0.3-1-0.5-1.5-0.5 c-0.8,0-1.6,0.3-2.3,0.7c-0.9,0.6-2.1,1.5-2.1,3c0,1.2,1.1,1.8,2.2,1.8c0.8,0,1.6-0.3,2.3-0.7c0.9-0.6,2.1-1.5,2.1-3 c0-0.1,0-0.1,0-0.2c0,0,0,0,0,0V0H5.9z',//half
			'M1.7,20.2c1.5,0,2.7-0.3,3.8-1c0.7-0.4,1-1.2,1.3-1.9c0.1-0.4,0.2-0.7,0.2-1.1c0-0.1,0-0.1,0-0.2c0,0,0,0,0,0V0L6.3,0v14.9 c-0.3-0.2-0.6-0.2-1-0.2c-1.5,0-2.7,0.3-3.7,1c-0.7,0.4-1.1,1.2-1.3,1.9C0.1,18,0,18.4,0,18.7C0,19.7,0.7,20.2,1.7,20.2z M0.8,18.2 c0.4-0.5,1.3-1.1,2.1-1.6s1.7-1.1,2.3-1.3c0.1,0,0.2,0,0.2,0c0.4,0,0.8,0.3,0.8,0.8c0,0.2-0.1,0.4-0.2,0.6c-0.4,0.5-1.3,1.1-2.1,1.6 s-1.7,1.1-2.3,1.3c-0.1,0-0.2,0-0.2,0c-0.4,0-0.8-0.3-0.8-0.8C0.6,18.5,0.7,18.3,0.8,18.2z',//half
			'M5.4,0.6c-1.2,0-1.7,1.1-1.7,2.2c0,1.9,1.4,3.4,3.3,3.4 c1.2,0,1.7-1.1,1.7-2.2C8.7,2.1,7.3,0.6,5.4,0.6z M12.3,3.4c0,1.1-0.9,1.9-1.8,2.4c-1.3,0.7-2.8,1-4.3,1s-3-0.3-4.4-1 C0.9,5.3,0,4.5,0,3.4S0.9,1.5,1.8,1c1.3-0.7,2.8-1,4.4-1s3,0.3,4.3,1C11.5,1.5,12.3,2.4,12.3,3.4z',//whole
		];
		var colors = [
			'#6666e2',
			'#ef7622',
			'#2a275b',
			'#393277',
			'#ff9852'
		];
		// set the delay between notes
		// Set the range in which the notes can appear
		var minX = 420;
		var maxX = 740;
		var minY = 340;
		var maxY = 550;

		$('#ambiance')
			.mouseenter(function (event) {
				noteDelay = 250;
			})
			.mouseleave(function (event) {
				noteDelay = noteDelayDefault;
			})
			.click(function (event) {
				if(audio.paused) {
					audio.play()
				} else {
					audio.pause();
				}
			})
		// The magic
		addNote = function (callback) {
			// SVG requires creating elements like so
			var note = document.createElementNS('http://www.w3.org/2000/svg', 'path');
			// Wrapper because we'll be transforming the note both to place it and to animate it
			var wrapper = document.createElementNS('http://www.w3.org/2000/svg', 'g');
			// A timestamped ID
			var id = 'note-' + Date.now();
			// Get a random note path
			var length = between(0, notes.length - 1);
			// Because the notes array is sorted by length, set the length's
			// duration relative to its position therein
			var duration = between((length * 1000) + 1000, (length * 1000) + 2000);
			// Randomize the position
			var x = between(minX, maxX);
			var y = between(minY, maxY);
			wrapper.setAttribute('id', id);
			wrapper.setAttribute('class', 'note');
			wrapper.setAttribute('transform', 'translate(' + x + ' ' + y + ') scale(2)');
			note.setAttribute('d', notes[length]);
			note.setAttribute('style', 'animation-duration: ' + duration + 'ms');
			note.setAttribute('fill', colors[between(0, colors.length - 1)]);
			wrapper.appendChild(note);
			document.getElementById('mood').appendChild(wrapper);
			setTimeout(function () {
				$('#' + id).remove();
			}, duration);
			setTimeout(addNote, noteDelay)
		}
		addNote();

	});
	</script>
</div>

<div id="excel__clarity">
	<div class="wrapper">
		<h2>Total Clarity</h2>
		<p>At the end of the day it’s all about the image. Hospitals and clinics the world over choose our machines because they know they’ll get the best image clarity in the industry. </p>
		<div class="image"><?php PS_SVG('page-excel/monitor'); ?></div>
		<ul>
			<li>We’ve provided extensive SID capability that allows for image acquisition at any distance between 110 and 180 cm.</li>
			<li>A dRF configuration with a single, flat-panel digital detector for both fluoroscopy and radiology</li>
			<li>With an optional DRX-1 System Radiology exams can be done whether in table, cross-table, or weight-bearing.</li>
		</ul>
	</div>
	<script charset="utf-8">
		jQuery(document).ready(function($) {
			var $wrapper = $('#excel__clarity .image');
			var width = $wrapper[0].offsetWidth;
			var height = $wrapper[0].offsetHeight;
			var minX = -830;
			var minY = -1630;
			var maxX = 800;
			var maxY = 410;
			var bones = document.getElementById('bones');
			var crosshair = document.getElementById('crosshair');
			var zoomFactor = 2;
			var zoomed = false;
			var x, y, percentX, percentY, crosshairX, crosshairY, currentTransform, newTransform, xLeft;
			xLeft = document.getElementById('monitor').getBoundingClientRect().left;
			$(window).resize(function () {xLeft = document.getElementById('monitor').getBoundingClientRect().left;});
			$wrapper.mousemove(function (event) {
				y = event.pageY - $wrapper[0].offsetTop;
				x = event.pageX - xLeft;

				percentX = 1 - (width - x) / width;
				percentY = 1 - (height - y) / height;
				x = percentX * minX;
				y = percentY * minY;
				if(zoomed) {
					x = x * zoomFactor;
					y = y * zoomFactor;
				}
				currentTransform = bones.getAttribute('transform');
				newTransform = 'translate(' + x + ' ' + y + ')';
				bones.setAttribute('transform', currentTransform.replace(/translate\([-\d\.]+ [-\d\.]+\)/, newTransform));
				x = percentX * maxX;
				y = percentY * maxY;
				currentTransform = crosshair.getAttribute('transform');
				newTransform = 'translate(' + x + ' ' + y + ')';
				crosshair.setAttribute('transform', currentTransform.replace(/translate\([-\d\.]+ [-\d\.]+\)/, newTransform));
			});

			// $wrapper.mousedown(function (event) {
			// 	currentTransform = bones.getAttribute('transform');
			// 	newTransform = 'scale(' + zoomFactor + ')';
			// 	bones.setAttribute('transform', currentTransform.replace(/scale\(\d+\)/, newTransform));
			// 	x = currentTransform.match(/([-\d.]+) ([-\d.]+)/)[1] * zoomFactor;
			// 	y = currentTransform.match(/([-\d.]+) ([-\d.]+)/)[2] * zoomFactor;
			// 	newTransform = 'translate(' + x + ' ' + y + ')';
			// 	bones.setAttribute('transform', currentTransform.replace(/translate\([-\d\.]+ [-\d\.]+\)/, newTransform));
			// 	zoomed = true;
			// });
			//
			// $wrapper.mouseup(function (event) {
			// 	currentTransform = bones.getAttribute('transform');
			// 	newTransform = 'scale(1)';
			// 	bones.setAttribute('transform', currentTransform.replace(/scale\(\d+\)/, newTransform));
			// 	x = currentTransform.match(/([-\d.]+) ([-\d.]+)/)[1] / zoomFactor;
			// 	y = currentTransform.match(/([-\d.]+) ([-\d.]+)/)[2] / zoomFactor;
			// 	newTransform = 'translate(' + x + ' ' + y + ')';
			// 	bones.setAttribute('transform', currentTransform.replace(/translate\([-\d\.]+ [-\d\.]+\)/, newTransform));
			// 	zoomed = false;
			// });
		});
	</script>
</div>

<div id="excel__efficiency">
	<div class="wrapper">
		<h2>Total Efficiency</h2>
		<p>We use the term ‘accelerated workflow’ a lot. That’s because we think it’s important. When you get a machine like the Excel, you aren’t just getting a hunk of metal - you are getting a carefully designed imaging system that works with your techs. Because when they can optimize their work load, they focus more on their patients, and give the best care possible.</p>
		<figure id="control-panel">
			<div class="image"></div>
			<figcaption>
				<h3>Easy-to-Use Control Panel</h3>
				<p>Our console features a large color touch-screen. It integrates all table movements, generator settings, and APR functions into a single, efficient interface. Intuitive controls mean less training time for staff, and a higher efficiency rate.</p>
			</figcaption>
		</figure>
		<figure id="remote-control">
			<div class="image"></div>
			<figcaption>
				<h3>Remote Control</h3>
				<p>Control system operation remotely, or right at patient’s side. With our remote control the user can pilot the table is easily and avoid strain and work related injury. It’s convenient, saves time, and yes, accelerates workflow. </p>
			</figcaption>
		</figure>
		<figure id="camera-mic">
			<div class="image"></div>
			<figcaption>
				<h3>Camera &amp; Mic</h3>
				<p>A built-in video camera provides you with a live feed, so you can monitor the patient’s position and overall status during the entire exam. The console’s microphone lets you speak with your patient for instructions or reassurance whenever needed.</p>
			</figcaption>
		</figure>
	</div>
</div>

<?php
	echo aray_player(
		'4J91IxmrgHI',
		'excel__overview',
		array(
			'related' => array(
				'xWcO55RJjZE',
				'CtwHq5-MpUs',
				'v7vX-5ZoA8k',
				'6TU7o9lDHXU',
				'2wzXjAWXFyg',
				'z0ujMSZA4eM'
			),
			'background' => 'page-excel/overview.jpg'
		)
	);
?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/elements/page-excel.css">

<?php get_footer(); ?>
