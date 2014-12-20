<?
/*
Plugin Name: Plugin Starter
Plugin URI: http://www.npalomares.com
Description: Plugin starter for future plugin development
Version: 1.0
Author: Nicholas Palomares
Author URI: http://www.npalomares.com/
License: All Rights Reserved
*/
require("inc/posttype.php");
//require("inc/meta_boxes.php");
require("inc/taxonomy.php");
require("inc/shortcode.php");
//require("inc/admin.php");


// Add Custom Thumbnails Here
add_image_size('example_thumb', 250, 150, true);

function example_menu_scripts() {
    $plugin_url = plugin_dir_url( __FILE__ );

    //register timeline css
    wp_register_style( 'exampleStyle', $plugin_url . 'inc/css/example.css' );
    wp_enqueue_style( 'exampleStyle' );
	
	//load javascript    
    wp_register_script( 'exampleScript', $plugin_url . 'inc/js/example.js' );
    wp_enqueue_script( 'exampleScript' );
}
add_action( 'wp_enqueue_scripts', 'example_scripts' );




?>