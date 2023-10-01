<?php
namespace App\Controllers\admin;

use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Provider\Validation;
use App\Models\User;

class ProfileController extends Controller
{

        public function index(RouteCollection $routes)
        {
            return view('admin.profile.index');
        }

        public function update(int $id, RouteCollection $routes)
        {
            if(the_post()){
                $creadential = the_post();
                $validationRule =[
                    'email' => 'required',
                ];
                $response = Validation::make($creadential,$validationRule);
                if(!empty($response)){
                    Validation::setold(the_post());
                    return back('errors',$response);
                }
                $data = the_post();
                // dd($id);
                // dd($data);
               User::update($id,$data);
            //    dd($res);
                set_message('success_message','Profile Updated Success');
                return route('admin/dashboard/profile/index');
            }else{
                return back('error_message','Method Not Supported, Support Method Post');
            }
        }

        public function change_password(RouteCollection $routes)
        {
            return view('admin.profile.change_password');
        }

        public function update_password(RouteCollection $routes)
        {
            if(the_post()){

                $creadential = the_post();
                $validationRule =[
                    'old_password' => 'required',
                    'password' => 'required',
                    'confirm_password' => 'required|same:password',
                ];
                $response = Validation::make($creadential,$validationRule);
                if(!empty($response)){
                    Validation::setold(the_post());
                    // dd($response);
                    return back('errors',$response);
                }
                $data = the_post();
                // dd($id);
                $id = auth()->id();
                if($data['old_password'] == $data['password']){
                    return back('error_message','Old Password And New Password Should Not Be Same');
                }
                // dd($data);
               User::update($id,$data);
               set_message('success_message','Password Change Successfully');
                return route('admin/dashboard/profile/index');

            }else{
                return back('error_message','Method Not Supported, Support Method Post');
            }
        }

}