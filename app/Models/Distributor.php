<?php
namespace App\Models;
use App\Models\Model;

class Distributor extends Model{
    protected static $table = 'distributors';
    protected static $fillable=[
        'distributor_name',
        'distributor_code',
        'email',
        'phone',
        'address',
        'website',
    ];
}