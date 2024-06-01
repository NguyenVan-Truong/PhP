<?php
require_once 'connect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    if ($user==1 && $pass==1){
        setcookie('user',$user,time()+60);
//        $_SESSION['user']=$user;
        header("location:index.php");
        die;
    }else{
        echo "dang nhap ko thang cong";
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
        matkhau: <br>
        <input type="password" name="pass">
    </div>
    <button type="submit">dang nhap</button>
</form>
</body>
</html>
