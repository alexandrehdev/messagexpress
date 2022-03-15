<?php
  require_once("../../../vendor/autoload.php");
  use Express\Mymail\Controller\GetData;
  use Express\Mymail\Controller\Mail;

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    (new GetData());
    (new Mail())->validateField();
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="css/variables.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/elements.css">
</head>
<body>
  <header>
    <div class="header-content">
    <div class="main-title">
        <h1>MailExpress</h1>
    </div>
    <div class="info">
        <span>Info</span>
        <span>Github</span>
    </div>
  </div>
  </header>
  <div class="form-content">
    <form class="main-form" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
      <div class="field">
        <input type="text" name="recipient" autocomplete="off" placeholder="Recipient Email">
      </div>
      <div class="field">
        <input type="text" name="subject" autocomplete="off" placeholder="Subject">
      </div>
      <div class="field">
        <textarea rows="8" name="body_email" name="body" cols="80" placeholder="Message"></textarea>
      </div>
      <div class="field">
        <input type="submit" value="Send">
      </div>
    </form>
  </div>
    
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
