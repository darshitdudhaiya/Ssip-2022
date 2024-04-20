<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../libs/PHPMailer/Exception.php';
require '../libs/PHPMailer/PHPMailer.php';
require '../libs/PHPMailer/SMTP.php';

session_start();

include('../includes/connection.php');
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"));

$Email = $data->email;

$sql = "SELECT email FROM `students` WHERE email = '{$Email}'";
$query = $connection->query($sql);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
// if($result)
// {
// $randno = (rand(100000,999999));
// // echo $randno;
// $mail = new PHPMailer();

// try {
   
//     $mail->SMTPDebug = SMTP::DEBUG_OFF;                      
//     $mail->isSMTP();                                          
//     $mail->Host       = 'smtp.office365.com';                     
//     $mail->SMTPAuth   = true;                                   
//     $mail->Username   = 'slms.gov@outlook.com';                   
//     $mail->Password   = 'slms@info11';                              
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            
//     $mail->Port       = 587;                                    
  
//     $mail->setFrom('slms.gov@outlook.com', 'SLMS');
//     $mail->addAddress($Email, 'User');   

   
//     $mail->isHTML(true);                                 
//     $mail->Subject = 'Your OTP';
//     $mail->Body    = "OTP is <b>.{'$randno'}.</b>";
//     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();

//     $_SESSION["num"]  = $randno;   
//     $_SESSION["email"] = $Email;
//         header("Location: ./otp.php");
//         // header('Location:./otp.php');
//     echo 1;

// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }
// }

?>