<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="maincontentcontainer">
 *
 * @package Quark
 * @since Quark 1.0
 */
?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->


<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta http-equiv="cleartype" content="on">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="wrapper" class="hfeed site">

		<div class="visuallyhidden skip-link"><a href="#primary" title="<?php esc_attr_e( 'Skip to main content', 'quark' ); ?>"><?php esc_html_e( 'Skip to main content', 'quark' ); ?></a></div>

		<div id="headercontainer">

			<header id="masthead" class="site-header" role="banner">
				<div class="row">
					<div class="site-title col grid_12_of_12">
						<h1>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
								<?php 
								$headerImg = get_header_image();
								if( !empty( $headerImg ) ) { ?>
								<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
								<?php } 
								else {
									echo get_bloginfo( 'name' );
								} ?>
							</a>
						</h1>
					</div> <!-- .site-title -->

					<div class="header-contact-widget-wrapper">	
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Header Contact Widget") ) : ?>
						<?php endif;?>
					</div>
				</div>

				<div class="row">
					<nav id="site-navigation" class="main-navigation col grid_12_of_12" role="navigation">
						<h3 class="menu-toggle assistive-text"><?php esc_html_e( 'Menu', 'quark' ); ?></h3>
						<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'quark' ); ?>"><?php esc_html_e( 'Skip to content', 'quark' ); ?></a></div>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					</nav> <!-- /.site-navigation.main-navigation -->
				</div>

				<!-- Place this in the footer callout -->
				<!-- <div class="social-media-icons"> -->
				<?php // echo quark_get_social_media(); ?>
				<!-- </div> -->
			</header> <!-- /#masthead.site-header.row -->

		</div> <!-- /#headercontainer -->

		<div id="bannercontainer" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
			<div class="banner row">
				<h1 class="banner__title">
					<?php 
						if (get_field('header_title')): 
							echo the_field('header_title');	
						else: 
							echo the_title();
						endif
					?>
				</h1>
				
				<?php if (get_field('header_tagline')): ?>
				<p class="banner__tagline">
					<?php echo the_field('header_tagline') ?> 

					<?php if ( is_front_page() ) : ?>
						<a class="banner__contact" href="#">Contact Us Today</a>
					<?php endif; ?>
				</p>
				<?php endif ?>
			</div> <!-- /.banner.row -->
		</div> <!-- /#bannercontainer -->

		<div id="maincontentcontainer">
			<?php	do_action( 'quark_before_woocommerce' ); ?>