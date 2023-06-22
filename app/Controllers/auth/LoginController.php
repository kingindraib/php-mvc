<?php

namespace App\Controllers\auth;

use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;

class LoginController extends Controller
{
    public function index(RouteCollection $routes)
    {
        return view('auth.login');
    }
}