<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

require( dirname(__FILE__) . '/login/src/valida.php' );
if ( isset($status) && $status=='logado'){
	
	if ( !isset($wp_did_header) ) {
	
		$wp_did_header = true;
		
		
		// Load the WordPress library.
		require_once( dirname(__FILE__) . '/wp-load.php' );
	
		// Set up the WordPress query.
		wp();

		// Load the theme template.
		require_once( ABSPATH . WPINC . '/template-loader.php' );
	
	}
}else{
	header("Location: /wordpress/login/");
	//var_dump($_SESSION);
}
