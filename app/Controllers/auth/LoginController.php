<?php

namespace App\Controllers\auth;

use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Models\User;
use App\Provider\Validation;
error_reporting(0);
class LoginController extends Controller
{
    public function index(RouteCollection $routes)
    {
        return view('auth.login');
    }

    public function login(RouteCollection $routes)
    {
        if(the_post()){
            $credentials = the_post();
            
            $validationRules = [
                'password' => 'required',
                'email' => 'email|required',
                'name' => 'required',
            ];
            
           $res = Validation::make($credentials,$validationRules);
        //    print_r($res);
           if(!empty($res)){
            // $data =['message'=>$res];
            // return view('auth.login',$data);
            // print_r($data);
            return back('errors',$res);
           }
        //    $password = md5('12345678');
        //    print_r('tets');
        //    print_r($password);
        //    die();
           $auth = User::login(the_post());
        //    print_r($auth);
           if($auth['success'] == true){
            echo "done";
            // return redirect();
            // return view('admin.index');
           }else{
            // print_r($auth);
            return back('errors_message',$auth);
           }
        }
   }

   public function register(RouteCollection $routes)
   {
    return view('auth.register');
   }

   public function store_register(RouteCollection $routes)
   {
        if(the_post()){
            $credentials = the_post();
            
            $validationRules = [
                'password' => 'required',
                'email' => 'email|required',
            ];
            $res = Validation::make($credentials,$validationRules);
            if(!empty($res)){
                Validation::setold(the_post());
                return back('errors',$res);
            }
        }
   }
}