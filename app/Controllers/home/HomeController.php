<?php
namespace App\Controllers\home;

use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;

class HomeController extends Controller{

    public function home(RouteCollection $routes)
    {
        return view('home.index');
    }

}