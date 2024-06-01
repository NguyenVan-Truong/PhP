<?php
//session_start();
////echo $_SESSION['username'];
////session_start();
//$user =[
//    [
//        'username'=>'truonghayho',
//        'password'=>'1234'
//    ],
//    [
//        'username'=>'truonghayho1',
//        'password'=>'12345'
//    ],
//    [
//        'username'=>'truonghayho2',
//        'password'=>'123456'
//    ]
//];
//// kiem tra xem da ton tai cookie
//if(isset($_COOKIE['username'])){
//    $loged = true;
//    $username = $_COOKIE['username'];
//
//}else{
//    $loged =false;
//}
//
//// xu ly dang nhap
//if(isset($_POST['login'])){
//    $username = $_POST['username'];
//    $pass = $_POST['password'];
//    // kiem tra thong itn dang nhap
//    foreach ($user as $users){
//        if ($users["username"]==$username && $users['password']==$pass){
//            //thiet lap cookie
//            setcookie('username',$username,time()+3600);
//            $loged = true;
//            break;
//        }
//    }
//}elseif (isset($_POST['logout'])){
//    // xoá cookie
//    setcookie('username',time()-3600);
//    $loged=false;
//}
//?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<?php //if(isset($loged)){ ?>
<!--    <h1>đăng nhập thành công</h1>-->
<!--    <p>xin chào , --><?php //echo $username; ?><!-- </p>-->
<!--    <form action="" method="post">-->
<!--        <input type="submit" name="logout" value="đăng xuất">-->
<!--    </form>-->
<?php //}else{?>
<!--<h1>đăng nhập</h1>-->
<!--<form action="" method="post">-->
<!--    <label for="">tài khoản</label>-->
<!--    <input type="text" placeholder="tài khoản ..." name="username" required><br>-->
<!--    <label for="">mật khẩu</label>-->
<!--    <input type="password" placeholder="mạt khẩu ..." name="password" required>-->
<!--    <input type="submit" value="đăng nhập" name="login">-->
<!--</form<-->
<!--    --><?php //} ?>
<!--</body>-->
<!--</html>-->
<?php
//session_start();
//echo $_SESSION['username'];
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
// kiem tra xem da ton tai cookie
if(isset($_COOKIE['username'])){
    $loged = true;
    $username = $_COOKIE['username'];

}else{
    $loged =false;
}

// xu ly dang nhap
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = $_POST['password'];
    // kiem tra thong itn dang nhap
    foreach ($user as $users){
        if ($users["username"]==$username && $users['password']==$pass){
            //thiet lap cookie
            setcookie('username',$username,time()+3600);
            $loged = true;
            break;
        }
    }
}elseif (isset($_POST['logout'])){
    // xoá cookie
    setcookie('username','',time()-3600);
    $loged=false;
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
<?php if(isset($loged)){ ?>
    <h1>đăng nhập thành công</h1>
    <p>xin chào , <?php echo $username; ?> !</p>
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
    </form>
<?php } ?>
</body>
</html>
