<?php
if($_POST['index_no'] != NULL ||
          $_POST['s_name'] != NULL ||
          $_POST['password'] != NULL ||
          $_POST['date'] != NULL ||  
          $_POST['number'] != NULL ||
          $_POST['a_number'] != NULL ||
          $_POST['website'] != NULL ||
          $_POST['email'] != NULL ||
          $_POST['address'] != NULL ||
          $_POST['state'] != NULL ||
          $_POST['district'] != NULL ||
          $_POST['board'] != NULL ||
          $_POST['image'] != NULL ||
          $_POST['description'] != NULL
        )
    {          
            $index_no = $_POST['index_no']; 
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
    }
//Image Process
$destination = "../upload/".$image["name"];
move_uploaded_file($image["tmp_name"] , $destination);

//email validation
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
//Alternate number verification
preg_match($patten1,$a_number);
if(!$patten1==$a_number)
{
    die("Alternate Number is not correct");
}


include('../includes/connection.php');
$insert = "INSERT INTO schools (index_no,s_name ,password, date ,number, a_number ,website,email , address , state , district , board , s_image , description) VALUES ('$index_no','$s_name' ,'$password', '$date' , '$number' , '$a_number' , '$website' , '$email' , '$address' , '$state' , '$district' , '$board' , '$destination' , '$description')";
$queryinsert = $connection->query($insert);

$insert_user = "INSERT INTO users (username , password) VALUES ('$s_name' , '$password')";
$query_user = $connection->query($insert_user);
header("Location: ../includes/all_schools.php");
$connect = null;
?>