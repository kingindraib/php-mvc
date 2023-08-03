<?php
namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Provider\Validation;
use App\Models\Screen;


class ScreenController extends Controller
{
    public function index(RouteCollection $routes)
    {
        $threator = Screen::get();
        $data = ['screen'=>$threator];
        return view('admin.movie_settings.screen.index',$data);
    }

    public function create(RouteCollection $routes)
    {
        return view('admin.movie_settings.screen.create');
    }

    public function store(RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'screen_name' => 'required',
                'seat_rows'=>'required',
                'threator_code'=>'required',
                'seat_columns' =>'required'
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            $data['screen_code'] = time();
            // dd($data);
            Screen::create($data);
            set_message('success_message','Threator Created Success');
            return route('admin/dashboard/movie/settngs/screen/index');
        }else{
            return back('errors_message','Method Not Supported, Support Method Post');
        }
    }

    public function delete(int $id, RouteCollection $routes)
    {
        Screen::delete($id);
        return back('errors_message','data deleted succesfully');
    }

    public function edit(int $id, RouteCollection $routes)
    {
        $threator = Screen::find($id);
        $data = ['data'=>$threator];
        return view('admin.movie_settings.screen.edit',$data);
    }

    public function update(int $id, RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'threator_name' => 'required',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            Screen::update($id,$data);
            set_message('success_message','Threator Updated Success');
            return route('admin/dashboard/movie/settngs/screen/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }
}