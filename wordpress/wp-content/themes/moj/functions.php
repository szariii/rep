<?php

function custom_theme_assets()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    #wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true  );
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/przycisk.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'custom_theme_assets');


// Gdy wywolujesz w ajax funkcje 'dane' to w functions.php musisz wykonać jakieś akcje.
// Twoja funckja to handleStoreUser -> ona poiwnna wszystko obslugiwać. Wewnątrz niej możesz wywoływać inne funkcje pomocnicze.
add_action('wp_ajax_dane', 'handleStoreUser');
add_action('wp_ajax_nopriv_dane', 'handleStoreUser');
function handleStoreUser()
{
    // pobierz dane przekazane metoda POST z Javscript Ajax;
    $data = $_POST;

    // wywolaj funkcje zapisujaca uzytkownika
//    storeUser($data);

    // sprawdź czy użytkownik został zapisany (pobierz ID, które zwracasz z wywołania funkcji storeUser i sprawdź czy istnieje.
    // IF()  ---> poczytaj php if   (https://www.php.net/manual/en/control-structures.if.php)

    //jesli zapisane ID istnieje zwróc wp_send_json_succes(array('status' => 200, 'message' => 'ZAPISANO' ))
    // jeśli nie istnieje zwróc wp_send_json_succes(array('status' => 404, 'message' => 'Nie udałó się zapisac' ))
}


// Funkcja zapisująca uzytkownika w bazie
function storeUser($dane)
{
    global $wpdb;


    $dane = [];
    $dane['user_status'] = 'ACTIVE';
    $dane['user_password'] = 'randomowe';
    $insert = $wpdb->insert('cms_users', $dane);


    // jesli zapis się nie udał - zwróc NULL;
    if (!$insert) {
        return false;
    }

    // zwróć ID zapisanego rekordu
    return $wpdb->insert_id;
}

?>