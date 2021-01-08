<?php

function custom_theme_assets() {
	wp_enqueue_style('style',get_stylesheet_uri() );
	
	#wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true  );
	
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/przycisk.js', array('jquery'), null, true  );
	
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/dane.js', array('jquery'), null, true  );
	

}

add_action('wp_enqueue_scripts','custom_theme_assets');



add_action( 'init', 'my_script_enqueuer' );

function my_script_enqueuer() {
   wp_register_script( "script", WP_PLUGIN_URL.'/../themes/moj/assets/js/dane.js', array('jquery') );
   wp_localize_script( 'script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        

   wp_enqueue_script( 'jquery' );
   wp_enqueue_script( 'script' );

}