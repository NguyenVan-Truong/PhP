<?php

require_once 'connect.php';

//truy van co so du lieu de lay danh sach san pham
if(isset($_GET['btnSearch'])&& !empty($_GET['txtsearch'])){
    $sql="SELECT cr.courses_id, cr.courses_name, cr.image_url, cr.price, ct.category_name FROM courses as cr inner join course_categories as ct where ct.category_id=cr.category_id and cr.courses like '%".$_GET['txtsearch']."%';";

}else{
    $sql = "SELECT cr.courses_id, cr.courses_name, cr.image_url, cr.price, ct.category_name FROM courses as cr inner join course_categories as ct where ct.category_id=cr.category_id ;";
}

//$stmt = $conn -> query($sql);
//$result = $stmt -> fetchAll(PDO:: FETCH_ASSOC);
// hoac
$resut = $conn -> query($sql)->fetchAll();
print_r($resut)


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="#">Danh Muc</a></li>
            <li><a href="#">khoa hoc</a></li>
        </ul>
        <div> Hello admin</div>
    </div>
    <div class="container">
        <a href="add.php"><button class="add-button" style="margin-left:30px ; ">Them</button></a>
        <form action="" method="get">
            <input type="text" class="search-input" name="txtsearch" placeholder="tim kiem ...">
            <button class="search-button" name="btnSearch">Tim Kiem</button>
        </form>
    </div>
    <div class="table-container">
        <table>
            <tr>
                <th>Ten khoa hoc</th>
                <th>hinh anh</th>
                <th>gia</th>
                <th>danh muc</th>
                <th>thao tac</th>
            </tr>
            <?php
                foreach ($resut as $value){

            ?>
            <tr>
                <td><?php echo $value['courses_name'] ?> </td>
                <td><img style="align-items: " src="<?php echo isset($value['image_url'])?$value['image_url']:'' ?>" alt=""> </td>
                <td><?php echo $value['price'] ?> </td>
                <td><?php echo $value['category_name'] ?> </td>
                <td>
                    <a href="edit.php?id=<?php echo $value['courses_id']?>" class="edit-btn" s>Sua</a>
                    <a href="delete.php" class="edit-btn">xoa</a>
                </td>

            </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>
<script>
    function confirmDelete(del6)
</script>
</html>
