<?php
require "vendor/autoload.php";
use Express\Mymail\View\Route;
use Express\Mymail\Controller\Service;

Route::redirect("/", function(){
    Service::callHome();
});

Route::redirect("/message", function(){
    Service::sendMessage();
});
  
