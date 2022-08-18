<?php
  namespace Express\Mymail\Controller;

  class Builder
  {
    private $recipent;
    private $subject;
    private $message;

    function __construct()
    {
      $this->setRecipient($_REQUEST['recipient']);
      $this->setSubject($_REQUEST['subject']);
      $this->setMessage($_REQUEST['message']);
    }

    public function getRecipient() :string{
      return $this->recipent;
    }

    public function setRecipient($recipent) :void{
      $this->recipent = $recipent;
    }

    public function getSubject() :string{
      return $this->subject;
    }

    public function setSubject($subject) :void{
      $this->subject = $subject;
    }

    public function getMessage() :string{
      return $this->message;
    }

    public function setMessage($message) :void{
      $this->message = $message;
    }

  }

 ?>
