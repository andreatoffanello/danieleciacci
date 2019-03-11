<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

   wp_enqueue_style('child-style', get_stylesheet_directory_uri() .'/style.css', array('parent-style'));
}




add_action('wp_enqueue_scripts', 'theme_js');

function theme_js() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), null, true);

    wp_enqueue_script( 'theme_js', get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' ), null , true );
}

