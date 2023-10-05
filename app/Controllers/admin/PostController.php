<?php

namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Middleware\AuthMiddleware;
use App\Models\User;
use App\Models\Post;
use App\Provider\Validation;

class PostController extends Controller
{

    public function __construct(){
        AuthMiddleware::Auth();
    }

    public function index(RouteCollection $routes)
    {
        $post = Post::all();
        return view('admin.settings.post.index',compact('post'));
    }

    public function create(RouteCollection $routes)
    {
        return view('admin.settings.post.create');
    }

    public function store(RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'title' => 'required',
                // 'image' => 'required',
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
            // dd($data);
            Post::create($data);
            set_message('success_message','Post Created Success');
            return route('admin/dashboard/post_management/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }

    public function delete(int $id, RouteCollection $routes)
    {
       
        $image = Post::find($id);
            if(!$image['image']==NULL){
               
                unlink_files($image['image']);
            }
            Post::delete($id);
        return back('success_message','data deleted succesfully');
    }

    public function edit(int $id, RouteCollection $routes)
    {
        $data = Post::findorFail($id);
        return view('admin.settings.post.edit',compact('data'));
    }

    public function update(int $id, RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'title' => 'required',
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
            $data['image'] = files($imagedata);
            $image = Post::find($id);
            if(!$data['image']==NULL){
               
                unlink_files($image['image']);
            }else{
                $data['image'] =$image['image'];
            }
            // dd($data);
            Post::update($id,$data);
            set_message('success_message','Post Updated Success');
            return route('admin/dashboard/post_management/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }
}
