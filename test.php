
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';


  $mail = new PHPMailer(true);
  try {
   
    $mail = new PHPMailer;
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='enquiry@icatchermedia.com';
    $mail->Password='mails@icatcher';



// Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
    echo '<script>alert("Thank you, We will get back to you soon..!");</script>';
  } catch (Exception $e) {
    echo $e;
  }
?>