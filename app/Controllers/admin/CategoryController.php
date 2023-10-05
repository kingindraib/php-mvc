<?php

namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Middleware\AuthMiddleware;
use App\Models\User;
use App\Models\Category;
use App\Provider\Validation;

class CategoryController extends Controller
{

    public function __construct(){
        AuthMiddleware::Auth();
    }

    public function index(RouteCollection $routes)
    {
        // dd(true);
        $category = Category::get();
        $data = [
            'category' => $category,
        ];
        return view('admin.settings.category.index',$data);
    }

    public function create(RouteCollection $routes)
    {
        return view('admin.settings.category.create');
    }

    public function store(RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'category_name' => 'required',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            $data['slug'] = Slug($data['category_name']);
            Category::create($data);
            set_message('success_message','Category Created Success');
            return route('admin/dashboard/category/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }

    public function edit(int $id, RouteCollection $routes)
    {
        $data = Category::findorFail($id);
        return view('admin.settings.category.edit',['data' => $data]);

    }
    public function update(int $id,RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
          
            $data = the_post();

            Category::update($id,$data);
            set_message('success_message','Category Created Success');
            return route('admin/dashboard/category/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }

    public function delete(int $id,RouteCollection $routes)
    {
        Category::delete($id);
        set_message('success_message','Category Deleted Success');
        return route('admin/dashboard/category/index');
    }

}
