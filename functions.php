<?php
/**
 * Theme Functions &
 * Functionality
 *
 */


/* =========================================
		ACTION HOOKS & FILTERS
   ========================================= */

/**--- Actions ---**/

add_action( 'after_setup_theme',  'theme_setup' );

add_action( 'wp_enqueue_scripts', 'theme_styles' );

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// expose php variables to js. just uncomment line
// below and see function theme_scripts_localize
// add_action( 'wp_enqueue_scripts', 'theme_scripts_localize', 20 );

/**--- Filters ---**/



/* =========================================
		HOOKED Functions
   ========================================= */

/**--- Actions ---**/


/**
 * Setup the theme
 *
 * @since 1.0
 */
if ( ! function_exists( 'theme_setup' ) ) {
	function theme_setup() {

		// Let wp know we want to use html5 for content
		add_theme_support( 'html5', array(
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption'
		) );


		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'woocommerce' );


		// Register navigation menus for theme
		register_nav_menus( array(
			'primary' => 'Main Menu',
			'footer' => 'Footer Menu'
		) );



		// Let wp know we are going to handle styling galleries
		/*
		add_filter( 'use_default_gallery_style', '__return_false' );
		*/


		// Stop WP from printing emoji service on the front
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );


		// Remove toolbar for all users in front end
		show_admin_bar( false );


		// Add Custom Image Sizes
		/*
		add_image_size( 'ExampleImageSize', 1200, 450, true ); // Example Image Size
		...
		*/


		// WPML configuration
		// disable plugin from printing styles and js
		// we are going to handle all that ourselves.
		define( 'ICL_DONT_LOAD_NAVIGATION_CSS', true );
		define( 'ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true );
		define( 'ICL_DONT_LOAD_LANGUAGES_JS', true );


		// Register Autoloaders Loader
		$theme_dir = get_template_directory();
		include "$theme_dir/library/library-loader.php";
		include "$theme_dir/includes/includes-loader.php";
		include "$theme_dir/components/components-loader.php";

		include "$theme_dir/library/class-walker-nav-menu-aray.php";
	}
}


/**
 * Register and/or Enqueue
 * Styles for the theme
 *
 * @since 1.0
 */
if ( ! function_exists( 'theme_styles' ) ) {
	function theme_styles() {
		$theme_dir = get_stylesheet_directory_uri();

		wp_enqueue_style( 'main', "$theme_dir/assets/css/main.css", array(), null, 'all' );
	}
}


/**
 * Register and/or Enqueue
 * Scripts for the theme
 *
 * @since 1.0
 */
if ( ! function_exists( 'theme_scripts' ) ) {
	function theme_scripts() {
		$theme_dir = get_stylesheet_directory_uri();

		wp_enqueue_script( 'main', "$theme_dir/assets/js/main.js", array( 'jquery' ), null, true );
	}
}


/**
 * Attach variables we want
 * to expose to our JS
 *
 * @since 3.12.0
 */
if ( ! function_exists( 'theme_scripts_localize' ) ) {
	function theme_scripts_localize() {
		$ajax_url_params = array();

		// You can remove this block if you don't use WPML
		if ( function_exists( 'wpml_object_id' ) ) {
			/** @var $sitepress SitePress */
			global $sitepress;

			$current_lang = $sitepress->get_current_language();
			wp_localize_script( 'main', 'i18n', array(
				'lang' => $current_lang
			) );

			$ajax_url_params['lang'] = $current_lang;
		}

		wp_localize_script( 'main', 'urls', array(
			'home'  => home_url(),
			'theme' => get_stylesheet_directory_uri(),
			'ajax'  => add_query_arg( $ajax_url_params, admin_url( 'admin-ajax.php' ) )
		) );
	}
}


function aray_block_partners() {
	ob_start();
	?>
	<div id="partners" style="display: none">
		<div class="wrapper wrapper--small">
			<h2>Clinical Partners</h2>
			<p style="display: none">With high resolution isotropic image capture, and high-resolution 3D images that can help to reveal subtle or occult fractures, you’ll get better results and faster diagnosis. Plus, our advanced metal and scatter correction algorithms are the best in the industry. </p>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/john-hopkins-university-logo.png" alt="">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ubmd-logo.png" alt="">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hus-logo.png" alt="">
		</div>
	</div>
	<?php return ob_get_clean();
}

