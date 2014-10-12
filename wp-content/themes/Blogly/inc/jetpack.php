<<<<<<< HEAD
<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package themefurnace
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function themefurnace_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
=======
<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package themefurnace
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function themefurnace_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
>>>>>>> 0cd45cbd976a218f9bff14fec45f6f4b8b4b021c
add_action( 'after_setup_theme', 'themefurnace_jetpack_setup' );