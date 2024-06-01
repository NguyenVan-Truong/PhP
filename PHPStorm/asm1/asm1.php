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
<table border="1">
    <tr>
        <th>số 8hiệu chuyến bay</th>
        <th>thời gian đi</th>
        <th>thời gian đến</th>
        <th> nơi đi</th>
        <th>nơi đến</th>
        <th>tổng hành khách</th>
        <th>trạng thái</th>
    </tr>
    <?php
    if(isset($_POST['btn'])) {
        $timeDi = $_POST['from'];
        $timeDen = $_POST['to'];
        $soHieuseach=$_POST['soHieu1'];
        echo $soHieuseach.'<br>';
        echo $timeDi.'<br>';
        echo $timeDen.'<br>';
        $timeStampDi = strtotime($timeDi); //hàm strtotime tính thời gian từ(số giây kể từ ngày 1 tháng 1 năm 1970 00:00:00GMT)
        $timeStampDen = strtotime($timeDen);

        $check=0;
        foreach ($danhSach as $ds){

            if($soHieuseach == $ds['soHieu']){
                $check+=1;
                $timevalueDi = strtotime($ds['timeDi']);
                $timevalueDen = strtotime($ds['timeDen']);
                $key= array_search($soHieuseach, $ds, true);
                if (($timevalueDi <= $timeStampDi) && ($timeStampDi <= $timevalueDen) || ($timevalueDi <= $timeStampDen) && ($timeStampDen <= $timevalueDen)) {
                    array_shift($trangThai);
                    array_push($trangThai,'đang bay');
                    $color='yellow';
                }elseif($timevalueDen < $timeStampDi){
                    array_shift($trangThai);
                    array_push($trangThai, ' đã bay');
                    $color='red';

                }elseif($timevalueDi > $timeStampDen){
                    array_shift($trangThai);
                    array_push($trangThai,'chưa bay');
                    $color='green';
                }
//                   // biến color để thay đổi màu backgr
                ?>
                <tr style="background:<?php echo $color?>">
                    <td><?php echo $ds['soHieu']?></td>
                    <td><?php echo $ds['timeDi']?></td>
                    <td><?php echo $ds['timeDen']?></td>
                    <td><?php echo $ds['noiDi']?></td>
                    <td><?php echo $ds['noiDen']?></td>
                    <td><?php echo $ds['tongHK']?></td>
                    <td><?php echo $trangThai[0]?></td>
                </tr>
                <?php
            }
        else{
            ?>
            <tr style="background:<?php echo $color?>">
                    <td><?php echo $ds['soHieu']?></td>
                    <td><?php echo $ds['timeDi']?></td>
                    <td><?php echo $ds['timeDen']?></td>
                    <td><?php echo $ds['noiDi']?></td>
                    <td><?php echo $ds['noiDen']?></td>
                    <td><?php echo $ds['tongHK']?></td>
                    <td><?php echo $trangThai[0]?></td>
                </tr>
            <?php
        }
        }
        if($check==0){?>
            <tr>
                <td colspan="7"> <?php echo "không có số hiệu chuyến bay bạn muốn tìm"?></td>

            </tr>

            <?php

        }
    }
    ?>
</table>
</body>
</html>


