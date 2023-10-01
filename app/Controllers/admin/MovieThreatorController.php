<?php
namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Provider\Validation;
use App\Models\Movie;
use App\Models\Cast;
use App\Models\Director;
use App\Models\Producer;
use App\Models\MovieThreator;
use App\Models\MovieScreen;
use App\Models\MovieShow;
use App\Models\Threator;
use App\Models\Show;
use App\Models\Screen;

class MovieThreatorController extends Controller
{

    public function delete(int $id, RouteCollection $routes)
    {
        $del = MovieThreator::findorFail($id);
        MovieShow::where('movie_id','=', $del->movie_id)->delete();
        MovieScreen::where('movie_id','=', $del->movie_id)->delete();
        MovieThreator::where('id','=', $id)->delete();
        return back('errors_message','data deleted succesfully');
        // MovieShow::delete($id);
    }

    public function edit(int $id, RouteCollection $routes)
    {
        // dd($id);
       
        $movie_threator = MovieThreator::findorFail($id);
        // dd($movie_threator);
        $movie_screen = MovieScreen::where('movie_id','=', $movie_threator->movie_id)->first();
        
        $threator_code = threator_name($movie_threator->threator_id)->threator_code;
        $moviescreen = Screen::where('threator_code','=',$threator_code)->get();
        $data = ['data'=>$movie_screen,
                'movie_id'=> $movie_threator->movie_id,
                'moviescreen'=> $moviescreen,
                'selected_threator' => threator_name($movie_threator->threator_id),
                ];
        return view('admin.movie.assign_edit',$data);
    }

    public function update(int $id, RouteCollection $routes)
    {
        // dd($id);
        $creadential = the_post();
        $validationRule =[
            'shows_id' => 'required',
            'screen_code' => 'required',
        ];
        $response = Validation::make($creadential,$validationRule);
        if(!empty($response)){
            Validation::setold(the_post());
            return back('errors',$response);
        }
        // MovieScreen::where('movie_id','=', $id)->delete($id);
        $data = the_post();
        // dd($data);
        $data['screen_id'] = Screen::where('screen_code','=',$data['screen_code'])->first()->id;
       $moviescreen_id = MovieScreen::where('movie_id','=',$id)->first()->id;
    //    dd($moviescreen_id);
        MovieScreen::update($moviescreen_id,$data);
        $showdel = MovieShow::where('movie_id','=',$id)->delete();
        // dd($showdel);
        foreach($data['shows_id'] as $shows){
            $movie_show['movie_id'] = $id;
            $movie_show['shows_id'] = $shows;
            MovieShow::create($movie_show);
        }
        set_message('success_message','Movie Screen Update Success');
        return route('admin/dashboard/movie/index');
    }

}