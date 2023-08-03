<?php
namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Provider\Validation;
use App\Models\Slider;


class SliderController extends Controller
{
    public function index(RouteCollection $routes)
    {
        $slider = Slider::get();
        // $slider = Slider::where('status','=','publish')->get();
        $data = ['slider'=>$slider];
        return view('admin.settings.slider.index',$data);
    }

    public function create(RouteCollection $routes)
    {
        return view('admin.settings.slider.create');
    }

    public function store(RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'slider_name' => 'required',
                // 'image' => 'required',
            ];
            $response = Validation::make($creadential,$validationRule);
            if(!empty($response)){
                Validation::setold(the_post());
                return back('errors',$response);
            }
            $data = the_post();
            $data['slider_code'] = time();
            $data['slug'] = Slug(the_post('slider_name'));
            $imagedata = [
                'filename' => 'image',
                'path' => 'image',
            ];
        //    dd(files($imagedata));
            $data['image'] = files($imagedata);
            // dd($data);
            Slider::create($data);
            set_message('success_message','slider Created Success');
            return route('admin/dashboard/movie/slider/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }

    public function delete(int $id, RouteCollection $routes)
    {
       
        $image = Slider::find($id);
            if(!$image['image']==NULL){
               
                unlink_files($image['image']);
            }
            Slider::delete($id);
        return back('success_message','data deleted succesfully');
    }

    public function edit(int $id, RouteCollection $routes)
    {
        $slider = Slider::find($id);
        $data = ['data'=>$slider];
        return view('admin.settings.slider.edit',$data);
    }

    public function update(int $id, RouteCollection $routes)
    {
        if(the_post()){
            $creadential = the_post();
            $validationRule =[
                'slider_name' => 'required',
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
            $image = Slider::find($id);
            if(!$data['image']==NULL){
               
                unlink_files($image['image']);
            }else{
                $data['image'] =$image['image'];
            }
            // dd($data);
            Slider::update($id,$data);
            set_message('success_message','slider Updated Success');
            return route('admin/dashboard/movie/slider/index');
        }else{
            return back('error_message','Method Not Supported, Support Method Post');
        }
    }
}