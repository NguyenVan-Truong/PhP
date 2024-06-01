<?php
 require_once 'connect.php';
 if (!isset($_COOKIE['username'])){
     header("location:login.php");
     die();
 }


 $sql="select st.* , cl.class_name from students as st join class as cl on st.class_id = cl.class_id";

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
<a href="login.php">dang xuat</a>
    <table border="1">

        <tr>
            <th>ID</th>
            <th>ten hoc sinh</th>
            <th>ngay sinh</th>
            <th>sdt</th>
            <th>email</th>
            <th>address</th>
            <th>image</th>
            <th>ten lop</th>
            <th> Cac chuc nang khac</th>
            <th><a href="add.php">Them</a></th>
        </tr>
        <?php
            foreach ($result as $value){
        ?>
                <tr>
                    <td><?= $value['student_id']?></td>
                    <td><?= $value['student_name']?></td>
                    <td><?= $value['date_of_birth']?></td>
                    <td><?= $value['phone_number']?></td>
                    <td><?= $value['email']?></td>
                    <td><?= $value['address']?></td>
                    <td><img src="image/<?= $value['image']?>" width="100" alt=""></td>
                    <td><?= $value['class_name']?></td>
                    <td>
                        <a href="edit.php?student_id=<?= $value['student_id'] ?>">Sua</a>
                        <a href="javascript:xoa('delete.php?id=<?php echo $value['student_id']; ?>')">xoa</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</body>
<script >
    function xoa(delUrl) {
        if (confirm("Bạn có muốn xóa không ?")) {
            document.location = delUrl;
        }
    }

</script>
</html>
