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

	tamatebako_include( 'includes/translation' );
	tamatebako_include( 'includes/scripts' );
	tamatebako_include( 'includes/setup' );
	tamatebako_include( 'includes/custom-logo' );
	tamatebako_include( 'includes/custom-fonts' );
	tamatebako_include( 'includes/layouts' );
	tamatebako_include( 'includes/background' );
	tamatebako_include( 'includes/blocks' );
}
add_action( 'after_setup_theme', 'friday_theme_setup', 10 );
