<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<!-- FONTS --><!-- TODO: Is this the best way to do this? --> 
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<!-- Scalable Vector Icons from Font Awesome -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<!-- JAVASCRIPT -->
<script src="<?php echo get_template_directory_uri(); ?>/js/search.js" type="text/javascript"></script>

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="bodyWrapper">

<div id="top">
	<div id="top-left" class="top-content">
		<?php
		if (is_user_logged_in()) :
			$current_user = wp_get_current_user();
			echo "Hi ".$current_user->user_firstname."! ";
		endif; ?>
		
		<?php
		$path = get_template_directory_uri();
		$path = $path."/resources/text/topannouncement.txt";
		$f = fopen($path,"r");

		// Read line from the text file and write the contents to the client
		while(!feof($f)) { 
	    	echo fgets($f) . "<br />";
		} 

		fclose($f);

		?>
	</div>

	<div id="top-right" class="top-content">

		<div id="toprightIconsWrapper">
			<a href="<?php echo esc_url(home_url('/my-account')); ?>" title="My Account" class="headerIcon"><i class="icon-user icon-2x"></i></a>
			<div id="headerSpacer"><i class="icon-ellipsis-vertical icon-2x"></i></div>
			<a href="<?php echo esc_url(home_url('/cart')); ?>" title="View Cart" class="headerIcon"><i class="icon-shopping-cart icon-2x"></i></a>

			<?php if (is_user_logged_in()) : ?>
				<div id="headerSpacer"><i class="icon-ellipsis-vertical icon-2x"></i></div>
				<a href="<?php echo esc_url(home_url('/cart/logout')); ?>" title="Logout" class="headerIcon"><i class="icon-off icon-2x"></i></a>
			<?php endif; ?>
		</div>
		
	</div>

</div>

<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div id="header-image-wrapper">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/resources/images/header.jpg" id="header-image" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
		</div>

		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			<div id="togglesearchWrapper">
				<i id="navtogglesearch" class="icon-search icon" onclick="ToggleSearch()"></i>
				
			</div>
		</nav><!-- #site-navigation -->

		<div id="searchformWrapper">
			<?php get_search_form(); ?>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">