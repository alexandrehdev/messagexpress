<?php
namespace Express\Mymail\Controller;
use Express\Mymail\View\View;

class Home{

  public static function nameElements() :array{
      $elements = View::getNameElements();
	  $elements = array_map(function($item){
           return basename($item,'.html');
	 },$elements);

	   rsort($elements);

	   return $elements;
   }

  public static function getHomePage() {
     $nameElement = self::nameElements();
     $content = View::getElements();

     return View::render("index", [
          $nameElement[1] => $content[1],
          $nameElement[4] => $content[4],
          $nameElement[2] => $content[2]
      ]);

   }

   public static function getSuccessPage() {
      $nameElement = self::nameElements();
      $content = View::getElements();

      return View::render("index", [
          $nameElement[1] => $content[1],
          $nameElement[4] => $content[0],
          $nameElement[2] => $content[2]
      ]);
   }

   public static function getErrorPage(){
      $nameElement = self::nameElements();
      $content = View::getElements();

      return View::render("index", [
         $nameElement[1] => $content[1],
         $nameElement[4] => $content[3],
         $nameElement[2] => $content[2]
      ]);    
   }
}
