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
	echo "Admin Page Test";	
}




?>
