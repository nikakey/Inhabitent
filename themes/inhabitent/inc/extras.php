<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

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

// Get img for the About Page

function inhabitent_change_header(){
	if(!is_page_template('page-template/about.php')){
		return;
	}

	$img_header_url = CFS()->get('header_image');
	if(! $img_header_url){
		return;
	}
	$custom_css = "
	.header-about {
			background: linear-gradient(hsla(0, 0%, 0%, 0.4), hsla(0, 0%, 0%, 0.4)), url('{$img_header_url}') no-repeat center bottom;
			background-size: cover, 100%;
			width: 100%;
    		height: 100vh;
    		display: flex;
    		align-items: center;
			justify-content: center;
			color: #fff;
	}";
wp_add_inline_style( 'inhabitent-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_change_header' );