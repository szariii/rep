<?php

function custom_theme_assets() {
	wp_enqueue_style('style',get_stylesheet_uri() );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true  );
}

add_action('wp_enqueue_scripts','custom_theme_assets');
