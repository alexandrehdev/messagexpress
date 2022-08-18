<?php
namespace Express\Mymail\Model;
use Express\Mymail\Model\Enviroment;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail 
{
  private $mail;

  function __construct()
  {
      $this->mail = new PHPMailer; 
  }

  public function sendMail(string $recipient, string $subject, string $message){
     Enviroment::load(__DIR__);

     try {
        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
        $this->mail->isSMTP();                                          //Send using SMTP
        $this->mail->Host = 'smtp.gmail.com';  //smtp.live.com          //Set the SMTP server to send through
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPDebug = 1;
        $this->mail->SMTPSecure = 'tls';                             //Enable SMTP authentication */
        $this->mail->Username = getenv("EMAIL");                     //SMTP username
        $this->mail->Password = getenv("PASS");                //SMTP password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;       //Enable implicit TLS encryption */
        $this->mail->Port  = 587;     //465                             //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
        $this->mail->setFrom($recipient, 'Confirmação de Email');
        /* $this->mail->addAddress($recipient);     //Add a recipient */
        // $this->mail->addAddress('ellen@example.com');               //Name is optional
        // $this->mail->addReplyTo('alexandrehldev@gmail.com', 'Information');

      //Content
        $this->mail->isHTML(true);                                  //Set email format to HTML
        $this->mail->Subject = $subject;
        $this->mail->Body    = $message;
        // $this->mail->AltBody = 'It was sent';

        $this->mail->send();
        echo "<script>alert('Email has been sent')</script>";

    }catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
    }
  }
}

