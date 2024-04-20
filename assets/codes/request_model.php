<?php
    include("../includes/connection.php");

    $id = $_POST["id"];
   

    $select = "SELECT stud_name,adhar FROM pstudr WHERE id= '$id' ";
    $query = $connection->query($select);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    $arr = array("name"=> $result[0]["stud_name"],"adhar"=>$result[0]["adhar"]);
 


    echo json_encode($arr);
?>