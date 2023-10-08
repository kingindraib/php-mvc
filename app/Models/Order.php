<?php
namespace App\Models;
use App\Models\Model;
use App\Models\Movie;


class Order extends Model{
    
    protected static $table ='orders';
    protected static $fillable = ['user_id','movie_id','screen_id','show_id','seat_id','amount','status','payment_method'];

    // public static function movie_name(){
        // echo "true";
        // return $this->belongsTo(Movie::class,'movie_id');
    // }

    /*
    status code = 
    0 = choose seet
    1 = payment success seet
    */
}