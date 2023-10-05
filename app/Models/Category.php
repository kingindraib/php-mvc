<?php
namespace App\Models;
use App\Models\Model;

class Category extends Model{
    protected static $table = 'categories';
    protected static $fillable=[
        'category_name',
        'slug',
        'status',
        'is_nav',
    ];
}