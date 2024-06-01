<?php
include("postdangnhap.php");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Đăng Ký</title>
</head>
<body>
<h2>Đăng Nhập</h2>
<form action="" method="post">
    <label>Tài Khoản:</label>
    <input type="text" name="username">
    <?php if (isset($validateUsername)) echo "<span style='color: red;'>".$validateUsername."</span>"; ?>
    <br>

    <label>Mật Khẩu:</label>
    <input type="password" name="password">
    <?php if (isset($validatePassword)) echo "<span style='color: red;'>".$validatePassword."</span>"; ?>
    <br>

    <input type="submit" name="btnSub" value="Đăng Ký">
</form>
</body>
</html>
