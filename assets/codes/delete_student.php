<?php
include('../includes/connection.php');

$id = $_POST['delete_student'];
$select = "SELECT slms_no FROM students WHERE id = '$id'";
$query_select = $connection->query($select);
$result_select = $query_select->fetch();
$slms_no = $result_select['slms_no'];

$delete = "DELETE FROM students WHERE id = '$id'";
$query = $connection->query($delete);

// $delete_selc = "DELETE FROM life_cycle WHERE slms_no = '$slms_no'";
// $query_selc = $connection->query($delete_selc);

header("Location: ../includes/all_student.php");

?>