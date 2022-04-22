<?php
/**
 * Custom Logo
 *
 * @package FridayTheme
 */

$logo_args = [
	'width'        => 300, // px
	'height'       => 140, // px
	'flex-height'  => true,
	'flex-width'   => true,
	'header-text'  => [ 'site-title', 'site-description' ],
];
add_theme_support( 'custom-logo', $logo_args );
