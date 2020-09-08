<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     Hey There
     <form  action="test.php" method="post">
      <input type="submit" name="submit" value="">
     </form>
       
   </body>
 </html>
 <?php

    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

        
if(isset($_POST['submit']))
{
    $mail = new PHPMailer(true);

    try {
      

         $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'info.viewframe@gmail.com';                     // SMTP username
        $mail->Password   = 'vfdesign2020';                               // SMTP password
        $mail->Port       = 587;             

        $mail->setFrom('info.viewframe@gmail.com','View Frame Design');
        $mail->addAddress("sharookhanb@gmail.com");
        $mail->addReplyTo('info.viewframe@gmail.com','view Frame Design');
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
        
    

?>