<?php
/**
 * Scripts Setup
 *
 * @package FridayTheme
 */

// Editor style
add_editor_style( [ 'assets/css/editor.css' ] );

/**
 * Enqueue Scripts and Style
 */
function friday_enqueue_scripts() {
	global $tamatebako;
	$theme = $tamatebako->name;
	$child = $tamatebako->child;

	// JS.
	wp_enqueue_script( 'fitvids' );
	wp_enqueue_script( "{$theme}-script" );

	// CSS.
	wp_enqueue_style( 'esicons' );
	wp_enqueue_style( "{$theme}-style" );
	if ( is_child_theme() ) {
		wp_enqueue_style( "{$child}-style" );
	}
}
add_action( 'wp_enqueue_scripts', 'friday_enqueue_scripts' );

/**
 * Register Scripts and Style.
 */
function friday_register_scripts() {
	global $tamatebako;
	$theme = $tamatebako->name;

	// JS.
	wp_register_script(
		'fitvids',
		tamatebako_theme_file( 'assets/js/jquery.fitvids', 'js' ),
		[ 'jquery' ],
		'1.1.0',
		true
	);
	wp_register_script(
		"{$theme}-script",
		tamatebako_theme_file( 'assets/js/jquery.theme', 'js' ),
		[ 'jquery', 'fitvids' ],
		tamatebako_theme_version(),
		true
	);

	// CSS.
	wp_register_style(
		'esicons',
		tamatebako_theme_file( 'assets/esicons/style', 'css' ),
		[],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'friday_register_scripts', 1 );
