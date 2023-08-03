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

$routes->add('home.index', new Route('/movie/', ['controller' => 'home\HomeController@home']));

/*
*********************************************************
*********************************************************
          AUTH ROUTE
*********************************************************
*********************************************************
*/
$routes->add('auth.login.index', new Route('/movie/login', ['controller' => 'auth\LoginController@index']));
$routes->add('auth.login.submit', new Route('movie/login/submit', ['controller' => 'auth\LoginController@login']));
$routes->add('auth.register', new Route('movie/register', ['controller' => 'auth\LoginController@register']));
$routes->add('auth.register.submit', new Route('movie/register/submit', ['controller' => 'auth\LoginController@store_register']));

/*
*********************************************************
*********************************************************
          ADMIN ROUTE
*********************************************************
*********************************************************
*/
$routes->add('admin.dashboard', new Route('/movie/admin/dashboard', ['controller' => 'admin\AdminController@index']));

/*
*********************************************************
*********************************************************
          USERMANAGEMENT ROUTE
*********************************************************
*********************************************************
*/
// $routes->add('admin.user.index', new Route('/movie/admin/dashboard/user/index', ['controller' => 'admin\UserController@index']));
$staticurl ='/movie/admin/dashboard/user/';
$staticroute = 'admin.user.';
$staticcontroller = 'admin\UserController@';
$routes->add($staticroute.'index',new Route($staticurl.'index',['controller'=>$staticcontroller.'index']));
$routes->add($staticroute.'create', new Route($staticurl.'create',['controller'=>$staticcontroller.'create']));
$routes->add($staticroute.'store', new Route($staticurl.'store',['controller'=>$staticcontroller.'store']));
$routes->add($staticroute.'delete', new Route($staticurl.'delete/{id}',['controller'=>$staticcontroller.'delete']));
$routes->add($staticroute.'edit', new Route($staticurl.'edit/{id}',['controller'=>$staticcontroller.'edit']));
$routes->add($staticroute.'update', new Route($staticurl.'update/{id}',['controller'=>$staticcontroller.'update']));

/*
*********************************************************
*********************************************************
            MOVIEMANAGEMENT ROUTE
*********************************************************
*********************************************************
*/
$routes->add('admin.movie.index', new Route('/movie/admin/dashboard/movie/index', ['controller' => 'admin\MovieController@index']));
$routes->add('admin.movie.ceate', new Route('/movie/admin/dashboard/movie/create', ['controller' => 'admin\MovieController@create']));
$routes->add('admin.movie.store', new Route('/movie/admin/dashboard/movie/store', ['controller' => 'admin\MovieController@store']));
$routes->add('admin.movie.edit', new Route('/movie/admin/dashboard/movie/edit/{id}', ['controller' => 'admin\MovieController@edit']));
$routes->add('admin.movie.update', new Route('/movie/admin/dashboard/movie/update/{id}', ['controller' => 'admin\MovieController@update']));
$routes->add('admin.movie.delete', new Route('/movie/admin/dashboard/movie/delete/{id}', ['controller' => 'admin\MovieController@delete']));
$routes->add('admin.movie.show', new Route('/movie/admin/dashboard/movie/show/{id}', ['controller' => 'admin\MovieController@show']));

$movieurl ='/movie/admin/dashboard/movie/';
$movieroute = 'admin.movie.';
$moviecontroller ='admin\MovieController@';
$routes->add($movieroute.'movie_threator',new Route($movieurl.'movie_threator',['controller'=>$moviecontroller.'movie_threator']));
$routes->add($movieroute.'assign',new Route($movieurl.'assign/{id}',['controller'=>$moviecontroller.'assign']));
$routes->add($movieroute.'assign.display',new Route($movieurl.'assign/display/{id}',['controller'=>$moviecontroller.'assign_display']));
$routes->add($movieroute.'assign.get_show',new Route($movieurl.'assign/get_show/{id}',['controller'=>$moviecontroller.'get_show']));
$routes->add($movieroute.'assign.store.data',new Route($movieurl.'assign/store/',['controller'=>$moviecontroller.'assign_store']));



/*
*********************************************************
*********************************************************
                THREATORMANAGEMENT ROUTE
*********************************************************
*********************************************************
*/
$staticurl ='/movie/admin/dashboard/movie/movietheator/';
$staticroute = 'admin.movietheator.';
$staticcontroller = 'admin\MovieThreatorController@';
$routes->add($staticroute.'index',new Route($staticurl.'index',['controller'=>$staticcontroller.'index']));
$routes->add($staticroute.'create', new Route($staticurl.'create',['controller'=>$staticcontroller.'create']));
$routes->add($staticroute.'store', new Route($staticurl.'store',['controller'=>$staticcontroller.'store']));
$routes->add($staticroute.'delete', new Route($staticurl.'delete/{id}',['controller'=>$staticcontroller.'delete']));
$routes->add($staticroute.'edit', new Route($staticurl.'edit/{id}',['controller'=>$staticcontroller.'edit']));
$routes->add($staticroute.'update', new Route($staticurl.'update/{id}',['controller'=>$staticcontroller.'update']));




