<?php

/*
Template Name: DRX
*/

get_header();

?>

<div id="drx__hero">
	<div class="wrapper">
		<h1><small class="carestream">Carestream</small>DRX<sup>&reg;</sup><small>Wireless Detector System</small></h1>
		<h2>Going Beyond What's Possible</h2>
		<p>We believe in radical solutions. That’s why the DRX-1 System offers performance, reliability, and freedom all at the same time, and across all your equipment. Not to mention, it can be installed in one day.</p>
		<?php PS_SVG('page-drx/1-panel'); ?>
	</div>
</div>

<div id="drx__devices">
	<div class="wrapper">
		<div id="drx-panel" class="image image--main">
			<?php PS_SVG('page-drx/panel-straight'); ?>
			<?php PS_SVG('page-drx/wireless'); ?>
		</div>
		<div id="devices">
			<figure id="full-system">
				<div class="image"></div>
				<figcaption>DRX-1 System</figcaption>
			</figure>
			<figure id="evolution">
				<div class="image"></div>
				<figcaption>DRX Evolution Plus</figcaption>
			</figure>
			<figure id="retrofit">
				<div class="image"></div>
				<figcaption>DRX-1 Mobile Retrofit</figcaption>
			</figure>
			<figure id="revolution">
				<div class="image"></div>
				<figcaption>DRX Revolution</figcaption>
			</figure>
			<figure id="ascend">
				<div class="image"></div>
				<figcaption>DRX Ascend</figcaption>
			</figure>
			<figure id="transportable">
				<div class="image"></div>
				<figcaption>DRX Transportable</figcaption>
			</figure>
		</div>
	</div>
	<script>
	var triggerPoint;
	jQuery(document).ready(function($) {
		triggerPoint = getPosition(document.getElementById('drx-panel')).y;
		$(window).resize(function () {
			triggerPoint = getPosition(document.getElementById('drx-panel')).y;
		});
		// var triggerPoint = document.getElementById('drx__devices').offsetTop + document.getElementById('drx-panel').offsetTop;
		var panelTilted = false;
		$(window).scroll(function (event) {
			if(getScrollTop() >= triggerPoint && !panelTilted) {
				$('#drx-panel').addClass('tilted');
				panelTilted = true;
			} else if(getScrollTop() < triggerPoint && panelTilted) {
				$('#drx-panel').removeClass('tilted');
				panelTilted = false;
			}
		});
	});
	</script>
</div>

<div id="drx__on-the-go">
	<div class="wrapper">
		<h2>On-The-Go Care</h2>
		<h3>DRX Wireless Detectors</h3>
		<p>Exceptionally easy to use, all our mobile solutions eliminate annoying tethers and cables during exams.</p>
		<div class="lazyload image" data-bgset="<?php echo responsive_image('page-drx/on-the-go.png'); ?>"></div>
		<div class="copy">
			<ul>
				<li>
					<strong>Easy Positioning</strong>
					<p>The detector can be easily positioned, while the hygienic, cable-free handling minimizes infection risk.</p>
				</li>
				<li>
					<strong>Immediate Viewing</strong>
					<p>Captured images wirelessly transfer and are available immediately for viewing.</p>
				</li>
				<li>
					<strong>Full Compliance</strong>
					<p>with the ANSI standard for 35 x 43 cassettes means you can use your existing grids with the DRX Plus Detectors.</p>
				</li>
			</ul>
			<div class="lazyload image" data-bgset="<?php echo responsive_image('page-drx/on-the-go-insertion.jpg'); ?>"></div>
		</div>
	</div>
</div>

