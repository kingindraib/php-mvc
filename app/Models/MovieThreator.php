<?php
namespace App\Models;
use App\Models\Model;
use App\Models\Movie;


class MovieThreator extends Model{
    
    protected static $table ='movie_threators';
    protected static $fillable = ['movie_id','threator_id'];

    // public static function movie_name(){
        // echo "true";
        // return $this->belongsTo(Movie::class,'movie_id');
    // }
}