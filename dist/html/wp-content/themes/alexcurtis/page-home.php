<?php get_header(); ?>

	<?php

		/* Featured Slides */

	?>

	<?php include (TEMPLATEPATH . "/a/inc/featured.php" ); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<h1><?php the_field('opening_message_title'); ?></h1>

				<div>

					<?php the_field('opening_message_content'); ?>

				</div>

				<div class="more">

					<a href="<?php the_field('opening_message_link'); ?>">Learn More</a>

				</div>

			</div>

		</div>

	</div>

	<?php

		/* Links */

	?>

	<?php include (TEMPLATEPATH . "/a/inc/links.php" ); ?>

	<?php

		/* Testimonials */

	?>

	<?php include (TEMPLATEPATH . "/a/inc/testimonials.php" ); ?>

<?php get_footer(); ?>