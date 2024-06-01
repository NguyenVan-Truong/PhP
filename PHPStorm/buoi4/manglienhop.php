<?php
// khái bảo mảng liên hợp
//$myarray = array(); // khai báo maảng rỗng
$myarray1 = array(
    "hoten"=> "Trường hay ho",//cú pháp : "key" => value
    "diachi"=>"hà Nội",
    "sinhngay" => "21062004"
);
//echo $myarray1["hoten"];
// duyệt mảng 1 chiều
//$keys =array_keys($myarray1);
//$length = count($keys);
//for ($i =0;$i < $length ; $i++) {
//    $key = $keys[$i];
//    $value = $myarray1[$key];
//    echo "key: " . $key . ", Value: " . $value . "<br>";
//}
//
//foreach ($myarray1 as $key => $value){
//    echo "key: " . $key . ", Value: " . $value . "<br>";
//}

//+++khai báo mảng liên howpj nhiều chiều
$sinhvien = array(
    "magv" => array(
        "hoten"=>"ngỹeeenx Văn Trường",
        "ngày" =>"21062004",
        "giới tinh" => "nam"
    ),
    "magv1" => array(
        "hoten"=>"Trường Hay Ho ",
        "ngày" =>"2106",
        "giới tinh" => "nam"
    ),
    "magv3" => array(
        "hoten"=>" Văn Trường",
        "ngày" =>"21062004",
        "giới tinh" => "abc"
    ),
);
//echo  $sinhvien["magv1"]["hoten"];

//duyệt mảng for
$magiangvien= array_keys($sinhvien);
$length = count($magiangvien);
for ($i = 0 ; $i<$length;$i++){
    $key = $magiangvien[$i];
    $details = $sinhvien[$key];//tạo mảng con trong khoá chính
    $keys = array_keys($details);//tạo mảng chứa key của mảng con
    $totalkeys = count($keys); // đếm số lương key mảng con

    for ($j=0; $j< $totalkeys;$j++){
        $name = $keys[$j];
        $value = $details[$name];
        echo "key: ".$name.",Value : ".$value."<br>";
    }
    echo "<br>";
}
foreach ($sinhvien as $magiangvien => $details ){
    foreach ($details as $name => $value ){
        echo "key: ".$name.",Value : ".$value."<br>";
    }
    echo "<br>";
}