<div id="drx__reliability">
	<div class="wrapper">
		<h2>Radical Image Reliability</h2>
		<h3>At the end of the day it’s all about getting the best image possible</h3>
		<p>You know that first image you’re always tossing because it didn’t turn out just right? Those days are gone. We’ve mastered image uniformity and stability so you get the best image every. single. time. That’s radical reliability.</p>
		<div class="copy">
			<ul>
				<li>Lower patient dose</li>
				<li>Better uniformity and stability</li>
				<li>60% reduction in dark noise</li>
				<li>25% increase in sensitivity</li>
				<li>Images quickly forwarded to print, PACS, or other networks</li>
			</ul>
		</div>
		<div class="lazyload image" data-bgset="<?php echo responsive_image('page-drx/monitor.png'); ?>"></div>
	</div>
</div>

<div id="drx__faster">
	<div class="wrapper">
		<h2>Simply Faster</h2>
		<p>The power of the DRX-1 system is simple: it does everything you need it to, faster than ever before.</p>
		<div class="image--wrapper" id="faster-tablet-wrapper">
			<div class="lazyload image image--main" id="faster-tablet" data-bgset="<?php echo responsive_image('page-drx/panel-straight.png'); ?>"></div>
		</div>
		<div class="icons" id="faster-icons">
			<figure class="image image--icon">
				<i><?php PS_SVG('page-drx/calibration'); ?></i>
				<figcaption>Calibration Time</figcaption>
			</figure>
			<figure class="image image--icon">
				<i><?php PS_SVG('page-drx/boot'); ?></i>
				<figcaption>Boot Time</figcaption>
			</figure>
			<figure class="image image--icon">
				<i><?php PS_SVG('page-drx/preview'); ?></i>
				<figcaption>Image Preview</figcaption>
			</figure>
			<figure class="image image--icon">
				<i><?php PS_SVG('page-drx/full-res'); ?></i>
				<figcaption>Time to Display</figcaption>
			</figure>
		</div>
	</div>
	<div id="water-surface">
		<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
			<path class="wave" d=""/>
		</svg>
		<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" id="wave-blend">
			<path class="wave" d=""/>
		</svg>
	</div>
</div>

<div id="drx__water">
	<div class="wrapper">
		<h2>Strength &amp; Resilience</h2>
		<p>There’s no sense in purchasing a DR system that’s just going to fall apart on you. After all, accidents happen. Which is why the DRX-1 is designed to withstand just about anything.</p>
		<div class="image--wrapper" id="water-tablet-wrapper">
			<div class="lazyload image image--main" id="water-tablet" data-bgset="<?php echo responsive_image('page-drx/panel-straight.png'); ?>"></div>
		</div>
		<div class="icons" id="water-icons">
			<figure class="image image--icon">
				<i><?php PS_SVG('page-drx/weight-bearing'); ?></i>
				<figcaption>Higher weight-bearing capacity</figcaption>
			</figure>
			<figure class="image image--icon">
				<i><?php PS_SVG('page-drx/drop-tolerance'); ?></i>
				<figcaption>Improved Drop Tolerance</figcaption>
			</figure>
			<figure class="image image--icon">
				<i><?php PS_SVG('page-drx/fluid-resistance'); ?></i>
				<figcaption>IPX Level Fluid Resistance</figcaption>
			</figure>
			<figure class="image image--icon">
				<i><?php PS_SVG('page-drx/ip57'); ?></i>
				<figcaption>IP57 Total Protection</figcaption>
			</figure>
		</div>
		<p class="disclaimer">Our latest DRX-1 is splash, water, and dust resistant and were tested under controlled laboratory conditions with a rating of IP57 with an immersion up to 1 meter under IEC standard 60529. Splash, water, and dust resistance are not permanent conditions and resistance might decrease as a result of normal wear. Do not attempt to charge a wet DRX-1 Panel; refer to the user guide for cleaning and drying instructions. Liquid damage not covered under warranty.</p>
	</div>
</div>

