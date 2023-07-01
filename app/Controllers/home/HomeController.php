<?php
namespace App\Controllers\home;

use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Models\User;
use App\Provider\Validation;
// use App\Provider\DatabaseProvider;
error_reporting(0);

class HomeController extends Controller{

    public function home(RouteCollection $routes)
    {
        $data = User::get();
        $creadintial = ['email'=>'admin@gmail.com','password'=>'12345678'];
        //  $auth = User::login($creadintial);
        //  print_r($auth);
        // echo User::Auth('email');
        if(the_post()){
        $credentials = [
            'username' => 'john_doe',
            'password' => 'secret',
            'email' => '',
            // 'phone' => '',
        ];
        
        $validationRules = [
            'username' => 'required',
            'password' => 'min:6',
            'email' => 'email',
            'phone' => 'required',
        ];
        
       $res = Validation::make($credentials,$validationRules);
       print_r($res);
       if(!empty($res)){
           return $res;
       }
    }

        // User::login();
        // echo User::logout();
        // the_post();
        // User::create(the_post());
        // validate(the_post());
        $data = ['data'=>$data];
        return view('home.index',$data);
    }

}