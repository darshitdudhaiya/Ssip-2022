<?php

$id = $_POST['id'];
$s_name = $_POST['s_name'];
$password = $_POST['password'];
$date = $_POST['date'];
$number = $_POST['number'];
$a_number = $_POST['a_number'];
$website = $_POST['website'];
$email = $_POST['email'];
$address = $_POST['address'];
$state = $_POST['state'];
$district = $_POST['district'];
$board = $_POST['board'];
$image = $_FILES['image'];
$description = $_POST['description'];

//Image Process
$destination = "../upload/".$image["name"];
move_uploaded_file($image["tmp_name"] , $destination);

include('../includes/connection.php');
$update = "UPDATE schools SET s_name = '$s_name' , password = '$password', date = '$date' , number = '$number' , a_number = '$a_number' , website = '$website' , email = '$email' , address = '$address' , state = '$state' , district = '$district' , board = '$board' , s_image = '$destination' , description = '$description' WHERE id = '$id'";
$query = $connection->query($update);
header("Location: ../includes/all_schools.php");
$connect = null;
?>