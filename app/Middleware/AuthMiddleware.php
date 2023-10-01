<?php
namespace App\Middleware;
use Symfony\Component\HttpFoundation\Request;
// session_start();
// error_reporting(0);

class AuthMiddleware implements Middleware{
    public static function Auth() {
        // 
        // session_data
        if(!empty($_SESSION)){
          if(!isset($_SESSION['session_data'])){
            return redirect('/movie/login');
          }
        }else{
            return redirect('/movie/login');
        }
        
      }
}