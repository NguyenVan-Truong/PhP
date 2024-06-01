<?php
require_once 'connet.php';
$id=$_GET['id'];
$sql="delete from cauthu where ten_id='$id'";
$conn->exec($sql);
header("location:index.php");