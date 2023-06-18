<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('homepage', new Route('/movie/', array('controller' => 'PageController@index'), array()));
$routes->add('homepage', new Route('/movie/about/', array('controller' => 'PageController@about'), array()));

// $routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/movie/', array('controller' => 'PageController@index'), array()));
// $routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method'=>'showAction'), array('id' => '[0-9]+')));
