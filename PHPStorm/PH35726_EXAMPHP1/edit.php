<?php

session_start();
unset($_SESSION['error']);
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

require_once 'connecton.php';
// truy vấn
$listCT = "SELECT * FROM airlines";
// hứng dữ liệu từ db đổ
$resultCT = $conn->query($listCT)->fetchAll(PDO::FETCH_ASSOC);

$listId = "SELECT * FROM flights WHERE flight_id = '$id'";

$row = $conn->query($listId)->fetch();

if(isset($_POST['btnSave'])){
    if(empty($_POST['flight_number'])){
        $_SESSION['error']['flight_number'] = "Không được bỏ trống tên chuyen bay";
    }else{
        $flight_number= $_POST['flight_number'];
    }

    if(empty($_POST['description'])){
        // error là khoá key của session, description là koas key của error
        $_SESSION['error']['description'] = "Không được bỏ trống mo ta";
    }else{
        $description = $_POST['description'];
    }

    if(empty($_POST['total_passengers'])){
        $_SESSION['error']['total_passengers'] = "Không được bỏ trống tong hanh khach";
    }else{
        if($_POST['total_passengers']<0){
            $_SESSION['error']['total_passengers'] = "Bạn phải nhập lớn hơn hoặc bằng 0";
        }else{
            $total_passengers = $_POST['total_passengers'];
        }
    }
    if ($_POST['airline_id'] == '') {
        $_SESSION['error']['airline_id'] = "Không được bỏ trống danh mục chuyến bay";
    } else {
        $airline_id = $_POST['airline_id'];
    }

    if(empty($_FILES['image']['name'])){
        $image = $row['image'];
    }else{

        // thư mục sẽ được lưu ảnh vào thư mục image
        $targetDir = "image/";
        //Đường dẫn đến file được lưu
        $targetFile = $targetDir.$_FILES['image']['name'];

        // Tiến hành upload file ảnh
        if(move_uploaded_file($_FILES['image']['tmp_name'],$targetFile)){
            $image = $targetFile;
        }else{
            $_SESSION['error']['imageError'] = "Không thể lưu trữ ảnh";
        }
    }

    if(!isset($_SESSION['error'])){
        $sql = "UPDATE flights SET flight_number = '$flight_number', total_passengers='$total_passengers'
                 , airline_id='$airline_id', description= '$description' ,image='$image' WHERE flight_id = '$id' ";

       //doi tuong ket noi exec
         $check = $conn ->exec($sql);
        if($check){
            header("location:edit.php?id= ".$id);
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Form sửa khóa học</title>
</head>
<body>
<div class="add-form">
    <h1>Sửa Khóa Học</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên Chuyến Bay:</label>
            <input type="text" name="flight_number" value="<?php echo $row['flight_number'] ?>" >
            <span><?php echo isset($_SESSION['error']['flight_number'])?$_SESSION['error']['flight_number']:'' ?></span>
        </div>

        <div class="form-group">
            <label for="">Tổng Hành Khách:</label>
            <input type="text" name="total_passengers" value="<?php echo $row['total_passengers'] ?>">
            <span><?php echo isset($_SESSION['error']['total_passengers'])?$_SESSION['error']['total_passengers']:'' ?></span>
        </div>
        <div class="form-group">
            <label>Danh mục:</label>
            <select name="airline_id">
                <option value="">Chọn danh mục</option>
                <?php
                foreach ($resultCT as $value) {
                    ?>
                    <option value="<?php echo $value['airline_id']?>" <?php echo $row['airline_id'] == $value['airline_id']? 'selected':'' ?>> <?php echo $value['airline_name'] ?></option>
                <?php } ?>
            </select>
            <span><?php echo isset($_SESSION['error']['airline_id']) ? $_SESSION['error']['airline_id'] : ''; ?></span>
        </div>
        <div class="form-group">
            <label for="">Mô Tả:</label>
            <input type="text" name="description" value="<?php echo $row['description'] ?>" >
            <span><?php echo isset($_SESSION['error']['description'])?$_SESSION['error']['description']:'' ?></span>
        </div>

        <div class="form-group">
            <label for="image">Ảnh:</label>
            <img src="<?php echo isset($row['image']) ? $row['image']:''?>" style="height: 100px; width: 100px">
            <input type="file" name="image" accept="image/*">
            <span><?php echo isset($_SESSION['error']['imageError'])?$_SESSION['error']['imageError']:'' ?></span>
        </div>

        <button class="submit-button" name="btnSave" type="submit">Thêm</button>
    </form>

</div>

</body>
</html>
