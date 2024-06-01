<?php
include("postdangky.php");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Đăng Ký</title>
</head>
<body>
<h2>Đăng Ký</h2>
<form action="" method="post">
    <label>Họ Tên:</label>
    <input type="text" name="name">
    <?php if (isset($validateName)) echo "<span style='color: red;'>".$validateName."</span>"; ?>
    <br>

    <label>Email:</label>
    <input type="email" name="email">
    <?php if (isset($validateEmail)) echo "<span style='color: red;'>".$validateEmail."</span>"; ?>
    <br>

    <label>Số Điện Thoại:</label>
    <input type="tel" name="phoneNumber">
    <?php if (isset($validatesdt)) echo "<span style='color: red;'>".$validatesdt."</span>"; ?>
    <br>

    <label>Địa Chỉ:</label>
    <input type="text" name="location">
    <?php if (isset($validatediachi)) echo "<span style='color: red;'>".$validatediachi."</span>"; ?>
    <br>

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