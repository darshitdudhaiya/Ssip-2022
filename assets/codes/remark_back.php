<?php

$connection = new PDO("mysql:host=localhost;port=3306;dbname=ssip", "root", "");
$id = $_POST['id'];
$birth_certificate = $_FILES['birth_certificate'];
$birthcertificate = $_POST['birthcertificate'];
$f_adhar = $_FILES['f_adhar'];
$fadhar = $_POST['fadhar'];
$m_adhar = $_FILES['m_adhar'];
$madhar = $_POST['madhar'];

//Document Process
$birth_destination = "../document/" . $birth_certificate["name"];
move_uploaded_file($birth_certificate["tmp_name"], $birth_destination);

//Document Process
$f_adhar_destination = "../document/" . $f_adhar["name"];
move_uploaded_file($f_adhar["tmp_name"], $f_adhar_destination);

//Document Process
$m_adhar_destination = "../document/" . $m_adhar["name"];
move_uploaded_file($m_adhar["tmp_name"], $m_adhar_destination);


if(isset($birth_certificate)){
    $update_pstudr = "UPDATE pstudr SET status='pending', birth_certificate='$birth_destination' WHERE id='$id' ";
    $query_pstudr = $connection->query($update_pstudr);
}
else{
    $update_pstudr = "UPDATE pstudr SET status='pending', birth_certificate='$birthcertificate' WHERE id='$id' ";
    $query_pstudr = $connection->query($update_pstudr);
}

if(isset($f_adhar)){
    $update_pstudr = "UPDATE pstudr SET status='pending' , f_adhar='$f_adhar_destination' WHERE id='$id' ";
    $query_pstudr = $connection->query($update_pstudr);
}
else{
    $update_pstudr = "UPDATE pstudr SET status='pending' , f_adhar='$fadhar' WHERE id='$id' ";
    $query_pstudr = $connection->query($update_pstudr);
}

if(isset($m_adhar)){
    $update_pstudr = "UPDATE pstudr SET status='pending' , m_adhar='$m_adhar_destination' WHERE id='$id' ";
    $query_pstudr = $connection->query($update_pstudr);
}
else{
    $update_pstudr = "UPDATE pstudr SET status='pending' , m_adhar='$madhar' WHERE id='$id' ";
    $query_pstudr = $connection->query($update_pstudr);
}
header("Location: ../includes/all_remark_student.php");
$connect = null;
