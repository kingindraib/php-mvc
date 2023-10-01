<?php
namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Provider\Validation;
use App\Models\SeatColumn;
use App\Models\Seat;


class SeatController extends Controller
{
    public function index(RouteCollection $routes)
    {
        $seat = Seat::get();
        $data = ['seat'=>$seat];
        return view('admin.movie_settings.seat.index',$data);
    }

    public function create(RouteCollection $routes)
    {
        return view('admin.movie_settings.seat.create');
    }

    public function store(RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'seat_name' => 'required',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            // dd($data);
            $data['seat_code'] = time();
            Seat::create($data);
            set_message('success_message','Seat Created Success');
            return route('admin/dashboard/movie/settngs/seat/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }

    public function delete(int $id, RouteCollection $routes)
    {
        Seat::delete($id);
        return back('errors_message','data deleted succesfully');
    }

    public function edit(int $id, RouteCollection $routes)
    {
        $seat = Seat::findorFail($id);
        $data = ['data'=>$seat];
        return view('admin.movie_settings.seat.edit',$data);
    }

    public function update(int $id, RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'seat_name' => 'required',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            Seat::update($id,$data);
            set_message('success_message','Seat Updated Success');
            return route('admin/dashboard/movie/settngs/seat/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }
}