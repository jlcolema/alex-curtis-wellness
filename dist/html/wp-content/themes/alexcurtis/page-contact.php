<?php get_header(); ?>

	<div id="content">

		<div class="wrap">

			<div id="main" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<div class="featured-image">

						<img src="<?php the_field('featured_image'); ?>" alt="" />

					</div>

					<?php the_content(); ?>

				<?php endwhile; endif; ?>

				<div class="form">

					<?php gravity_form(

						// $id_or_title

						"Contact",

						// $display_title

						false,

						// $display_description

						true,

						// $display inactive

						false,

						// $field_values

						null,

						// $ajax

						false,

						// $tabindex

						1

					); ?>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>