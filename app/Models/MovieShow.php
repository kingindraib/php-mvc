<?php
namespace App\Models;
use App\Models\Model;

class MovieShow extends Model {
    protected static $table ='movie_shows';
    protected static $fillable = ['movie_id','shows_id'];
}