<?php
namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Provider\Validation;
use App\Models\Threator;


class ThreatorController extends Controller
{
    public function index(RouteCollection $routes)
    {
        $threator = Threator::get();
        $data = ['threator'=>$threator];
        return view('admin.movie_settings.threator.index',$data);
    }

    public function create(RouteCollection $routes)
    {
        return view('admin.movie_settings.threator.create');
    }

    public function store(RouteCollection $routes)
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
            $data['threator_code'] = time();
            Threator::create($data);
            set_message('success_message','Threator Created Success');
            return route('admin/dashboard/movie/settngs/threator/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }

    public function delete(int $id, RouteCollection $routes)
    {
        Threator::delete($id);
        return back('errors_message','data deleted succesfully');
    }

    public function edit(int $id, RouteCollection $routes)
    {
        $threator = Threator::find($id);
        $data = ['data'=>$threator];
        return view('admin.movie_settings.threator.edit',$data);
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
            Threator::update($id,$data);
            set_message('success_message','Threator Updated Success');
            return route('admin/dashboard/movie/settngs/threator/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }
}