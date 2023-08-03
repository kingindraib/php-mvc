<?php
namespace App\Models;
use App\Models\Model;

class Director extends Model{
    protected static $table = 'directors';
    protected static $fillable=[
        'director_name',
        'director_code',
        'movie_id',
    ];
}