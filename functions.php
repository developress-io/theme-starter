<?php
require_once 'inc/classes/class-theme.php';
require_once 'inc/helpers/svg.php';

register_nav_menus(
	array(
		'main-menu'   => __( 'Main Menu' ),
		'footer-menu' => __( 'Footer Menu' ),
	)
);

new Theme();
