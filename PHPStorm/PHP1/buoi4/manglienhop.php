<?php
// khai báo mảng liên hợp
//$myArray = array(); // khai báo mảng rỗng

//$myArray = array(
//    "hoTen" => "Trương Công Kiên", // cú pháp: "key" => "value"
//    "diaChi" => "Hà Nội",
//    "ngheNghiep" => "Giảng viên"
//);
//echo $myArray["hoTen"];

// duyệt mảng 1 chiều bằng for

//$keys = array_keys($myArray);
//$length = count($keys);
//
//for($i = 0; $i<$length;$i++){
//    $key = $keys[$i];
//    $value = $myArray[$key];
//
//    echo "Key: ".$key. ", Value: ".$value."<br>";
//}

// duyệt bằng foreach
//foreach ( $myArray as $key => $value){
//    echo "Key: ".$key. ", Value: ".$value."<br>";
//}


//khai báo mảng liên hợp nhiều chiều
$giangvien = array(
    "GV01" => array( //khóa chính của mảng ngoài cùng
        "hoTen" => "Trương Công Kiên", // cú pháp: "key" => "value" (mảng con bên trong)
        "diaChi" => "Hà Nội",
        "gioiTinh" => "Nam"
    ),
    "GV02" => array( //khóa chính của mảng ngoài cùng
        "hoTen" => "Nguyễn Thành Trung", // cú pháp: "key" => "value"
        "diaChi" => "Hà Nội",
        "gioiTinh" => "Nam"
    ),
    "GV03" => array( //khóa chính của mảng ngoài cùng
        "hoTen" => "Đỗ Thùy Linh", // cú pháp: "key" => "value"
        "diaChi" => "Hà Nội",
        "gioiTinh" => "Nữ"
    ),
);
//echo $giangvien["GV02"] ["hoTen"];

// duyệt mảng bằng for
//$maGV = array_keys($giangvien); // mảng tập hợp các khóa chính của mảng cha
//$length = count($maGV); // đếm số lượng key có trong mảng cha
//
//for($i = 0; $i< $length; $i++){
//    $name = $maGV[$i]; // duyệt khóa theo mảng cha
//    echo "Mã giảng viên: ".$name."<br>";
//
//    $details = $giangvien[$name]; // tạo mảng con bên trong mảng chính
//    $keys = array_keys($details); // tạo mảng chứa key của mảng con
//    $totalkeys = count($keys); // đếm số lượng key có trong mảng con
//     for($j=0; $j<$totalkeys; $j++){
//         $key = $keys[$j]; // duyệt khóa theo mảng con
//         $value = $details[$key]; // đọc giá trị theo khóa của mảng con
//
//         echo "Key: ".$key.", Value: ".$value."<br>";
//     }
//     echo "<br>";
//}


//duyệt mảng bằng foreach
//foreach ($giangvien as $maGV => $details){
//    foreach ($details as $key => $value){
//        echo "Key: ".$key.", Value: ".$value."<br>";
//    }
//    echo "<br>";
//}
