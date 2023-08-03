<?php
namespace App\Models;
use App\Models\Model;

class MovieScreen extends Model{
    protected static $table ='movie_screens';
    protected static $fillable = ['movie_id','screen_id'];
}