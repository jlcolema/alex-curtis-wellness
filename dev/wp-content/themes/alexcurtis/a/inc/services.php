<section id="services">

	<div class="wrap">

		<header>

			<h2>Services Offered</h2>

		</header>

		<div class="container">

			<?php

				$posts = get_field('services');

			if( $posts ): ?>

				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

				<?php setup_postdata($post); ?>

				<div class="service">

					<img src="<?php the_field('service_image'); ?>" alt="" />

					<h3><?php the_title(); ?></h3>

				</div>

				<?php endforeach; ?>

				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

			<?php endif; ?>

			<div class="service gap"></div>

			<div class="service gap"></div>

			<div class="service gap"></div>

		</div>

	</div>

</section>