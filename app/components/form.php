<?php

namespace App\Components;

class Form{
   public static function lebel($label){
    return "<label>".$label."</label>";
   }

   public static function input($type,$name,$class,$id,$value){
    return "<input type='$type' name='$name'>";
   }

}