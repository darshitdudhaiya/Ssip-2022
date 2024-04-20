<?php

$id = $_POST['id'];
$c_name = $_POST['c_name'];
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
$update = "UPDATE colleges SET c_name = '$c_name' , date = '$date' , number = '$number' , a_number = '$a_number' , website = '$website' , email = '$email' , address = '$address' , state = '$state' , district = '$district' , university = '$university' , c_image = '$destination' , description = '$description' WHERE id = '$id'";
$query = $connection->query($update);
header("Location: ../includes/all_colleges.php");
$connect = null;
?>