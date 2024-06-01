<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table, th, td {
        border: 1px solid red;
        border-collapse: collapse;
    }
    th, td {
        padding: 20px;
    }
</style>
<body>
<?php
$trangThai=[];// tạo mảng trạng thái rỗng, so sánh time muốn tìm kiếm và time bay để trả về kết quả
$danhSach=[
    [
        'soHieu'=>'VN001',
        'timeDi'=>'2021-03-03 12:00:00',
        'timeDen'=>'2021-03-03 14:00:00',
        'noiDi'=>'Quy Nhơn',
        'noiDen'=>'TPHCM',
        'tongHK'=>100,
        'trangThai'=>$trangThai
    ],
    [
        'soHieu'=>'VN001',
        'timeDi'=>'2022-03-04 12:00:00',
        'timeDen'=>'2022-03-04 14:00:00',
        'noiDi'=>'Quy Nhơn',
        'noiDen'=>'TPHCM',
        'tongHK'=>100,
        'trangThai'=>$trangThai
    ],
    [
        'soHieu'=>'VN001',
        'timeDi'=>'2023-03-02 12:00:00',
        'timeDen'=>'2023-03-02 14:00:00',
        'noiDi'=>'Quy Nhơn',
        'noiDen'=>'TPHCM',
        'tongHK'=>100,
        'trangThai'=>$trangThai
    ],
    [
        'soHieu'=>'VN002',
        'timeDi'=>'2021-03-04 17:00:00',
        'timeDen'=>'2021-03-04 18:00:00',
        'noiDi'=>'Hà Nội',
        'noiDen'=>'Đà Lạt',
        'tongHK'=>60,
        'trangThai'=>$trangThai
    ],
    [
        'soHieu'=>'VN002',
        'timeDi'=>'2022-03-10 17:00:00',
        'timeDen'=>'2022-03-10 18:00:00',
        'noiDi'=>'Hà Nội',
        'noiDen'=>'Đà Lạt',
        'tongHK'=>60,
        'trangThai'=>$trangThai
    ],
    [
        'soHieu'=>'VN002',
        'timeDi'=>'2023-03-03 17:00:00',
        'timeDen'=>'2023-03-03 18:00:00',
        'noiDi'=>'Hà Nội',
        'noiDen'=>'Đà Lạt',
        'tongHK'=>60,
        'trangThai'=>$trangThai
    ],
    [
        'soHieu'=>'VN003',
        'timeDi'=>'2021-03-04 19:00:00',
        'timeDen'=>'2021-03-04 21:00:00',
        'noiDi'=>'Hải Phòng',
        'noiDen'=>'Huế',
        'tongHK'=>50,
        'trangThai'=>$trangThai
    ],
    [
        'soHieu'=>'VN003',
        'timeDi'=>'2022-03-02 19:00:00',
        'timeDen'=>'2022-03-02 21:00:00',
        'noiDi'=>'Hải Phòng',
        'noiDen'=>'Huế',
        'tongHK'=>50,
        'trangThai'=>$trangThai
    ],
    [
        'soHieu'=>'VN003',
        'timeDi'=>'2023-03-05 19:00:00',
        'timeDen'=>'2023-03-05 21:00:00',
        'noiDi'=>'Hải Phòng',
        'noiDen'=>'Huế',
        'tongHK'=>50,
        'trangThai'=>$trangThai
    ],
];
?>
<h1> Mời nhập thông tin</h1>
<form action="asm1.php" method="post">
    <div>
        <lable for="soHieu1"> mời nhập số hiệu chuyến bay</lable>
        <input type="text" name="soHieu1" id="" required>
    </div>
    <div>
        <lable for="timeDi"> mời nhập thời gian đi</lable>
        <input type="datetime-local" name="from" id="" required>
    </div>
    <div>
        <lable for="timeDen">mời nhập thời gian đến</lable>
        <input type="datetime-local" name="to" id="">
    </div>
    <div><button type="submit" name="btn" > kiểm tra</button></div>
</form>
<table>
    <thead>
        <tr>
            <th>SỐ Hiệu </th>
            <th>timedi</th>
            <th>timeden</th>
            <th>noidi</th>
            <th>noiden</th>
            <th>tonghk</th>
            <th>trangthai</th>
        </tr>
    </thead>
    <?php
    foreach ($danhSach as $ds){
    ?>  <tr>
        <td><?php echo $ds['soHieu']?></td>
        <td><?php echo $ds['timeDi']?></td>
        <td><?php echo $ds['timeDen']?></td>
        <td><?php echo $ds['noiDi']?></td>
        <td><?php echo $ds['noiDen']?></td>
        <td><?php echo $ds['tongHK']?></td>

    </tr>
        <?php
    }
    ?>
</table>

</body>
</html>
