<?php
namespace Express\Mymail\View;

class Route
{
  public static function redirect($folder){
    header("Location: src/View/{$folder}/index.php");
  }
}

 ?>
