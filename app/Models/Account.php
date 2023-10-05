<?php
namespace App\Models;
use App\Models\Model;

class Account extends Model{
    protected static $table = 'accounts';
    protected static $fillable=[
        'user_id',
        'pid',
        'scd',
        'totalAmount',
        'status',
        'refId',
        'movie_id',
        'order_id',
    ];
}