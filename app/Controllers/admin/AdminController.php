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
        return view('admin.index');
    }
}