<?php
require_once 'inc/classes/class-theme.php';
require_once 'inc/helpers/svg.php';

//Menus
register_nav_menus(
	[
		'main-menu' => __( 'My Custom Main Menu' ),
		'footer-menu' => __( 'My Custom Footer Menu' ),
    ]
);


// team members


//

/* function departament_taxonomy() {

	$args = [
		'labels'            => [
			'name'          => 'Departaments',
			'singular_name' => 'departament',
			   
		],
		'hierarchical'      => true,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'has_archive'       => true,
		'query_var'         => true,
		'public'            => true,
		'hierarchical'      => true,
		'rewrite'           => [ 'slug' => 'teams' ],
	];
	register_taxonomy( 'departaments', [ 'teams' ], $args );     
}

	add_action( 'init', 'departament_taxonomy' );
*/ 
new Theme();
