<?php
  $message = $_GET['comment'];
  $email_from = 'endeavortoadventure@gmail.com';
  $email_subject = "New Feedback";
  $email_body = "You have received new feedback.\n".
                            "Here is the comment:\n $message".
  $to = "endeavortoadventure@gmail.com";
  $headers = "From: $email_from \r\n";
  mail($to,$email_subject,$email_body,$headers);
?>
