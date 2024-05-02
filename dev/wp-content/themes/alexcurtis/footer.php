	<div id="pre-footer">

		<div class="wrap">

			<?php

				/* Secondary Navigation */

			?>

			<?php include (TEMPLATEPATH . "/a/inc/secondary-nav.php" ); ?>

			<?php

				/* Additional Information */

			?>

			<?php include (TEMPLATEPATH . "/a/inc/additional-information.php" ); ?>

			<?php

				/* Contact Alex */

			?>

			<?php include (TEMPLATEPATH . "/a/inc/contact-alex.php" ); ?>

		</div>

	</div>

	<footer id="footer" role="contentinfo">

		<div class="wrap">

			<?php

				/* Copyright */

			?>

			<p id="copyright">&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>, All rights reserved.</p>

			<?php

				/* Created By */

			?>

			<div id="created-by">

				<a href="http://www.techyscouts.com" rel="external">A Techy Scouts Creation</a>

			</div>

		</div>

	</footer>

	<?php wp_footer(); ?>

	<?php

		/* Plugins */

	?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/matchmedia.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/picturefill.js"></script>

	<?php if ( is_page( 'home' ) ) { ?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/flexslider.js"></script>

	<?php } ?>

	<?php if ( is_page( 'photos' ) ) { ?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/fancybox.js"></script>

	<?php } ?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/lettering.js"></script>

	<?php

		/* Functions */

	?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/functions.js"></script>

	<?php

		/* Analytics */

	?>

	<?php if(the_field('google_analytics', 'option')): ?>

		<!--

		Asynchronous google analytics; this is the official snippet.

		Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.

		-->

		<script>

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', '<?php the_field('google_analytics', 'option'); ?>']);
			_gaq.push(['_trackPageview']);

			(function() {

				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

			})();

		</script>

	<?php endif; ?>

</body>

</html>