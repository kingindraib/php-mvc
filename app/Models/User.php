<?php

namespace App\Models;
use App\Models\Model;
use App\Auth\HasAuthentiacible;
use App\Auth\Authenticible;

class User extends Model implements HasAuthentiacible{
    use Authenticible;
    protected static $table = 'users';   
    protected static $fillable = ['first_name','last_name','phone','email','birth','password']; 
}