<?php
namespace App\Controllers\admin;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Middleware\AuthMiddleware;
use App\Models\User;
use App\Models\SiteSetting;

class SiteSettingsController extends Controller{

    public function index(RouteCollection $routes){
            $data = [
                'site_title' => _site_settings('site_title'),
                'logo' => _site_settings('logo'),
                'tagline' => _site_settings('tagline'),
                'favicon' => _site_settings('favicon'),
            ];
            // dd($data);
            return view('admin.settings.site_settings.index',compact('data'));  

    }

    public function store(RouteCollection $routes)
    {
        if(the_post()){
            $data = the_post();
            // dd($data);
            $logodata = [
                'filename' => 'logo',
                'path' => 'image',
            ];
            $data['logo'] = files($logodata);

            $favicondata = [
                'filename' => 'favicon',
                'path' => 'image',
            ];
            $data['favicon'] = files($favicondata);
            // _site_settings
            if(_site_settings('site_title')==NULL){
                $siteupdate['meta_key'] = 'site_title';
                $siteupdate['meta_value'] = $data['site_title'];
                $siteupdate['site_title'] = $data['site_title'];
                SiteSetting::create($siteupdate);
            }else{
                $title_id = site_settings_detail('site_title')->id;
                $siteupdate['site_title'] = $data['site_title'];
                $siteupdate['meta_value'] = $data['site_title'];
                $siteupdate['meta_key'] = 'site_title';
                SiteSetting::update($title_id,$siteupdate);
            }

            if(_site_settings('tagline')==NULL){
                $tagline['tagline'] = $data['tagline'];
                $tagline['meta_key'] = 'tagline';
                $tagline['meta_value'] = $data['tagline'];
                SiteSetting::create($tagline);
            }else{
                $tag_id = site_settings_detail('tagline')->id;
                $tagline['tagline'] = $data['tagline'];
                $tagline['meta_key'] = 'tagline';
                $tagline['meta_value'] = $data['tagline'];
                SiteSetting::update($tag_id,$tagline);
            }

            if(_site_settings('logo')==NULL){
                $logo['logo'] = $data['logo'];
                $logo['meta_key'] = 'logo';
                $logo['meta_value'] = $data['logo'];
                SiteSetting::create($logo);
            }else{
                $logo_id = site_settings_detail('logo')->id;
                $logo['logo'] = $data['logo'];
                $logo['meta_key'] = 'logo';
                $logo['meta_value'] = $data['logo'];
                SiteSetting::update($logo_id,$logo);
            }

            if(_site_settings('favicon')==NULL){
                $favcon['favicon'] = $data['favicon'];
                $favcon['meta_key'] = 'favicon';
                $favcon['meta_value'] = $data['favicon'];
                SiteSetting::create($favcon);
            }else{
                $fav_id = site_settings_detail('favicon')->id;
                $favcon['meta_key'] = 'favicon';
                $favcon['meta_value'] = $data['favicon'];
                $favcon['favicon'] = $data['favicon'];
                SiteSetting::update($fav_id,$favcon);
            }
            
        }
        return back('success_message','data update success');
    }
}