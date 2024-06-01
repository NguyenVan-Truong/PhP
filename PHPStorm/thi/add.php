<?php
require_once 'connet.php';

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $ten_name=$_POST['ten_name'];
    $tuoi=$_POST['tuoi'];
    $vi_tri=$_POST['vi_tri'];
    $club_id=$_POST['club_id'];

    $file =$_FILES['image'];
    $image=$file['name'];
    move_uploaded_file($file['tmp_name'],'image/'.$image);
    $sql="insert into cauthu(ten_name,tuoi,vi_tri,club_id ,image) values ('$ten_name','$tuoi','$vi_tri','$club_id','$image')";
    $check=$conn->exec($sql);
    if ($check){
        header("location:index.php");
    }
}
$sql="Select * from club";
$result=$conn->query($sql)->fetchAll();
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
        Tên <br>
        <input type="text" name="ten_name">
    </div>
    <div>
        Tuổi <br>
        <input type="number" name="tuoi">
    </div>
    <div>
        vi tri <br>
        <input type="text" name="vi_tri">
    </div>
    <div>
        anh <br>
        <input type="file" name="image">
    </div>
    <div>
        Tuổi <br>
        <select name="club_id" id="">
            <?php
                foreach ($result as $value){
            ?>
                    <option value="<?= $value['club_id']?>"><?= $value['club_name']?></option>
            <?php
                }
            ?>
        </select>
    </div>
    <button type="submit">Them</button>
</form>
</body>
</html>