<script>
	var tabletFixed = false;
	var fasterTablet = document.getElementById('faster-tablet');
	var fasterTabletWrapper = document.getElementById('faster-tablet-wrapper');
	var fasterIcons = document.getElementById('faster-icons');
	var waterTablet = document.getElementById('water-tablet');
	var waterTabletWrapper = document.getElementById('water-tablet-wrapper');
	var waterIcons = jQuery('#water-icons .image--icon');
	var waterWrapper = document.getElementById('drx__water');
	var water = document.getElementById('water-surface');
	var bubbleOffset;
	var bubbleLength = 400;
	var offsetTop;
	var bubbleStart;
	var leftMin;
	var leftMax;
	var fixOffset;
	var fixOffsetMax;
	var newOffset;

	// http://codepen.io/grimor/pen/qbXLdN

	var container = document.getElementById('water-surface');
	var waves = document.querySelectorAll('.wave');
	var waveHeight = 0;                   // Position from the top of container
	var waveDelta = 1;                     // Wave amplitude
	var speed = 1.1;                        // Wave animation speed
	var wavePoints = 6;                     // How many point will be used to compute our wave
	var points = [];
	var width, height, waveWidth;
	var lastUpdate;
	var totalTime = 0;
	var splashing = false;
	var windowMax = 1200;
	var iconHeight = 0;
	var breakResolution = 768;



	function setWaveSize () {
		width = container.offsetWidth;
		height = container.offsetHeight;
		waveWidth = container.offsetWidth;  // Wave SVG width (usually container width)
	}

	function calculateWavePoints(factor) {
		var points = [];

		for (var i = 0; i <= wavePoints; i++) {
			var x = i/wavePoints * waveWidth;
			var sinSeed = (factor + (i + i % wavePoints)) * speed * 100;
			var sinHeight = Math.sin(sinSeed / 100) * waveDelta * (window.innerWidth / windowMax);
			var yPos = Math.sin(sinSeed / 100) * sinHeight  + waveHeight;
			points.push({x: x, y: yPos});
		}

		return points;
	}

	function buildPath(points) {
		var SVGString = 'M ' + points[0].x + ' ' + points[0].y;

		var cp0 = {
			x: (points[1].x - points[0].x) / 2,
			y: (points[1].y - points[0].y) + points[0].y + (points[1].y - points[0].y)
		};

		SVGString += ' C ' + cp0.x + ' ' + cp0.y + ' ' + cp0.x + ' ' + cp0.y + ' ' + points[1].x + ' ' + points[1].y;

		var prevCp = cp0;
		var inverted = 1;

		for (var i = 1; i < points.length-1; i++) {
			var cpLength = Math.sqrt(prevCp.x * prevCp.x + prevCp.y * prevCp.y);
			var cp1 = {
				x: (points[i].x - prevCp.x) + points[i].x,
				y: (points[i].y - prevCp.y) + points[i].y
			};

			SVGString += ' C ' + cp1.x + ' ' + cp1.y + ' ' + cp1.x + ' ' + cp1.y + ' ' + points[i+1].x + ' ' + points[i+1].y;
			prevCp = cp1;
			inverted = -inverted;
		};

		SVGString += ' L ' + width + ' ' + height;
		SVGString += ' L 0 ' + height + ' Z';
		return SVGString;
	}


	function tick() {
		var now = window.Date.now();

		if (lastUpdate) {
			var elapsed = (now-lastUpdate) / 1000;
			lastUpdate = now;

			totalTime += elapsed;

			var factor = totalTime*Math.PI;
			Array.from(waves).forEach(function (wave) {
				wave.setAttribute('d', buildPath(calculateWavePoints(factor)));
			})
		} else {
			lastUpdate = now;
		}

		window.requestAnimationFrame(tick);
	};


	function splash () {
		var splashIntensity = 40;
		waveDelta = splashIntensity;
		splashing = true;
		(function decreaseDelta () {
			if(waveDelta > 1) {
				waveDelta = waveDelta - (waveDelta / splashIntensity);
				setTimeout(function () {
					decreaseDelta();
				}, 100);
			} else {
				splashing = false;
			}
		})();
	}

	function calculateTabletOffsets () {
		// The point at which the tablet should start matching scroll
		// Should be when tablet is in middle
		fixOffset = getPosition(fasterTablet).y - (fasterTablet.offsetHeight / 2);
		// The point at which the tablet should stop matching scroll
		fixOffsetMax = getPosition(waterTabletWrapper).y - getPosition(fasterTabletWrapper).y;
		bubbleOffset = water.offsetHeight;
		// waterTablet.style.transform = waterIcons.style.transform = 'translateY(-' + fixOffsetMax + 'px)';
		waterTablet.style.transform = 'translateY(-' + fixOffsetMax + 'px)';
		iconHeight = jQuery('#faster-icons .image--icon')[0].offsetHeight;
	}

	function bubbleHit () {
		var bubble = document.createElement('SPAN');
		var duration = between(500, 1500);
		bubble.className = 'water-bubble';
		// bubble.style.top = bubbleStart + 'px';
		bubble.style.left = between(leftMin, leftMax) + 'px';
		bubble.style.width = bubble.style.height = between(10, 20) + 'px';
		bubble.style.animationDuration = duration + 'ms';
		water.appendChild(bubble);
		setTimeout(function () {
			water.removeChild(bubble);
		}, duration);
		if(!splashing) {
			splash();
		}
	}

	function bubbleDrift () {
		var bubble = document.createElement('SPAN');
		var duration = between(2500, 5500);
		bubble.className = 'water-bubble long';
		bubble.style.left = between(0, window.innerWidth) + 'px';
		bubble.style.width = bubble.style.height = between(30, 50) + 'px';
		bubble.style.animationDuration = duration + 'ms';
		document.getElementById('drx__water').appendChild(bubble);
		setTimeout(function () {
			document.getElementById('drx__water').removeChild(bubble);
		}, duration);
		setTimeout(function () {
			bubbleDrift();
		}, duration / 2);
	}

	jQuery(document).ready(function($) {
		setWaveSize();
		tick();
		calculateTabletOffsets();
		var bubbleIntensity = 4;
		do {
			bubbleDrift();
			bubbleIntensity--;
		} while (bubbleIntensity > 0);

		waterIcons.addClass('retracted');

		$(window)
			.on('scrolldelta', function (event) {
				newOffset = getScrollTop() - fixOffset;
				newOffset = newOffset * 1.5;
				if(newOffset > fixOffsetMax) newOffset = fixOffsetMax;
				if(getScrollTop() >= fixOffset && tabletFixed) {
					offsetTop = Number(waterTablet.style.top.replace('px', ''));
					if(offsetTop < fixOffsetMax || event.scrollTopDelta < 0) {
						if(newOffset > fixOffsetMax) newOffset = fixOffsetMax;
						fasterTablet.style.top = waterTablet.style.top = newOffset + 'px';

						if(window.innerWidth > breakResolution) {
							// If the icons are to the right,
							// Check to see if the tablet has moved past each top icon
							$('#faster-icons .image--icon').each(function (index, element) {
								if(newOffset > iconHeight * (index + 1)) {
									$(element).addClass('retracted');
								} else {
									$(element).removeClass('retracted');
								}
							});

							// Check to see if the tablet has moved past each bottom icon
							waterIcons.each(function (index, element) {
								if(fixOffsetMax - newOffset  > iconHeight * (waterIcons.length - index)) {
									$(element).addClass('retracted');
								} else {
									$(element).removeClass('retracted');
								}
							});
						}
					}
				} else if(getScrollTop() >= fixOffset && !tabletFixed) {
					tabletFixed = true;
					bubbleStart = fasterTablet.getBoundingClientRect().bottom;
					leftMin = fasterTablet.getBoundingClientRect().left;
					leftMax = leftMin + fasterTablet.offsetWidth;
				} else if(getScrollTop() <= fixOffset && tabletFixed) {
					tabletFixed = false;
					fasterTablet.style.top = waterTablet.style.top = '0px';
				}

				if(
					newOffset >= bubbleOffset
					&& newOffset <= (bubbleOffset + bubbleLength)
				) {
					bubbleHit();
				}
			})
			.on('resize', function (event) {
				calculateTabletOffsets();
				setWaveSize();
			})
	});

