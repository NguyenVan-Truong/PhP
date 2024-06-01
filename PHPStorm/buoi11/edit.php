<?php
session_start();
unset($_SESSION['erorr']);
if (isset($_GET['id'])){
    $id = $_GET['id'];
}
require_once 'connect.php';
$listCT="SELECT * FROM course_categories";
//hung du lieu do ve
$resultCT = $conn ->query($listCT)->fetchAll(PDO::FETCH_ASSOC);
$listId="SELECT * FROM courses where courses_id = '$id'";
$row = $conn->query($listId)->fetch();

if (isset($_POST['btnSave'])){
    if (empty($_POST['course_name'])){
        $_SESSION['erorr']['course_name']="ko duoc bo trong ten khoa hoc";

    }else{
        $course_name = $_POST['course_name'];
    }
    if (empty($_POST['category_id'])){
        $_SESSION['erorr']['category_id']='ko dc bo trong';

    }else{
        $category_id = $_POST['category_id'];
    }
    if (empty($_POST['price'])){
        $_SESSION['erorr']['price']='ko dc bo trong';

    }else{
        if ($_POST['price']<0){
            $_SESSION['erorr']['price']='ban phainhap lon hon 0';
        }else{
            $price = $_POST['price'];
        }
    }

    if (empty($_FILES['image_url']['name'])){
        $image_url=$row['image_url'];
    }else{

            $target="img/";
            // duong dan den
            $targetfile = $target.$_FILES['image_url']['name'];
            // tien hanh upload file anh
            if (move_uploaded_file($_FILES['image_url']['tmp_name'],$targetfile)){
                $image_url = $targetfile;

            }else{
                $_SESSION['erorr']['imageError']= 'ko the luu tru anh';
            }
        }
    if (!isset($_SESSION['erorr'])){
        $sql = "UPDATE courses SET courses_name ='$course_name', image_url='$image_url',$category_id='$category_id',price='$price'";
        $check = $conn->exec($sql);
        if ($check){
            header("location:list.php?id=".$id);
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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="add-form">
    <h1>Them Khoa Hoc</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_name">Ten KHoa Hoc</label>
            <input type="text" name="course_name" id="course_name" value="<?php echo $row['courses_name'] ?>" >
            <span><?php echo isset($_SESSION['erorr']['course_name'])?$_SESSION['erorr']['course_name']:''?></span>
        </div>
        <div class="form-group">
            <label for="category_id">Danh Muc</label><br>   
            <select name="category_id" id="" >
                <option value="" >Chon Danh Muc</option>
                <?php
                foreach ($resultCT as $value ){

                    ?>
                    <option value="<?php echo $value['category_id']?>"<?php $row['category_id'] == $row['category_id']?'selected':''?>> <?php echo $value['category_name']?></option>
                    <?php
                }
                ?>
            </select>
            <span><?php echo isset($_SESSION['erorr']['category_id'])?$_SESSION['erorr']['category_id']:''?></span>
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="text" name="price" id="price" value="<?php echo $row['price']?>" >
            <span><?php echo isset($_SESSION['price'])?$_SESSION['price']:''?></span>
        </div>
        <div class="form-group">
            <label for="price">anh</label>
            <img src="<?php echo isset($row['image_url'])?>" alt="">
            <input type="file" name="image_url" id="price" accept="img/*" >
            <span><?php echo isset($_SESSION['erorr']['imageError'])?$_SESSION['erorr']['imageError']:''?></span>
        </div>
        <button type="submit" name="btnSave" class="submit-button">Kiem Tra</button>
    </form>
</div>

</body>
</html>
