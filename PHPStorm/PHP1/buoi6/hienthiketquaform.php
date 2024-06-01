<?php
$giangvien=[
    [
        'ten'=>'Trương Công Kiên',
        'nam_sinh'=>1997,
        'dia_chi'=>'Ha Noi',
        'khoa'=>'CNTT',
        'so_dien_thoai'=>'0123456789'
    ],
    [
        'ten'=>'Nguyễn Thành Trung',
        'nam_sinh'=>1996,
        'dia_chi'=>'Ha Noi',
        'khoa'=>'Ke Toan',
        'so_dien_thoai'=>'0123456789'
    ],
    [
        'ten'=>'Đỗ Thùy Linh',
        'nam_sinh'=>1999,
        'dia_chi'=>'Ha Noi',
        'khoa'=>'CNTT',
        'so_dien_thoai'=>'0123456789'
    ],
    [
        'ten'=>'Lê Thị Huyền Diệu',
        'nam_sinh'=>2000,
        'dia_chi'=>'Ha Noi',
        'khoa'=>'CNTT',
        'so_dien_thoai'=>'0123456789'
    ]
];
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
<table>
    <tr>
        <td>Tên</td>
        <td>Năm sinh</td>
        <td>Địa chỉ</td>
        <td>Khoa</td>
        <td>SĐT</td>
    </tr>
    <?php
    foreach ($giangvien as  $key => $value){
        ?>
        <tr>
            <td><?php echo $value['ten'] ?></td>
            <td><?php echo $value['nam_sinh'] ?></td>
            <td><?php echo $value['dia_chi'] ?></td>
            <td><?php echo $value['khoa'] ?></td>
            <td><?php echo $value['so_dien_thoai'] ?></td>
        </tr>
        <?php
    }
    ?>

</table>
</body>
</html>