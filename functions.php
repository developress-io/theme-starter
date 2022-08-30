<?php
require_once 'inc/classes/class-theme.php';
require_once 'inc/helpers/svg.php';
new Theme();

// Menus
register_nav_menus(
	[
		'main-menu' => __( 'My Custom Main Menu' ),
		'footer-menu' => __( 'My Custom Footer Menu' ),
	]
);

// Add image sizes
add_image_size('small_image', 500, 250, true);

// Add featured image support
function addThumbnail() {

	add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'addThumbnail');



// Team Members
function team_members()
{

	$args  = array(

		'labels'  => array(
			'name' => 'Members',
			'singular_name' => 'Member',
		),
		'hierarchical' => true,
		'public' =>  true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-businessperson',
		'support' => array('title', 'editor', 'thumbnail'),

	);

	register_post_type('Members', $args);

}
add_action('init', 'team_members');

// Taxonomy
function department_taxonomy()
{

	$args = array(
		'labels' => array(
			'name' => 'Departments',
			'singular_name' => 'Department',
		),
		'public' => true,
		'hierarchical' => true,
	);
	register_taxonomy( 'Departments', array( 'members' ), $args);
}

	add_action( 'init', 'department_taxonomy' );

// Filter excerpt length
add_filter('excerpt_length', 'custom_excerpt_length');
function custom_excerpt_length( $length ) {
	$length = 30;
	return $length;
}

// Action secret page
add_action('template_redirect', 'members_only');
function members_only() {
	do_action('user_redirected', date("F j, Y, g:i a"));
	if( is_page('secret') && ! is_user_logged_in() ) {
		wp_redirect( home_url() );
		die();
	}
}

add_action('user_redirected', 'log_when_accessed');
function log_when_accessed( $date ) {

	$access_log = get_stylesheet_directory() . '/access_log.txt';
	$message = 'someone has just tried to access the secret page on ' . $date;

	if ( file_exists ( $access_log)) {
		$file = fopen ( $access_log, 'a');
		fwrite($file, $message."\n");

	} else {

		$file = fopen( $access_log, 'w' );
		fwrite( $file, $message."\n");
	}

	fclose($file);

}
