<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();

$routes->add('adminpage', new Route('/movie/admin/dashboard/', array('controller' => 'PageController@index'), array()));