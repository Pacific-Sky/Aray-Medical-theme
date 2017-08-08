<?php

/*
Template Name: Evolution
*/

get_header();

?>

<div id="evolution__hero">
	<div class="wrapper">
		<h1><small class="carestream">Carestream</small>DRX Evolution Plus<sup>&reg;</sup><small>Imaging System</small></h1>
		<h2>Modern Imaging Defined</h2>
		<p>The DRX-Evolution Plus has set a benchmark for imaging performance in hospitals around the world. With sophisticated auto-positioning elements, thoughtful design that creates better workflow, and powerful imaging capabilities, you get a machine that defines modern imaging</p>
		<div class="lazyload image" data-bgset="<?php echo responsive_image('page-evolution/hero.png'); ?>"></div>
	</div>
</div>

<div id="evolution__upgrade">
	<div class="wrapper">
		<h2>Evolution Gets an Upgrade</h2>
		<p>The DRX-Evolution Plus has been designed with new features, including extended tube-column range, enhanced pediatric capabilities, and a future-friendly design to accommodate advanced applications. It also sports sleek contoured lines and high-tech LED lighting. It’s a machine that defines modern imaging.</p>
		<figure id="lighting">
			<div class="lazyload image" data-bgset="<?php echo responsive_image('page-evolution/lighting.jpg'); ?>"></div>
			<figcaption>Modern New Look<br>with LED Lighting</figcaption>
		</figure>
		<figure id="range">
			<div class="lazyload image" data-bgset="<?php echo responsive_image('page-evolution/range.jpg'); ?>"></div>
			<figcaption>Extended Tube-<br>Column Range</figcaption>
		</figure>
		<figure id="pediatrics">
			<div class="lazyload image" data-bgset="<?php echo responsive_image('page-evolution/pediatric.jpg'); ?>"></div>
			<figcaption>Enhanced Pediatric<br>Capabilities</figcaption>
		</figure>
	</div>
</div>

<div id="evolution__independence">
	<div class="wrapper">
		<h2>The Evolution of Independence</h2>
		<p>Our overhead tube was designed to free techs from the day-to-day strains that cause work related injury. With powerful innovations, the overhead tube works autonomously, with an incredible array of auto-positioning features. It’s a machine that defines independence, and creates a truly modern imaging facility. </p>
		<div class="lazyload image" data-bgset="<?php echo responsive_image('page-evolution/independence.jpg'); ?>"></div>
		<ul>
			<li>Preprogrammed tube and Bucky positions</li>
			<li>Auto-positioning and auto-centering for table or wall procedures</li>
			<li>Auto-tracking, motor-assist function, asymmetric-collimation capability, and other auto-positioning features help reduce operator fatigue.</li>
		</ul>
	</div>
</div>

<div id="evolution__stand">
	<div class="wrapper">
		<h2>A Wall Stand that Changes Everything</h2>
		<p>With features that make simplify patient positioning, and optimize workflow, our ergonomically designed wall stand changes everything.</p>
		<div class="image"><?php PS_SVG('page-evolution/wall-stand'); ?></div>
		<div class="copy">
			<h3>Features Include</h3>
			<ul>
				<li>Autonomous floor-mounted rail system for lateral stand movement </li>
				<li>Auto tracking and centering align detector with overhead tube</li>
				<li>Vertical Bucky range of motion from the floor up to 71 in. (180 cm)</li>
				<li>Tilt capability from negative vertical (–20°) to horizontal (90°)</li>
				<li>Broad range of studies – chest, lateral cervical spine, standing knee and more</li>
				<li>Horizontal Bucky positioning for upper extremity and under-the-table studies</li>
				<li>Side-to-side swing angulations for easy cross-table exams on gurneys <input type="range" value="0" min="-50" max="25" id="horizontal"></li>
			</ul>
		</div>
	</div>
	<script charset="utf-8">
		jQuery(document).ready(function($) {
			// $('#wall-stand').addClass('hidden');
			// var standHidden = true;
			var pane = document.getElementById('evolution__stand');
			var apparatus = document.getElementById('apparatus');
			var percentMax = 44; // The maximum percentage the the apparatus will be transformed
			var scrollStartOffset = (window.innerHeight / 4); // the distance in pixels above the pane that scrolling begins
			scrollStartOffset = 0;
			$('#horizontal').on('input change', function (event) {
				$('#wall-stand').css('transform', 'translateX(' + String(event.target.value) +'%)');
			});
			$(window).scroll(function (event) {
				var rect = pane.getBoundingClientRect();
				if(rect.top < scrollStartOffset && Math.abs(rect.top) < window.innerHeight) {
					// The top of the page has exited the screen AND the bottom has not left
					// if(standHidden) {
					// 	$('#wall-stand').removeClass('hidden');
					// }
					var percent = Math.abs(rect.top) / window.innerHeight;
					percent = percent * percentMax;
					if(percent > 0 && percent < percentMax && rect.top < 0) {
						$(apparatus).css('transform', 'translate(0, ' + percent + '%)');
						syncSVGTransforms(document.querySelectorAll('#apparatus'));
					}
				}
			});
		});
	</script>
