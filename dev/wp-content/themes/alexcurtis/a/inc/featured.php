<div id="featured">

	<div class="wrap">

		<div class="flexslider">

			<ul class="slides">

				<?php

					$posts = get_field('featured_slides');

					if( $posts ): ?>

						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

						<?php setup_postdata($post); ?>

						<?php

							$attachment_id = get_field('slide_image');

							$full = "full";
							$large = "slide_large";
							$medium = "slide_medium";
							$small = "slide_small";

							// Full Size

							$slide_full = wp_get_attachment_image_src( $attachment_id, $full );

							// Large

							$slide_large = wp_get_attachment_image_src( $attachment_id, $large );

							// Medium

							$slide_medium = wp_get_attachment_image_src( $attachment_id, $medium );

							// Small

							$slide_small = wp_get_attachment_image_src( $attachment_id, $small );

						?>

				    	<li>

							<span data-picture data-alt="<?php the_field('slide_description'); ?>">

								<!-- 400 x 300 -->

								<span data-src="<?php echo $slide_small[0]; ?>"></span>

								<!-- 640 x 480 -->

								<span data-src="<?php echo $slide_medium[0]; ?>" data-media="(min-width: 400px)"></span>

								<!-- 800 x 575 -->

								<span data-src="<?php echo $slide_large[0]; ?>" data-media="(min-width: 640px)"></span>

								<!-- 1400 x 575 -->

								<span data-src="<?php echo $slide_full[0]; ?>" data-media="(min-width: 800px)"></span>

								<!--[if (lt IE 9) & (!IEMobile)]>

									<span data-src="<?php echo $slide_full[0]; ?>"></span>

								<![endif]-->

								<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->

								<noscript>

									<img src="<?php echo $slide_small[0]; ?>" alt="<?php the_field('slide_description'); ?>" />

								</noscript>

							</span>

	    				</li>

						<?php endforeach; ?>

					<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

				<?php endif; ?>

			</ul>

		</div>

	</div>

</div>