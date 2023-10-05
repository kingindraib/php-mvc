<?php

namespace App\Controllers\home;
use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Middleware\AuthMiddleware;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class ArchiveController extends Controller
{

    // public function __construct(){
    //     AuthMiddleware::Auth();
    // }

    public function archive(int $id, RouteCollection $routes)
    {
        // dd(true);
        $data = Post::where('category_id','=',$id)->where('status','=','publish')->first();
        return view('home.archive.archive',compact('data'));
    }
}