</script>

<div id="drx__strength" class="lazyload" data-bgset="<?php echo responsive_image('page-drx/strength.jpg'); ?>">
	<div class="wrapper">
		<h2>Proven Strength</h2>
		<?php PS_SVG('play'); ?>
	</div>
	<div id="strengthPlayer"></div>
	<script>
	// var strengthVideo =
	var strengthPlayer;
	var ratio = 1.5;
	var wrapperHeight;
	jQuery(document).ready(function($) {
		setTimeout(function () {
			strengthPlayer = new YT.Player('strengthPlayer', {
				height: '390',
				width: '640',
				videoId: '1asyVCnPTwA',
				events: {
					'onReady': function (event) {},
					'onStateChange': function (event) {
						if(event.data === YT.PlayerState.ENDED) {
							$('#strengthPlayer').removeClass('visible');
							document.getElementById('drx__strength').style.height = wrapperHeight;
							setTimeout(function () {
								$('#drx__strength').removeClass('playing');
								document.getElementById('drx__strength').style.height = undefined;
							}, 500);
						}
					}
				}
			});
		}, 3000);
		$('#drx__strength').click(function (event) {
			event.preventDefault();
			var node = document.getElementById('strengthPlayer');
			var wrapper = document.getElementById('drx__strength');
			wrapperHeight = wrapper.style.height = getComputedStyle(wrapper).getPropertyValue('height');
			node.style.width = wrapper.style.width = (window.innerWidth - getScrollbarWidth()) + 'px';
			node.style.height = Math.min((window.innerWidth / ratio), window.innerHeight - 48) + 'px';
			var newTop = getPosition(wrapper).y - 24;
			console.log('newtopping', wrapper, getPosition(wrapper), newTop);
			$('html, body').animate({
				scrollTop: newTop
			}, 500);
			setTimeout(function () {
				$('#drx__strength').addClass('playing');
				wrapper.style.height = node.style.height;
				setTimeout(function () {
					$(node).addClass('visible');
					strengthPlayer.playVideo();
				}, 1000);
			}, 500);
		})
	});
	</script>
