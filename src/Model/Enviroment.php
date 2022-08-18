<?php
namespace Express\Mymail\Controller;

class Enviroment{

    
    public static function load($dir){
      $rootFolder = $_SERVER["DOCUMENT_ROOT"];
      $pathEnv =  "/.env";
      $lines = (file_exists($rootFolder . $pathEnv)) ? file($rootFolder . $pathEnv) : null;

      foreach($lines as $line){
         putenv(trim($line));
      }

      return ".env file 200";

      continue;
     }
 }
    