</div>

<div id="evolution__workflow">
	<div class="wrapper">
		<h2>Proven Solutions for Better Workflow</h2>
		<p>With Evolution you get features that create a high level of efficiency and workflow</p>
		<figure id="wireless">
			<div class="lazyload image" data-bgset="<?php echo responsive_image('page-evolution/detector.png'); ?>"></div>
			<figcaption>
				<h3>Wireless Detector</h3>
				<span>A wireless detector provides positioning freedom.</span>
			</figcaption>
		</figure>
		<figure id="control">
			<div class="lazyload image" data-bgset="<?php echo responsive_image('page-evolution/control.png'); ?>"></div>
			<figcaption>
				<h3>Advanced Control</h3>
				<span>One space-saving console controls all medical imaging functions. It has a flexible user interface with touchscreen control, customized to match clinical workflow. </span>
			</figcaption>
		</figure>
		<figure id="table">
			<div class="lazyload image" data-bgset="<?php echo responsive_image('page-evolution/table.png'); ?>"></div>
			<figcaption>
				<h3>Adjustable Table</h3>
				<span>Our table adjusts low enough for small children, and can accommodate adults up to 705 lbs. Table movement initiated through double-tap pedals to creates better workflow.</span>
			</figcaption>
		</figure>
	</div>
</div>

<div id="evolution__imaging">
	<h2>The Imaging Power of Evolution Plus</h2>
	<div class="image--wrapper">
		<div class="shadow"></div>
		<div class="lazyload image" data-bgset="<?php echo responsive_image('page-evolution/x-ray.jpg'); ?>"></div>
	</div>
	<div class="wrapper">
		<figure>
			<div class="image"><?php PS_SVG('page-evolution/specialties'); ?></div>
			<figcaption>Accommodates specialties such as pediatrics, orthopedics, and trauma.</figcaption>
		</figure>
		<figure>
			<div class="image"><?php PS_SVG('page-evolution/images'); ?></div>
			<figcaption>Images are ready for viewing and manipulation on the console in seconds. </figcaption>
		</figure>
		<figure>
			<div class="image"><?php PS_SVG('page-evolution/quality'); ?></div>
			<figcaption>High-quality images with increased latitude and high-contrast image detail.</figcaption>
		</figure>
	</div>
	<script>
	function imagesFrameReset () {
		Array.from(document.getElementsByClassName('imagesFrameReset')).forEach(function (animation, i) {
			animation.beginElement();
		});
	}
	function initialReset () {
		imagesFrameReset();
		qualityFrameFadeOut();
	}
	function imagesClockReset () {
		document.getElementById('imagesClockButtonTwo').beginElement();
		document.getElementById('imagesClockSecondsReset').beginElement();
	}
	function specialtiesFrameAppear () {
		document.getElementById('specialtiesFrameFadeIn').beginElement();
		// document.getElementById('specialtiesFrameAppear').beginElement();
	}
	function specialtiesSkullFlash () {
		document.getElementById('skullFlash').beginElement();
	}
	function specialtiesFrameSlideOut () {
		document.getElementById('specialtiesFrameSlideOut').beginElement();
	}
	function specialtiesSkullFade () {
		document.getElementById('skullFade').beginElement();
	}
	function imagesFrameSlideIn () {
		Array.from(document.getElementsByClassName('imagesFrameSlideIn')).forEach(function (animation, i) {
			setTimeout(function () {
				animation.beginElement();
			}, (i + 1) * 75);
		});
	}
	function imagesClockStart(duration) {
		document.getElementById('imagesClockButtonOne').beginElement();
		document.getElementById('imagesClockSeconds').setAttribute('dur', duration + 'ms');
		document.getElementById('imagesClockSeconds').beginElement();
	}
	function imagesFrameSlideOut () {
		Array.from(document.getElementsByClassName('imagesFrameSlideOut')).forEach(function (animation, i) {
			setTimeout(function () {
				animation.beginElement();
			}, (i + 1) * 75);
		});
	}
	function imagesClockFreeze () {
		document.getElementById('imagesClockButtonOne').beginElement();
	}
	function qualityFrameSlideIn () {
		Array.from(document.getElementsByClassName('qualityFrameSlideIn')).forEach(function (animation, i) {
			animation.beginElement();
		});
	}
	function qualityMarkCheck () {
		document.getElementById('qualityMarkCheck').beginElement();
		document.getElementById('qualityBurstDazzle').beginElement();
	}
	function qualityFrameFadeOut () {
		Array.from(document.getElementsByClassName('qualityFrameFadeOut')).forEach(function (animation, i) {
			animation.beginElement();
		});
		setTimeout(function () {
			Array.from(document.getElementsByClassName('qualityFrameSlideBack')).forEach(function (animation, i) {
				animation.beginElement();
			});
			setTimeout(function () {
				Array.from(document.getElementsByClassName('qualityFrameFadeIn')).forEach(function (animation, i) {
					animation.beginElement();
				});
			}, 500);
		}, 2000);
	}
	function specialtiesFrameReset () {
		document.getElementById('specialtiesFrameFadeOut').beginElement();
		setTimeout(function () {
			document.getElementById('specialtiesFrameSlideBack').beginElement();
		}, 500);
	}
	var animating = false;
	var playedOnce = false;
	var triggerOffset;
	function animateSlides () {
		animating = true;
		var clockLength = 2000;
		if(playedOnce) specialtiesFrameAppear();
		if(!playedOnce) initialReset();
		setTimeout(function () {
			specialtiesSkullFlash();
			imagesClockReset();
			setTimeout(function () {
				specialtiesFrameSlideOut();
				specialtiesSkullFade();
				imagesFrameSlideIn();
				imagesClockStart(clockLength);
				setTimeout(function () {
					imagesFrameSlideOut();
					imagesClockFreeze();
					qualityFrameSlideIn();
					qualityMarkCheck();
					setTimeout(function () {
						qualityFrameFadeOut();
						specialtiesFrameReset();
						animating = false;
						playedOnce = true;
					}, 500);
				}, clockLength);
			}, 500);
		}, 500);
	}
	jQuery(document).ready(function($) {
		var wrapper = $('#evolution__imaging .image--wrapper');
		var distance = 0;
		triggerOffset = getPosition(document.getElementById('specialties')).y - window.innerHeight;
		$(window).resize(function (event) {triggerOffset = getPosition('evolution__tomography').y + window.innerHeight;});
		$(window).scroll(function (event) {
			if(getScrollTop() > triggerOffset && !animating) {
				animateSlides();
			}
		});
		$(window).scroll(function (event) {
			// If the pane is in view
			if(
				getScrollTop() + window.innerHeight > wrapper[0].offsetTop
				&& getScrollTop() < wrapper[0].offsetTop + wrapper[0].offsetHeight
			) {
				distance = getScrollTop() + window.innerHeight - wrapper[0].offsetTop - wrapper[0].offsetHeight;
				distance = distance / window.innerHeight;
				distance = distance * -20;
				wrapper.find('.image').css('transform', 'translateY(' + distance + 'vh)');
				distance = distance / 20;
				distance = distance * 10;
				wrapper.find('.shadow').css('box-shadow', '0 ' + distance  + 'vh 10vh black inset');
			}
		})
	});
	</script>
