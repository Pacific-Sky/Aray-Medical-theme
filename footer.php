<?php
/**
 * Footer file common to all
 * templates
 *
 */
?>


<footer class="site__footer">
	<div class="wrapper">
		<div class="logo">
			<?php PS_SVG('logo'); ?>
		</div>
		<div class="cta">
			<p>Call us today to discuss the products and services we offer. We want to work with you to find the best solution for your medical facility. Our imaging professionals are ready for your call.</p>
			<a href="tel:8669249729">866.924.9729</a>
		</div>
		<div class="social">
			<a href="https://www.facebook.com/ArayMedicalImaging/"><?php PS_SVG('facebook'); ?></a>
			<a href="https://twitter.com/araymed"><?php PS_SVG('twitter'); ?></a>
			<a href="https://www.linkedin.com/company/17982445"><?php PS_SVG('linkedin'); ?></a>
		</div>
		<?php MOZ_Menu::nav_menu('footer'); ?>
	</div>
	<div class="colophon">
		<div class="wrapper">
			<div class="copyright">&copy; 2016-<?php echo date('Y'); ?> Aray Medical Imaging, Inc. All rights reserved.</div>
			<div class="credit">
				<span>Website created by</span>
				<img src="https://pacificsky.co/logo?tagline=yes" alt="Pacific Sky Creative, Inc.">
			</div>
		</div>
	</div>
</footer>



<?php wp_footer(); ?>

<?php // </body> opens in header.php ?>
</body>
</html>
