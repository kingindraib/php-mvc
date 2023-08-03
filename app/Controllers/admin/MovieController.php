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

class MovieController extends Controller
{
    public function index(RouteCollection $routes)
    {
        $movie = Movie::get();
        $data = ['movie'=>$movie];
        return view('admin.movie.index',$data);
    }

    public function create(RouteCollection $routes)
    {
        return view('admin.movie.create');
    }

    public function store(RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'movie_name' => 'required',
                'tailler' => 'required',
                'release_date' => 'required',
                'duretion' => 'required',
                'ficial_year'=> 'required',
                'language' => 'required',
                'grade'=> 'required',
                'production_house'=>'required',
                'production_house_type'=>'required',
                'threator_id' => 'required',
                'distributor_code' => 'required',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            $imagedata = [
                'filename' => 'image',
                'path' => 'image',
            ];
        //    dd(files($imagedata));
            $data['image'] = files($imagedata);
            $data['slug'] =  Slug(the_post('movie_name'));
            // dd($data);
            $data['movie_code'] = time();
            $movie = Movie::create($data);
            if(isset($data['cast_name'])){
                foreach($data['cast_name'] as $casts){
                    $cast['cast_name'] = $casts;
                    $cast['movie_id'] = $movie;
                    $cast['cast_code'] = time();
                    Cast::create($cast);
                }
            }
            if(isset($data['director_name'])){
                foreach($data['director_name'] as $direct){
                    $director['director_name'] = $direct;
                    $director['movie_id'] = $movie;
                    $director['director_code'] = time();
                    Director::create($director);
                }
            }
            if(isset($data['producers_name'])){
                foreach($data['producers_name'] as $prod){
                    $prodecure['producers_name'] = $prod;
                    $prodecure['movie_id'] = $movie;
                    $prodecure['producers_code'] = time();
                    Producer::create($prodecure);
                }
            }

            if(isset($data['threator_id'])){
                foreach($data['threator_id'] as $threators){
                    $threator['threator_id'] = $threators;
                    $threator['movie_id'] = $movie;
                    MovieThreator::create($threator);
                }
            }
            set_message('success_message','Movie Created Success');
            return route('admin/dashboard/movie/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }

    public function assign(int $id, RouteCollection $routes)
    {
        $movie = Movie::findorFail($id);
        $data = ['data'=> $movie];
        return view('admin.movie.assign',$data);
    }

    public function assign_display(int $id, RouteCollection $routes)
    {
        $creadential = the_post();
        $validationRule =[
            'threator_id' => 'required',
        ];
        $response = Validation::make($creadential,$validationRule);
        if(!empty($response)){
            Validation::setold(the_post());
            return back('errors',$response);
        }

        $threator_id = the_post('threator_id');
        // dd($threator_id);
        $movies_threator = Threator::findorFail($threator_id);
        $data = ['data'=> $movies_threator,
                    'movie_id'=> $id,
                    ];
        return view('admin.movie.assign_create',$data);
    }

    public function get_show(int $id, RouteCollection $routes)
    {
        $show = Show::where('screen_code','=',$id)->get();
        // dd($id);
        echo json_encode($show);
    }

    public function assign_store(RouteCollection $routes)
    {
        // dd(true);
        if(the_post()){
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
            $data = the_post();
            $data['screen_id'] = Screen::where('screen_code','=',$data['screen_code'])->first()->id;
            // dd($data);
            MovieScreen::create($data);
            foreach($data['shows_id'] as $shows){
                $movie_show['movie_id'] = $data['movie_id'];
                $movie_show['shows_id'] = $shows;
                MovieShow::create($movie_show);
            }
        }
        set_message('success_message','Movie Created Success');
        return route('admin/dashboard/movie/index');
    }

    public function delete(int $id, RouteCollection $routes)
    {
         MovieThreator::where('movie_id','=',$id)->delete($id);
        MovieScreen::where('movie_id','=',$id)->delete($id);
        MovieShow::where('movie_id','=',$id)->delete($id);
        $image = Movie::find($id);
        if(!$image['image']==NULL){
           
            unlink_files($image['image']);
        }
        Movie::delete($id);
        set_message('success_message','Movie Deleted Success');
        return route('admin/dashboard/movie/index');
    }

    public function edit(int $id, RouteCollection $routes)
    {
        $data = Movie::findorFail($id);
        $cast = Cast::where('movie_id','=',$id)->get();
        $prodecure = Producer::where('movie_id','=',$id)->get();
        $director= Director::where('movie_id','=',$id)->get();
        $movietherator = MovieThreator::where('movie_id','=',$id)->first();
        $data = [
                'data'=> $data,
                'cast' => $cast,
                'prodecure'=>$prodecure,
                'director' => $director,
                'movietherator'=>$movietherator
           ];

        return view('admin.movie.edit',$data);
    }

    public function update(int $id, RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'movie_name' => 'required',
                'tailler' => 'required',
                'release_date' => 'required',
                'duretion' => 'required',
                'ficial_year'=> 'required',
                'language' => 'required',
                'grade'=> 'required',
                'production_house'=>'required',
                'production_house_type'=>'required',
                'threator_id' => 'required',
                'distributor_code' => 'required',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            $imagedata = [
                'filename' => 'image',
                'path' => 'image',
            ];
        //    dd(files($imagedata));
            $data['image'] = files($imagedata);
            $image = Movie::find($id);
            if(!$data['image']==NULL){
                unlink_files($image['image']);
            }else{
                $data['image'] =$image['image'];
            }
            $data['slug'] =  Slug(the_post('movie_name'));
            // dd($data);
            $data['movie_code'] = time();
            Movie::update($id,$data);
            $movie = $id;
            if(isset($data['cast_name'])){
                Cast::where('movie_id','=',$movie)->delete($movie);
                foreach($data['cast_name'] as $casts){
                    $cast['cast_name'] = $casts;
                    $cast['movie_id'] = $movie;
                    $cast['cast_code'] = time();
                    Cast::create($cast);
                }
            }
            if(isset($data['director_name'])){
                Director::where('movie_id','=',$movie)->delete($movie);
                foreach($data['director_name'] as $direct){
                    $director['director_name'] = $direct;
                    $director['movie_id'] = $movie;
                    $director['director_code'] = time();
                    Director::create($director);
                }
            }
            if(isset($data['producers_name'])){
                Producer::where('movie_id','=',$movie)->delete($movie);
                foreach($data['producers_name'] as $prod){
                    $prodecure['producers_name'] = $prod;
                    $prodecure['movie_id'] = $movie;
                    $prodecure['producers_code'] = time();
                    Producer::create($prodecure);
                }
            }

            if(isset($data['threator_id'])){
                foreach($data['threator_id'] as $threators){
                    $threator['threator_id'] = $threators;
                    $threator['movie_id'] = $movie;
                    MovieThreator::create($threator);
                }
            }
            set_message('success_message','Movie updated Success');
            return route('admin/dashboard/movie/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }
    
}