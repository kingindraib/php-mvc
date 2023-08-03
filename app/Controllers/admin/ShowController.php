<?php
namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Provider\Validation;
use App\Models\Show;


class ShowController extends Controller
{
    public function index(RouteCollection $routes)
    {
        $show = Show::get();
        $data = ['show'=>$show];
        return view('admin.movie_settings.shows.index',$data);
    }

    public function create(RouteCollection $routes)
    {
        return view('admin.movie_settings.shows.create');
    }

    public function store(RouteCollection $routes)
    {
        if(the_post()){
            // dd(the_post());
            $creadential = the_post();
            $validationRule =[
                'show_name' => 'required',
                'show_prize' => 'required|int',
                'offer_prize' => 'int',
                'show_duration' => 'required|int',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                // dd($response);
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            $data['show_code'] = time();
            Show::create($data);
            set_message('success_message','shows Created Success');
            return route('admin/dashboard/movie/settngs/show/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }

    public function delete(int $id, RouteCollection $routes)
    {
        Show::delete($id);
        return back('errors_message','data deleted succesfully');
    }

    public function edit(int $id, RouteCollection $routes)
    {
        $shows = Show::findorFail($id);
        $data = ['data'=>$shows];
        return view('admin.movie_settings.shows.edit',$data);
    }

    public function update(int $id, RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'shows_name' => 'required',
                'show_prize' => 'required|int',
                'offer_prize' => 'required|int',
                'show_duration' => 'required|int',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            Show::update($id,$data);
            set_message('success_message','shows Updated Success');
            return route('admin/dashboard/movie/settngs/show/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }
}