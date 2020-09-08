


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
         $mail->isSMTP();                        // Enable verbose debug output
         $mail->Host='smtp.gmail.com';
         $mail->Port=465;
         $mail->SMTPAuth=true;
         $mail->SMTPSecure='tls';
         $mail->Username='info.viewframe@gmail.com';
         $mail->Password='vfdesign2020';
  

        $mail->setFrom('info.viewframe@gmail.com','View Frame Design');
        $mail->addAddress("info.viewframe@gmail.com");
        $mail->addReplyTo('info.viewframe@gmail.com','view Frame Design');
    
        // Content
        $mail->isHTML(true);           
        $mail->Subject = ' Enquiry';
        $mail->Body    = ' Testing';
    
        $mail->send();
        
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
        
?>