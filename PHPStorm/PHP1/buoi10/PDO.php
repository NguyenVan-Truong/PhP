<?php

$servername = "localhost"; // tên máy
$username = "root"; // tài khoản
$password = ""; // mật khẩu
$database = "hocphp1"; // database

try{
    $conn = new PDO("mysql:host=$servername; dbname=$database",$username,$password);

    // Thiết lập lỗi PDO thành ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connect successfully";
}catch (PDOException $e){
    echo "Connect failed: " .$e->getMessage();
}
?>