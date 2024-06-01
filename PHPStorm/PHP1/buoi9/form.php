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
    <title>VALIDATE</title>
</head>
<body>
    <H1>VALIDATE</H1>
    <form method="post" action="">
        <label for="ten">Nhập họ và tên:</label><br>
        <input type="text" name="ten" id=""><br>
        <p style="color: red"><?php echo empty($validateName)?'':$validateName ?></p><br>
        <label for="email">Nhập Email:</label><br>
        <input type="text" name="email" id=""><br>
        <p style="color: red"><?php echo empty($validateEmail)?'':$validateEmail ?></p><br>
        <button type="submit" name="btnSub">Gửi</button>
    </form>

</body>
</html>