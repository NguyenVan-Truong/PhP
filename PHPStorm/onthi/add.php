<?php
require_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"]=='POST'){
    $flight_number=$_POST['flight_number'];
    $total_passengers=$_POST['total_passengers'];
    $description=$_POST['description'];
    $airline_id=$_POST['airline_id'];
    $file=$_FILES['image'];
    $image=$file['name'];
    move_uploaded_file($file['tmp_name'],"image/".$image);
    $sql="insert into flights (flight_number,total_passengers,description,airline_id , image ) values ('$flight_number','$total_passengers','$description','$airline_id','$image')";
    $check = $conn->exec($sql);
    if ($check) {
        header("location:list.php");
    }
}
$sql = "SELECT * FROM airlines";
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
        <label for="">Tên </label>
        <input type="text" name="flight_number">
    </div>
    <div>
        <label for="">ảnh</label>
        <input type="file" name="image">
    </div>
    <div>
        <label for="">so</label>
        <input type="number" name="total_passengers">
    </div>
    <div>
        <label for="">description</label>
        <input type="text" name="description">
    </div>
    <div>
        <label for="">nhan hang</label>
        <select name="airline_id" id="">
            <?php
            foreach ($class as $value){
            ?>
                <option value="<?= $value['airline_id']?>"><?= $value['airline_name']?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <button type="submit">them</button>
</form>
</body>
</html>
