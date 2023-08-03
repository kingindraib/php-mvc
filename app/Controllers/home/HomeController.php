<?php
namespace App\Controllers\home;

use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Models\User;
use App\Provider\Validation;
use App\Models\Slider;
use App\Models\Movie;
// use App\Provider\DatabaseProvider;
error_reporting(0);

class HomeController extends Controller
{

    public function home(RouteCollection $routes)
    {
        $slider = Slider::get();
        $movie = Movie::orderBy('id','DESC')->get();
        // dd($movie);
        $data = [
            'slider' => $slider,
            'movie' =>$movie,
        ];
        return view('home.index',$data);
    }

}