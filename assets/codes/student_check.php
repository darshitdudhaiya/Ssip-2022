<?php
include('../includes/connection.php');

// session_start();
header('Content-Type: application/json');
header('Access-Control-Allow-origin:*');
header('Access-Control-Method:POST');

$data = json_decode(file_get_contents('php://input'));

$scname = $data->scname;
echo $scname;

$select = "SELECT COUNT(*) FROM schools WHERE s_name='{$scname}'";
$query = $connection->query($select);
$result_school = $query->fetch();
// $school_name = $result_school['s_name'];

$select = "SELECT COUNT(*) FROM colleges WHERE c_name='{$scname}'";
$query = $connection->query($select);
$result_college = $query->fetch();
// $college_name = $result_college['c_name'];


if ($result_school['COUNT(*)'] == 1) {
    echo 1;
    
} else {
    echo 0;
    
}

?>