<?php
/**
 * Custom Background
 *
 * @package FridayTheme
 */

$custom_backgound_args = [
	'default-color'    => '#f9f9f9',
	'default-image'    => '',
	'wp-head-callback' => '_custom_background_cb',
];
add_theme_support( 'custom-background', $custom_backgound_args );

// Full Size Background (Cover).
$full_size_bg_args = [
	'label' => _x( 'Full Size Background', 'customizer', 'friday' ),
];
add_theme_support( 'tamatebako-full-size-background', $full_size_bg_args );
