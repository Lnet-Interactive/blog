<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package linaya
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function linaya_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'linaya_jetpack_setup' );
