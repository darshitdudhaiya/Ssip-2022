<?php
 session_start();

 include('../includes/connection.php');
 header('Content-Type: application/json');

 $data = json_decode(file_get_contents("php://input"));

 $username = $data->username;
 $oldpassword = $data->oldpassword;
 $newpassword = $data->newpassword;   
 
 $sql = "SELECT * FROM `users` WHERE username='{$username}' && password = '{$oldpassword}'";

$query = $connection->query($sql);
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$count = count($result);

 if($count == 1)
 {
     echo "ok";
     $update_sql = "UPDATE `users` SET `password`='$newpassword' WHERE username = '$username'";
     $queryupdate = $connection->query($update_sql);
 }
 else
 {
     echo json_encode(array('status' => false, 'data not found!!' => $count));
 }

?>