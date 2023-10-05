<?php
namespace App\Models;
use App\Models\Model;

class Post extends Model{
    protected static $table = 'posts';
    protected static $fillable=[
        'title',
        'description',
        'category_id',
        'image',
        'status',
    ];
}