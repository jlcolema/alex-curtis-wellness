<section id="links">

	<div class="wrap">

		<header>

			<h2>Take a Tour</h2>

		</header>

		<div class="container">

			<?php

				$posts = get_field('links');

			if( $posts ): ?>

				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

				<?php setup_postdata($post); ?>

				<div class="link">

					<a href="<?php the_field('link_page'); ?>">

						<img src="<?php the_field('link_image'); ?>" alt="" />

						<h3><?php the_title(); ?></h3>

						<p><?php the_field('link_description'); ?></p>

					</a>

				</div>

				<?php endforeach; ?>

				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

			<?php endif; ?>

		</div>

	</div>

</section>