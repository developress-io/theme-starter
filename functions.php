<?php
require_once 'inc/classes/class-theme.php';
require_once 'inc/helpers/svg.php';


// Menus
register_nav_menus(
	[
		'main-menu' => __( 'My Custom Main Menu' ),
		'footer-menu' => __( 'My Custom Footer Menu' ),
    ]
);

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

new Theme();
