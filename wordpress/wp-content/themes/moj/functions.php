<?php

function custom_theme_assets()
{
    wp_enqueue_style('style', get_stylesheet_uri());

    #wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true  );

    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/przycisk.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'custom_theme_assets');


add_action('wp_ajax_dane', 'dane');
add_action('wp_ajax_nopriv_dane', 'dane');

function dane()
{
    // pobierz dane przekazane metoda POST z Javscript Ajax;
    $dane = $_POST;

    // wyswietl dane
    var_dump($dane);

    // wywolaj funkcje zapisujaca uzytkownika
//    storeUser($data);
}


function storeUser($dane)
{
    global $wpdb;
	
	
	
            $dane = [];
            $dane['user_status'] = 'ACTIVE';
            $dane['user_password'] = 'randomowe';
            $insert = $wpdb->insert('cms_users', $dane);
       

        if (!$insert) {
            return false;
        }

        return $wpdb->insert_id;
    // zapisz dane do bazy uzyj $wpdb->insert()
//    $wpdb->insert();
}

?>