<?php 

/**
 *
 * @package WordPress
 * @subpackage YouandCo Theme
 * @since YouandCo Theme
 */
	
// Include Custom Posts and Taxonomies
include 'custom_posts/appliances.php';

flush_rewrite_rules();


// Add menu functionality to this theme
add_theme_support( 'menus' );

// Set each menu id
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-nav' 	=> 'Main Navigation',
		  'bottom-nav' 	=> 'Bottom Navigation'
		)
	);
}

 ?>