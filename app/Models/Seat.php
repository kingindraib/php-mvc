<?php
namespace App\Models;
use App\Models\Model;

class Seat extends Model{
    protected static $table = 'seats';
    protected static $fillable=[
        'seat_name',
        'seat_code',
        'show_code',
        'row_id',
        'column_id',
        'status',
    ];
    /*
    status = available, unavailable
    */
}