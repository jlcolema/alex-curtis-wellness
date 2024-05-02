<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

				<?php endwhile; endif; ?>

				<?php

					/* Gallery */

				?>

				<?php include (TEMPLATEPATH . "/a/inc/gallery.php" ); ?>

			</div>

		</div>

	</div>

<?php get_footer(); ?>