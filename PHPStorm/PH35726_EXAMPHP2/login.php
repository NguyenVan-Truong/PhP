<?php
if ($_SERVER['REQUEST_METHOD']== "POST"){
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    if ($username=='admin' && $pass=='1'){
        setcookie('username',$username , time() + 60 );
        header("location: list.php");
        die();
    }else{
        echo "thong tin mk ko dung";
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
        <label for="">Ten dang nhap</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="">Mat khau</label>
        <input type="text" name="pass">
    </div>
    <button type="submit">Dang nhap</button>

</form>
</body>
</html>
