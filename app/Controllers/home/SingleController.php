<?php
namespace App\Controllers\home;

use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Models\Movie;
use App\Models\Seat;
use App\Models\MovieShow;
use App\Models\Show;
use App\Middleware\AuthMiddleware;
class SingleController extends Controller 
{
    public function index(int $id, RouteCollection $routes)
    {
        $movie = Movie::findorFail($id);
        $movie_name = $movie->movie_name;
        $data = [
            'data' =>$movie,
            'movie_name' =>$movie_name,
        ];
        return view('home.single.single',$data);
    }

    public function seat(int $id, RouteCollection $routes)
    {
        // dd($id);
        // $rowgroup =Seat::groupBy('row_id','row_id')->get();
        // dd($rowgroup);
        AuthMiddleware::Auth();
        
    //    dd($rowgroup);
        // $seatrow = Seat::groupBy('row_id','row_id')->where('screen_id','=',1)->get();
        // dd($seatrow);
        $movieshow = MovieShow::findorFail($id);
        // dd($movie);
        $movie_detail = Movie::findorFail($movieshow->movie_id);
        $showdata = Show::findorFail($movieshow->shows_id);
        $seat = Seat::where('screen_id','=',screen_code($showdata->screen_code)->id)->get();
    //     $rowgroup =Seat::groupBy('row_id','row_id')->get();
    //    dd($rowgroup);
        // dd($seat->count());
        // dd($seat);
        // $seatrow = Seat::get();
        
        
        $data = [
            'movieshow' =>$movieshow,
            'movie_detail' =>$movie_detail,
            'seat'=>$seat,
            'screen_id' => screen_code($showdata->screen_code)->id,
            'movie_id' => $movieshow->movie_id,
        ];
        return view('home.single.seat',$data);
    }
}