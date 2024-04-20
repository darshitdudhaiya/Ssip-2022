<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../libs/PHPMailer/Exception.php';
require '../libs/PHPMailer/PHPMailer.php';
require '../libs/PHPMailer/SMTP.php';

$connection = new PDO("mysql:host=localhost;port=3306;dbname=ssip", "root", "");
$id = $_GET['id'];
$update_empreq = "UPDATE emp_req SET status='rejected' WHERE id='$id'";
$query_empreq = $connection->query($update_empreq);


$sql = "SELECT email FROM `emp_req` WHERE id= '{$id}'";
$query = $connection->query($sql);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
// print_r ($result);
// echo "<br>";

$email = $result[0]["email"];
if($email)
{

$mail = new PHPMailer();
 try {

 $mail->SMTPDebug = SMTP::DEBUG_OFF;
 $mail->isSMTP();
 $mail->Host       = 'smtp.office365.com';
 $mail->SMTPAuth   = true;
 $mail->Username   = 'slms.gov@outlook.com';
 $mail->Password   = 'slms@gov';
 $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
 $mail->Port       = 587;

    $mail->setFrom('slms.gov@outlook.com', 'SLMS');
    $mail->addAddress($email, 'User');

    $mail->isHTML(true);
    $mail->Subject = 'Slms authority';
    $mail->Body    = "You are Rejected to slms program";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

   $mail->send();

     echo 1;
     header("Location: ../includes/all_emp_request.php");

 } catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }
}
$connect = null;