/*
*********************************************************
*********************************************************
                MOVIESETTINGS ROUTE
*********************************************************
*********************************************************
*/
$staticmoviesettings ='/movie/admin/dashboard/movie/settngs/';
$moviesettingroute = 'admin.movie.setting.';
$settingcontroller ='admin\MovieSettingsController@';
$routes->add($moviesettingroute.'index',new Route($staticmoviesettings.'index',['controller'=>$settingcontroller.'index']));

/*
*********************************************************
*********************************************************
                THREATORMANAGEMENT ROUTE
*********************************************************
*********************************************************
*/
$staticurl ='/movie/admin/dashboard/movie/settngs/threator/';
$staticroute = 'admin.movie.threator.';
$staticcontroller = 'admin\ThreatorController@';
$routes->add($staticroute.'index',new Route($staticurl.'index',['controller'=>$staticcontroller.'index']));
$routes->add($staticroute.'create', new Route($staticurl.'create',['controller'=>$staticcontroller.'create']));
$routes->add($staticroute.'store', new Route($staticurl.'store',['controller'=>$staticcontroller.'store']));
$routes->add($staticroute.'delete', new Route($staticurl.'delete/{id}',['controller'=>$staticcontroller.'delete']));
$routes->add($staticroute.'edit', new Route($staticurl.'edit/{id}',['controller'=>$staticcontroller.'edit']));
$routes->add($staticroute.'update', new Route($staticurl.'update/{id}',['controller'=>$staticcontroller.'update']));

/*
*********************************************************
*********************************************************
                    SCREENMANAGEMENT ROUTE
*********************************************************
*********************************************************
*/
$staticurl ='/movie/admin/dashboard/movie/settngs/screen/';
$staticroute = 'admin.movie.screen.';
$staticcontroller = 'admin\ScreenController@';
$routes->add($staticroute.'index',new Route($staticurl.'index',['controller'=>$staticcontroller.'index']));
$routes->add($staticroute.'create', new Route($staticurl.'create',['controller'=>$staticcontroller.'create']));
$routes->add($staticroute.'store', new Route($staticurl.'store',['controller'=>$staticcontroller.'store']));
$routes->add($staticroute.'delete', new Route($staticurl.'delete/{id}',['controller'=>$staticcontroller.'delete']));
$routes->add($staticroute.'edit', new Route($staticurl.'edit/{id}',['controller'=>$staticcontroller.'edit']));
$routes->add($staticroute.'update', new Route($staticurl.'update/{id}',['controller'=>$staticcontroller.'update']));

/*
*********************************************************
*********************************************************
                    SHOWMANAGEMENT ROUTE
*********************************************************
*********************************************************
*/
$staticurl ='/movie/admin/dashboard/movie/settngs/show/';
$staticroute = 'admin.movie.show.';
$staticcontroller = 'admin\ShowController@';
$routes->add($staticroute.'index',new Route($staticurl.'index',['controller'=>$staticcontroller.'index']));
$routes->add($staticroute.'create', new Route($staticurl.'create',['controller'=>$staticcontroller.'create']));
$routes->add($staticroute.'store', new Route($staticurl.'store',['controller'=>$staticcontroller.'store']));
$routes->add($staticroute.'delete', new Route($staticurl.'delete/{id}',['controller'=>$staticcontroller.'delete']));
$routes->add($staticroute.'edit', new Route($staticurl.'edit/{id}',['controller'=>$staticcontroller.'edit']));
$routes->add($staticroute.'update', new Route($staticurl.'update/{id}',['controller'=>$staticcontroller.'update']));

/*
*********************************************************
*********************************************************
                SEATROWMANAGEMENT ROUTE
*********************************************************
*********************************************************
*/
$staticurl ='/movie/admin/dashboard/movie/settngs/seatrow/';
$staticroute = 'admin.movie.seatrow.';
$staticcontroller = 'admin\SeatRowController@';
$routes->add($staticroute.'index',new Route($staticurl.'index',['controller'=>$staticcontroller.'index']));
$routes->add($staticroute.'create', new Route($staticurl.'create',['controller'=>$staticcontroller.'create']));
$routes->add($staticroute.'store', new Route($staticurl.'store',['controller'=>$staticcontroller.'store']));
$routes->add($staticroute.'delete', new Route($staticurl.'delete/{id}',['controller'=>$staticcontroller.'delete']));
$routes->add($staticroute.'edit', new Route($staticurl.'edit/{id}',['controller'=>$staticcontroller.'edit']));
$routes->add($staticroute.'update', new Route($staticurl.'update/{id}',['controller'=>$staticcontroller.'update']));

