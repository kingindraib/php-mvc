<?php

namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;



class MovieSettingsController extends Controller{

    public function index(RouteCollection $routes)
    {
        return view('admin.movie_settings.index');
    }

}