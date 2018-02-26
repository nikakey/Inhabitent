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
		<script type="text/javascript">
			function toggle_search_form() {
				let div = document.getElementById("search_form_div");
				if(div.style.display == 'none') {
					div.style.display = 'inline-block';
					div.getElementsByClassName("search-field")[0].focus();
				}
				else
				{
					div.style.display = 'none';
				}
			}
		</script>
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
							<div class="logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img src="<?php bloginfo('template_url'); ?>/images/logos/inhabitent-logo-tent.svg" alt="Inhabitent Logo">
								</a>
							</div>
						</div><!-- .site-branding -->

						<nav id="site-navigation" class="main-navigation" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							
							<div><button class="toggle-search" onClick="toggle_search_form()"> </button> 
								<div id="search_form_div" style="display:none;"> 
									<?php get_search_form(); ?>
								</div>
							</div>
						</nav><!-- #site-navigation -->
						
					</div><!-- .header-container -->
				</header><!-- #masthead -->
				<div id="content" class="site-content">
