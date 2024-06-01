
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
<?php
$datacrush = [
    [
        "ten"=>"trang",
        "tuoi"=>19,
        "que"=>"HN"
    ],
    [
        "ten"=>"MY",
        "tuoi"=>17,
        "que"=>"HP"
    ],
    [
        "ten"=>"Minh",
        "tuoi"=>28,
        "que"=>"TH"
    ],
    [
        "ten"=>"Hương",
        "tuoi"=>22,
        "que"=>"ĐN"
    ]
];
?>
<h1>Danh sach ny </h1>
<form action="" method="post">
    <label for="">Tiêu Ch NY từ </label>
    <input type="number" name="from" >
    <label for=""đến</label>
    <input type="number" name="to">
    <input type="submit" value="gửi" name="submit">
</form>
<table>
    <thead>
        <tr>
            <th>Tên</th>
            <th>Tuổi</th>
            <th>Quê</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($datacrush as $crush):
    $tencrush =$crush["ten"];
    $tuoi = $crush["tuoi"];
    $quequan = $crush["que"];
    $styletuoi = ($tuoi < 18)?"color:red;":"";
    if (isset($_POST["submit"])&&($_POST["submit"])){
        $from=$_POST["from"];
        $to =$_POST["to"];
        if ($tuoi>=$from&& $tuoi<=$to){?>
        <tr style="<?php echo $styletuoi; ?>">
            <td><?php echo $tencrush; ?></td>
            <td><?php echo $tuoi; ?></td>
            <td><?php echo $quequan; ?></td>
        </tr>
    <?php

    }
    }else{
    ?>
    <tr style="<?php echo $styletuoi; ?>">
        <td><?php echo $tencrush; ?></td>
        <td><?php echo $tuoi; ?></td>
        <td><?php echo $quequan; ?></td>
    </tr>
    <?php
    }
    endforeach;
    ?>
    </tbody>
</table>
</body>
</html>
