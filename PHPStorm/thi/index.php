<?php
require_once 'connet.php';
//if (!isset($_COOKIE['user'])){
//    header("location:login.php");
//    die;
//}
session_start();
// Kiểm tra xem người dùng đã đăng nhập chưa, nếu chưa thì chuyển hướng về trang đăng nhập
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
$sql ="select ct.* , cl.club_name from cauthu as ct join club as cl on cl.club_id = ct.club_id";
$result = $conn->query($sql)->fetchAll();
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
            <th>ID</th>
            <th>Tên Cầu Thủ</th>
            <th>Tuổi</th>
            <th>Vị Trí</th>
            <th>Image</th>
            <th>Club</th>
            <th>
                <a href="add.php">Them</a>
            </th>
        </tr>
        <?php
            foreach ($result as $value){
        ?>
                <tr>
                    <td><?= $value['ten_id']?></td>
                    <td><?= $value['ten_name']?></td>
                    <td><?= $value['tuoi']?></td>
                    <td><?= $value['vi_tri']?></td>
                    <td><img src="image/<?= $value['image']?>" alt="" width="50px"></td>
                    <td><?= $value['club_name']?></td>
                    <td>
                        <a href="">Sua</a>
                        <a href="javascript:xoa('delete.php?id=<?= $value['ten_id'];?>')">Xoa</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
    <script>
        function xoa(delUrl){
            if (confirm("Bạn có muon xoa ko")){
                document.location=delUrl;
            }
        }
    </script>
</body>
</html>
