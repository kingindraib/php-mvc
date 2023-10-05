<?php

use Jenssegers\Blade\Blade;
use Symfony\Component\Dotenv\Dotenv;
use App\Models\User;
$dotenv = new Dotenv();
$dotenv->load('../.env');
// session_start();
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
    function the_post($args=''){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(!$args==NULL){
                return $_POST[$args];
            }
            return $_POST;
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }
}
// redirect back funtion
if (!function_exists("back")) {
    function back($args,$data=''){
        // session_start();
        $_SESSION[$args] = $data;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}

if(!function_exists('session_message')){
    function session_message($args){
       if(isset($_SESSION[$args])){
        $errors = $_SESSION[$args];
        return $errors;
       }else{
        return [];
       }
       
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

if(!function_exists('set_message')){
    function set_message($args,$data){
        // $_SESSION[$args] = $data;
        return $_SESSION[$args] = $data;
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
if(!function_exists('route')){
    function route($args,$data=''){
        $return_path = HOST .''.APP_NAME.'/'.$args;
        return header('Location: ' . $return_path);
    }
}

// old value
if(!function_exists('old')){
    function old($args){
        // return $_POST[$args];
        // return "hello";
        $data = $_SESSION['old'] ?? '';
        return $data[$args] ?? '';
}
}

// file upload

if(!function_exists('files')){
    function files(array $data){
        // $data =[
        //     'filename' => 'image',
        //     'path' => '/public/uploads/images',
        // ];
        // dd(true);
        $files = $_FILES[$data['filename']];
        // dd($files);
        $filename = $files['name'];
        if($files['error']===UPLOAD_ERR_OK){
            $storagepath= '/public/upload/'.$data['path'].'/';
            $newname = time();
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $newfilename = $newname.'_'.$filename;
            $uploadpath = $storagepath.$newfilename;
            // dd($uploadpath);
            $movefile = move_uploaded_file($files['tmp_name'],APP_ROOT.$uploadpath);
            if($movefile){
                // return [$data['filename']=>$uploadpath];
                return $uploadpath;
            }else{
                return NULL;
            }
        }else{
            return NULL;
        }

    }
}

// remove already exixts filr
if(!function_exists('unlink_files')){
    function unlink_files($data){
        $filepath  = APP_ROOT.$data;
        if(file_exists($filepath) && is_file($filepath)){
            unlink($filepath);
        }
        return true;
    }
}

if(!function_exists('getfile')){
    function getfile($path){
        // $filepath = 'public/'.$path;
       return url($path);
    }
}

if(!function_exists('dd')){
    function dd($args){
        echo "<pre>";
        print_r($args);
        echo "</pre>";
        die();
    }
}

function Slug($string) {
    $slug = strtolower(trim($string)); // Convert string to lowercase and remove leading/trailing whitespace
    $slug = preg_replace('/[^a-z0-9-]+/', '-', $slug); // Replace non-alphanumeric characters with hyphens
    $slug = preg_replace('/-+/', '-', $slug); // Replace multiple consecutive hyphens with a single hyphen
    return $slug;
}

function obj($array){
    return (object)$array;
}

if(!function_exists('str_limit')){
    function str_limit($string,$limit){
        $words = str_word_count($string, 1);
        $maxWords = $limit;
        if (count($words) > $maxWords) {
            $trimmedString = implode(' ', array_slice($words, 0, $maxWords));
            $trimmedString .= '...';
    
            return $trimmedString;
        }
    }
}


if(!function_exists('redirect')){
    function redirect($args){
        dd(true);
        $location_redirect  = url($args);
        dd($location_redirect);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}

if(!function_exists('auth')){
    function auth(){
        if(!empty($_SESSION)){
            if(isset($_SESSION['session_data'])){
                $data = $_SESSION['session_data'];
                $data = obj($data);
                $user = User::findorFail($data->id);
              return $user;
            }
          }
    }
}


if(!function_exists('get')){
    function get($args){
        return $_GET[$args];
    }
}