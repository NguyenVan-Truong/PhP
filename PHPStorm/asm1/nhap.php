<?php
$trangThai=null;
$danhSach=[
    [
        'soHieu'=>'VN001',
        'timeDi'=>'2023-07-07 20:00:00',
        'timeDen'=>'2023-07-07 22:00:00',
        'noiDi'=>'Quy Nhơn',
        'noiDen'=>'TPHCM',
        'tongHK'=>100,
    ],
    [
        'soHieu'=>'VN002',
        'timeDi'=>'2023-07-23 19:00:00',
        'timeDen'=>'2023-07-23 21:00:00',
        'noiDi'=>'Hà Nội',
        'noiDen'=>'Đà Lạt',
        'tongHK'=>60,

    ],
    [
        'soHieu'=>'VN003',
        'timeDi'=>'2023-08-08 19:00:00',
        'timeDen'=>'2023-08-08 21:00:00',
        'noiDi'=>'Hải Phòng',
        'noiDen'=>'Huế',
        'tongHK'=>50,

    ],
    [
        'soHieu'=>'VN004',
        'timeDi'=>'2023-08-08 19:00:00',
        'timeDen'=>'2023-08-08 21:00:00',
        'noiDi'=>'Hải Phòng',
        'noiDen'=>'Huế',
        'tongHK'=>50,

    ],
    [
        'soHieu'=>'VN005',
        'timeDi'=>'2023-08-23 13:00:00',
        'timeDen'=>'2023-08-23 16:00:00',
        'noiDi'=>'Hải Phòng',
        'noiDen'=>'Huế',
        'tongHK'=>50,

    ],
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
<form action="" method="post">
    <div>
        <lable for="soHieu1"> mời nhập số hiệu chuyến bay</lable>
        <input type="text" name="soHieu1" id="" required>
    </div>
    <div>
        <lable for="timeDi"> mời nhập thời gian đi</lable>
        <input type="datetime-local" name="timeDi" id="" >
    </div>
    <div>
        <lable for="timeDen">mời nhập thời gian đến</lable>
        <input type="datetime-local" name="timeDen" id="">
    </div>
    <div>
        <button name="btn">Kiểm Tra</button>
    </div>
</form>
    <table border="1">
    <tr>
        <th>số hiệu chuyến bay</th>
        <th>thời gian đi</th>
        <th>thời gian đến</th>
        <th> nơi đi</th>
        <th>nơi đến</th>
        <th>tổng hành khách</th>
        <th>trạng thái</th>
    </tr>
    <?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $timestampToday=(strtotime("now"));
    $bgr='white';
    $count=0;
    foreach ($danhSach as $key){
        $timevalueDi = strtotime($key['timeDi']);
        $timevalueDen = strtotime($key['timeDen']);
        if (($timevalueDi <= $timestampToday) && ($timestampToday <= $timevalueDen)) {
            $trangThai='đang bay';
            $bgr='yellow';
        }elseif($timevalueDen < $timestampToday){
            $trangThai='đã bay';
            $bgr='red';
        }elseif($timevalueDi > $timestampToday){
            $trangThai='chưa bay';
            $bgr='green';
        }
        if(isset($_POST['btn'])){
            $soHieuseach=$_POST['soHieu1'];
            $count+=1;
            $timeDi = $_POST['timeDi'];
            $timeDen = $_POST['timeDen'];
            if($soHieuseach == $key['soHieu']){
                $check=true;
                $timevalueDi = strtotime($key['timeDi']);
                $timevalueDen = strtotime($key['timeDen']);
                if($timeDi =='' && $timeDen=='' ){
                    $timeStampDi = (strtotime("now"));
                    $timeStampDen = (strtotime("now"));
                }else {
                    $timeStampDi = strtotime($timeDi); //hàm strtotime tính thời gian từ(số giây kể từ ngày 1 tháng 1 năm 1970 00:00:00GMT)
                    $timeStampDen = strtotime($timeDen);
                }
                if (($timevalueDi <= $timeStampDi) && ($timeStampDi <= $timevalueDen) || ($timevalueDi <= $timeStampDen) && ($timeStampDen <= $timevalueDen)) {
                    $trangThai='đang bay';
                    $bgr='yellow';
                }elseif($timevalueDen < $timeStampDi){
                    $trangThai='đã bay';
                    $bgr='red';
                }elseif($timevalueDi > $timeStampDen){
                    $trangThai='chưa bay';
                    $bgr='green';
                }
                ?>
                <tr style="background-color:<?php echo $bgr?>">
                    <td><?php echo $key['soHieu']?></td>
                    <td><?php echo $key['timeDi']?></td>
                    <td><?php echo $key['timeDen']?></td>
                    <td><?php echo $key['noiDi']?></td>
                    <td><?php echo $key['noiDen']?></td>
                    <td><?php echo $key['tongHK']?></td>
                    <td><?php echo $trangThai?></td>
                </tr>
                <?php
            }
        }
        if($count==0){?>
            <tr style="background-color:<?php echo $bgr?>">
                <td><?php echo $key['soHieu']?></td>
                <td><?php echo $key['timeDi']?></td>
                <td><?php echo $key['timeDen']?></td>
                <td><?php echo $key['noiDi']?></td>
                <td><?php echo $key['noiDen']?></td>
                <td><?php echo $key['tongHK']?></td>
                <td><?php echo $trangThai?></td>
            </tr>
            <?php
        }}
    if($count!=0){?>
        <tr>
            <td colspan="7"> <?php echo "không có số hiệu chuyến bay bạn muốn tìm"?></td>
        </tr>

        <?php
    }
    ?>
</table>
</body>
</html>
