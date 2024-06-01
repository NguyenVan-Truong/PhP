<?php
session_start();

// user_id là dc gan tu username , password
if (isset($_COOKIE['user_id'])) {
    header("location: list.php");
    exit;
}
//sử dụng để kiểm tra xem phương thức yêu cầu của người dùng có phải là POST hay không
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kiểm tra thông tin đăng nhập
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập ở đây (ví dụ: kiểm tra trong CSDL)

    // Nếu thông tin đăng nhập hợp lệ, tạo cookie và chuyển hướng đến trang list.php
    if ($username == 'ph35726' && $password == 'ph35726') {
        $user_id = 1;
                // ten , gia trị
                setcookie('user_id', $user_id, time() + 2); // Cookie tồn tại trong 30 phút (1800 giây)
        header("location: list.php");
        exit;
    } else {
        echo "Thông tin đăng nhập không hợp lệ.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Trang đăng nhập</title>
</head>
<body>
<h1>Đăng nhập</h1>
<form method="post" action="">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>

    <input type="submit" value="Đăng nhập">
</form>
</body>
</html>
