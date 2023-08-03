<?php
namespace App\Models;
use App\Models\Model;

class Screen extends Model{
    protected static $table = 'screens';
    protected static $fillable=[
        'screen_name',
        'screen_code',
        'threator_code',
        'seat_rows',
        'seat_columns',
        'status',
    ];
}

