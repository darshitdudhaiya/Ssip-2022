<?php
include('../includes/connection.php');


$id = $_GET['id'];
$select = "SELECT * FROM emp_req WHERE id = '$id'";
$query = $connection->query($select);
$result = $query->fetch(PDO::FETCH_ASSOC);

$emp_no = $result['emp_no'];
$emp_name = $result['emp_name'];
$number = $result['number'];
$a_number = $result['a_number'];
$email = $result['email'];
$address = $result['address'];
$state = $result['state'];
$district = $result['district'];
$emp_adhar = $result['emp_adhar'];
$emp_pan = $result['emp_pan'];
$emp_election = $result['emp_election'];

// $emp_password = $result['emp_name'];


$insert_emp = "INSERT INTO emp (emp_no,emp_name,number,a_number,email,address,state,district,emp_adhar,emp_pan,emp_election) VALUES ('$emp_no' , '$emp_name' , '$number','$a_number','$email','$address','$state','$district','$emp_adhar','$emp_pan','$emp_election')";
$query_emp = $connection->query($insert_emp);

$update_empreq = "UPDATE emp_req SET status='approved' WHERE id='$id'";
$query_empreq = $connection->query($update_empreq);
// print_r ($query_user);
// echo "ok";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../libs/PHPMailer/Exception.php';
require '../libs/PHPMailer/PHPMailer.php';
require '../libs/PHPMailer/SMTP.php';


$sql = "SELECT email FROM `emp` WHERE email = '{$email}'";
$query = $connection->query($sql);
$result = $query->fetchAll(PDO::FETCH_ASSOC);

// echo"<pre>";
// print_r($result);
// echo"/<pre>";
// echo $slms_no;

if ($result) {
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
        $mail->Body    = "You have the access to the student request panel.";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

        session_start();
        $_SESSION["email"] = $email;
        header("Location: ../includes/all_emp_request.php");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Data not found!!!!";
}
?>
<!-- slms@info11 -->