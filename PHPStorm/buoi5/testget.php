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
<!--   < h1>Thông tin người dùng</h1>-->
<!--    --><?php
//    if(isset($_GET['name'])&& isset($_GET["age"])){
//        $name = $_GET['name'];
//        $age = $_GET['age'];
//        echo "<p>họ và tên: $name </p> ";
//        echo "<p>tuổi: $age</p> ";
//    }else{
//        echo "<p> ko có thông tin người dùng </p>";
//    }
//    ?>
 <h1>tổng thương tích</h1>
<?php
if(isset($_GET['a'])&& isset($_GET["b"])){
    $a = $_GET['a'];
    $b = $_GET["b"];
    $tong = $a + $b."<br>";
    $hieu = $a - $b."<br>";
    $tich = $a * $b."<br>";
    $thuong = $a / $b."<br>";
    echo $tong , $hieu, $tich,$thuong;
}else{
    echo "<p> ko có thông tin người dùng </p>";
}
?>
</body>
</html>