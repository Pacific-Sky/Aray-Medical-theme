<?php

/*
Template Name: Ultrasound
*/

get_header();

?>

<div id="ultrasound__hero">
	<div class="wrapper">
		<h1><small class="carestream">Carestream</small>Touch Prime XE<sup>&reg;</sup><small>Ultrasound Imaging System</small></h1>
		<h2>This is the future of ultrasound technology.<br>There is simply nothing else like it.</h2>
		<p>The CARESTREAM Touch Prime XE Ultrasound System takes the Touch Prime to an ultra-premium level with advanced imaging capabilities and advanced features.</p>
		<div class="icons">
			<figure>
				<i><?php PS_SVG('page-ultrasound/icon-touch-screen'); ?></i>
				<figcaption>All-Touch Screen</figcaption>
			</figure>
			<figure>
				<i><?php PS_SVG('page-ultrasound/icon-lightweight'); ?></i>
				<figcaption>Ultra-Lightweight</figcaption>
			</figure>
			<figure>
				<i><?php PS_SVG('page-ultrasound/icon-screen-mount'); ?></i>
				<figcaption>Articulating Screen Mount</figcaption>
			</figure>
		</div>
		<div class="image"><?php PS_SVG('page-ultrasound/hero'); ?></div>
		<div class="copy">
			<p>Touch Prime Ultrasound is truly different by design. The Touch Prime utilizes next-generation technologies to give you the most innovative machine on the market. With a design that is based on sonographer feedback the Touch Prime offers a new level of intuitive operation, the best productivity tools, and powerful processing. The result is an all-new level of efficiency and image quality. </p>
			<!-- <h2>Compact Lightweight Design</h2> -->
			<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
		</div>
	</div>
</div>

<div id="ultrasound__tech">
	<div class="wrapper">
		<h2>Breakthrough Technology</h2>
		<p>The Touch Prime is an all new ultrasound solution that gives you the some of the most advanced features in the industry. With Touch Prime you get unparalleled ergonomic design, extraordinary workflow, and technological features you can’t find anywhere else. Our touch screen control panel is just the beginning of a truly innovative machine that will literally change the way you work. </p>
		<ul>
			<li class="divider"></li>
			<li><a href="#ultrasound__control-panel">All Touch Screen</a></li>
			<li class="divider"></li>
			<li><a href="#ultrasound__clarity">Large LED High-<wbr>Resolution Monitor</a></li>
			<li class="divider"></li>
			<li><a href="#ultrasound__ergonomics">Ergonomic</a></li>
			<li class="divider"></li>
			<li><a href="#ultrasound__smart-flow">Smart Flow</a></li>
			<li class="divider"></li>
			<li><a href="#ultrasound__smart-flow-2">Smart System Control</a></li>
			<li class="divider"></li>
			<li><a href="#ultrasound__gpus">Ultra-Fast Rendering GPUs</a></li>
			<li class="divider"></li>
			<li><a href="#ultrasound__personalization">Swipe &amp; Go Badge</a></li>
			<li class="divider"></li>
			<li><a href="#ultrasound__clean">Quick Clean Sanitation</a></li>
			<li class="divider"></li>
		</ul>
		<div class="image"><?php PS_SVG('page-ultrasound/tech-breakthrough'); ?></div>
	</div>
</div>

<div id="ultrasound__control-panel">
	<div class="wrapper">
		<h2>Unique Touch Screen <br />Control Panel</h2>
		<div class="image"><?php PS_SVG('page-ultrasound/control-panel'); ?></div>
		<div class="copy">
			<h3 class="nosplit">
				<?php PS_SVG('page-ultrasound/control-panel-touch'); ?>
			</h3>
			<p>Our touch screen is like nothing the industry has ever seen. The sleek, ultra-modern control panel is designed with soft keys that configure to each individual sonographer. Just swipe your badge and the panel conforms to your preferences. The panel has a simple, intuitive interface that creates an exceptional work experience. There's no need to clean individual keys so you get the assurance of infectious disease control that is completely unprecedented. Welcome to the future. </p>
			<figure>
				<?php PS_SVG('page-ultrasound/control-panel-config'); ?>
				<figcaption>Configurable User Interface</figcaption>
			</figure>
			<figure>
				<?php PS_SVG('page-ultrasound/control-panel-badges'); ?>
				<figcaption>Personalized Swipe and Go Badges</figcaption>
			</figure>
			<figure>
				<?php PS_SVG('page-ultrasound/control-panel-clean'); ?>
				<figcaption>Clean just got revolutionary</figcaption>
			</figure>
		</div>
	</div>
