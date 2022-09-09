<?php
namespace Express\Mymail\Controller;
use Express\Mymail\Controller\Home;
use Express\Mymail\Controller\Postman;

class Service 
{
    public static function mainPage(){
        echo Home::getHomePage();
    }

    public static function sendMessage(){
        $postman = new Postman();
        $postman->postMail();
    }

    public static function mailSent(){
        echo Home::getSuccessPage();
    }

    public static function errorPage(){
        echo Home::getErrorPage();
    }


}

