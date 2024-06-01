<?php

require_once 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM cauthu WHERE ten_id = '$id'";
$conn->exec($sql);

header("location:show.php");
?>