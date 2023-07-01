<?php

namespace App\Components;

class Form{
   public static function lebel($label){
    return "<label>".$label."</label>";
   }

   public static function formgroup($label='',$type='',$name='',$class='',$id='',$value=''){
    echo "<div class='form-group'>
      <label for=''>{$label} :</label>
      <input type='{$type}' name='{$name}' class='{$class} form-control' id='{$id}' value='{$value}'>
      ".validation_message('errors',$name)."
      </div>";
   }

   public static function button($label='',$type='',$name='',$value='',$class=''){
    echo "<div class='form-group'>
         <button type='{$type}' name='{$name}' class='{$class} btn btn-primary'>{$label}</button>
         </div>";
   }

}