<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php if ( is_home() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo wp_title(''); echo ' | '; bloginfo( 'name' );
	} ?></title>
	<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<!--<meta name="viewport" content="width=device-width; user-scalable=no, initial-scale=1.0 minimum-scale=1.0, maximum-scale=1.0"/>-->
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>

	
	<!-- Carousel Styles -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/touchcarousel.css" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/js/touchcarousel/touchcarousel/black-and-white-skin/black-and-white-skin.css" />
	<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-1.7.1.js"></script>	
	<script src="<?php bloginfo( 'template_url' ); ?>/js/touchcarousel/jquery.touchcarousel-1.2.min.js"></script>
	
	<!-- Fancybox -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/fancybox/jquery.fancybox.pack.js"></script>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/theme.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	
</head>

<body <?php body_class(); ?>>

<div id="main"><!-- this encompasses the entire Web site -->

	<div id="header">
		<div class="container">
			<?php if ( ! dynamic_sidebar( 'Main' ) ) : ?><!--Wigitized Footer--><?php endif ?>
			<div id="nav-primary" class="nav"><nav>
				<?php wp_nav_menu( array('theme_location' => 'header-menu' )); /* editable within the Wordpress backend */ ?>
			</nav></div><!--#nav-primary-->
		</div><!-- .container -->
	</div><!--#header-->
	
	<div class="container">