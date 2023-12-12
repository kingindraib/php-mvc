<?php
namespace App\Models;
use App\Models\Model;

class SiteSetting extends Model{

    protected static $table = 'site_settings';
    protected static $fillable = ['meta_key', 'meta_value','autoload'];

}