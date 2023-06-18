<?php

// namespace App\Provider;

// class ViewProvider{
   
//     public function boot()
//     {

//     }

//     public function view($path,$data = '')
//     {
//         require_once 'views/' . $path . '.php';
//     }
        
// }

function redirect($url) {
    header("Location: " . $url);
    exit();
}

function getCurrentURL() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $uri = $_SERVER['REQUEST_URI'];
    return $protocol . '://' . $host . $uri;
}

// 
// 


function view($path,$data = '')
{
    // $currentURL = getCurrentURL();
    // $url = $currentURL.'views/' . $path . '.php';
    // require_once $url;
    // redirect($url);
    require_once APP_ROOT . '/views/'. $path . '.php';
}