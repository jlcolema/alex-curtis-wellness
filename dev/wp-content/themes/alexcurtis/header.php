<!doctype html>

<!--[if lt IE 7 ]>

	<html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 7 ]>

	<html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8 ]>

	<html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 9 ]>

	<html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>>

<![endif]-->

<!--[if gt IE 9]><!-->

	<html class="no-js" <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<!--[if IE]>

		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />

	<![endif]-->

	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta name="author" content="<?php wp_title(''); ?>">

	<meta name="apple-mobile-web-app-title" content="Alex Curtis">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<?php if(the_field('google_analytics', 'option')): ?>

	<meta name="google-site-verification" content="<?php the_field('google_site_verification', 'option'); ?>">

	<?php endif; ?>

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/a/img/favicon.png">

	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_directory'); ?>/a/img/touch-icon.png">

	<link type="text/css" href="<?php bloginfo('template_directory'); ?>/a/css/screen.css" rel="stylesheet" media="screen, projection" />

	<link type="text/css" href="<?php bloginfo('template_directory'); ?>/a/css/print.css" rel="stylesheet" media="print" />

	<link type="text/css" href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Bitter|Bree+Serif' rel="stylesheet" />

	<script src="<?php bloginfo('template_directory'); ?>/a/js/modernizr.js"></script>

	<meta name="twitter:card" content="">
	<meta name="twitter:site" content="<?php bloginfo('name'); ?>">
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
	<meta name="twitter:url" content="">

	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/a/img/facebook.png" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_id(); ?> <?php body_class('loading'); ?>>

	<header id="header" role="banner">

		<div class="wrap">

			<div id="logo">

				<a href="<?php echo get_option('home'); ?>/">

					<img src="<?php bloginfo('template_directory'); ?>/a/img/logo.png" alt="<?php bloginfo('name'); ?>" />

					<div>

						<?php bloginfo('name'); ?>

					</div>

				</a>

			</div>

			<nav id="nav" role="navigation">

				<div class="toggle">Menu</div>

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

	</header>

	<div id="mission">

		<div class="wrap">

			<div class="statement">

				<?php the_field('mission_statement', 'option'); ?>

			</div>

			<div class="social">

				<ul>

					<li class="facebook">

						<a href="<?php the_field('facebook', 'option'); ?>" rel="external">Facebook</a>

					</li>

					<li class="twitter">

						<a href="<?php the_field('twitter', 'option'); ?>" rel="external">Twitter</a>

					</li>

				</ul>

			</div>

		</div>

	</div>