<?php
/*
	Plugin Name: Variables
	Description: Initialize custom variables.
	Author: Alex Buri
	Version: 0.0
*/

// Paths
$root    = home_url('/');
$images  = home_url('/dist/images');
$scripts = home_url('/dist/scripts');
$styles  = home_url('/dist/styles');
$vendor  = home_url('/dist/vendor');
// $styles	= get_template_directory_uri('/stylesheets');

//	Utilities
// $dev   = $root == 'http://localhost:3000/'.$local;
$today = date('Y-m-d');

// if( file_exists( ABSPATH . 'local-config.php' ) ) {
//if ( file_exists( dirname(__FILE__) . "/wp-config.php") ) {

// 	$dev = true;

// } else {

// 	$dev = false;

// }