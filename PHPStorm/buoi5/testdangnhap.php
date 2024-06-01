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
   <h1> Thông tin người dùng</h1>
    <?php
    if(isset($_POST['user'])&& isset($_POST["pass"])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if ($user == "asmin" && $pass == "12345"){
            echo "đăng nhập thành công";
        }else{
            echo "ko đăng nhập thành công";
        }
    }else{
        echo "vui lòng diê thông tin";
    }
    ?>
</body>
</html>