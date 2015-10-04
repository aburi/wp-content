<?php

/*
	Plugin Name: Custom Load
	Description: Load specific styles and scripts.
	Author: Alex Buri
	Version: 0.0
*/


//	Utilities
// ==================================================================================================================================

//	show_admin_bar ( false );

	/* Remove WP version for security reasons */
	function remove_wp_version() { return ''; }
	add_filter('the_generator', 'remove_wp_version');

	/* Set max content width for site */
	//if ( ! isset( $content_width ) ) $content_width = 657;

	if ( function_exists( 'add_theme_support' ) ) {

//		add_theme_support( 'automatic-feed-links' );
//		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );		// allows the use of HTML5 markup for forms
		add_theme_support( 'post-thumbnails' );
//		set_post_thumbnail_size( 700, 470, true );

	}


// ==================================================================================================================================
//  wp_enqueue_style / wp_enqueue_script
// ==================================================================================================================================

	// JQuery 2.1.4
	if ( !is_admin() ) {

		add_action('init', 'load_jquery');
		function load_jquery() {

	    	global $dev, $vendor;

	    	$handle = 'jquery';
				$deps 	= array();
				$ver    = '2.1.4';
				// $src    = ( $dev ? $vendor.'/jquery/jquery-2.1.4.min.js' : '//ajax.googleapis.com/ajax/libs/jquery/'.$ver.'/jquery.min.js' );
				$src    = '//ajax.googleapis.com/ajax/libs/jquery/'.$ver.'/jquery.min.js';
				wp_deregister_script( $handle );
				wp_register_script( $handle, $src, $deps, $ver, false );
				wp_enqueue_script( $handle );

	    }

    }


	// Load custom stylesheets and scripts
	// ------------------------------------------------
  add_action( 'wp_enqueue_scripts', 'custom_scripts' );
	function custom_scripts() {

		global $dev, $styles, $vendor;

		// main.css
		// ------------------------------------------------
    $handle = 'main';
    $src    = $styles.'/main.css';
    $deps   = array();
    $ver    = '0.0.0';
		wp_register_style( $handle, $src, $deps, $ver );
		wp_enqueue_style( $handle );

		// Bootstrap JS
		// ------------------------------------------------
    // $handle = 'bootstrap-js';
    // $ver    = '3.3.5';
    // $src    = ( $dev ? $vendor.'/bootstrap-'.$ver.'-dist/js/bootstrap.min.js' : '//maxcdn.bootstrapcdn.com/bootstrap/'.$ver.'/js/bootstrap.min.js' );
    // $deps   = array('jquery');
		// wp_register_script( $handle, $src, $deps, $ver, true ); // true = loads in footer
		// wp_enqueue_script( $handle );

	}


// ==================================================================================================================================
//  	Media
// ==================================================================================================================================

	// 3.9 introducted remove_image_size(); check later for documentation

/*
	mini (custom)   		= 50 x 50		cropped
	thumbnail          		= 350 x 350		cropped
	medium 	   				= 350 x 234  	proportional
	post-thumbnail     		= 700 x 470		proportional	(set in utilities above)
	wide (custom)     		= 1240 x 450	cropped
*/


	// Add custom dimensions
/*
	if ( function_exists( 'add_image_size' ) ) {

		add_image_size( 'mini', 50, 50, true );
		add_image_size( 'wide', 1240, 450, true );

	}
*/
