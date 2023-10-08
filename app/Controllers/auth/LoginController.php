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
        // 25d55ad283aa400af464c76d713c07ad 
        // 25d55ad283aa400af464c76d713c07ad
        // 25d55ad283aa400af464c76d713c07ad
        $data = the_post();
        $data['password'] = md5(the_post('password'));
        // print_r($data);
        // die();
           $auth = User::login($data);
        //    print_r($auth);
        //    die();
           if($auth['success'] == true){
            // echo true;
            if(Auth()->user_type==1){
                return route('admin/dashboard');
            }else{
                return route('user/dashboard');
            }
            
           }else{
            // print_r($auth);
            // echo "false";
            return back('errors_message','username or password inviled');
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
                'confirm_password'=> 'required|same:password', 
            ];
            $res = Validation::make($credentials,$validationRules);
            if(!empty($res)){
                Validation::setold(the_post());
                return back('errors',$res);
            }
            $data = the_post();
            $data['password'] = md5(the_post('password'));
            $data['user_type'] = 0;
            // print_r(the_post());
            // echo "<pre>";
            $insert = User::create($data);
            // print_r($insert);
            if($insert){
                set_message('success_message','registration success success');
              return route('login');
            }else{
                Validation::setold(the_post());
                return back('success_message','data inserted failled');
            }
        }
   }

   public function logout(RouteCollection $routes)
   {
        User::logout();
        set_message('success_message','registration success success');
        return route('login');

   }
}