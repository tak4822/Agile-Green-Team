<?php
ob_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



//Load composer's autoloader
require 'vendor/autoload.php';

if(!$fake){
    $userName = filter_var($_POST["fullName"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $fake = $_POST["name_2"];

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

    $mail->setFrom('tkc4822@gmail.com', 'Make You Vote');
    $mail->addAddress($email);

    //Attachments
    $mail->AddEmbeddedImage('../../img/logo.png', 'logo');
    $mail->AddEmbeddedImage('../../img/green.png', 'green');
    $mail->AddEmbeddedImage('../../img/ndp.png', 'ndp');
    $mail->AddEmbeddedImage('../../img/conservative.png', 'conservative');
    $mail->AddEmbeddedImage('../../img/liberal.png', 'liberal');

    $url = 'http://takeshioide.com/makeyouvote/Agile-Green-Team/compare.php';

    $body='<body style="background: #C0C31B, linear-gradient(#169684, #6322A2, #C0C31B); padding-top: 50px; font-family: Verdana, Geneva, sans-serif;">';
      $body.='<div style="max-width: 500px; height: auto; padding: 20px; margin: auto; background: white;">';
        $body.='<div style="border: 1px solid #444; text-align: center; padding: 10px 30px;">';
          $body.='<img style="width: 100px;" src="cid:logo">';

          $body.='<h1 style="margin-bottom: 60px;">WELCOME</h1>';
          $body.='<h4>Hi '.$userName.'</h4>';
          $body.='<p style="font-size: 1.2rem;">Thanks you for your  subscription.<br>This website will help to inform you about the parties who runCanada and their policies, you can find who is your partie depending on your preferencies.</p>';

          $body.='<div style="width:60%; padding: 10px 20px; background: #FFD100; margin:30px auto 60px;">';
            $body.='<a href="'.$url.'"  style="font-size:32px; font-weight: 900px; text-decoration: none; color:black;">FIND OUT</a>';
          $body.='</div>';

          $body.='<div style="width: 100%; margin-bottom: 30px"; display:flex; align-items: center; justify-content: space-around;>';
            $body.='<img src="cid:green" style="width: 15%; height:auto; text-align:center; padding:0 5px 0 5px;">';
            $body.='<img src="cid:ndp" style="width: 15%; height:auto; text-align:center; padding:0 5px 0 5px;">';
            $body.='<img src="cid:conservative" style="width: 15%; height:auto; text-align:center; padding:0 5px 0 5px;">';
          $body.='<img src="cid:liberal" style="width: 15%; height:auto; text-align:center; padding:0 5px 0 5px;">';
          $body.='</div>';
        $body.='</div>';
      $body.='</div>';
    $body.='</body>';

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Thanks to subscribe';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
    header('location: ../../index.php?sent');
    die();
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>
