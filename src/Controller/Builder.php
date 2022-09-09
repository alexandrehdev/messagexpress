<?php
  namespace Express\Mymail\Controller;

  class Builder{
    private $username;

    private $title;
    
    private $userEmail;

    private $recipent;

    private $subject;

    private $message;


    function __construct(){
       $this->setTitle($_REQUEST['title']);
       $this->setUsername($_REQUEST['username']);
       $this->setUserEmail($_REQUEST['userEmail']);
       $this->setRecipient($_REQUEST['recipient']);
       $this->setSubject($_REQUEST['subject']);
       $this->setMessage($_REQUEST['message']);
    }

    public function getUsername() :string{
        return $this->username;
    }

    public function setUsername(string $username):void{
        $this->username = $username;
    }

    public function getTitle() :string{
        return $this->title;
    }

    public function getUserEmail() :string{
        return $this->userEmail;
    }

    public function setUserEmail(string $userEmail) :void{
        $this->userEmail = $userEmail;
    }

    public function setTitle(string $title) :void{
        $this->title = $title;
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
