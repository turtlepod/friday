<?php
/**
 * Theme Functions
 *
 * @package FridayTheme
 */

// Load library.
require_once get_template_directory() . '/library/tamatebako.php';

/**
 * Theme Setup
 */
function friday_theme_setup(){

	/* === TRANSLATION === */
	tamatebako_include( 'includes/translation' );

	/* === SCRIPTS === */
	tamatebako_include( 'includes/scripts' );

	/* === SETUP: Sidebars, Menus, Image Sizes, Content Width === */
	tamatebako_include( 'includes/setup' );

	/* === LOGO === */
	tamatebako_include( 'includes/custom-logo' );

	/* === CUSTOM FONTS === */
	tamatebako_include( 'includes/custom-fonts' );

	/* === LAYOUTS === */
	tamatebako_include( 'includes/layouts' );

	/* === BACKGROUND === */
	tamatebako_include( 'includes/background' );
}
add_action( 'after_setup_theme', 'friday_theme_setup', 5 );
