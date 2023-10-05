<?php
use App\Models\Category;

if(!function_exists('getCategory')){
    function getCategory(){
      return Category::all();
        // dd($data);
    }
}