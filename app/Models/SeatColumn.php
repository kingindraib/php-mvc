<?php
namespace App\Models;
use App\Models\Model;

class SeatColumn extends Model{
    protected static $table = 'seatcolumns';
    protected static $fillable=[
        'column_name',
        // 'status',
    ];
    /*
    status = available, unavailable
    */
}