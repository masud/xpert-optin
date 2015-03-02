<?php
/*
Plugin Name: Xpert-optin
Plugin URI: http://themexpert.com/wordpress-plugins/xpert-optin
Version: 1.0
Author: ThemeXpert
Authro URI : http://www.themexpert.com
Description: Supercharge your WordPress optin plugin
License: GPLv2 or later
Text Domain: xo
 */


add_action( 'admin_menu', 'xpert_optin' );
function xpert_optin(){
	add_menu_page( 'Xpert-optin', 'Xpert Optin', 'edit_others_posts', 'xpert_slug', 'xpert_optin_function', 'dashicons-visibility', 40 );
 }






// Add Fuctionality
function xpert_optin_function(){
	require 'helper/xpert_html.php';
}

function waypoint_add_scripts()
{
	
	wp_enqueue_script('waypoint-js', plugins_url('assets/vendor/waypoint/js/jquery.waypoints.min.js', __FILE__), array('jquery') );
	wp_enqueue_script('app-optin-js', plugins_url('assets/js/app_optin.js', __FILE__));

	
}
add_action('admin_enqueue_scripts', 'waypoint_add_scripts');

function waypoint_fontend_scripts(){
	wp_enqueue_script('waypoint-js', plugins_url('assets/vendor/waypoint/js/jquery.waypoints.min.js', __FILE__), array('jquery') );
	wp_enqueue_script('app-optin-js', plugins_url('assets/js/app_optin.js', __FILE__));
	

}
add_action('wp_enqueue_scripts', 'waypoint_fontend_scripts');


?>
