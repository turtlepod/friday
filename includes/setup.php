<?php
/**
 * Setup Theme Elements
 *
 * @package FridayTheme
 */

// Content width.
global $content_width;
if ( ! isset( $content_width ) ){
	$content_width = 915;
}

// Sidebars.
$sidebars_args = [
	'primary' => [
		'name'        => _x( 'Sidebar', 'sidebar name', 'friday' ),
		'description' => '',
	],
	'footer-1' => [
		'name'        => _x( 'Footer 1', 'sidebar name', 'friday' ), 'description' => '',
	],
	'footer-2' => [
		'name'        => _x( 'Footer 2', 'sidebar name', 'friday' ),
		'description' => '',
	],
	'footer-3' => [
		'name'        => _x( 'Footer 3', 'sidebar name', 'friday' ), 
		'description' => '',
	],
];
add_theme_support( 'tamatebako-sidebars', $sidebars_args );

// Navigation menus.
$nav_menus_args = [
	'primary' => _x( 'Navigation', 'nav menu name', 'friday' ),
	'footer'  => _x( 'Footer Links', 'nav menu name', 'friday' ),
	'social'  => _x( 'Social Links', 'nav menu name', 'friday' ),
];
register_nav_menus( $nav_menus_args );

/**
 * Add Body Classes For Styling
 *
 * @param array $classes Classes.
 * @return array
 */
function friday_body_classes( $classes ) {
	if ( get_the_archive_title() && ! is_front_page() && ! is_singular() && ! is_404() ) {
		$classes[] = 'hero-header';
	} elseif ( is_singular( 'post' ) ) {
		$classes[] = 'hero-header';
	}
	return $classes;
}
add_filter( 'body_class', 'friday_body_classes' );
