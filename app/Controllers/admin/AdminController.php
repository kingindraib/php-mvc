<?php

namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;

class AdminController extends Controller
{
    public function index(RouteCollection $routes)
    {
        return view('admin.index');
    }
}