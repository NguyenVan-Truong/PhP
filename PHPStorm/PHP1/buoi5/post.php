<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Nhập thông tin người dùng</title>-->
<!--</head>-->
<!--<body>-->
<!--<h1> Nhập thông tin người dùng</h1>-->
<!--<form action="testpost.php" method="post">-->
<!--    <label for="txtA">Họ và tên:</label>-->
<!--    <input type="text" name="txtA" id="txtA">-->
<!--    <label for="txtB">Tuổi:</label>-->
<!--    <input type="text" name="txtB" id="txtB">-->
<!--    <button type="submit">Gửi</button>-->
<!--</form>-->
<!---->
<!--</body>-->
<!--</html>-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
</head>
<body>
<h1>Đăng nhập</h1>
<form action="testpost.php" method="post">
    <label for="user">Tên người dùng</label>
    <input type="text" name="user" id="user" required><br>
    <label for="pass">Mật khẩu</label>
    <input type="password" name="pass" id="pass" required><br>
    <button type="submit">Đăng nhập</button>
</form>


</body>
</html>