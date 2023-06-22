<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
$routes = new RouteCollection();


/*
*********************************************************
*********************************************************
*********************************************************
         ROUTE MANAGEMENT
*********************************************************
*********************************************************
*********************************************************
*/

$routes->add('home.index', new Route('/movie/', array('controller' => 'home\HomeController@home'), array()));

/*
*********************************************************
*********************************************************
          AUTH ROUTE
*********************************************************
*********************************************************
*/
$routes->add('auth.login.index', new Route('/movie/login', array('controller' => 'auth\LoginController@index'), array()));
