<?php
  namespace Express\Mymail\Controller;

  class GetData
  {
    private $recipent_mail;
    private $subject_mail;
    private $message_mail;

    function __construct()
    {
      $this->setRecipientMail($_REQUEST['recipient']);
      $this->setSubjectMail($_REQUEST['subject']);
      $this->setMessageMail($_REQUEST['body_email']);
    }

    public function getRecipientMail(){
      return $this->recipent_mail;
    }

    public function setRecipientMail($rmail){
      $this->recipent_mail = $rmail;
    }

    public function getSubjectMail(){
      return $this->subject_mail;
    }

    public function setSubjectMail($subject){
      $this->subject_mail = $subject;
    }

    public function getMessageMail(){
      return $this->message_mail;
    }

    public function setMessageMail($mail){
      $this->message_mail = $mail;
    }

  }

 ?>