</div>



<div id="ultrasound__clarity">
	<div class="wrapper">
		<h2>Clarity, Perfected</h2>
		<div class="copy">
			<ul>
				<li>High frame rate with maintained spatial resolution</li>
				<li>Uniform lateral resolution over the entire depth</li>
				<li>Improved penetration for procedures such as deep abdominal imaging</li>
			</ul>
			<figure>
				<span class="lazyload image" data-bgset="<?php echo responsive_image('page-ultrasound/smarter-tech.jpg') ?>"></span>
				<figcaption>
					<h3>Smarter Technology</h3>
					<p>The Touch Prime is based on a new hardware architecture that was built from the ground up, so it has unique imaging capabilities. Touch Prime utilizes SynTek beam-forming architecture which improves visualization of blood flow, lateral resolution, and deep abdominal imaging. Along with features like Smart Flow, Smart Flow Assist, and Smart System Control, sonographers can expect pristine images along with enhanced workflow and system reliability. </p>
				</figcaption>
			</figure>
		</div>
		<div class="image"><?php PS_SVG('page-ultrasound/monitor'); ?></div>
	</div>
	<script>
	function calculateMonitorPreserve () {
		if(window.innerWidth >= 2232) {
			document.getElementById('monitor').setAttribute('preserveAspectRatio', 'xMinYMax keep');
		} else {
			document.getElementById('monitor').setAttribute('preserveAspectRatio', 'xMinYMax slice');
		}
	}
	jQuery(document).ready(function($) {
		calculateMonitorPreserve();
		$(window).resize(function (event) {
			calculateMonitorPreserve();
		});
	});
	</script>
</div>


<div id="ultrasound__smart-flow">
	<div class="wrapper wrapper--small">
		<h2>Smart Flow</h2>
		<p>With Smart Flow Technology you can visualize blood flow in all directions. Your measurements are angle independent, so the angle limitations of ordinary Doppler ultrasound are completely eliminated. With Smart Flow you’ll see continuous and robust flow information for stronger clinical diagnosis. You’ll also save valuable time in the detection and visualization of complex flows. This is radical technology that completely changes the game. </p>
		<figure>
			<span class="image">
				<img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-ultrasound/conventional.jpg" alt="">
			</span>
			<figcaption>Conventional</figcaption>
		</figure>
		<figure>
			<span class="image">
				<video src="<?php echo get_bloginfo('url'); ?>/ultrasound_smart-flow.mp4" autoplay loop></video>
				<img class="layload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-ultrasound/smart-flow-loop.gif">
			</span>
			<figcaption>Carestream<em>Smart Flow</em></figcaption>
		</figure>
	</div>
</div>



<div id="ultrasound__gpus">
	<div class="wrapper">
		<h2>Lightning-Fast GPUs</h2>
		<h3>Because at the end of the day, it’s the image that matters.</h3>
		<p>We’ve designed our machine with GPUs, which process in hundreds of cores - a marked difference from traditional machines that only utilize CPUs.</p>
		<!-- <p>The difference is remarkable. Most machines use CPUs, but they can only process in multiple cores. We’ve designed our machine with GPUs, which process in hundreds of cores. </p> -->
		<img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cpu-v-gpu.png" alt="">
		<div class="copy">
			<p>GPUs are powerful graphic processing units that give you sharp and clear images. Having GPUs means you get clearer images in less time - and who doesn’t love to save time? </p>
			<ul>
				<li>Get clearer images, faster</li>
				<li>Better visualization of blood flow</li>
				<li>Better images support better patient care</li>
			</ul>
		</div>
	</div>
