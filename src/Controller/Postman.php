<?php
namespace Express\Mymail\Controller;
use Express\Mymail\Controller\Builder;
use Express\Mymail\Model\Mail;

class Postman{
    
    public function getMailData() :array{
        $builder = new Builder();

        $mailData = [
            "username" => $builder->getUsername(),
            "title" => $builder->getTitle(),
            "userEmail" => $builder->getUserEmail(),
            "recipient" => $builder->getRecipient(),
            "subject" => $builder->getSubject(),
            "message" => $builder->getMessage()
        ];

        return $mailData;
    }
    

    public function postMail() :void{
        $mailData = $this->getMailData();
        $mail = new Mail();
        $mail->send($mailData);
        header("Location: /success");
    }

        

}   