</div>

<div id="drx__upgrade">
	<div class="wrapper">
		<h2>Go Digital.<br>In a Day.</h2>
		<h3>Get the power of digital without the hassle</h3>
		<p>With minimal disruption and downtime, and substantially less staff training time, your upgrade to DR will be easier and less expensive than you ever thought possible.</p>
		<div class="image"><?php PS_SVG('page-drx/fullsystem'); ?></div>
		<div class="wrapper wrapper--small">
			<ul>
				<li>By upgrading to DR you’ll realize greater productivity and cost savings. </li>
				<li>You can extend the life your conventional X-ray equipment by using it for DR image capture. </li>
				<li>The system’s compact, modular capture console is used alongside your generator console</li>
			</ul>
			<p class="copy">Our system is designed to help optimize the imaging equipment you’re using right now. It’s compatible with any X-ray system that uses ISO 4090-compliant, 35 x43 cm and 43 x 43 cm cassettes - so there’s no need to modify your generator or Bucky, discard your wall stand or table, or replace grids. Moving into DR has never been so easy. </p>
			<span class="cta">Want to go digital with the current brand you have?</span>
			<!-- <button class="button-_-orange">Learn more about retrofitting</button> -->
		</div>
	</div>
</div>

<div id="drx__swap">
	<div class="wrapper">
		<h2>Hot Swap</h2>
		<h3>Dead battery? We have you covered.</h3>
		<p>With DRX-1 you can replace a dead battery with a new one - without rebooting the machine. Plus, we’ve improved battery life by 79% so you swap batteries less often. It all works to enhance workflow and increase overall productivity.</p>
		<div class="images">
			<figure class="charge">
				<div class="lazyload image" data-bg="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-drx/charge-battery.png"></div>
				<figcaption>Charge three batteries at a time</figcaption>
			</figure>
			<figure class="life">
				<div class="image"><?php PS_SVG('page-drx/battery'); ?></div>
				<figcaption><span class="number">79%</span>improved battery life</figcaption>
			</figure>
			<figure class="swap">
				<div class="lazyload image" data-bgset="<?php echo responsive_image('page-drx/hot-swap.jpg'); ?>"></div>
				<figcaption>Easily swap batteries without rebooting</figcaption>
			</figure>
		</div>
	</div>
