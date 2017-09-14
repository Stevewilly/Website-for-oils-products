<?php
// Check for empty fields
if(empty($_POST['name'])      ||
empty($_POST['country'])   ||
empty($_POST['state'])   ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$country = strip_tags(htmlspecialchars($_POST['country']));
$state = strip_tags(htmlspecialchars($_POST['state']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'example@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Message from (oil and dairy):  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nCountry name: $country\n\nstate: $state\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@example@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@resourcessyscobristow.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
