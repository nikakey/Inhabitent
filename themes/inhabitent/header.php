<?php
/**
 * The header for the Inhabitent Theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
			<div id="page" class="hfeed site">
				<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

				<header id="masthead" class="site-header" role="banner">
					<div class="header-container">
						<div class="site-branding">
							<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<p class="site-description"><?php bloginfo( 'description' ); ?></p>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<div class="logo"></div>
							</a>
						</div><!-- .site-branding -->

						<nav id="site-navigation" class="main-navigation" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							<a href="#" class="search-link">
								<i class="fa fa-search toggle-search" onClick="toggleSearchForm()"></i>
							</a>
							<?php get_search_form(); ?>
						</nav><!-- #site-navigation -->
						
					</div><!-- .header-container -->
				</header><!-- #masthead -->
				<div id="content" class="site-content">
