<?php

use Symfony\Component\Dotenv\Dotenv;
$dotenv = new Dotenv();
$dotenv->load('../.env');
// require_once '../vendor/autoload.php';
use Jenssegers\Blade\Blade;
use Jenssegers\Blade\Compilers\BladeCompiler;





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


function view($path,$data =[])
{
    $views = APP_ROOT . '/views/';
    $cache = APP_ROOT . '/cache/';
    
    $blade = new Blade($views, $cache);
    // echo $blade->render($path,$data);
    echo $blade->make($path,$data)->render();
    // require_once APP_ROOT . '/views/'. $path . '.php';
}


