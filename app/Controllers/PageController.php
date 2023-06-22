<?php 

namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class PageController extends Controller
{
	public function index(RouteCollection $routes){
		echo "test";
	}
    // Homepage action
	public function about(RouteCollection $routes)
	{
		// $routeToProduct = str_replace('{id}', 1, $routes->get('product')->getPath());

        // require_once APP_ROOT . '/views/home/index.php';
		// echo "hello";
		// echo $id;
		print_r($routes);
		$data = ['message' => 'Welcome to Bladettyyt!'];
		// return view('home/index',$data);
		return view('home/about',$data);
        
	}

	public function getValue(int $id, RouteCollection $routes)
	{
		echo $id;
	}
}