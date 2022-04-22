<?php
/**
 * Custom Fonts Options
 * Google fonts also enqueued using this feature.
 *
 * @package FridayTheme
 */

// Customizer fonts settings.
$fonts_config = [
	'font_site_title' => [
		'label'       => _x( 'Site Title Font', 'customizer', 'friday' ),
		'description' => _x( 'You can select your preferred font for your site title below.', 'customizer', 'friday' ),
		'target'      => '.site-title',
		'fonts'       => [ 'websafe', 'heading', 'base' ],
		'default'     => 'Open Sans',
	],
	'font_post_title' => [
		'label'   => _x( 'Post Title Font', 'customizer', 'friday' ),
		'target'  => '#content .entry-title',
		'fonts'   => [ 'websafe', 'heading', 'base' ],
		'default' => 'Open Sans',
	],
	'font_base' => [
		'label'   => _x( 'Base Font', 'customizer', 'friday' ),
		'target'  => 'body.wordpress,body#tinymce',
		'fonts'   => [ 'websafe', 'base' ],
		'default' => 'Open Sans',
	],
];

$fonts_settings = [
	'editor_styles' => [
		'font_base',
	],
	/**
	 * Translators: to add an additional font character subset specific to your language
	 * translate this to 'greek', 'cyrillic', or 'vietnamese'. Do not translate into your own language.
	 * Note: availability of the subset depends on fonts selected.
	 */
	'font_subset' => _x( 'no-subset', 'Google Font Subset: add new subset( greek, cyrillic, vietnamese )', 'friday' ),
	'allowed_weight' => [ '300', '300italic', '400', '400italic', '700', '700italic' ],
];

/* Additional strings used in custom font feature. */
$fonts_strings = [
	'fonts' => _x( 'Fonts', 'customizer', 'friday' ),
];

add_theme_support( 'tamatebako-custom-fonts', $fonts_config, $fonts_settings, $fonts_strings );
