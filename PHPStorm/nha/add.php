<?php
require_once 'connect.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ten_name=$_POST['ten_name'];
    $date=$_POST['date'];
    $diem=$_POST['diem'];
    $nganh_id=$_POST['nganh_id'];

    $file=$_FILES['image'];
    $image=$file['name'];
    move_uploaded_file($file['tmp_name'],'image/'.$image);
    $sql="insert into thanhvien(ten_name,date,diem,nganh_id,image)values ('$ten_name','$date','$diem','$nganh_id','$image')";
    $check=$conn->exec($sql);
    if ($check){
        header("location:index.php");
    }
}
$sql= "Select * from nganh";
$result = $conn ->query($sql)->fetchAll();
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
        ten <br>
        <input type="text" name="ten_name">
    </div>
    <div>
        anh <br>
        <input type="file" name="image">
    </div>
    <div>
        ngay sinh <br>
        <input type="date" name="date">
    </div>
    <div>
        diem <br>
        <input type="number" name="diem">
    </div>
    <div>
        cac nganh <br>
        <select name="nganh_id" id="">
            <?php
            foreach ($result as $value){
            ?>
                <option value="<?=$value['nganh_id']?>"><?=$value['nganh_name']?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <button type="submit">them</button>
</form>
</body>
</html>
