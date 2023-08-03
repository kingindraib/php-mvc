<?php
namespace App\Models;
use App\Models\Model;

class Cast extends Model{
    protected static $table = 'casts';
    protected static $fillable=[
        'cast_name',
        'cast_code',
        'movie_id',
    ];
}