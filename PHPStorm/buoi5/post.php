// get, post là phương thức truyền nhận dữ liệu
// get thì hiện thị trên dữ liệu url
// => bảo mật kém hơn bù lại tốc độ xử lý nhanh hơn
// còn post thì bảo mật cao nhưng tốc độ sử lý chậm

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
<h1>nhập thông tin</h1>
<form action="testpost.php" method="post">
    <label for="name">họ và tên</label><br>
    <input type="text" name="name" ><br>
    <label for="">tuỏi</label><br>
    <input type="text" name="age" ><br>
    <button type="submit"> gửi</button>

</form>
</body>
</html>

<?php
