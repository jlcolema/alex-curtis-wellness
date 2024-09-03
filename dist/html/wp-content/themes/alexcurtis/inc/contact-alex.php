<div class="contact-alex">

	<div class="toggle">

		<h3>Contact Alex</h3>

	</div>

	<div class="container">

		<div class="teaser">

			<?php the_field('contact_info_teaser', 'option'); ?>

		</div>

		<p>

			<b>Contact Alex today to get started:</b>

		</p>

		<div class="vcard">

			<div class="fn n org"><?php bloginfo('name'); ?></div>

			<div class="adr">

				<span class="locality"><?php the_field('contact_info_city', 'option'); ?></span>,

				<span class="region"><?php the_field('contact_info_state', 'option'); ?></span>

			</div>

			<div class="tel"><?php the_field('contact_info_phone', 'option'); ?></div>

			<a class="email" href="mailto:<?php the_field('contact_info_email', 'option'); ?>"><?php the_field('contact_info_email', 'option'); ?></a>

		</div>

	</div>

</div>