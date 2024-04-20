<?php
include('../includes/connection.php');

$index_no = $_POST['index_no']; 
$c_name = $_POST['c_name'];
$password = $_POST['password'];
$date = $_POST['date'];
$number = $_POST['number'];
$a_number = $_POST['a_number'];
$website = $_POST['website'];
$email = $_POST['email'];
$address = $_POST['address'];
$state = $_POST['state'];
$district = $_POST['district'];
$university = $_POST['university'];
$image = $_FILES['image'];
$description = $_POST['description'];

//Image Process
$destination = "../upload/".$image["name"];
move_uploaded_file($image["tmp_name"] , $destination);

include('../includes/connection.php');
$insert = "INSERT INTO colleges (index_no,c_name ,password, date ,number, a_number ,website,email , address , state , district , university , c_image , description) VALUES ($index_no,'$c_name' ,'$password', '$date' , '$number' , '$a_number' ,'$website', '$email' , '$address' , '$state' , '$district' , '$university' , '$destination' , '$description')";
$queryinsert = $connection->query($insert);

$insert_user = "INSERT INTO users (username , password) VALUES ('$c_name' , '$password')";
$query_user = $connection->query($insert_user);
header("Location: ../includes/all_colleges.php");
$connect = null;
?>