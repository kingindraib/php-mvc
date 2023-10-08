<?php

namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Middleware\AuthMiddleware;
use App\Models\User;

class AdminController extends Controller
{

    public function __construct(){
        AuthMiddleware::Auth();
    }

    public function index(RouteCollection $routes)
    {
        // dd(true);
        if(Auth()->user_type==1){
        return view('admin.index');
        }else{
            return route('user/dashboard');
        }
    }
}