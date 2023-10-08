<?php

namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Middleware\AuthMiddleware;
use App\Models\User;
use App\Models\Faq;
use App\Provider\Validation;

class FaqController extends Controller
{

    public function __construct(){
        AuthMiddleware::Auth();
    }

    public function index(RouteCollection $routes)
    {
        $faq = Faq::all();
        return view('admin.faq.index', compact('faq'));
    }

    public function create(RouteCollection $routes)
    {
        return view('admin.faq.create');
    }
    public function store(RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'question' => 'required',
                'answer' => 'required',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            Faq::create($data);
            set_message('success_message','Faq Created Success');
            return route('admin/dashboard/faq/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }
    public function edit(int $id, RouteCollection $routes)
    {
        $data = Faq::findorFail($id);
        return view('admin.faq.create',compact('data'));
    }
    public function update(int $id, RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
          
            $data = the_post();

            Faq::update($id,$data);
            set_message('success_message','Faq Update Success');
            return route('admin/dashboard/faq/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
        
    }
    public function delete(int $id, RouteCollection $routes)
    {
        Category::delete($id);
        return back('success_message','Category Deleted Success');
    }
}