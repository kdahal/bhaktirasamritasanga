<?php
$to = "kumar.dahal@outlook.com";
$subject = "Website Contact Form";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$message = $_POST['message'];
 
$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";
 
mail($to, $subject, $body);
echo "Message sent!";
?>