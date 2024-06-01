<?php
require_once 'connecton.php';
$id = $_POST['id'];
$sql = "DELETE FROM flights WHERE flight_id = '$id'";
$conn->exec($sql);

header("location:list.php");
?>