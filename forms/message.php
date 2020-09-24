<?php
  $to = 'yulits@gmail.com';
  $sender_name = $_POST['name'];
  $sender_email = $_POST['email'];
  $subject= $_POST['subject'];
  $message = $_POST['message'];
  $headers = "From: $sender_email \r\n";
  $headers .= "Reply-To: $sender_email \r\n";

  mail($to,$subject,$message,$headers);
?>
