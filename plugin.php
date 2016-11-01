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
        require_once 'dg-parallax/dg-parallax.php';
	}
}
add_action( 'init', 'dg_load_bb_custom_modules' );

/**
 * Custom field styles and scripts
 */
function dg_custom_assets() {
    if ( class_exists( 'FLBuilderModel' ) && FLBuilderModel::is_builder_active() ) {
        wp_enqueue_script( 'dg-script-parallax', DG_MODULES_URL . 'dg-parallax/js/frontend.js', array(), '', true );
    }
}
add_action( 'wp_enqueue_scripts', 'dg_custom_assets' );