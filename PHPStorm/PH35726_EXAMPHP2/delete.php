<?php
require_once 'connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM students WHERE student_id = '$id'";
$conn->exec($sql);

header("location:list.php");
?>


