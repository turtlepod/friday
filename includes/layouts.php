<?php
/**
 * Layout Setup
 *
 * @package FridayTheme
 */

// Hide page title.
add_theme_support(
	'tamatebako-hide-page-title',
	[
		'label' => _x( 'Hide title in single page?', 'hide page title', 'friday' ),
	]
);

// Layout options.
$image_dir = get_template_directory_uri() . '/assets/images/layouts/';
$layouts   = [
	'content' => [
		'name'          => _x( 'Content', 'layout name', 'friday' ),
		'thumbnail'     => $image_dir . 'content.png',
	],
	'content-sidebar1'  => [
		'name'          => _x( 'Content | Sidebar 1', 'layout name', 'friday' ),
		'thumbnail'     => $image_dir . 'content-sidebar1.png',
	],
	'sidebar1-content'  => [
		'name'          => _x( 'Sidebar 1 | Content', 'layout name', 'friday' ),
		'thumbnail'     => $image_dir . 'sidebar1-content.png',
	],
];
$layouts_args = [
	'default'           => 'content-sidebar1',
	'customize'         => true,
	'post_meta'         => false,
	'post_types'        => array(),
	'thumbnail'         => true,
];
$layouts_strings = [
	'default'           => _x( 'Default', 'layout', 'friday' ),
	'layout'            => _x( 'Layout', 'layout', 'friday' ),
	'global_layout'     => _x( 'Global Layout', 'layout', 'friday' ),
];
add_theme_support( 'tamatebako-layouts', $layouts, $layouts_args, $layouts_strings );
