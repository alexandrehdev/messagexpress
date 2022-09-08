<?php
namespace Express\Mymail\Controller;
use Express\Mymail\Model\Mail;
use Express\Mymail\Controller\Builder;
use Express\Mymail\Controller\Home;

class Service 
{
    public static function callHome(){
        echo Home::getHomePage();
    }

    public static function sendMessage(){
        echo Home::getSuccessPage();
    }



}

