<?php
namespace Express\Mymail\Model;
use Express\Mymail\Controller\Mail as MailController;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail extends MailController
{
  public $mail;

  function __construct()
  {
    parent::__construct();
    $this->mail = new PHPMailer(true);
  }

  public function sendMail(){
    try {
      //Server settings
        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $this->mail->isSMTP();                                            //Send using SMTP
        $this->mail->Host       = 'smtp.live.com';  //smtp.live.com             //Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;
        // $this->mail->SMTPDebug = 2;
        // $this->mail->SMTPSecure = 'tls';                                //Enable SMTP authentication
        $this->mail->Username   = '';              //SMTP username
        $this->mail->Password   = '';                               //SMTP password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $this->mail->Port       = 587;     //465                               //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
        $this->mail->setFrom('exemple', 'Mailer');
        $this->mail->addAddress($this->getRecipientMail());     //Add a recipient
        // $this->mail->addAddress('ellen@example.com');               //Name is optional
        $this->mail->addReplyTo('info@example.com', 'Information');

      //Content
        $this->mail->isHTML(true);                                  //Set email format to HTML
        $this->mail->Subject = $this->getSubjectMail();
        $this->mail->Body    = $this->getMessageMail();
        // $this->mail->AltBody = 'It was sent';

        $this->mail->send();
      // echo 'Message has been sent';
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
    }
  }
}

 ?>
