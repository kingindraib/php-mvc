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

use App\Models\Director;
use App\Models\Cast;
use App\Models\Producer;
use App\Models\Seat;
use App\Models\Order;
use Carbon\Carbon;
use App\Models\Movie;


use App\Provider\DatabaseProvider;

if(!function_exists('threator')){
    function threator(){
        return Threator::get();
    }
}
if(!function_exists('threator_code')){
    function threator_code($code){
        return Threator::where('threator_code','=',$code)->first();
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


if(!function_exists('screen_code')){
    function screen_code($screen_code){
        return Screen::where('screen_code','=',$screen_code)->first();
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

// foreach($movie as $mdata){
//     $mdata['directors'] = "hello";
//     // dd( $mdata['directors']);
//     // $mdata['directors'] = Director::where('movie_id',$mdata['id'])->get();
//     // $mdata['distributor_name'] = Distributor::where('distributor_code',$mdata['distributor_code'])->first()->distributor_name;
//     // $mdata['casts'] = Cast::where('movie_id',$mdata['id'])->get();
// }
// dd($movie);

if(!function_exists('movie_distributor')){
    function movie_distributor($distributor_code){
       return Distributor::where('distributor_code','=',$distributor_code)->first();
    }
}

if(!function_exists('movie_cast')){
    function movie_cast($id){
        return  Cast::where('movie_id','=',$id)->get();
    }
}

if(!function_exists('movie_director')){
    function movie_director($id){
        
        $director = Director::where('movie_id','=',$id)->get();
        return $director;
    }
}

if(!function_exists('movie_producer')){
    function movie_producer($id){
        return Producer::where('movie_id','=',$id)->get();
    }
}


if(!function_exists('movie_detail')){
    function movie_detail($id){
        return Movie::findorFail($id);
    }
}

if(!function_exists("seat_detail")){
    function seat_detail($id){
        return Seat::findorFail($id);
    }
}

if(!function_exists("show_detail")){
    function show_detail($id){
        return Show::findorFail($id);
    }
}


/*
----------------------------------------------------------
----------------------------------------------------------
SINGLE PAGE HELPER
----------------------------------------------------------
----------------------------------------------------------
*/

if(!function_exists('show_seat')){
    function show_seat($show_id){
        // dd($show_id);
        $seat = Seat::where('show_id','=','1')->get();
        return $seat;
    }
}

if(!function_exists('screen_show')){
    function screen_show($show_id){
        return Screen::where('show_id','=',$show_id)->get();
    }
}

if(!function_exists('seat_row')){
    function seat_row($id){
        return SeatRow::findorFail($id);
    }
}
if(!function_exists('seat_column')){
    function seat_column($id){
        return SeatColumn::findorFail($id);
    }
}



if(!function_exists('seat_row_group')){
    function seat_row_group($screen_id){
        return Seat::groupBy('row_id','row_id')->where('screen_id','=',$screen_id)->get();
    }
}


if(!function_exists('seat_column_group')){
    function seat_column_group($row_id){
        // dd($row_id);
        $data = Seat::where('row_id','=',$row_id)->get();
        return $data;
    }
}


if(!function_exists('seat_column_group_data')){
    function seat_column_group_data($row_id){
      $query = "SELECT * FROM seats WHERE row_id = :row_id" ;
      $params = array(
          'row_id' => $row_id,
      );
      return DatabaseProvider::DBRaw($query,$params);
    }
}


if(!function_exists('get_seat_status')){
    function get_seat_status($seat_id){
        // dd($seat_id);
        // $seat_id = 30;
    $query = "SELECT * FROM orders WHERE seat_id = :seat_id LIMIT 1" ;
      $params = array(
          'seat_id' => $seat_id,
      );
      $seat =  DatabaseProvider::DBRaw($query,$params);
    //   dd($se$seat
    // dd(obj($seat));
      if(!empty($seat)){
       
        return obj($seat[0]);
      }else{
        
        return false;
      
      }
      

        // $seat = Order::where('seat_id','=',$seat_id)->first();
        // dd($seat);
        // return $seat;
    }
}


if(!function_exists('coming_soon_movie')){
    function coming_soon_movie(){
       $today = Carbon::today()->toDateString();
       $nextweek = Carbon::today()->addWeek()->toDateString();
    //    dd($nextweek);
        $movie = Movie::where('release_date','>',$nextweek)->get();
       return $movie;
    }

}


if(!function_exists('total_selected_seat_price')){
    function total_selected_seat_price(){
        $user_id = Auth()->id;
        $seat = Order::where('user_id','=',$user_id)->get();
        $total = 0;
        if($seat != null){
            foreach($seat as $sdata){
                if($sdata['status']==0){
                    $total += $sdata['amount'];
                }
                
            }
        }   
        
        return $total;
    }
}

if(!function_exists('carbon_date_formattor')){
    function carbon_date_formattor($date){
        return Carbon::parse($date)->format('d M Y');
    }
}


if(!function_exists('generate_random_string')){
    function generate_random_string($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}