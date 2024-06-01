<?php
//if ($_SERVER["REQUEST_METHOD"]=="POST"){
//    $user = $_POST['user'];
//    $pass = $_POST['pass'];
//    if (($user == 'admin')&&($pass==1)){
//        setcookie('user',$user,time()+60);
//        header("location:index.php");
//    }else{
//        echo " ban ko dang nhap dc";
//    }
//}
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Xác thực tài khoản người dùng và tạo phiên làm việc
    $username = $_POST['user'];
    $password = $_POST['pass'];

    if ($username === 'admin' && $password === '1') { // Kiểm tra tài khoản và mật khẩu
        $_SESSION['username'] = $username; // Lưu thông tin người dùng trong phiên
        header('Location: index.php'); // Chuyển hướng đến trang danh sách
        exit();
    } else {
        echo 'Đăng nhập thất bại.';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <div>
        tai khoan <br>
        <input type="text" name="user">
    </div>
    <div>
        mat khau <br>
        <input type="text" name="pass">
    </div>
    <button type="submit"> dang nhap</button>
</form>
</body>
</html>
