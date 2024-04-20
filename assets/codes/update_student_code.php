<?php

$id = $_POST['id'];
$sc_name = $_POST['sc_name'];
$slms_no = $_POST['slms_no'];
$slms_password = $_POST['slms_password'];
$stud_name = $_POST['stud_name'];
$f_name = $_POST['f_name'];
$m_name = $_POST['m_name'];
$f_occupation = $_POST['f_occupation'];
$m_occupation = $_POST['m_occupation'];
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

//Image Process
$destination = "../upload/".$image["name"];
move_uploaded_file($image["tmp_name"] , $destination);

include('../includes/connection.php');
$update = "UPDATE students SET sc_name = '$sc_name' , slms_no = '$slms_no' , slms_password = '$slms_password' , stud_name = '$stud_name' , f_name = '$f_name' , m_name = '$m_name' , f_occupation = '$f_occupation' , m_occupation = '$m_occupation' , email = '$email' , dob = '$dob' , blood = '$blood' , number = '$number' , a_number = '$a_number' , adhar = '$adhar' , class = '$class' ,ds='$ds',marks='$marks',ad_date='$ad_date', remarks = '$remarks' , state = '$state' , district = '$district' , board = '$board' , image = '$destination' WHERE id = '$id'";
$queryupdate = $connection->query($update);
header("Location: ../includes/all_schools.php");

$insert_life_cycle = "INSERT INTO life_cycle (slms_no , sc_name , course ,ds, marks, district,ad_date) VALUES ($slms_no , '$sc_name' , '$class' , '$ds', '$marks' , '$district','$ad_date')";
$query_life = $connection->query($insert_life_cycle);


$connect = null;
