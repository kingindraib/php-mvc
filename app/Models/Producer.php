<?php
namespace App\Models;
use App\Models\Model;

class Producer extends Model{
    protected static $table = 'producers';
    protected static $fillable=[
        'producers_name',
        'producers_code',
        'movie_id',
    ];
}