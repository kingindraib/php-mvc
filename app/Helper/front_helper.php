<?php
use App\Models\Category;
use App\Models\User;

if(!function_exists('getCategory')){
    function getCategory(){
      return Category::all();
        // dd($data);
    }
}

