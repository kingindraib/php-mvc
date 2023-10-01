<?php
namespace App\Models;
use App\Models\Model;

class Movie extends Model{
    protected static $table ='movies';
    protected static $fillable =[
        'movie_name',
        'movie_code',
        'tailler',
        'release_date',
        'duretion',
        'ficial_year',
        'grade',
        'language',
        'production_house',
        'production_house_type',
        'threator',
        'screen',
        'shows',
        'distributor_code',
        'image',
        'description',
        'slug',
        'movie_type',
    ];

}