function aray_block_order() {
	ob_start();
	?>
	<div id="cta">
		<div class="wrapper wrapper--small">
			<h2>Ordering is Simple!</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis quos omnis cumque tempore rerum placeat consequuntur delectus exercitationem aspernatur cupiditate.</p>
			<div class="steps">
				<figure>
					<i><span>1</span></i>
					<figcaption>Click Order Now</figcaption>
				</figure>
				<figure>
					<i><span>2</span></i>
					<figcaption>Fill out our fast and simple request form</figcaption>
				</figure>
				<figure>
					<i><span>3</span></i>
					<figcaption>Order is processed!</figcaption>
				</figure>
			</div>
			<button>Order Now</button>
		</div>
	</div>
	<?php return ob_get_clean();
}

function youtube_title($youtube_id) {
	$title = '';
	// return 'Youtube title';
	// https://webtoolsplus.com/get-youtube-title-and-description-from-php/
	$videoid = $youtube_id;
	$apikey = 'AIzaSyDQ1lLfSbuWBin_L0GXXYAi-k1EApfAJes';

	$json = file_get_contents('https://www.googleapis.com/youtube/v3/videos?id='.$videoid.'&key='.$apikey.'&part=snippet');
	$ytdata = json_decode($json);

	$title =  $ytdata->items[0]->snippet->title;

	$title = str_replace(array(
		'DRX',
		'Excel Plus',
		'Revolution',
		'Evolution',
		'Onsight',
		'- -',
		'- '
	),'', $title);

	return $title;
}

function aray_player($youtube_id, $id, $options = array()) {
	if(!isset($options['related'])) $options['related'] = array();
	if(!isset($options['title'])) $options['title'] = 'Watch the Overview';
	ob_start();
	?>
	<div id="<?php echo $id; ?>" class="lazyload overview-video" <?php if($options['background']) echo "data-bgset=\"" . responsive_image($options['background']) . "\""; ?>>
		<h2><?php echo $options['title']; ?></h2>
		<a id="play-<?php echo $youtube_id; ?>" href="https://www.youtube.com/watch?v=<?php echo $youtube_id; ?>" target="_blank"><?php PS_SVG('play'); ?></a>
		<div id="iframe-<?php echo $youtube_id; ?>"></div>
		<script>
		var player;
		var tag = document.createElement('script');
		var firstScriptTag = document.getElementsByTagName('script')[0];
		tag.src = 'https://www.youtube.com/iframe_api';
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
		function onYouTubeIframeAPIReady () {
			player = new YT.Player('iframe-<?php echo $youtube_id; ?>', {
				height: '390',
				width: '640',
				videoId: '<?php echo $youtube_id; ?>',
				events: {
					'onReady': function (event) {},
					'onStateChange': function (event) {
						if(event.data === YT.PlayerState.ENDED) {
							jQuery('#iframe-<?php echo $youtube_id; ?>').removeClass('visible');
							jQuery('#<?php echo $id; ?> svg').removeClass('expanded');
						}
					}
				}
			});
		}
		jQuery(document).ready(function($) {
			$('#play-<?php echo $youtube_id; ?>').on('click', function (event) {
				event.preventDefault();
				player.loadVideoById('<?php echo $youtube_id; ?>');
				$('#iframe-<?php echo $youtube_id; ?>').addClass('visible');
				$('#<?php echo $id; ?> svg').addClass('expanded');
				player.playVideo();
			});
		});
		</script>
	</div>
	<?php if(count($options['related']) > 0): ?>
		<div class="related-videos <?php if(count($options['related']) > 3) echo 'videos--hidden'; ?>">
			<div class="wrapper">
				<h2>View More Demos</h2>
				<?php foreach($options['related'] as $index => $video): ?>
					<figure class="video" id="yt-<?php echo $video; ?>">
						<div class="lazyload image" data-bg="<?php echo "https://img.youtube.com/vi/{$video}/0.jpg"; ?>"></div>
						<figcaption><?php echo youtube_title($video); ?></figcaption>
					</figure>
					<?php if($index === 2 && count($options['related']) > 3): ?>
						<div class="show-more"></div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
		<script>
		jQuery(document).ready(function($) {
			$('.related-videos .show-more').on('click', function (event) {
				$(event.target).parents('.related-videos').toggleClass('videos--hidden').toggleClass('videos--visible');
			});
			$('.related-videos .video')
				.mouseenter(function (event) {
					if(!$('#iframe-<?php echo $youtube_id; ?>').hasClass('visible')) {
						var image = $(event.currentTarget).find('.image').css('background-image');
						var text = $(event.currentTarget).find('figcaption').text();
						//.match(/background-image: url\(\'([\w:\/\.]+)\'\)/)[1]; //'
						$('#yt-<?php echo $id; ?>').css('background-image', image);
						$('#yt-<?php echo $id; ?> h2').text(text);
					}
				})
				.mouseleave(function (event) {
					$('yt-#<?php echo $id; ?>').css('background-image', '');
					$('yt-#<?php echo $id; ?> h2').text('<?php echo $options['title'] ?>');
				})
				.click(function (event) {
					player.loadVideoById(event.currentTarget.id.replace('yt-', ''));
					$('#iframe-<?php echo $youtube_id; ?>').addClass('visible');
					$('yt-#<?php echo $id; ?> svg').addClass('expanded');
					$('yt-#<?php echo $id; ?>').css('background-image', '');
					$('yt-#<?php echo $id; ?> h2').text('<?php echo $options['title'] ?>');
				});
		});
		</script>
	<?php endif; ?>
	<?php return ob_get_clean();
}


