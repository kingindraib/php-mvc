<?php

namespace App\Models;
use App\Models\Model;

class Slider extends Model{
    protected static $table = 'sliders';
    protected static $fillable =[
        'slider_name',
        'slug',
        'image',
        'status',
    ];

}