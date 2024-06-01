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
<h1>Thông tin người dùng</h1>
<?php
if(isset($_POST['name'])&& isset($_POST["age"])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    echo "<p>họ và tên: $name </p> ";
    echo "<p>tuổi: $age</p> ";
}else{
    echo "<p> ko có thông tin người dùng </p>";
}
?>
</body>
</html><?php
