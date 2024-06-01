<?php
//session_start();
//echo $_SESSION['username'];

//session_start();
//
//// thiết lập biến phiên
//$_SESSION['username'] = 'kientc';
//
//// truy xuất biến phiên
//echo $_SESSION['username'];

////thiết lập cookie
//setcookie('username','kientc',time() + 3600);
//
//// truy xuất
//echo $_COOKIE['username'];

// tạo form đng nhập
// nếu như trùng user, pass thì log vào và hiển thị
// xin chào, username
// ngoài ra thì có thêm đăng xuất


//session_start();
// tạo mảng chứa thông tin đăng nhập
// user và pass

$users = [
    [
        'username' => 'kientc',
        'password' => '12345'
    ],
    [
        'username' => 'kientc123',
        'password' => '12345678'
    ],
    [
        'username' => 'trungnt173',
        'password' => '12345'
    ]
];

// Kiểm tra xem cookie đã được thiết lập hay chưa
if (isset($_COOKIE['username'])) {
    $loggedIn = true;
    $username = $_COOKIE['username'];
} else {
    $loggedIn = false;
}

// Xử lý đăng nhập
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập
    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            // Thiết lập cookie
            setcookie('username', $username, time() + 3600);
            $loggedIn = true;
            break;
        }
    }
} elseif (isset($_POST['logout'])) {
    // Xóa cookie
    setcookie('username', '', time() - 3600);
    $loggedIn = false;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
</head>
<body>
<?php if ($loggedIn) { ?>
    <h2>Đăng nhập thành công</h2>
    <p>Xin chào, <?php echo $username; ?>!</p>
    <form method="POST" action="">
        <input type="submit" name="logout" value="Đăng xuất">
    </form>
<?php } else { ?>
    <h2>Đăng nhập</h2>
    <form method="POST" action="">
        <label for="username">Tên đăng nhập:</label>
        <input type="text" name="username" required><br>
        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" required><br>
        <input type="submit" name="login" value="Đăng nhập">
    </form>
<?php } ?>
</body>
</html>
