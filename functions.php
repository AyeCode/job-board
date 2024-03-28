<?php

/**
 * Jobs functions and definitions
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */

 add_action( 'wp_enqueue_scripts', 'job_board_enqueue_styles' );
 function job_board_enqueue_styles() {
	wp_enqueue_style( 'job-board-child-style', get_stylesheet_directory_uri() . '/assets/styles/style.css');
 }

/**
 * Loads the translation files for WordPress.
 *
 * @since 1.0.0
 */

function job_board_theme_setup()
{
	load_child_theme_textdomain( 'job-board', get_stylesheet_directory() . '/languages' );
}

add_action('after_setup_theme', 'job_board_theme_setup');


// include admin classes
add_action('after_setup_theme','jobs_load_admin');
function jobs_load_admin(){
	if ( is_admin() ) {
		// Theme admin stuff
		require_once 'includes/class-blockstrap-admin-child.php';
	}
}