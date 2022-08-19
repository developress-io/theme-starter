<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta
			name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
	>
	<?php
	wp_head();
	?>
</head>

<header>
	<?php
		wp_nav_menu(
				array(
						'theme_location' => 'main-menu'
				)
		);
	?>
</header>

<body <?php body_class(); ?> style="opacity: 0;">
<?php
wp_body_open();
