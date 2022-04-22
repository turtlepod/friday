<?php
/**
 * Blocks Setup
 *
 * @package FridayTheme
 */

/**
 * Block Editor Assets
 */
function friday_block_editor_assets() {
	global $tamatebako;
	$theme = $tamatebako->name;

	// CSS.
	wp_enqueue_style(
		"{$theme}_editor_style",
		tamatebako_theme_file( 'assets/css/editor', 'css' ),
		[],
		tamatebako_theme_version()
	);
}
add_action( 'enqueue_block_editor_assets', 'friday_block_editor_assets' );

/**
 * Block Editor Assets
 */
function friday_block_assets() {

}
add_action( 'enqueue_block_assets', 'friday_block_assets' );
