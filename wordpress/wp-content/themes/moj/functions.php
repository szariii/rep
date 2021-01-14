<?php

function custom_theme_assets() {
	wp_enqueue_style('style',get_stylesheet_uri() );
	
	#wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true  );
	
	#wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/przycisk.js', array('jquery'), null, true  );
	
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/dane.js', array('jquery'), null, true  );
	

}

add_action('wp_enqueue_scripts','custom_theme_assets');


add_action( 'wp_ajax_dane', 'dane' );
add_action( 'wp_ajax_nopriv_dane', 'dane');


function dane()
{
	$data=$_POST['data']
}