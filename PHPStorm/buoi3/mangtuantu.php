<?php
// mảng trong php
// mảng tuần tự và mảng liên hợp
// khai báo mảng
//$array1 = array(); // khai báo mảng rỗng
//$array2 = array(1,2,3); // khai báo mảng và khởi tạo giá trị
//$array3 = [1,2,3,4,5,6]; // khai báo mảng và khởi tạo giá trị

// in mảng ra màn hình để kiểm tre kq
//print_r($array2);

// in từng phần tử
//echo $array2[1];

// thay đổi giá trị từng phần tử
//echo $array2[1]='trường hay ho'.'<br>';
//print_r($array2);

//gắn giá trị cho phâ tử mới
//echo $array2[4]=100 . "<br>";
//print_r($array2);

// duyệt mảng tuần tự 1 chiều bằng for
//$myarray = array(1,2,3,4,5);
//$length = count($myarray);
//for($i = 0 ; $i<$length;$i++){
//    echo $myarray[$i]."<br>";
//}
// khái báo mảng bất kỳ gồm 5 phần ử
// chãn lẻ
//$myarray1 = array(1,2,3,4,5,6,7,8,9,10);
//$length = count($myarray1);
//$tong=0;
//$tongchan =0;
//$tongle=0;
//for ($i=0 ; $i<$length;$i++){
//    if ($i % 2 == 0){
//        echo "chẵn".$i."<br>";
//        $tongchan +=$myarray1[$i];
//
//    }else{
//        echo "lẻ".$i."<br>";
//        $tongle +=$myarray1[$i];
//    }
//}
//tính tổng các phẩn  tử của mảng , chẵn , lẻ
//$tong=0;
//for($i=0; $i<$length;$i++){
//    $tong +=$myarray1[$i];
//}
//echo $tong."<br>";
//echo $tongchan."<br>";
//echo $tongle."<br>";

//duyệt mảng tuần tự 1 chiều bằng foreach
//$myarray3 = array(12,3,5,4,6);
// in mình giá trị
//forech($myarray3 as $value){
    //echo $value."<br>";
//}
// in tất ca giá trị và giá trị từng phẩn tử
//foreach ($myarray3 as $index =>  $value){
//    echo "Index:".$index.",value: ".$value."<br>";
//}

// khai bảo mảng tự nhiều chiều
$mutiarray = [
    [1,2,3,10],
    [4,5,6,11],
    [7,8,9,12],
    [null,null,null,null]
];
//echo $mutiarray[1][0];
// duyệt mảng tuẩn tự nhiều chiều
// duyệt mang tuẩn tự nhiều chiều bằng for
$row = count($mutiarray);// số hàng
$cole = count($mutiarray);// số cột
for($i=0;$i<$row;$i++){
    for ($j=0;$j<$cole;$j++){
        echo $mutiarray [$i] [$j];
    }
    echo "<br>";
}

// duyệt mảng foreach
// in ra giá trị
//foreach($multiArray as $row){
//    foreach ($row as $value){
//        echo $value;
//    }
//    echo "<br>";
//}

//in ca chi so va gia tri
//foreach($mutiarray as $rowIndex=>$row){
//    foreach ($row as $columnIndex=>$value){
//        echo "[$rowIndex][$columnIndex]=>$value".",";
//    }
//    echo "<br>";
//}


