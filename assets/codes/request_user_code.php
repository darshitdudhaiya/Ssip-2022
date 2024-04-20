<?php
if($_POST['emp_no'] != NULL ||
          $_POST['emp_name'] != NULL ||
          $_POST['number'] != NULL ||
          $_POST['a_number'] != NULL ||
          $_POST['email'] != NULL ||
          $_POST['address'] != NULL ||
          $_POST['state'] != NULL ||
          $_POST['district'] != NULL ||
          $_POST['emp_adhar'] != NULL ||
          $_POST['emp_pan'] != NULL ||
          $_POST['emp_election'] != NULL 
        )
    {          
            $emp_no = $_POST['emp_no']; 
            $emp_name = $_POST['emp_name'];
            $number = $_POST['number'];
            $a_number = $_POST['a_number'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $state = $_POST['state'];
            $district = $_POST['district'];
            $emp_adhar = $_FILES['emp_adhar'];
            $emp_pan = $_FILES['emp_pan'];
            $emp_election = $_FILES['emp_election'];
    
    }
//Document Process
$adhar_des = "../document/".$emp_adhar["emp_adhar"];
move_uploaded_file($emp_adhar["tmp_name"] , $adhar_des);

$pan_des = "../document/".$emp_pan["emp_pan"];
move_uploaded_file($emp_pan["tmp_name"] , $pan_des);

$election_des = "../document/".$emp_election["emp_election"];
move_uploaded_file($emp_election["tmp_name"] , $election_des);

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
$insert = "INSERT INTO emp_req (status,emp_no,emp_name ,number, a_number ,email, address ,state,district , emp_adhar , emp_pan , emp_election) VALUES ('pending','$emp_no','$emp_name' ,'$number' , '$a_number' , '$email' , '$address' , '$state' , '$district' , '$adhar_des','$pan_des','$election_des')";
$queryinsert = $connection->query($insert);

header("Location: ../../index.php");
$connect = null;
?>