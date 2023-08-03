<?php

namespace App\Models;
use App\Models\Model;

class Threator extends Model{
    protected static $table = 'threators';
    protected static $fillable =[
        'threator_name',
        'threator_code',
        'status',
    ];
}