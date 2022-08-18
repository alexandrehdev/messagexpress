<?php
namespace Express\Mymail\Controller;
use Express\Mymail\Model\Mail;
use Express\Mymail\Controller\Builder;
use Express\Mymail\Controller\Home;

class Service 
{
    public static function callHome(){
        echo Home::getHome();
    }

    public static function sendMessage(){
      $builder = new Builder;  
      $mail = new Mail;
      $mail->sendMail(
          $builder->getRecipient(),
          $builder->getSubject(),
          $builder->getMessage()
      );
    }



}

