<?php

session_start();
unset($_SESSION['error']);
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

require_once 'connect.php';
// truy vấn
$listCT = "SELECT * FROM course_categories";
// hứng dữ liệu từ db đổ
$resultCT = $conn->query($listCT)->fetchAll(PDO::FETCH_ASSOC);

$listId = "SELECT * FROM courses WHERE courses_id = '$id'";

$row = $conn->query($listId)->fetch();

if(isset($_POST['btnSave'])){
    if(empty($_POST['course_name'])){
        $_SESSION['error']['course_name'] = "Không được bỏ trống tên khóa học";
    }else{
        $course_name = $_POST['course_name'];
    }

    if(empty($_POST['category_id'])){
        $_SESSION['error']['category_id'] = "Không được bỏ trống danh mục khóa học";
    }else{
        $category_id = $_POST['category_id'];
    }

    if(empty($_POST['price'])){
        $_SESSION['error']['price'] = "Không được bỏ trống giá";
    }else{
        if($_POST['price']<0){
            $_SESSION['error']['price'] = "Bạn phải nhập giá lớn hơn hoặc bằng 0";
        }else{
            $price = $_POST['price'];
        }
    }

    if(empty($_FILES['image_url']['name'])){
        $image_url = $row['image_url'];
    }else{

            // thư mục sẽ được lưu ảnh vào thư mục image
            $targetDir = "image/";
            //Đường dẫn đến file được lưu
            $targetFile = $targetDir.$_FILES['image_url']['name'];

            // Tiến hành upload file ảnh
            if(move_uploaded_file($_FILES['image_url']['tmp_name'],$targetFile)){
                $image_url = $targetFile;
            }else{
                $_SESSION['error']['imageError'] = "Không thể lưu trữ ảnh";
            }
        }

    if(!isset($_SESSION['error'])){
        $sql = "UPDATE courses SET courses_name = '$course_name', image_url='$image_url', price='$price', category_id= '$category_id' WHERE courses_id = '$id' ";
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
            <label for="course_name">Tên khóa học:</label>
            <input type="text" name="course_name" id="course_name" value="<?php echo $row['courses_name'] ?>">
            <span><?php echo isset($_SESSION['error']['course_name'])?$_SESSION['error']['course_name']:'' ?></span>
        </div>

        <div class="form-group">
            <label for="category">Danh mục:</label>
            <select id="category" name="category_id">
                <option value="">Chọn danh mục</option>
                <?php
                foreach ($resultCT as $value ){
                    ?>
                    <option value="<?php echo $value['category_id']?>" <?php echo $row['category_id'] == $value['category_id']? 'selected':'' ?>> <?php echo $value['category_name'] ?></option>
                <?php } ?>
            </select>
            <span><?php echo isset($_SESSION['error']['category_id'])?$_SESSION['error']['category_id']:'' ?></span>
        </div>

        <div class="form-group">
            <label for="price">Giá:</label>
            <input type="text" name="price" id="pricee" value="<?php echo $row['price'] ?>">
            <span><?php echo isset($_SESSION['error']['price'])?$_SESSION['error']['price']:'' ?></span>
        </div>

        <div class="form-group">
            <label for="image">Ảnh:</label>
            <img src="<?php echo isset($row['image_url']) ? $row['image_url']:''?>" style="height: 100px; width: 100px">
            <input type="file" name="image_url" accept="image/*">
            <span><?php echo isset($_SESSION['error']['imageError'])?$_SESSION['error']['imageError']:'' ?></span>
        </div>

        <button class="submit-button" name="btnSave" type="submit">Thêm</button>
    </form>

</div>

</body>
</html>
