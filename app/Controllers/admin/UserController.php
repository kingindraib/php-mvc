<?php

namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Models\User;
error_reporting(0);
class UserController extends Controller
{
    public function index(RouteCollection $routes)
    {
        $user = User::get();
        $data =['user'=>$user];
        // dd($user);
        return view('admin.user.index',$data);
    }
}