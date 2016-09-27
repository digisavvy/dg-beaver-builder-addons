<?php
/**
 * Plugin Name: Custom Beaver Builder Addons
 * Plugin URI: http://www.mywebsite.com
 * Description: Custom modules for the Beaver Builder Plugin.
 * Version: 1.0
 * Author: Alex Vasquez & Amber Hewitt
 * Author URI: http://digisavvy.com
 */
define( 'DG_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'DG_MODULES_URL', plugins_url( '/', __FILE__ ) );

function dg_load_bb_custom_modules() {
	if ( class_exists( 'FLBuilder' ) ) {
		// Including custom modules
		require_once 'dg-copyblock/dg-copyblock.php';
	}
}
add_action( 'init', 'dg_load_bb_custom_modules' );

// Load Custom Modules
function dg_load_custom_modules() {
	if ( class_exists( 'FLBuilder' ) ) {
		require_once 'dg-copyblock/dg-copyblock.php';
	}
}

;