</div>

<div id="drx__connected">
	<div class="wrapper">
		<h2>Get Connected</h2>
		<p>You can direct connect with a hard-wired link to the generator, but we also offer the Beam Detect Mode which requires no cable connection. The detector automatically senses the x-ray beam. </p>
		<h3>DRX-1 System in <em>Direct Connect Mode</em></h3>
		<button id="switch-modes">Switch Modes</button>
		<?php PS_SVG('page-drx/drx-connect'); ?>
	</div>
	<script>
	function animate($el, attrs, speed) {

		// duration in ms
		speed = speed || 400;

		var start = {}, // object to store initial state of attributes
				timeout = 20, // interval between rendering loop in ms
				steps = Math.floor(speed/timeout), // number of cycles required
				cycles = steps; // counter for cycles left

		// populate the object with the initial state
		$.each(attrs, function(k,v) {
				start[k] = $el.attr(k);
		});

		(function loop() {
				$.each(attrs, function(k,v) {  // cycle each attribute
						var pst = (v - start[k])/steps;  // how much to add at each step
						$el.attr(k, function(i, old) {
								return +old + pst;  // add value do the old one
						});
				});

				if (--cycles) // call the loop if counter is not exhausted
						setTimeout(loop, timeout);
				else // otherwise set final state to avoid floating point values
						$el.attr(attrs);

		})(); // start the loop
}
	var $ = jQuery;
	var arayOrange = '#ef7622';
	var firstWire = document.getElementById('wireGlow1');
	var secondWire = document.getElementById('wireGlow2');
	var thirdWire = document.getElementById('wireGlow3');
	var fourthWire = document.getElementById('wireGlow4');
	var glow = document.getElementById('glow');
	var mode = 'wired';
	var animating = false;
	function buttonPress (callback) {
		var pressDuration = 500;
		var triggerPress = document.getElementById('triggerPress');
		glow.setAttribute('fill', arayOrange);
		triggerPress.setAttribute('dur', pressDuration + 'ms');
		triggerPress.beginElement();
		callback();
	}
	function animateWire (element, callback) {
		var animationDuration = 500;
		element.setAttribute('dur', animationDuration + 'ms');
		element.beginElement();
		setTimeout(function () {
			callback();
		}, animationDuration);
	}
	function blinkConsole (callback) {
		var blinkDuration = 500;
		$('#system-console .cls-5').css('fill', 'white');
		setTimeout(function () {
			jQuery('#system-console .cls-5').css('fill', '');
			callback();
		}, blinkDuration);
	}
	function blinkLight (light, lights, index, callback) {
		if(index <= lights.length - 1) {
			var $light = $(light);
			var blinkDuration = 100;
			$light.css('fill', arayOrange);
			setTimeout(function () {
				$light.css('fill', '');
				blinkLight(lights[index + 1], lights, index + 1, callback);
			}, blinkDuration);
		} else {
			callback();
		}
	}
	function blinkOEM (callback) {
		var lights = $('#console .cls-24');
		var lights = Array.from(document.querySelectorAll('#console .cls-24'));
		shuffle(lights);
		var index = 0;
		blinkLight(lights[index], lights, index, callback);
	}
	function pulseXRay (callback) {
		var pulseDuration = 1000;
		var pulseAnimation = document.getElementById('x-ray-pulse-animation');
		var detectorPulseAnimation = document.getElementById('detectorPulseAnimation')
		pulseAnimation.setAttribute('dur', pulseDuration + 'ms');
		detectorPulseAnimation.setAttribute('dur', pulseDuration + 'ms');
		pulseAnimation.beginElement();
		detectorPulseAnimation.beginElement();
		setTimeout(function () {
			callback();
		}, pulseDuration);
	}

	function panTo(pane, callback) {
		var panDuration = 500;
		if(panningNeeded) {
			document.getElementById(pane).beginElementAt(0);
			setTimeout(function () {
				callback();
			}, panDuration);
		} else {
			callback();
		}
	}

	jQuery(document).ready(function($) {
		function replaceAnimations () {
			// Safari madness
			Array.from(document.getElementsByClassName('pane-animation')).forEach(function (animation) {
				var replacement = animation.cloneNode();
				var parent = animation.parentElement;
				parent.removeChild(animation);
				parent.appendChild(replacement);
			});
		}
		function playXRayAnimation () {
			// Only needs to pan on larger screens
			window.panningNeeded = window.innerWidth <= 768;



			if(!animating) {
				animating = true;
				if(mode === 'wired') {
					buttonPress(function () {
						animateWire(firstWire, function () {
							blinkConsole(function () {
								panTo('pane-1', function () {
									animateWire(secondWire, function () {
										$('#console .cls-20').css('fill', 'url("#linear-gradient-4-2")');
										blinkOEM(function () {
											$('#console .cls-20').css('fill', '');
											panTo('pane-2', function () {
												animateWire(thirdWire, function () {
													$('#generator .cls-30').css('fill', arayOrange);
													pulseXRay(function () {
														$('#generator .cls-30').css('fill', '');
														animateWire(fourthWire, function () {
															blinkConsole(function () {});
															glow.setAttribute('fill', 'transparent');
															animating = false;
															replaceAnimations();
														});
														panTo('pane-3', function () {});
													});
												});
											});
										});
									});
								})
							});
						});
					});
				} else {
					buttonPress(function () {
						animateWire(secondWire, function () {
							panTo('pane-1', function () {
								$('#console .cls-20').css('fill', 'url("#linear-gradient-4-2")');
								blinkOEM(function () {
									$('#console .cls-20').css('fill', '');
									panTo('pane-2', function () {
										animateWire(thirdWire, function () {
											$('#generator .cls-30').css('fill', arayOrange);
											pulseXRay(function () {
												$('#generator .cls-30').css('fill', '');
												panTo('pane-3', function () {
													animateWire(fourthWire, function () {
														blinkConsole(function () {});
														glow.setAttribute('fill', 'transparent');
														animating = false;
														replaceAnimations();
													})
												});
											});
										});
									})
								})
							})
						})
					})
				}
			}
		}
		$('#switch-modes').click(function(event) {
			var animations;
			if(mode === 'wired') {
				animations = $('.animate-wireless');
				document.getElementById('wire-wireless').beginElement();
				$('#drx__connected h3 em').text('beam detect mode');
				mode = 'wireless';
				setTimeout(function () {
					animations.each(function (index, animation) {
						animation.beginElement();
						setTimeout(playXRayAnimation, 500);
					});
				}, 500);
			} else {
				animations = $('.animate-wired');
				animations.each(function (index, animation) {
					animation.beginElement();
				});
				$('#drx__connected h3 em').text('direct connect mode');
				mode = 'wired';
				setTimeout(function () {
					document.getElementById('wire-wired').beginElement();
					setTimeout(function () {
						document.getElementById('plugInAnimation').beginElement();
						setTimeout(playXRayAnimation, 500);
					}, 500);
				}, 500);
			}
		});
		var connectAnimationOffset = getPosition(document.getElementById('drx__options')).y;
		var connectAnimationPlayed = false;
		$(window).scroll(function (event) {
			if(getScrollTop() + window.innerHeight > connectAnimationOffset && !connectAnimationPlayed) {
				playXRayAnimation();
				connectAnimationPlayed = true;
			} else if(getScrollTop() + window.innerHeight < connectAnimationOffset && connectAnimationPlayed) {
				connectAnimationPlayed = false;
			}
		});
		$('#trigger').click(function (event) {
			playXRayAnimation();
		});
	});
	</script>
