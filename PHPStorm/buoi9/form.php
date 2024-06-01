<?php
include ('validate.php');
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
<h1>validate</h1>
<form action="" method="post">
    <label for="">Nhập họ và tên :</label><br>
    <input type="text" name="ten" placeholder="Nhập họ và tên">
    <p style="color: red"> <?php echo empty($validateten)?'':$validateten ?> </p>
    <label for="">Nhập email:</label><br>
    <input type="text" name="email" placeholder="Nhập email">
    <p style="color: red"> <?php echo empty($validateemail)?'':$validateemail  ?> </p>
    <label for="">Nhập sdt:</label><br>
    <input type="text" name="sdt" placeholder="Nhập SĐT">
    <p style="color: red"> <?php echo empty($validatesdt)?'':$validatesdt  ?> </p>
    <button type="submit" name="btn">Gửi</button>
</form>
</body>
</html>