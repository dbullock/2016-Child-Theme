<?php
/**
 * Functions.php
 *
 * @package DB Starter 2016
 */

/**
 * Enqueue Parent Styles.
 */
function theme_enqueue_styles() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );

}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
