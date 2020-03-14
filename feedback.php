<?php
  $feedback_type = $_POST['value'];
  $message = $_POST['comment'];
  
  $email_from = 'endeavortoadventure@gmail.com';
	$email_subject = "New Feedback: $value";
	$email_body = "You have received a new feedback.\n".
                            "Here is the comment:\n $comment".
                            
  $to = "endeavortoadventure@gmail.com";
  $headers = "From: $email_from \r\n";
  mail($to,$email_subject,$email_body,$headers);
?>
