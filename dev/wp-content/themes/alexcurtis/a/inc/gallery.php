<div id="gallery">





	<?php

		/* get projects */

		$args = array(

			'numberposts'	=> -1,
			'post_type'	=> 'photos',
			'orderby'		=> 'menu_order',
			'post_status'	=> 'publish'

		);

		$items = get_posts($args);

	?>

	<?php

		/* Individual Projects */

	?>

	<?php foreach($items as $item): ?>

		<?php

			/* Full Size Photo */

			$full = wp_get_attachment_image_src( get_field('photo_image', $item->ID), 'full');

			$full = $full[0];

			/* Thumbnail Image */

			$photo_thumbnail = wp_get_attachment_image_src( get_field('photo_image', $item->ID), 'photo_thumbnail');

			$photo_thumbnail = $photo_thumbnail[0];

			$photo_description = get_field('photo_description', $item->ID);

		?>

		<div class="thumbnail">

			<a class="fancybox" href="<?php echo $full; ?>">

				<img src="<?php echo $photo_thumbnail; ?>" alt="<?php echo $photo_description; ?>" />

				<div class="zoom">

					<span>View this image</span>

				</div>

			</a>

		</div>

	<?php endforeach; ?>







	<?php /* <div class="thumbnail">

		<a href="">

			<img src="http://placeimg.com/400/400/arch" alt="" />

			<div class="zoom">

				<span>View this image</span>

			</div>

		</a>

	</div> */ ?>

	<div class="thumbnail"></div>

	<div class="thumbnail"></div>

	<div class="thumbnail"></div>

</div>