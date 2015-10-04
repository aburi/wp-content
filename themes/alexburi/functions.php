<?php

// Custom Scripts
// -------------------------------------------------------- 	

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
function theme_scripts() {

	global $dev, $vendors;

	
	// Lightbox CSS
	$handle = 'lightbox-css';
	$ver 	= '2.8.1';
	//$src 	= 'http://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/'.$ver.'/ekko-lightbox.min.css';
	$src 	= $vendors.'/lightbox/css/lightbox.css';
	$deps 	= array();
	wp_register_style( $handle, $src, $deps, $ver );
	wp_enqueue_style( $handle );

	
	// Lightbox JS
	$handle = 'lightbox-js';
		//$src 	= 'http://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/'.$ver.'/ekko-lightbox.min.js';
	$src 	= $vendors.'/lightbox/js/lightbox.js';
	$deps 	= array('jquery');
	wp_register_script( $handle, $src, $deps, $ver, true ); // true = loads in footer
	wp_enqueue_script( $handle );
	

	// Font Awesome CSS 4.3.0
	$handle = 'font-awesome-css';
	$ver 	= '4.3.0';
	$src 	= ( $dev ? $vendors.'/font-awesome-'.$ver.'/css/font-awesome.min.css' : '//maxcdn.bootstrapcdn.com/font-awesome/'.$ver.'/css/font-awesome.min.css' );
	$deps 	= array();
	wp_register_style( $handle, $src, $deps, $ver );
	wp_enqueue_style( $handle );

}
	

// DIVIDER
// --------------------------------------------------------

// http://wordpress.stackexchange.com/questions/76360/how-to-get-gallery-images
function grab_ids_from_gallery() {
	
	global $post;
	$attachment_ids = array();
	$pattern = get_shortcode_regex();
	$ids = array();
	
	if (preg_match_all( '/'. $pattern .'/s', $post->post_content, $matches ) ) {   //finds the "gallery" shortcode and puts the image ids in an associative array at $matches[3]
	
		$count=count($matches[3]);      //in case there is more than one gallery in the post.

		for ($i = 0; $i < $count; $i++){
			$atts = shortcode_parse_atts( $matches[3][$i] );
			if ( isset( $atts['ids'] ) ){
				$attachment_ids = explode( ',', $atts['ids'] );
				$ids = array_merge($ids, $attachment_ids);
			}
		}

	}
	return $ids;

}
add_action( 'wp', 'grab_ids_from_gallery' );

