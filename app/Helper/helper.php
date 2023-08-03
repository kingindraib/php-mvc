<?php
use App\Models\Threator;
use App\Models\Screen;
use App\Models\Show;
use App\Models\User;
use App\Models\SeatColumn;
use App\Models\SeatRow;
use App\Models\Distributor;
use App\Models\MovieThreator;
use App\Models\MovieScreen;
use App\Models\MovieShow;


if(!function_exists('threator')){
    function threator(){
        return Threator::get();
    }
}

if(!function_exists('threator_name')){
    function threator_name($id){
        return Threator::findorFail($id);
    }
}


if(!function_exists('screen')){
    function screen(){
        return Screen::get();
    }
}
if(!function_exists('screen_name')){
    function screen_name($id){
        return Screen::findorFail($id);
    }
}

if(!function_exists('screen_code')){
    function screen_code($id){
        return Screen::where('screen_code','=',$id)->first();
    }
}

if(!function_exists('show')){
    function show(){
        return Show::get();
    }
}

if(!function_exists('show_name')){
    function show_name($id){
        return Show::findorFail($id);
    }
}

if(!function_exists('seatcolumn')){
    function seatcolumn(){
        return SeatColumn::get();
    }
}


if(!function_exists('seatrow')){
    function seatrow(){
        return SeatRow::get();
    }
}

if(!function_exists('distributor')){
    function distributor(){
        return Distributor::get();
    }
}

if(!function_exists('distributor_code_name')){
    function distributor_code_name($code){
        return Distributor::where('distributor_code','=',$code)->first();
    }
}

if(!function_exists('movie_threator')){
    function movie_threator($id){
        return MovieThreator::where('movie_id','=',$id)->get();
    }
}

if(!function_exists('movie_screen')){
    function movie_screen($id){
        return MovieScreen::where('movie_id','=',$id)->get();
    }
}

if(!function_exists('movie_show')){
    function movie_show($id){
        return MovieShow::where('movie_id','=',$id)->get();
    }
}

if(!function_exists('threator_screen')){
    function threator_screen($threator_code){
        // dd($threator_code);
        return Screen::where('threator_code','=',$threator_code)->get();
    }
}