</div>

<div id="drx__options">
	<div class="wrapper">
		<h2>You've Got Options</h2>
		<h3>Making your choice simple</h3>
		<p>With options like these you'll get exactly what you're looking for in a DR system.</p>
		<div class="options-wrapper">
			<h4><span>Size Options</span></h4>
			<figure class="small">
				<div class="lazyload image" data-bg="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-drx/panel-straight.png"></div>
				<figcaption><span>14x17</span></figcaption>
			</figure>
			<figure class="medium">
				<div class="lazyload image" data-bg="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-drx/panel-straight.png"></div>
				<figcaption><span>17x17</span></figcaption>
			</figure>
			<figure class="large">
				<div class="lazyload image" data-bg="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-drx/retro-panel.png"></div>
				<figcaption><span>11.2x16.3</span></figcaption>
			</figure>
		</div>
		<div class="elements">
			<h3>Technology Options</h3>
			<div class="gadolinium">
				<div class="lazyload image" data-bg="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-drx/gadolinium.png"></div>
				<p>Gadolinium panels give you great image quality at an affordable price point.</p>
			</div>
			<div class="cesium">
				<div class="lazyload image" data-bg="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-drx/cesium.png"></div>
				<p>Cesium panels offer a low-dose imaging solution, while also providing high-quality images. </p>
			</div>
		</div>
		<div class="software">
			<h3>Software Options</h3>
			<figure class="evp">
				<figcaption>EVP Software</figcaption>
				<div class="image">
					<img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-drx/x-ray-bone.png" alt="" />
					<img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-drx/x-ray-skin.png" alt="" />
				</div>
				<p>Get EVP Software for an even better image with increase latitude and high contrast image detail.</p>
			</figure>
			<figure class="direct-view">
				<figcaption>Direct View</figcaption>
				<div class="image">
					<img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-drx/pacs-operator.jpg" alt="" />
					<img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-drx/pacs-shoulder.jpg" alt="" />
				</div>
				<p>With a design based on customer feedback, this system is loaded with capabilities to optimize your productivity and workflow. </p>
			</figure>
		</div>
	</div>
	<script>
	var optionsArrowOffset;
	var optionsImagesOffset;
	jQuery(document).ready(function($) {
		optionsArrowOffset = getPosition($('#drx__options .elements')[0]).y;
		optionsImagesOffset = getPosition(document.getElementById('drx__overview')).y;
		$(window).resize(function () {
			optionsArrowOffset = getPosition($('#drx__options .elements')[0]).y;
			optionsImagesOffset = getPosition(document.getElementById('drx__overview')).y;
		});
		var arrowsActivated = false;
		var imagesActivated = false;
		$(window).scroll(function (event) {
			if(getScrollTop() + window.innerHeight > optionsArrowOffset && !arrowsActivated) {
				$('#drx__options h4').addClass('active');
				arrowsActivated = true;
			} else if(getScrollTop() + window.innerHeight < optionsArrowOffset && arrowsActivated) {
				arrowsActivated = false;
				$('#drx__options h4').removeClass('active');
			}

			if(getScrollTop() + window.innerHeight > optionsImagesOffset && !imagesActivated) {
				$('#drx__options .software figure').addClass('active');
				imagesActivated = true;
			} else if(getScrollTop() + window.innerHeight < optionsImagesOffset && imagesActivated) {
				$('#drx__options .software figure').removeClass('active');
				imagesActivated = false;
			}
		})
	});
	</script>
</div>

<?php
	echo aray_player(
		'zAv2x-8maWU',
		'drx__overview',
		array(
			'background' => 'page-drx/overview.jpg'
		)
	);
?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/elements/page-drx.css">

<?php get_footer(); ?>
