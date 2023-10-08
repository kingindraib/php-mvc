<?php
namespace App\Controllers\home;

use App\Controllers\Controller;
use Symfony\Component\Routing\RouteCollection;
use App\Models\Faq;



class PageController extends Controller 
{
    public function faq(RouteCollection $routes)
    {
        $faq = Faq::all();
        return view('home.page.faq',compact('faq'));
    }
}