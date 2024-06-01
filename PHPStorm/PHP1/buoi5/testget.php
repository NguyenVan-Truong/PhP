<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin người dùng</title>
</head>
<body>
    <h1>Thông tin người dùng</h1>
    <?php
    if(isset($_GET['txtA']) && isset($_GET['txtB'])){
        $hoten = $_GET['txtA'];
        $tuoi = $_GET['txtB'];

        echo "<p>Họ và tên: $hoten</p>";
        echo "<p>Tuổi: $tuoi</p>";
    }else{
        echo "<p>Không có thông tin người dùng.</p>";
    }
    ?>

</body>
</html>