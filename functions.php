<?php
/**
 * Theme functions
 *
 * Sets up the theme and provides some helper functions.
 *
 * @package prjt
 */

function prjt_scripts() {
	// theme style.css file
	$rand = rand( 1, 99999999999 );
	wp_enqueue_style( 'wpshout-style', get_stylesheet_uri(), '', $rand );
}

function add_category_to_single($classes) {
	if (!is_admin() && is_single() ) {
	  global $post;
	  foreach((get_the_category($post->ID)) as $category) {
	    // add category slug to the $classes array
	    $classes[] = $category->category_nicename;
	  }
	}
	// return the $classes array
	return $classes;
}

add_action('wp_enqueue_scripts', 'prjt_scripts');
add_filter('show_admin_bar', '__return_false');
add_theme_support('post-thumbnails');
add_filter('body_class','add_category_to_single');

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
