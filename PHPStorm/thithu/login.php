<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    //username: admin, password: 223344 true
    if ($username == 'admin' && $password == '2') {
        //setcookie
        setcookie('username', $username, time() + 60 );
        header("location:show.php");
        die;
    } else {
        echo  "Thông tin tài khoản hoặc mật khẩu không đúng!";
    }
}
//Sesion

//session_start();
//
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    // Xác thực tài khoản người dùng và tạo phiên làm việc
//    $username = $_POST['username'];
//    $password = $_POST['password'];
//
//    if ($username === 'admin' && $password === 'admin') { // Kiểm tra tài khoản và mật khẩu
//        $_SESSION['username'] = $username; // Lưu thông tin người dùng trong phiên
//        header('Location: list.php'); // Chuyển hướng đến trang danh sách
//        exit();
//    } else {
//        echo 'Đăng nhập thất bại.';
//    }
//}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
<form action="" method="post">
    username: <input type="text" name="username" id="">
    <br><br>
    password: <input type="password" name="password" id="">
    <br>
    <button type="submit">Login</button>
</form>
</body>

</html>