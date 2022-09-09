<?php
require "vendor/autoload.php";
use Express\Mymail\View\Route;
use Express\Mymail\Controller\Service;

Route::redirect("/", function(){
    Service::mainPage();
});

Route::redirect("/send", function(){
    Service::sendMessage();
});

Route::redirect("/success", function(){
    Service::mailSent();
}); 

