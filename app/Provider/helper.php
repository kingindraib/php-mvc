<?php

use Jenssegers\Blade\Blade;
use Symfony\Component\Dotenv\Dotenv;
$dotenv = new Dotenv();
$dotenv->load('../.env');
session_start();
function url($path){
    $return_path = HOST .''.APP_NAME.'/'.$path;
    return $return_path;
}

// function Blade::include('includes.input', 'input');

function ibinclude($file){
    $views = APP_ROOT . '/views/';
    $cache = APP_ROOT . '/cache/';
    
    $blade = new Blade($views, $cache);
    echo $blade->make($file)->render();
}


if(!function_exists('the_post')){
    function the_post(){
        return $_POST;
    }
}
// redirect back funtion
if (!function_exists("back")) {
    function back($args,$data=''){
        session_start();
        $_SESSION[$args] = $data;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}

if(!function_exists('session_message')){
    function session_message($args){
        $errors = $_SESSION[$args];
        return $errors;
    }
}
if(!function_exists('unset_session')){
    function unset_session($args){
        unset($_SESSION[$args]);
        return '';
    }
}

if(!function_exists('get_message')){
    function get_message($args,$data){
        $errors = $_SESSION[$args];
        return $errors[$data];
    }
}

if(!function_exists('validation_message')){
    function validation_message($args,$data){
        if (isset($_SESSION[$args])) {
            $errors = $_SESSION[$args];
            // print_r($errors['email']);
            $message = $errors[$data] ?? '';
            
            return "<span class='text-danger'>".$message."</span>";
            // Display the errors to the user
            // foreach ($errors as $error) {
            //     echo $error . "<br>";
            // }

            // Clear the errors from the session
            unset($_SESSION[$args]);
            }
    }
}

// redirect route 
if(!function_exists('redirect')){
    function redirect($args,$data=''){
        $return_path = HOST .''.APP_NAME.'/'.$path;
        return header('Location: ' . $return_path);
    }
}

// old value
if(!function_exists('old')){
    function old($args){
        // return $_POST[$args];
        return "hello";
}
}