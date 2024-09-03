<section id="testimonials">

	<div class="wrap">

		<header>

			<h2>Testimonials</h2>

		</header>

		<div class="container">

			<div class="flexslider">

				<ul class="slides">

					<?php

						$posts = get_field('testimonials');

						if( $posts ): ?>

						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

						<?php setup_postdata($post); ?>

						<li>

							<div class="inner-wrap">

								<img src="<?php the_field('testimonial_thumbnail'); ?>" alt="<?php the_title(); ?>" />

								<blockquote>

									<div>

										<?php the_field('testimonial_quote'); ?>

									</div>

									<cite>

										<?php the_title(); ?>, <span class="age"><?php the_field('testimonial_age'); ?></span>

									</cite>

								</blockquote>

							</div>

						</li>

						<?php endforeach; ?>

						<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

					<?php endif; ?>

				</ul>

			</div>

		</div>

	</div>

</section>