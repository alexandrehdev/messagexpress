<?php
namespace Express\Mymail\Controller;
use Express\Mymail\Model\Mail as MailModel;
use Express\Mymail\Controller\GetData;

class Mail extends GetData
{
  function __construct()
  {
    parent::__construct();
  }

  public function validateField(){
    if(empty($this->getSubjectMail()) && empty($this->getMessageMail()) ):
      echo "Fields are empty";
    else:
      (new MailModel())->sendMail();
    endif;
  }


}

 ?>
