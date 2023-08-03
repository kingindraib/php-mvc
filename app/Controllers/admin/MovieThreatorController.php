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
        // dd($id);
        MovieShow::where('movie_id','=', $id)->delete($id);
        MovieScreen::where('movie_id','=', $id)->delete($id);
        MovieThreator::where('movie_id','=', $id)->delete($id);
        return back('errors_message','data deleted succesfully');
        // MovieShow::delete($id);
    }

    public function edit(int $id, RouteCollection $routes)
    {
        $movie_screen = MovieScreen::where('movie_id','=', $id)->first();
        $movie_threator = MovieThreator::where('movie_id','=', $id)->first();
        $threator_code = threator_name($movie_threator->threator_id)->threator_code;
        $moviescreen = Screen::where('threator_code','=',$threator_code)->get();
        $data = ['data'=>$movie_screen,
                'movie_id'=>$id,
                'moviescreen'=> $moviescreen,
                'selected_threator' => threator_name($movie_threator->threator_id),
                ];
        return view('admin.movie.assign_edit',$data);
    }

    public function update(int $id, RouteCollection $routes)
    {
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
        $data['screen_id'] = Screen::where('screen_code','=',$data['screen_code'])->first()->id;
        MovieScreen::update($id,$data);
        MovieShow::where('movie_id','=', $id)->delete($id);
        foreach($data['shows_id'] as $shows){
            $movie_show['movie_id'] = $data['movie_id'];
            $movie_show['shows_id'] = $shows;
            MovieShow::create($movie_show);
        }
        set_message('success_message','Movie Created Success');
        return route('admin/dashboard/movie/index');
    }

}