<?php 

$to_email = "omadreja@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: omadreja17@gmail.com";

if (mail('omadreja@gmail.com', 'hello ',' hi om', 'mtest8741@gmail.com')) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}


?>