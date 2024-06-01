<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xử lý đăng nhập</title>
</head>
<body>
<h1>Xử lý đăng nhập</h1>
<?php

if(isset($_POST['user']) && isset($_POST['pass'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    //kiểm tra
    if($user == "admin" && $pass == "12345"){
        echo "Đăng nhập thành công";
    }else{
        echo "Đăng nhập thất bại";
    }
}else{
    echo "Vui lòng điền đầy đủ thông tin";
}
?>

</body>
</html>