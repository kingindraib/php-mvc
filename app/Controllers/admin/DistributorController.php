<?php
namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Provider\Validation;
use App\Models\Distributor;


class DistributorController extends Controller
{
    public function index(RouteCollection $routes)
    {
        $distributor = Distributor::get();
        $data = ['distributor'=>$distributor];
        // dd($data);
        return view('admin.distributor.index',$data);
    }

    public function create(RouteCollection $routes)
    {
        return view('admin.distributor.create');
    }

    public function store(RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'distributor_name' => 'required',
                'phone' =>'int',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            $data['distributor_code'] = time();
            Distributor::create($data);
            set_message('success_message','distributor Created Success');
            return route('admin/dashboard/distributor/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }

    public function delete(int $id, RouteCollection $routes)
    {
        Distributor::delete($id);
        return back('errors_message','data deleted succesfully');
    }

    public function edit(int $id, RouteCollection $routes)
    {
        // dd(true);
        $distributor = Distributor::find($id);
        $data = ['data'=>$distributor];
        return view('admin.distributor.edit',$data);
    }

    public function update(int $id, RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'distributor_name' => 'required',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            Distributor::update($id,$data);
            set_message('success_message','distributor Updated Success');
            return route('admin/dashboard/distributor/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }
}