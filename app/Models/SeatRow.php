<?php
namespace App\Models;
use App\Models\Model;

class SeatRow extends Model{
    protected static $table = 'seatrows';
    protected static $fillable=[
        'row_name',
        // 'status',
    ];
    /*
    status = available, unavailable
    */
}