<?php
namespace App\Models;
use App\Models\Model;

class Show extends Model{
    protected static $table = 'shows';
    protected static $fillable=[
        'show_name',
        'show_code',
        'screen_code',
        'show_prize',
        'offer_prize',
        'show_time',
        'show_duration',
        'status',
    ];
}