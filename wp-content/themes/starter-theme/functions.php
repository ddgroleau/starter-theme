<?php
/**
 * Enqueue scripts and styles.
 */

// Add Tailwind
function enqueue_tailwind_output() {
	wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/assets/css/tailwind.css', array() );
}
add_action( 'wp_enqueue_scripts', 'enqueue_tailwind_output' );

// Add JavaScript
function enqueue_main_js() {
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array()  );
}
add_action( 'wp_enqueue_scripts', 'enqueue_main_js');

// Add SVG Uploads
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

// Fix Chrome IOS Double-Click Bug
function fix_ios_double_tap_issue() {
	echo '<script>document.addEventListener("touchstart", function() {},false);</script>';
}
add_action('wp_head', 'fix_ios_double_tap_issue');

function register_menus() {
	register_nav_menus(
	  array(
		'main-menu' => __( 'Main Menu' ),
	   )
	 );
}
add_action( 'init', 'register_menus' );
?>