<?php
    //session_start();
// thiết lập biến nhiên
//$_SESSION['username']='Truong Hay Ho';

// truy suất biến nhiên
//echo $_SESSION['username'];

// thiết lâ cookie
//setcookie('name','truong hay ho',time() + 3600);

// truy suất
//echo $_COOKIE['name'];
//tạo foem đăng nhập
// nếu như trùng tài khoản , mật khâu thì log và hiện thị
// xin chào username
// ngoài ra thì có theem đăng xuất
session_start();
$user =[
    [
        'username'=>'truonghayho',
        'password'=>'1234'
    ],
    [
        'username'=>'truonghayho1',
        'password'=>'12345'
    ],
    [
        'username'=>'truonghayho2',
        'password'=>'123456'
    ]
];
// xu ly dang nhap
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    // kiem tra thong itn dang nhap
    foreach ($user as $users){
        if ($users["username"]==$username && $users['password']==$pass){
            $_SESSION['username']=$username;
            break;
        }
    }
}elseif (isset($_POST['logout'])){
    session_unset();
    session_destroy();
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
    <?php if(isset($_SESSION['username'])){ ?>
        <h1>đăng nhập thành công</h1>
        <p>xin chào , <?php echo $_SESSION['username']; ?> </p>
        <form action="" method="post">
            <input type="submit" name="logout" value="đăng xuất">
        </form>
    <?php }else{?>
        <h1>đăng nhập</h1>
        <form action="" method="post">
            <label for="">tài khoản</label>
            <input type="text" placeholder="tài khoản ..." name="username" required><br>
            <label for="">mật khẩu</label>
            <input type="password" placeholder="mạt khẩu ..." name="password" required>
            <input type="submit" value="đăng nhập" name="login">
        </form<
    <?php } ?>
</body>
</html>
