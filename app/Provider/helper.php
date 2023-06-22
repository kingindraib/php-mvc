<?php

use Jenssegers\Blade\Blade;
use Symfony\Component\Dotenv\Dotenv;
$dotenv = new Dotenv();
$dotenv->load('../.env');

function url($path){
    $return_path = HOST .''.APP_NAME.'/public/'.$path;
    return $return_path;
}

// function Blade::include('includes.input', 'input');

function ibinclude($file){
    $views = APP_ROOT . '/views/';
    $cache = APP_ROOT . '/cache/';
    
    $blade = new Blade($views, $cache);
    echo $blade->make($file)->render();
}


// $views = $_ENV['APP_URL'] . '/movie/views/';
// $cache = $_ENV['APP_URL'] . '/movie/cache/';
// $blade = new Blade($views, $cache);
// // include
// $blade->directive('include', function ($expression) {
//     $views = $_ENV['APP_URL'] . '/movie/views/';
// $cache = $_ENV['APP_URL'] . '/movie/cache/';

// $blade = new Blade($views, $cache);
// echo $blade->make($expression)->render();
  
// });