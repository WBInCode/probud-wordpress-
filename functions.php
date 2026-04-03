<?php
/**
 * PRO-BUD Theme Functions
 *
 * @package ProBud
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'PROBUD_VERSION', '1.0.0' );
define( 'PROBUD_DIR', get_template_directory() );
define( 'PROBUD_URI', get_template_directory_uri() );

/**
 * Enqueue styles and scripts.
 */
function probud_enqueue_assets() {
	wp_enqueue_style(
		'probud-style',
		PROBUD_URI . '/assets/css/theme.css',
		array(),
		PROBUD_VERSION
	);

	wp_enqueue_script(
		'probud-main',
		PROBUD_URI . '/assets/js/main.js',
		array(),
		PROBUD_VERSION,
		array( 'strategy' => 'defer', 'in_footer' => true )
	);
}
add_action( 'wp_enqueue_scripts', 'probud_enqueue_assets' );

/**
 * Enqueue editor styles.
 */
function probud_editor_assets() {
	wp_enqueue_style(
		'probud-editor',
		PROBUD_URI . '/assets/css/editor.css',
		array(),
		PROBUD_VERSION
	);
}
add_action( 'enqueue_block_editor_assets', 'probud_editor_assets' );

/**
 * Register pattern categories.
 */
function probud_register_pattern_categories() {
	register_block_pattern_category( 'probud-hero', array(
		'label' => __( 'PRO-BUD: Hero', 'pro-bud' ),
	) );
	register_block_pattern_category( 'probud-sections', array(
		'label' => __( 'PRO-BUD: Sekcje', 'pro-bud' ),
	) );
}
add_action( 'init', 'probud_register_pattern_categories' );

/**
 * Add custom image sizes.
 */
function probud_image_sizes() {
	add_image_size( 'probud-hero', 1920, 900, true );
	add_image_size( 'probud-project', 800, 600, true );
	add_image_size( 'probud-card', 600, 400, true );
}
add_action( 'after_setup_theme', 'probud_image_sizes' );

/**
 * Load project data.
 */
require_once PROBUD_DIR . '/inc/project-data.php';
