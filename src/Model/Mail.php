<?php
namespace  Express\Mymail\Model;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail{
    
    public function send(array $mailData) :void{

       $mail = new PHPMailer(true);

       try{
           $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
           $mail->isSMTP();                                            
           $mail->Host       = 'smtp.gmail.com';                     
           $mail->SMTPAuth   = true;                                   
           /* email server */
           $mail->Username   = '';                     
           $mail->Password   = '';                            
           $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
           $mail->Port       = 465;      

           $mail->setFrom($mailData["userEmail"], $mailData["username"]);
           $mail->addAddress($mailData["recipient"], $mailData["title"]);
           $mail->Subject = $mailData["subject"];
           $mail->Body    = $mailData["message"];

           $mail->send();

       }catch(Exception $e){
           /* echo "Message could not be sent {$e->getMessage()}"; */
           // header("Location: /error");
       }
    }
}
