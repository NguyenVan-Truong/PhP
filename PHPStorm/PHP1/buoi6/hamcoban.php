<?php
//$giangvien = [
//    [
//        'hoten' => 'Trương Công Kiên',
//        'diachi' => 'Hà Nội',
//        'namsinh' => '1997'
//    ],
//    [
//        'hoten' => 'Nguyễn Thành Trung',
//        'diachi' => 'Hà Nội',
//        'namsinh' => '1996'
//    ],
//    [
//        'hoten' => 'Đỗ Thùy Linh',
//        'diachi' => 'Hà Nội',
//        'namsinh' => '1999'
//    ]
//];

// hàm đếm số phần tử của mảng
//echo count($giangvien);

// chuyển mảng về mảng tuần tự
//$value = array_values($giangvien);
//print_r($value);

//$array = array('a'=>1,'b'=>2,'c'=>3);
//$value = array_values($array);
//print_r($value);

// trả mảng tuần tự với phần tử là key của mảng ban đầu

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
//$value = array_keys($giangvien);
//print_r($value);


// hàm trả về phần tử cuối cùng của mảng
//$value = array_pop($giangvien);
//print_r($value);

// hàm thêm 1 hoặc nhiều phần tử vào mảng
// và trả về số lương phần tử
//$gv = array('kien', 'trung');
//$value = array_push($gv, 'hoa','linh');
//print_r($gv);
//echo $value;

// xóa phần tử đầu tiên của mảng và in ra phần tử bị xóa
//$gv = array('kien', 'trung');
//$value = array_shift($gv);
//print_r($gv); // hiển thị mảng
//echo $value; // hiển thị phần tử bị xóa

// thêm 1 hoặc nhiều phần tử vào đầu mảng
// và in ra số phần tử có trong mảng
//$gv = array('kien', 'trung');
//$value = array_unshift($gv,'Tuan');
//print_r($gv);
//echo $value; // in ra phần tử

// hàm sắp xếp thứ tự tăng dần
//$gv = array('kien','trung','anh','dinh','hoa');
//sort($gv);
//print_r($gv);

//hàm nối 2 mảng
//$array1=['a'=>1,'b'=>2];
//$array2=['a'=>3,'b'=>4];
//$array3=['a'=>5,'b'=>6];
//$value = array_merge($array1,$array3,$array2);
//print_r($value);

//tìm kiếm
//$gv = array('kien','trung','anh','dinh','hoa');
//$value = array_search('anh',$gv);
//echo $value;

//tìm kiếm trả về key
//$array1=['a'=>'Tuấn','b'=>'Hoa','c'=>'Hoa'];
//$key = array_search("Hoa",$array1,true);
//echo $key;

//hàm loại bỏ phần tử đã tồn tại và trả về mảng mới
//$gv = array('kien','trung','anh','dinh','hoa','trung','kien','anh');
//$value = array_unique($gv);
//print_r($value);

//hàm kiểm tra khóa key
if(array_key_exists("GV01",$giangvien)){
    echo 'Đúng';
}else{
    echo 'Sai';
}
// hàm kiểm tra giá trị value của mảng
//$gv = array('kien','trung','anh','dinh','hoa');
//if(in_array('trung',$gv)){
//    echo "Đúng";
//}else{
//    echo 'Sai';
//}

// hàm kiểm tra biến có phải mảng hay không
$gv = array('kien','trung','anh','dinh','hoa');
if(is_array($gv)){
    echo "Đúng";
}else{
    echo 'Sai';
}