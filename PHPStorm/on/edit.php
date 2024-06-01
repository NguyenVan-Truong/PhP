<?php
require_once 'connect.php';
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $student_name =$_POST['student_name'];
    $ns =$_POST['date_of_birth'];
    $sdt =$_POST['phone_number'];
    $email =$_POST['email'];
    $dc =$_POST['address'];
    $tl = $_POST['class_id'];

    $student_id = $_POST['student_id'];
    $image = $_POST['image'];
    $file = $_FILES['image'];

    if ($file['size'] > 0) {
        $image = $file['name'];
        //Upload file
        move_uploaded_file($file['tmp_name'], "image/" . $image);
    }


    $sql = "UPDATE students SET student_name='$student_name', image='$image', date_of_birth='$ns', phone_number='$sdt', email='$email',address='$dc' ,class_id ='$tl' WHERE student_id= $student_id";

    $check =  $conn->exec($sql);
    if($check){
        header("location:list.php");
    }

}
$sql = "select * from class";
$result=$conn->prepare($sql);
$result ->execute();
$class = $result->fetchAll();

$student_id = $_GET['student_id'];
//Câu lệnh SQL với điều kiện movie_id
$sql = "SELECT * FROM students WHERE student_id=$student_id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$movie = $stmt->fetch(PDO::FETCH_ASSOC);
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
    <input type="hidden" name="student_id" value="<?= $movie['student_id'] ?>">
    <div>
        <label for="">Ten Hoc sinh</label>
        <input type="text" name="student_name" value="<?= $movie['student_name']?> "?>
    </div>
    <div>
        <label for="">ngay sinh</label>
        <input type="date" name="date_of_birth" value="<?= $movie['date_of_birth'] ?>">
    </div>
    <div>
        <label for="">sdt</label>
        <input type="number" name="phone_number" value="<?= $movie['phone_number'] ?>">
    </div>
    <div>
        <label for="">email</label>
        <input type="email" name="email" value="<?= $movie['email'] ?>">
    </div>
    <div>
        <label for="">dia chi</label>
        <input type="text" name="address" value="<?= $movie['address'] ?>">
    </div>
    <div>
        <label for="">anh</label>
        <input type="file" name="image">
        <img src="image/<?= $movie['image'] ?>" width="110">
    </div>
    <div>
        <label for="">anh</label>
        <select name="class_id" id="">
            <?php
            foreach ($class as $value){
                ?>
                <option value="<?= $value['class_id']?>"<?= ($value['class_id'] == $movie['class_id']) ? 'selected' : '' ?>><?= $value['class_name']?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <button type="submit">them</button>
</form>
</body>
</html>
