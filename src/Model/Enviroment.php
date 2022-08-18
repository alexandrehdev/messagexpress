<?php
namespace Express\Mymail\Model;

class Enviroment{

    
    public static function load($dir){
      $rootFolder = $_SERVER["DOCUMENT_ROOT"];
      $pathEnv =  "/.env";

      if(file_exists($rootFolder . $pathEnv)){
        $lines = file($rootFolder . $pathEnv); 
      }else{
          return ".env not found";
      }

      foreach($lines as $line){
         putenv(trim($line));
      }

      return ".env file 200";
 }

}
    
