<?php
require_once 'connect.php';
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $student_name =$_POST['student_name'];
    $ns =$_POST['date_of_birth'];
    $sdt =$_POST['phone_number'];
    $email =$_POST['email'];
    $dc =$_POST['address'];
    $tl = $_POST['class_id'];

    $file = $_FILES["image"];
    $image = $file['name'];
    move_uploaded_file($file['tmp_name'],"image/" .$image);
    $sql = "INSERT INTO students(student_name , date_of_birth , phone_number ,email , address ,class_id,image) 
    values ('$student_name','$ns','$sdt','$email','$dc' ,'$tl','$image') ";
    $check =  $conn->exec($sql);
    if($check){
        header("location:list.php");
    }
    
}
//$sql = "select * from class";
//$result=$conn->prepare($sql);
//$result ->execute();
//$class = $result->fetchAll();
//print_r($class)
$sql = "SELECT * FROM class";
$class = $conn->query($sql)->fetchAll();
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
<form action="" method="post" enctype="multipart/form-data">
    <div>
        <label for="">Ten Hoc sinh</label>
        <input type="text" name="student_name">
    </div>
    <div>
        <label for="">ngay sinh</label>
        <input type="date" name="date_of_birth">
    </div>
    <div>
        <label for="">sdt</label>
        <input type="number" name="phone_number">
    </div>
    <div>
        <label for="">email</label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="">dia chi</label>
        <input type="text" name="address">
    </div>
    <div>
        <label for="">anh</label>
        <input type="file" name="image">
    </div>
    <div>
        <label for="">anh</label>
        <select name="class_id" id="">
            <?php
                foreach ($class as $value){
                    ?>
                    <option value="<?= $value['class_id']?>"><?= $value['class_name']?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <button type="submit">them</button>
</form>
</body>
</html>
