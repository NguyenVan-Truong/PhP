<?php
require_once 'db.php';
if (!isset($_COOKIE['username'])) {
    header("location: login.php");
    die;
}
//session_start();
//if (!isset($_SESSION['username'])) {
//    header('Location: login.php');
//    exit();
//}

$sql="select ct.* , cl.club_name from cauthu as ct join club as cl on ct.club_id=cl.club_id";
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
            <th>image</th>
            <th>Club</th>
            <th>
                <a href="post.php">them</a>
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
                    <td><img src="img/<?= $value['image']?>" alt="" width="50px"></td>
                    <td><?= $value['club_name']?></td>
                    <td>
                        <a href="">sua</a>
                        <a href="javascript:xoa('delete.php?id=<?php echo $value['ten_id']; ?>')">xoa</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</body>
<script>
    function xoa(delUrl){
        if (confirm("bạn có muon xoa ko ?")){
            document.location=delUrl;
        }
    }
</script>
</html>
