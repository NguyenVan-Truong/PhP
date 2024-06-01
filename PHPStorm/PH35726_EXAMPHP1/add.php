<?php
session_start();

unset($_SESSION['flight_number']);
unset($_SESSION['total_passengers']);
unset($_SESSION['description']);
unset($_SESSION['airline_id']);
unset($_SESSION['imageError']);

require_once 'connecton.php';
$listCT = "SELECT * FROM airlines ";
$result = $conn->query($listCT)->fetchAll();

if(isset($_POST['btnSave'])){
    if(empty($_POST['flight_number'])){
        $_SESSION['flight_number'] = "Không được bỏ trống tên chuyen bay";
    }else{
        $flight_number= $_POST['flight_number'];
    }

    if(empty($_POST['description'])){
        $_SESSION['description'] = "Không được bỏ trống mo ta";
    }else{
        $description = $_POST['description'];
    }
    if(empty($_POST['total_passengers'])){
        $_SESSION['total_passengers'] = "Không được bỏ trống tong hanh khach";
    }else{
        if($_POST['total_passengers']<0){
            $_SESSION['total_passengers'] = "Bạn phải nhập lớn hơn hoặc bằng 0";
        }else{
            $total_passengers = $_POST['total_passengers'];
        }
    }


    if(empty($_FILES['image']['name'])){
        $_SESSION['imageError'] = "Không được bỏ trống ảnh";
    }else{
        if(!isset($_SESSION['imageError'])){
            // thư mục sẽ được lưu ảnh vào thư mục image
            $targetDir = "image/";
            //Đường dẫn đến file được lưu
            $targetFile = $targetDir.$_FILES['image']['name'];

            // Tiến hành upload file ảnh
            if(move_uploaded_file($_FILES['image']['tmp_name'],$targetFile)){
                $image_url = $targetFile;
            }else{
                $_SESSION['imageError'] = "Không thể lưu trữ ảnh";
            }
        }
    }

    if ($_POST['airline_id'] == '') {
        $_SESSION['airline_id'] = "Không được bỏ trống danh mục chuyến bay";
    } else {
        $airline_id = $_POST['airline_id'];
    }


    if (!isset($_SESSION['imageError']) && !isset($_SESSION['flight_number']) && !isset($_SESSION['description']) && !isset($_SESSION['total_passengers'])){
//        $sql = "INSERT INTO flights VALUES (NULL,'$flight_number', '$image_url','$total_passengers','$description',NUll)";
        $sql = "INSERT INTO flights (flight_number, image, total_passengers, description, airline_id) 
                VALUES ('$flight_number', '$image_url', '$total_passengers', '$description', '$airline_id')";
        $check =  $conn->exec($sql);
        if($check){
            header("location:list.php");
        }

        //$conn->exec($sql);
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
    <link rel="stylesheet" href="Style.css">
    <title>Form thêm khóa học</title>
</head>
<body>
<div class="add-form">
    <h1>Thêm Khóa Học</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên Chuyến Bay:</label>
            <input type="text" name="flight_number"  placeholder="Nhập tên ">
            <span><?php echo isset($_SESSION['flight_number'])?$_SESSION['flight_number']:'' ?></span>
        </div>

        <div class="form-group">
            <label for="">Tổng Hành Khách:</label>
            <input type="text" name="total_passengers" placeholder="Nhập ">
            <span><?php echo isset($_SESSION['total_passengers'])?$_SESSION['total_passengers']:'' ?></span>
        </div>
        <div class="form-group">
            <label>Danh mục:</label>
            <select name="airline_id">
                <option value="">Chọn danh mục</option>
                <?php
                foreach ($result as $value) {
                    ?>
                    <option value="<?php echo $value['airline_id'] ?>"><?php echo $value['airline_name'] ?></option>
                <?php } ?>
            </select>
            <span><?php echo isset($_SESSION['airline_id']) ? $_SESSION['airline_id'] : ''; ?></span>
        </div>
        <div class="form-group">
            <label for="">Mô Tả:</label>
            <input type="text" name="description"  placeholder="Nhập ">
            <span><?php echo isset($_SESSION['description'])?$_SESSION['description']:'' ?></span>
        </div>

        <div class="form-group">
            <label for="image">Ảnh:</label>
            <input type="file" name="image" accept="image/*">
            <span><?php echo isset($_SESSION['imageError'])?$_SESSION['imageError']:'' ?></span>
        </div>

        <button class="submit-button" name="btnSave" type="submit">Thêm</button>
    </form>

</div>

</body>
</html>
