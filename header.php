<?php
/**
 * Header file common to all
 * templates
 *
 */
?>
<!doctype html>
<html class="site no-js" <?php language_attributes(); ?>>
<head>
	<!--[if lt IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<script src="https://use.typekit.net/vjd4gab.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<title><?php wp_title(); ?></title>

	<?php // replace the no-js class to js on the html element ?>
	<script>document.documentElement.className=document.documentElement.className.replace(/\sno-js\s/,'js')</script>

	<?php // load the core js polyfills ?>
	<script async defer src="<?php echo get_template_directory_uri(); ?>/assets/js/core.js"></script>



	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ef7622">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>
<body <?php body_class( 'site__body ' . browser() ); ?>>

	<?php if( current_user_can( 'edit_posts' ) ) edit_post_link( 'Edit' ); ?>

	<header class="site__header">
		<input type="checkbox" id="menu_toggle">
		<a class="home-link" href="<?php echo get_bloginfo('url'); ?>">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="" />
			<?php PS_SVG('logo'); ?>
		</a>
		<label for="menu_toggle">
			<span id="line__top"></span>
			<span id="line__bottom"></span>
			<?php //PS_SVG('menu'); ?>
		</label>
		<?php Aray_Menu::nav_menu( 'primary', array('menu_class' => 'menu--primary menu') ); ?>
		<a id="call" href="tel:8669249729"><?php PS_SVG('phone'); ?><span>866.924.9729</span></a>
		<?php //get_search_form(); ?>
	</header>