</div>

<div id="ultrasound__ergonomics">
	<div class="wrapper wrapper--small">
		<h2>Back-Saving Ergonomics</h2>
		<!-- <h3>Sonographer Comfort and Convenience</h3> -->
		<p>If a workstation requires sonographers to assume stressful postures or make awkward movements while performing exams, musculoskeletal injuries are a likely result. These can greatly compromise the sonographer's overall health, comfort, and productivity. Touch Prime’s ergonomic features - an adjustable height range, convenient placement of keys and controls, easy, flexible positioning of the display and a variety of other ergonomic features - work together to ensure sonographer comfort and well-being. </p>
		<figure id="ergonomics__spinner">
			<video src="<?php echo get_bloginfo('url'); ?>/ultrasound_ergonomics.mp4" autoplay loop data-object-fit="cover"></video>
		</figure>
		<p>Slide up &amp; down pull back &amp; forth or rotate in either direction for an easy ergonomic workflow that will not only maximize comfort but help protect from on-the-job injury.</p>
		<figure id="ultrasound_probe">
			<span class="lazyload image" data-bgset="<?php echo responsive_image('page-ultrasound/probe.jpg'); ?>"></span>
			<figcaption>One-Handed<br>Probe</figcaption>
		</figure>
		<figure id="ultrasound_interchangable-probes">
			<span class="lazyload image" data-bgset="<?php echo responsive_image('page-ultrasound/interchangable-probes.jpg'); ?>"></span>
			<figcaption>Interchangable<br>Probes for All</figcaption>
		</figure>
		<figure id="ultrasound_adjustable-screen">
			<span class="lazyload image" data-bgset="<?php echo responsive_image('page-ultrasound/adjustable-screen.jpg'); ?>"></span>
			<figcaption>Adjustable<br>Screen</figcaption>
		</figure>
	</div>
</div>

<div class="split-pane" id="ultrasound__smart-flow-2">
	<div class="lazyload image" data-bgset="<?php echo responsive_image('page-ultrasound/swipe-badge.jpg'); ?>"></div>
	<div class="copy">
		<h3>Smart Flow Assist</h3>
		<p>With the optional Smart Flow Assist you eliminate the need for repeated manual adjustments like beam steering, gate position, and angle correction - even when the transducer is moving. It’s like having a really impressive assistant. You will have to get your own coffee though. </p>
		<p>Our Smart System Control (SSC) which automatically adjusts over 25 different imaging parameters in real time, which gives you optimal image quality. See? Smarter. Now, you have time to focus on your patient.</p>
	</div>
</div>

<div class="split-pane" id="ultrasound__personalization">
	<div class="lazyload image" data-bgset="<?php echo responsive_image('page-ultrasound/smart-flow.jpg'); ?>"></div>
	<div class="copy">
		<h3>Swipe &amp; Go!</h3>
		<p>Our Swipe-and-Go badge allows staff to log on quickly, promotes secure access, and automatically configures the system to the users preferences. It doesn’t get better, or easier, than this. </p>
	</div>
</div>

<div class="split-pane" id="ultrasound__clean">
	<div class="lazyload image" data-bgset="<?php echo responsive_image('page-ultrasound/clean.jpg'); ?>"></div>
	<div class="copy">
		<h3>Clean just got Revolutionary</h3>
		<p> Our touch screen control panel allow for easy cleaning. The hassle of sanitizing individual keys is completely eliminated. In terms of infectious disease prevention it’s a radical leap forward. You might call it revolutionary. </p>
		<ul>
			<li>Easy Clean</li>
			<li>Easily Prevent the Spread of Infectious Disease</li>
		</ul>
	</div>
</div>

<?php //echo aray_block_order(); ?>

<?php
	echo aray_player(
		'I6vL545_Bpg',
		'ultrasound__overview',
		array(
			'related' => array(
				'5claL8rL4fo'
			),
			'background' => 'page-ultrasound/overview.jpg'
		)
	);
?>

<?php echo aray_block_partners(); ?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/elements/page-ultrasound.css">

<?php get_footer(); ?>