/*
*********************************************************
*********************************************************
                SEATCOLUMNMANAGEMENT ROUTE
*********************************************************
*********************************************************
*/
$staticurl ='/movie/admin/dashboard/movie/settngs/seatcolumn/';
$staticroute = 'admin.movie.seatcolumn.';
$staticcontroller = 'admin\SeatColumnController@';
$routes->add($staticroute.'index',new Route($staticurl.'index',['controller'=>$staticcontroller.'index']));
$routes->add($staticroute.'create', new Route($staticurl.'create',['controller'=>$staticcontroller.'create']));
$routes->add($staticroute.'store', new Route($staticurl.'store',['controller'=>$staticcontroller.'store']));
$routes->add($staticroute.'delete', new Route($staticurl.'delete/{id}',['controller'=>$staticcontroller.'delete']));
$routes->add($staticroute.'edit', new Route($staticurl.'edit/{id}',['controller'=>$staticcontroller.'edit']));
$routes->add($staticroute.'update', new Route($staticurl.'update/{id}',['controller'=>$staticcontroller.'update']));

/*
*********************************************************
*********************************************************
                SEATMANAGEMENT ROUTE
*********************************************************
*********************************************************
*/
$staticurl ='/movie/admin/dashboard/movie/settngs/seat/';
$staticroute = 'admin.movie.seat.';
$staticcontroller = 'admin\SeatController@';
$routes->add($staticroute.'index',new Route($staticurl.'index',['controller'=>$staticcontroller.'index']));
$routes->add($staticroute.'create', new Route($staticurl.'create',['controller'=>$staticcontroller.'create']));
$routes->add($staticroute.'store', new Route($staticurl.'store',['controller'=>$staticcontroller.'store']));
$routes->add($staticroute.'delete', new Route($staticurl.'delete/{id}',['controller'=>$staticcontroller.'delete']));
$routes->add($staticroute.'edit', new Route($staticurl.'edit/{id}',['controller'=>$staticcontroller.'edit']));
$routes->add($staticroute.'update', new Route($staticurl.'update/{id}',['controller'=>$staticcontroller.'update']));




/*
*********************************************************
*********************************************************
                TICKETSETTINGS ROUTE
*********************************************************
*********************************************************
*/
$staticmoviesettings ='/movie/admin/dashboard/movie/tickets/settings/';
$moviesettingroute = 'admin.movie.tickets.';
$settingcontroller ='admin\TicketsSettingsController@';
$routes->add($moviesettingroute.'index',new Route($staticmoviesettings.'index',['controller'=>$settingcontroller.'index']));



/*
*********************************************************
*********************************************************
                    seetings ROUTE
*********************************************************
*********************************************************
*/
$staticurl ='/movie/admin/dashboard/movie/settings/';
$staticroute = 'admin.movie.seetings.';
$staticcontroller ='admin\SettingsController@';
$routes->add($staticroute.'index',new Route($staticurl.'index',['controller'=>$staticcontroller.'index']));


/*
*********************************************************
*********************************************************
                    SLIDERSETTINGS ROUTE
*********************************************************
*********************************************************
*/
$staticurl ='/movie/admin/dashboard/movie/slider/';
$staticroute = 'admin.movie.slider.';
$staticcontroller = 'admin\SliderController@';
$routes->add($staticroute.'index',new Route($staticurl.'index',['controller'=>$staticcontroller.'index']));
$routes->add($staticroute.'create', new Route($staticurl.'create',['controller'=>$staticcontroller.'create']));
$routes->add($staticroute.'store', new Route($staticurl.'store',['controller'=>$staticcontroller.'store']));
$routes->add($staticroute.'delete', new Route($staticurl.'delete/{id}',['controller'=>$staticcontroller.'delete']));
$routes->add($staticroute.'edit', new Route($staticurl.'edit/{id}',['controller'=>$staticcontroller.'edit']));
$routes->add($staticroute.'update', new Route($staticurl.'update/{id}',['controller'=>$staticcontroller.'update']));



/*
*********************************************************
*********************************************************
                DISTRIBUTORMANAGEMENT ROUTE
*********************************************************
*********************************************************
*/
$staticurl ='/movie/admin/dashboard/distributor/';
$staticroute = 'admin.movie.distributor.';
$staticcontroller = 'admin\DistributorController@';
$routes->add($staticroute.'index',new Route($staticurl.'index',['controller'=>$staticcontroller.'index']));
$routes->add($staticroute.'create', new Route($staticurl.'create',['controller'=>$staticcontroller.'create']));
$routes->add($staticroute.'store', new Route($staticurl.'store',['controller'=>$staticcontroller.'store']));
$routes->add($staticroute.'delete', new Route($staticurl.'delete/{id}',['controller'=>$staticcontroller.'delete']));
$routes->add($staticroute.'edit', new Route($staticurl.'edit/{id}',['controller'=>$staticcontroller.'edit']));
$routes->add($staticroute.'update', new Route($staticurl.'update/{id}',['controller'=>$staticcontroller.'update']));