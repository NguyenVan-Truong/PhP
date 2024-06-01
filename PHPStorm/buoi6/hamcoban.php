<?php
//$giangvien = [
//        [
//                "hoten" => " Truong Hay Ho",
//                "diachi" => "Ha Noi",
//                "namsinh"=> "2004"
//        ],
//        [
//            "hoten" => " Truong Hay Ho",
//            "diachi" => "Ha Noi",
//            "namsinh"=> "2003"
//        ],
//        [
//            "hoten" => " Truong Hay Ho",
//            "diachi" => "Ha Noi",
//            "namsinh"=> "2002"
//        ]
//];
// hàm đến số phần tử của mảng
    //echo count($giangvien);
// chuyển mảng về mảng tuần tự
//    $value = array_values($giangvien);
//    print_r($value);

//$array = array('a'=> 1,'b'=>2 , 'c'=>3);
//$value1 = array_values($array);
//print_r($value1);
// trả mảng tuần tự với phần tử là key của mảng ban đầu
//$value2 = array_keys($giangvien);
//print_r($value2);
// hàm trả về phẩn tử cuối cùng của mảng và
//$value3 = array_pop($giangvien);
//print_r($value3);

// Hàm thêm 1 hoặc nhiều phần tử vào mảng
//$gv = array("truong", "trang");
//$value = array_push($gv,"hoa","sinh");
//print_r($gv);
//echo $value;

// xoá phần tử đầu tiên của mảng và in ra phần t bị xoá
//$gv = array("truong","trung");
//$value= array_shift($gv);
//print_r($gv);
//echo  $value;

// thêm 1 hoặc nhiều phân tử vào dầu mảng
// và in ra số phần tử có trong mảng
//$gv = array("kien", " trung");
//$value = array_unshift($gv,"tuan");
//print_r($gv);
//echo  $value;

// hàm sắp xép thứ tự tăng dần
//$gv = array("kien", "trung","truong");
//sort($gv);
//print_r($gv);

// hàm nối 2 mảng
//$arr1 = ['a'=>1,'b'=>2];
//$arr2 =["a"=>3,"b"=>4];
//$value = array_merge($arr1,$arr2);

// tìm kiếm
//$gv = array('kien', "trung ", "truong");
//$value = array_search("anh",$gv);
//echo $value;

// tìm kếm trả về key
//$arr12 =['a'=>'tuan', 'b'=>truong];
//$key = array_search("hoa",$arr1,$arr2);
//echo $key;

//// hàm loại bỏ phần tử đã tồn tại và trả về mảng mới
//$gv = array("kien", "trung" ," anh ","dịnh ", " hoa");
//$value = array_unique($gv);
//print_r($value);
//
//$sinhvien = array(
//    "magv" => array(
//        "hoten"=>"ngỹeeenx Văn Trường",
//        "ngày" =>"21062004",
//        "giới tinh" => "nam"
//    ),
//    "magv1" => array(
//        "hoten"=>"Trường Hay Ho ",
//        "ngày" =>"2106",
//        "giới tinh" => "nam"
//    ),
//    "magv3" => array(
//        "hoten"=>" Văn Trường",
//        "ngày" =>"21062004",
//        "giới tinh" => "abc"
//    ),
//);
// hàm kiểm tra khoá key
//if (array_key_exists("magv",$sinhvien)){
//    echo "dung";
//}else{
//    echo "sai";
//}

// hàm kiểm tra giá trị value của mảng
//$gv = array("kien", "trung" ," anh ","dịnh ", " hoa");
//if(in_array($gv)){
//    echo "dung";
//}else{
//    echo "sai";
//}

// hàm kiểm tra biến có phải mang
//$gv = array("kien", "trung" ," anh ","dịnh ", " hoa");
//if(is_array($gv)){
//    echo "dung";
//}else{
//    echo "sai";
//}

// HIển Thị Dữ Liệu
$nhanVien=[
    [
        'ten'=>'Nguyễn Văn Trường',
        'ns'=>'2001',
        'diachi'=>"1000000USD",
        'hhoa'=>"CNTT",
        'sdt'=>'01236456789'
    ],
    [
        'ten'=>'Trường Hay Ho',
        'ns'=>'2002',
        'diachi'=>"1000000USD",
        'hhoa'=>"TKDH",
        'sdt'=>'01236456789'
    ],
    [
        'ten'=>'Minh Trường',
        'ns'=>'2003',
        'diachi'=>"1000000USD",
        'hhoa'=>"QTKS",
        'sdt'=>'01236456789'
    ],
    [
        'ten'=>'Trương Trang',
        'ns'=>'2004',
        'diachi'=>"1000000USD",
        'hhoa'=>"QHCC",
        'sdt'=>'01236456789'
    ],
    [
        'ten'=>'Trường Trường',
        'ns'=>'2005',
        'diachi'=>"1000000USD",
        'hhoa'=>"Marketing",
        'sdt'=>'01236456789'
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
    <style>
        table, th, td {
            border: 1px solid pink;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>Tên</td>
        <td>Năm Sinh</td>
        <td>Đia Chỉ</td>
        <td>Khoa</td>
        <td>SĐT</td>
    </tr>
    <?php
        foreach ($nhanVien as $key => $value){
    ?>
<!--            echo '<td>' . $nhanVien['Ten'] . '</td>';-->
<!--            echo '<td>' . $nhanVien['ns'] . '</td>';-->
<!--            echo '<td>' . $nhanVien['diachi'] . '</td>';-->
<!--            echo '<td>' . $nhanVien['khoa'] . '</td>';-->
<!--            echo '<td>' . $nhanVien['sdt'] . '</td>';-->
            <tr>
                <td><?php echo $value['ten']?></td>
                <td><?php echo $value['ns']?></td>
                <td><?php echo $value['diachi']?></td>
                <td><?php echo $value['hhoa']?></td>
                <td><?php echo $value['sdt']?></td>

            </tr>
    <?php
        }
    ?>
</table>
</body>
</html>
