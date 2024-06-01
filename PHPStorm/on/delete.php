<?php
require_once 'connect.php';
$id=$_POST['id'];
$sql="delete from thanhvien where ten_id='$id'";
$conn->exec($sql);
header("location:index.php");