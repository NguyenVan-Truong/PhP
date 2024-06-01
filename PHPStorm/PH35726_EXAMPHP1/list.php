<?php
session_start();
require_once 'connecton.php';
if (!isset($_COOKIE['user_id'])) {
    header("location: cookie.php");
    exit;
}

//if(isset($_GET['btnSearch']) && !empty($_GET['txtsearch'])){
//    $sql = "SELECT fl.flight_id,fl.flight_number,fl.image,fl.total_passengers,fl.description, al.airline_name FROM flights AS fl INNER JOIN airlines AS al WHERE al.airline_id =fl.airline_id AND fl.flight_number LIKE '%".$_GET['txtsearch']."%';";
//}else{
//    $sql = "SELECT fl.flight_id,fl.flight_number,fl.image,fl.total_passengers,fl.description, al.airline_name FROM flights AS fl INNER JOIN airlines AS al WHERE al.airline_id =fl.airline_id ;";
//}
$sql = "SELECT flights.flight_id, flights.flight_number, flights.image, flights.total_passengers,flights.description, airlines.airline_name
        FROM flights
        INNER JOIN airlines ON flights.airline_id = airlines.airline_id";
// thuc thi cau lẹnh truy van , lay tat ca du lieu ve
$resut = $conn->query($sql)->fetchAll();


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Style.css">
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
    <a href="cookie.php"><button class="add-form">thoat</button></a>
</div>

<div class="table-container">
    <table>
        <tr>
            <th>ID</th>
            <th>Tên Chuyến Bay</th>
            <th>Hình ảnh</th>
            <th>Danh mục</th>
            <th>Tổng Hành Khách</th>
            <th>Mô Tả</th>
            <th>Thao tác</th>
        </tr>

        <?php
        foreach ($resut as $value){
            ?>
            <tr>
                <td><?php echo $value['flight_id'] ?></td>
                <td><?php echo $value['flight_number'] ?></td>
                <td><img style="width: 150px; height: 150px" src="<?php echo isset($value['image'])? $value['image']:'' ?>"></td>
                <td><?php echo $value['total_passengers'] ?></td>
                <td><?php echo $value['description'] ?></td>
                <td><?php echo $value['airline_name'] ?></td>
                <td>
<!--                    chứa đường dẫn mà liên kết sẽ dẫn đến khi được nhấp. -->
<!--                    Trong đoạn mã này, nó sẽ dẫn đến trang "edit.php" và truyền tham số "id" với giá trị là $value['flight_id']. Biến -->
<!--                    $value đại diện cho một phần tử của một mảng chứa thông tin về chuyến bay, và $value['flight_id'] là giá trị ID của chuyến bay-->
                    <a class="edit-btn" href="edit.php?id=<?php echo $value['flight_id']?>">Sửa</a>
<!--                    mã JavaScript confirmDeleTe() được gọi, và truyền vào đó đường dẫn "delete.php?id=flight_id"-->
<!--                    để xác nhận việc xóa chuyến bay với ID là $value['flight_id'].-->
                    <a class="delete-btn" href="javascript:confirmDeleTe('delete.php?id=<?php echo $value['flight_id']; ?>')">Xóa</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
<script>
    // Hàm này nhận một tham số delUrl, đại diện cho đường dẫn mà người dùng sẽ được chuyển hướng đến nếu họ chọn xóa dữ liệu.
    function confirmDeleTe(delUrl) {
        if (confirm("Bạn có muốn xóa không ?")) {
            document.location = delUrl;
        }
    }
</script>
</html>