</div>

<div id="evolution__tomography">
	<div class="wrapper">
		<h2>Optional Linear Tomography</h2>
		<p>Tomography is back, and with Evolution Plus it’s easier than ever. Evolution Plus supports the efficacy of procedures, with movement control that is fully automatic. Tomography reduces patient exposure to radiation, and saves time and money over traditional CT. With Evolution Plus you get tomography that is fast and easy, while still providing both doctor and patient with a high-quality image. </p>
		<figure class="selling-points">
			<div class="lazyload image image--main" data-bgset="<?php echo responsive_image('page-evolution/doctor-ct.jpg'); ?>"></div>
			<div class="icons">
				<div class="image image--icon">
					<i><?php PS_SVG('page-evolution/radiation'); ?></i>
					<span>Reduce Exposure &amp; Radiation</span>
				</div>
				<div class="image image--icon">
					<i><?php PS_SVG('page-evolution/time-money'); ?></i>
					<span>Save Time &amp; Money</span>
				</div>
				<div class="image image--icon">
					<i><?php PS_SVG('page-evolution/seconds'); ?></i>
					<span>Images Ready In Seconds</span>
				</div>
			</div>
		</figure>
		<figure class="quality">
			<div class="lazyload image" id="tomography__comparison"></div>
			<div class="toggle">
				<?php PS_SVG('toggle'); ?>
				<span class="conventional">Conventional 2 dimensional image</span>
				<span class="tomographic">Tomographic image done at 10 cm above the table top</span>
			</div>
			<figcaption>
				Accomodates Specialties Such As
				<ul>
					<li>Pediatrics</li>
					<li>Orthopedics</li>
					<li>&amp; Trauma</li>
				</ul>
			</figcaption>
		</figure>
	</div>
	<script charset="utf-8">
		jQuery(document).ready(function($) {

			$('#toggle').click(function (event) {
				$('#toggle').toggleClass('down');
				$('.quality .image').toggleClass('clear');
				setTimeout(function () {
					syncSVGTransforms(document.querySelectorAll('.switch'));
				}, 500);
			});
		});
	</script>
</div>

<?php
	echo aray_player(
		'WJRKLO9I13Q',
		'evolution__overview',
		array(
			'background' => 'page-evolution/overview.jpg'
		)
	);
?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/elements/page-evolution.css">

<?php get_footer(); ?>
