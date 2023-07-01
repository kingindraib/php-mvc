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
$routes->add('auth.login.submit', new Route('movie/login/submit', array('controller' => 'auth\LoginController@login'), array()));
$routes->add('auth.register', new Route('movie/register', array('controller' => 'auth\LoginController@register'), array()));
$routes->add('auth.register.submit', new Route('movie/register/submit', array('controller' => 'auth\LoginController@store_register'), array()));
