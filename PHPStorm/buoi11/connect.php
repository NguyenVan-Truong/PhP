<?php
$host = "localhost";
$username = "truonghayho";
$pastword ="";
$dbname= "educationan_center";
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$pastword);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e){
    die("lỗi kết nôối cơ sở dữ liệu ". $e ->getMessage());
}
?>