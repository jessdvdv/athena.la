<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Athena.LA
* @since Athena.LA 2017
*/

// Enqueue scripts and styles
function athena_child_scripts(){
	wp_enqueue_style( 'athena.la-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'athena.la-style' ));
}
add_action( 'wp_enqueue_scripts', 'athena_child_scripts' );
?>


