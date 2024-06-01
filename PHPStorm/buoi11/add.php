<?php
session_start();

unset($_SESSION['course_name']);
unset($_SESSION['category_id']);
unset($_SESSION['price']);
unset($_SESSION['imageError']);
require_once 'connect.php';
$listCT = "select * from course_categories";
$result = $conn ->query($listCT)->fetchAll();
if (isset($_POST['btnSave'])){
    if (empty($_POST['course_name'])){
        $_SESSION['course_name']='Ko Duoc Bo Trong';
    }else{
        $course_name=$_POST['course_name'];
    }

    if (empty($_POST['category_id'])){
        $_SESSION['category_id']='ko dc bo trong';

    }else{
        $category_id = $_POST['category_id'];
    }
    if (empty($_POST['price'])){
        $_SESSION['price']='ko dc bo trong';

    }else{
        if ($_POST['price']<0){
            $_SESSION['price']='ban phainhap lon hon 0';
        }else{
            $price = $_POST['price'];
        }
    }
    if (empty($_FILES['image_url']['name'])){
        $_SESSION['image_url']='ko dc bo trong anh';

    }else{
        if (!isset($_SESSION['imageError'])){
            $target="img/";
            // duong dan den
            $targetfile = $target.$_FILES['image_url']['name'];
            // tien hanh upload file anh
            if (move_uploaded_file($_FILES['image_url']['tmp_name'],$targetfile)){
                $image_url = $targetfile;

            }else{
                $_SESSION['imageError']= 'ko the luu tru anh';
            }
        }
    }
    if (!isset($_SESSION['imageError'])&& !isset($_SESSION['course_name'])&& !isset($_SESSION['price'])&& !isset($_SESSION['category_id'])){
        $sql = "INSERT INTO courses values (null,'$course_name','$image_url','$category_id','$price')";
        $check = $conn->exec($sql);

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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="add-form">
        <h1>Them Khoa Hoc</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="course_name">Ten KHoa Hoc</label>
                <input type="text" name="course_name" id="course_name" >
                <span><?php echo isset($_SESSION['course_name'])?$_SESSION['course_name']:''?></span>
            </div>
            <div>
                <label for="category_id">Danh Muc</label>
                <select name="category_id" id="">
                    <option value="" >Chon Danh Muc</option>
                    <?php
                    foreach ($result as $value ){

                    ?>
                    <option value="<?php echo $value['category_id'] ?>"> <?php echo $value['category_name']?></option>
                    <?php
                    }
                    ?>
                </select>
                <span><?php echo isset($_SESSION['category_id'])?$_SESSION['category_id']:''?></span>
            </div>
            <div class="form-group">
                <label for="price">price</label>
                <input type="text" name="price" id="price" >
                <span><?php echo isset($_SESSION['price'])?$_SESSION['price']:''?></span>
            </div>
            <div class="form-group">
                <label for="price">anh</label>
                <input type="file" name="image_url" id="price" accept="img/*" >
                <span><?php echo isset($_SESSION['imageError'])?$_SESSION['imageError']:''?></span>
            </div>
            <button type="submit" name="btnSave" class="submit-button">Kiem Tra</button>
        </form>
    </div>

</body>
</html>

