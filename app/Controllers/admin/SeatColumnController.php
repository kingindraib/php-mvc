<?php
namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Provider\Validation;
use App\Models\SeatColumn;


class SeatColumnController extends Controller
{
    public function index(RouteCollection $routes)
    {
        $threator = SeatColumn::get();
        $data = ['seatcolumn'=>$threator];
        return view('admin.movie_settings.seatcolumns.index',$data);
    }

    public function create(RouteCollection $routes)
    {
        return view('admin.movie_settings.seatcolumns.create');
    }

    public function store(RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'column_name' => 'required',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            // dd($data);
            // $data['threator_code'] = time();
            SeatColumn::create($data);
            set_message('success_message','Threator Created Success');
            return route('admin/dashboard/movie/settngs/seatcolumn/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }

    public function delete(int $id, RouteCollection $routes)
    {
        SeatColumn::delete($id);
        return back('errors_message','data deleted succesfully');
    }

    public function edit(int $id, RouteCollection $routes)
    {
        $threator = SeatColumn::find($id);
        $data = ['data'=>$threator];
        return view('admin.movie_settings.seatcolumns.edit',$data);
    }

    public function update(int $id, RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'column_name' => 'required',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            SeatColumn::update($id,$data);
            set_message('success_message','Threator Updated Success');
            return route('admin/dashboard/movie/settngs/seatcolumns/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }
}