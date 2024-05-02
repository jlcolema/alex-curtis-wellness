<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<div class="featured-image">

						<img src="<?php the_field('featured_image'); ?>" alt="" />

					</div>

					<div class="content">

						<?php the_content(); ?>

					</div>

					<aside class="secondary" role="complementary">

						<h3><?php the_field('aside_header'); ?></h3>

						<div>

							<?php the_field('aside_content'); ?>

						</div>

					</aside>

				<?php endwhile; endif; ?>

			</div>

		</div>

	</div>

	<?php

		/* Services */

	?>

	<?php include (TEMPLATEPATH . "/a/inc/services.php" ); ?>

<?php get_footer(); ?>