function browser() {
	if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
   return 'ie';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) //For Supporting IE 11
    return 'ie';
	elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') !== FALSE) //For Supporting IE 11
	   return 'edge';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE)
   return 'firefox';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
   return 'chrome';
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE)
   return "opera";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE)
   return "opera";
 elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE)
   return "safari";
 else
   return 'unknown-browser';
}

function insert_head($content) {
	global $head_additions;
	$head_additions .= $content;
}

function aray_head() {
	global $head_additions;
	echo $head_additions;
}


function responsive_image($path) {
	$sizes = array(
		'mobile' => 480,
		'tablet' => 768,
		'laptop' => 960,
		'desktop' => 1200
	);
	preg_match('/(.+)\.(\w+)$/', $path, $parts);
	$base_path = get_stylesheet_directory() . '/assets/img/' . $parts[1];
	$base_uri = get_stylesheet_directory_uri() . '/assets/img/' . $parts[1];
	$extension = $parts[2];
	$return_str = '';
	foreach($sizes as $size => $dimension) {
		if($size === 'mobile') {
			$size = '';
		} else {
			$size = "--{$size}";
		}

		if(file_exists($base_path . $size . '.' . $extension)) {
			$return_str .= "{$base_uri}{$size}.{$extension} {$dimension}w, ";
		}
	}
	return $return_str;
}


function PS_SVG ($path) {
	// Helper function to replace responsive images
	$svg = MOZ_SVG::get_svg($path);
	$svg = str_replace('ROOT_URL', get_bloginfo('url'), $svg);
	preg_match('/data-responsive="(.+)"/', $svg, $php);
	if(isset($php[1])) {
		$image = responsive_image($php[1]);
		$svg = str_replace(
			$php[0],
			"data-srcset=\"{$image}\" data-sizes=\"auto\"",
			$svg
		);
	}
	echo $svg;
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'aray_woocommerce_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'aray_woocommerce_wrapper_end', 10);

function aray_woocommerce_wrapper_start() {
  echo '<main>';
}

function aray_woocommerce_wrapper_end() {
  echo '</main>';
}

function aray_woocommerce_shop_query($query) {
	global $wp_query;
	// var_dump($wp_query);
	$shop_page_id = (int) get_option('woocommerce_shop_page_id');
	if(
		$shop_page_id !== $query->queried_object_id
		&& $query->queried_object->taxonomy !== 'product_cat')
		return;
	if(!$query->is_main_query())
		return;
	$wp_query = new WP_Query(array(
		'post_type' => 'product',
		'posts_per_page' => 12,
		'paged' => $wp_query->query_vars['paged']
	));
	remove_all_actions ( '__after_loop');
}
add_action('pre_get_posts', 'aray_woocommerce_shop_query');

if(!$_SESSION['development']) {
	require 'vendor/plugin-update-checker/plugin-update-checker.php';
	Puc_v4_Factory::buildUpdateChecker(
		'https://pacificsky.co/themes/' . get_option('stylesheet') . '.json',
		__FILE__,
		get_option('stylesheet')
	);
}
