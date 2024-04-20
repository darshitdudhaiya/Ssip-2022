<?php
include('../includes/connection.php');

$sql = "SELECT slms_no FROM students ORDER BY slms_no DESC LIMIT 1";
$last_id = $connection->query($sql);
$last_id = $last_id->fetch(PDO::FETCH_ASSOC);
if($last_id == NULL){
    echo "ok";
    $slms_no = 101;
}
else{
    $slms_no = $last_id['slms_no']+1;
}


$id = $_GET['id'];
$select = "SELECT * FROM pstudr WHERE id = '$id'";
$query=$connection->query($select);
$result = $query->fetch(PDO::FETCH_ASSOC);

    $sc_name = $result['sc_name'];
    $c_name = $result['c_name'];
    $stud_name = $result['stud_name'];
    $f_name = $result['f_name'];
    $m_name = $result['m_name'];
    $f_occupation = $result['f_occupation'];
    $m_occupation = $result['m_occupation'];
    $gender = $result['gender'];
    $caste = $result['caste'];
    $email = $result['email'];
    $dob = $result['dob'];
    $blood = $result['blood'];
    $number = $result['number'];
    $a_number = $result['a_number'];
    $adhar = $result['adhar'];
    $class = $result['class'];
    $ds = $result['ds'];
    $marks = $result['marks'];
    $ad_date = $result['ad_date'];
    $remarks = $result['remarks'];
    $state = $result['state'];
    $district = $result['district'];
    $board = $result['board'];
    $image = $result['image'];
    $birth_certificate = $result['birth_certificate'];
    $f_adhar = $result['f_adhar'];
    $m_adhar = $result['m_adhar'];
    
    $insert_student = "INSERT INTO students (sc_name,c_name,slms_no,slms_password,stud_name,f_name,m_name,f_occupation,m_occupation,gender,caste,email,dob,blood,number,a_number,adhar,class,ds,marks,ad_date,remarks,state,district,board,image,birth_certificate,f_adhar,m_adhar) VALUES ('$sc_name' ,'$c_name' , '$slms_no' , '$slms_no','$stud_name','$f_name','$m_name','$f_occupation','$m_occupation','$gender','$caste','$email','$dob','$blood','$number','$a_number','$adhar','$class','$ds','$marks','$ad_date','$remarks','$state','$district','$board','$image','$birth_certificate','$f_adhar','$m_adhar')";
    $query_student = $connection->query($insert_student);
    
    $update_pstudr = "UPDATE pstudr SET status='approved' WHERE id='$id'";
    $query_pstudr = $connection->query($update_pstudr);
    
    
    $insert_life_cycle = "INSERT INTO life_cycle (slms_no , sc_name , course ,ds,marks, district , ad_date) VALUES ($slms_no , '$sc_name' , '$class' , '$ds', '$marks' , '$district' , '$ad_date')";
    $query_life = $connection->query($insert_life_cycle);
    
    $insert_user = "INSERT INTO users (username , password) VALUES ('$slms_no' , '$slms_no')";
    $query_user = $connection->query($insert_user);
    // print_r ($query_user);
    // echo "ok";
 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require '../libs/PHPMailer/Exception.php';
    require '../libs/PHPMailer/PHPMailer.php';
    require '../libs/PHPMailer/SMTP.php';
    
    
    $sql = "SELECT email FROM `students` WHERE email = '{$email}'";
    $query = $connection->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    // echo"<pre>";
    // print_r($result);
    // echo"/<pre>";
    // echo $slms_no;
    
    if($result)
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
        $mail->Body    = "You Are add to SLMS Portal.Your SLMS-NO is <b>.{'$slms_no'}.</b> Your SLMS-PASSWORD is <b>.{'$slms_no'}.</b>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        
        session_start();
        $_SESSION["email"] = $email;
        header("Location: ../includes/all_student_request.php");
    
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    }
    else
    {
        echo "Data not found!!!!";
    }
?>
<!-- slms@info11 -->