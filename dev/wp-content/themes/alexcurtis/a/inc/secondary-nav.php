<div class="secondary-nav">

	<div class="toggle">

		<h3>Navigation</h3>

	</div>

	<div class="container">

		<nav role="navigation">

			<?php $defaults = array(

				'theme_location'  => 'primary',
				'menu'            => '',
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul>%3$s</ul>',
				'depth'           => 1,
				'walker'          => ''

			); ?>

			<?php wp_nav_menu( $defaults ); ?>

		</nav>

	</div>

</div>