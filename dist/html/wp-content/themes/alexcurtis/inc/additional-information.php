<div class="additional-information">

	<div class="toggle">

		<h3>Additional Information</h3>

	</div>

	<div class="container">

		<ul>

			<?php while(has_sub_field('additional_info', 'option')): ?>

			<li>

				<?php the_sub_field('additional_info_tip'); ?>

			</li>

			<?php endwhile; ?>

		</ul>

	</div>

</div>