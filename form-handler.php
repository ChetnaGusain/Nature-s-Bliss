<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@naturesbliss.com';

$email_subject = 'New Form Submission';

$email_body = "USer Name: $name.\n"
               "USer Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "USer Message: $message.\n";


$to = 'gusain07chetna@gmail.com'

$headers = "From: $email_form \r\n";

$headers = "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>