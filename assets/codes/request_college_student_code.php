<?php

$c_name = $_POST['c_name'];
// $slms_no = $_POST['slms_no'];
// $slms_password = $_POST['slms_password'];
$stud_name = $_POST['stud_name'];
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$f_occupation = $_POST['f_occupation'];
$m_occupation = $_POST['m_occupation'];
$gender = $_POST['gender'];
$caste = $_POST['caste'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$blood = $_POST['blood'];
$number = $_POST['number'];
$a_number = $_POST['a_number'];
$adhar = $_POST['adhar'];
$class = $_POST['class'];
$ds = $_POST['ds'];
$marks = $_POST['marks'];
$ad_date = $_POST['ad_date'];
$remarks = $_POST['remarks'];
$state = $_POST['state'];
$district = $_POST['district'];
$board = $_POST['board'];
$image = $_FILES['image'];
$birth_certificate = $_FILES['birth_certificate'];
$f_adhar = $_FILES['f_adhar'];
$m_adhar = $_FILES['m_adhar'];

//email verfication
$patten="/^[a-z0-9]+@[a-z0-9]+[\.-\_]+[a-z0-9]$/";
preg_match($patten,$email);
if(!$patten==$email)
{
    die("Email is not correct");
}

//number verification
$patten1="/^[0-9]{10}$/";
preg_match($patten1,$number);
if(!$patten1==$number)
{
    die("Number is not correct");
}

//a_number verification
preg_match($patten1,$a_number);
if(!$patten1==$a_number)
{
    die("Alternate Number is not correct");
}

//Image Process
$destination = "../upload/".$image["name"];
move_uploaded_file($image["tmp_name"] , $destination);

//Birth Certificate Process
$birth_certificate_d = "../document/".$birth_certificate["name"];
move_uploaded_file($birth_certificate["tmp_name"] , $birth_certificate_d);

//Father Adhar Card Process
$f_adhar_d = "../document/".$f_adhar["name"];
move_uploaded_file($f_adhar["tmp_name"] , $f_adhar_d);

//Mother Adhar Card Process
$m_adhar_d = "../document/".$m_adhar["name"];
move_uploaded_file($m_adhar["tmp_name"] , $m_adhar_d);

include('../includes/connection.php');
$insert = "INSERT INTO pstudr (c_name , stud_name ,f_name, m_name ,f_occupation , m_occupation ,gender,caste, email , dob ,blood ,number ,a_number,adhar,class,ds,marks,ad_date,remarks,state,district ,board,image,birth_certificate,f_adhar,m_adhar) VALUES ('$c_name' , '$stud_name' , '$f_name' , '$m_name' , '$f_occupation' , '$m_occupation' ,'$gender','$caste', '$email' , '$dob' , '$blood' , '$number' , '$a_number' , '$adhar' , '$class' ,'$ds','$marks','$ad_date', '$remarks' , '$state' , '$district' , '$board' , '$destination','$birth_certificate_d','$f_adhar_d','$m_adhar_d')";
$queryinsert = $connection->query($insert);
header("Location: ../includes/all_colleges.php");

// $insert_life_cycle = "INSERT INTO life_cycle (slms_no , sc_name , course ,ds, district , ad_date) VALUES ($slms_no , '$sc_name' , '$class' , '$ds' , '$district' , '$ad_date')";
// $query_life = $connection->query($insert_life_cycle);

$connect = null;
?>