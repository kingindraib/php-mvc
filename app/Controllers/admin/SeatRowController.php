<?php
namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Provider\Validation;
use App\Models\SeatRow;


class SeatRowController extends Controller
{
    public function index(RouteCollection $routes)
    {
        $threator = SeatRow::get();
        $data = ['seatrow'=>$threator];
        return view('admin.movie_settings.seatrow.index',$data);
    }

    public function create(RouteCollection $routes)
    {
        return view('admin.movie_settings.seatrow.create');
    }

    public function store(RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'row_name' => 'required',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            // dd($data);
            // $data['threator_code'] = time();
            SeatRow::create($data);
            set_message('success_message','Threator Created Success');
            return route('admin/dashboard/movie/settngs/seatrow/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }

    public function delete(int $id, RouteCollection $routes)
    {
        SeatRow::delete($id);
        return back('errors_message','data deleted succesfully');
    }

    public function edit(int $id, RouteCollection $routes)
    {
        $threator = SeatRow::find($id);
        $data = ['data'=>$threator];
        return view('admin.movie_settings.seatrow.edit',$data);
    }

    public function update(int $id, RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'row_name' => 'required',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            SeatRow::update($id,$data);
            set_message('success_message','Threator Updated Success');
            return route('admin/dashboard/movie/settngs/seatrow/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }
}