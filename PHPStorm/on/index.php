<?php
require_once 'connect.php';
if (!isset($_COOKIE['user'])){
    header("location:login.php");
    die();
}
$sql="select tv.* , cn.nganh_name from thanhvien as tv join nganh as cn on tv.nganh_id =cn.nganh_id";
$check=$conn->query($sql)->fetchAll();
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
<table border="1">
    <tr>
        <th>Ten</th>
        <th>anh</th>
        <th>ngay sinh</th>
        <th>diem</th>
        <th>cac nganh</th>
        <th><a href="add.php">Them</a></th>
    </tr>
    <?php
    foreach ($check as $value){
    ?>
        <tr>
            <td><?= $value['ten_name']?></td>
            <td><img src="image/<?= $value['image']?>" alt="" width="50px"></td>
            <td><?= $value['date']?></td>
            <td><?= $value['diem']?></td>
            <td><?= $value['nganh_name']?></td>
            <td>
                <a href="">sua</a>
                <a href="javascript:xoa('delete.php?id=<?=$value['ten_id'];?>')">xoa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<script>
    function xoa(delUrl){
        if (confirm("ban co muon xoa ko")){
            document.location=delUrl;
        }
    }
</script>
</body>
</html>
