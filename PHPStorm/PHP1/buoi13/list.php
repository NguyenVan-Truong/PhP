<?php
session_start();
require_once 'connect.php';

//truy vấn cơ sở dữ liệu để lấy danh sách sản phẩm

if(isset($_GET['btnSearch']) && !empty($_GET['txtsearch'])){
    $sql = "SELECT cr.courses_id,cr.courses_name,cr.image_url,cr.price, ct.category_name FROM courses AS cr INNER JOIN course_categories AS ct WHERE ct.category_id =cr.category_id AND cr.courses_name LIKE '%".$_GET['txtsearch']."%';";
}else{
    $sql = "SELECT cr.courses_id,cr.courses_name,cr.image_url,cr.price, ct.category_name FROM courses AS cr INNER JOIN course_categories AS ct WHERE ct.category_id =cr.category_id;";
}

// Hứng toàn bộ dữ liệu từ database nhả xuống
//$stmt = $conn->query($sql);
//$result = $stmt ->fetchAll(PDO::FETCH_ASSOC);
// hoặc

$resut = $conn->query($sql)->fetchAll();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Danh sách khóa học</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="#">Danh Mục</a></li>
            <li><a href="#">Khóa Học</a></li>
        </ul>
        <div>Hello Admin</div>
    </div>

    <div class="container">
        <a href="add.php"><button class="add-button" style="margin-left:30px;">Thêm</button></a>
        <form action="" method="get">
            <input type="text" class="search-input" name="txtsearch" placeholder="Tìm kiếm ...">
            <button class="search-button" name="btnSearch">Tìm kiếm</button>
        </form>
    </div>

    <div class="table-container">
        <table>
            <tr>
                <th>Tên khóa học</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Danh mục</th>
                <th>Thao tác</th>
            </tr>

            <?php
            foreach ($resut as $value){
            ?>
            <tr>
                <td><?php echo $value['courses_name'] ?></td>
                <td><img style="width: 150px; height: 150px" src="<?php echo isset($value['image_url'])? $value['image_url']:'' ?>"></td>
                <td><?php echo $value['price'] ?></td>
                <td><?php echo $value['category_name'] ?></td>
                <td>
                    <a class="edit-btn" href="edit.php?id=<?php echo $value['courses_id']?>">Sửa</a>
                        <a class="delete-btn" href="javascript:confirmDeleTe('delete.php')">Xóa</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
<script>
    function confirmDeleTe(delUrl) {
        if (confirm("Bạn có muốn xóa không ?")) {
            document.location = delUrl;
        }
    }
</script>
</html>
