<?php

namespace App\Controllers\home;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Middleware\AuthMiddleware;
use App\Models\User;

class UserController extends Controller
{

    public function __construct(){
        AuthMiddleware::Auth();
    }

    public function index(RouteCollection $routes)
    {
        // dd(true);
        return view('home.account.dashboard');
    }

    public function edit_profile(RouteCollection $routes)
    {
        return view('home.account.parts.profile_edit');
    }

    public function update_profile(RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
          
            $data = the_post();
            $id = Auth()->id;

            User::update($id,$data);
            set_message('success_message','User Update Success');
            return route('user/dashboard');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }

    public function myticket(RouteCollection $routes)
    {
        return view('home.account.parts.my_ticket');
    }


    public function user_history(RouteCollection $routes)
    {
        return view('home.account.parts.user_history');
    }
}
