<section id="weight-management">

	<div class="wrap">

		<header>

			<h2>Weight Management</h2>

			<div>

				<?php the_field('weight_mgmt_overview'); ?>

			</div>

		</header>

		<div class="container">

			<?php

				$posts = get_field('weight_management_tips');

				if( $posts ): ?>

				<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

				<?php setup_postdata($post); ?>

				<div class="tip">

					<img src="<?php the_field('weight_mgmt_tip_image'); ?>" alt="" />

					<h3><?php the_title(); ?></h3>

					<p><?php the_field('weight_mgmt_tip_description'); ?></p>

				</div>

				<?php endforeach; ?>

				<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

			<?php endif; ?>

		</div>

	</div>

</section>