<?php
 require_once "Mail.php";
 
 $from = "saurabhkrtiwari@gmail.com";
 $to = "bvm.saurabh@gmail.com";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 
 $host = "mail.google.com";
 $username = "smtp_username";
 $password = "smtp_password";
 
 $headers = array ('From' => $from,
   'To' => $to,
   'Subject' => $subject);
 $smtp = Mail::factory('smtp',
   array ('host' => $host,
     'auth' => true,
     'username' => $username,
     'password' => $password));
 
 $mail = $smtp->send($to, $headers, $body);
 
 if (PEAR::isError($mail)) {
   echo("<p>" . $mail->getMessage() . "</p>");
  } else {
   echo("<p>Message successfully sent!</p>");
  }
 ?>