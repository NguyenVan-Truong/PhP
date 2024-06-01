<?php
require_once 'connect.php';
$id = $_GET['id'];
$spl = "DELETE FROM courses WHERE courses_id ='$id'";
$conn->exec($spl);

