<?php
namespace App\Models;
use App\Models\Model;

class Faq extends Model{
    protected static $table = 'faqs';
    protected static $fillable=[
        'question',
        'answer',
        'status',
    ];
}