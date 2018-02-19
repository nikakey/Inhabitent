<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function inhabitent_login_url( $url ) {
	// Get and set the link to the website on the login screen
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'inhabitent_login_url' );

function inhabitent_login_page() {
	//Set the logo website img on the login screen
	echo '<style type="text/css">                                                                   
		.message {
			border-left: 4px solid #248A83 !important;
		}
		.login h1 a { 
			background-image: url('.get_stylesheet_directory_uri().'/images/logos/inhabitent-logo-text-dark.svg) !important;
			background-size: 300px !important; 
			height: 60px !important; 
			width: 320px !important; 
		} 
		.button-primary {
			background: #248A83 !important;
		}
	</style>';
}
add_action('login_head', 'inhabitent_login_page');

//Changes the login title

function inhabitent_login_title(){
	return 'Inhabitent';
}
add_filter('login_headertitle', 'inhabitent_login_title');
