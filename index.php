<?php
  require_once("vendor/autoload.php");

  include_once("web/route.php");
  use Express\Mymail\Model\Enviroment;

  Enviroment::load(__DIR__);

  /* setting route */ 
  /* echo Home::getHome(); */


