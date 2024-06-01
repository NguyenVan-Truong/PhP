<?php
// mảng trong php
// mảng tuần tự và mảng liên hợp

// khai báo mảng
//$array1= array(); // khai báo mảng rỗng
//$array2 = array(12,35,22); // khai báo mảng và khởi tạo giá trị
//$array3 = [1,2,3,4,5]; // khai báo mảng và khởi tạo giá trị

// in ra các mảng để kiểm tra kết quả
//print_r($array2);

// in từng phần tử
// trong [] là vị trí của phẩn từ của mảng
//echo $array2[1];

// thay đổi giá trị của phần tử
// thay số 35 trong mang array2 thành 10
//echo $array2[1] = 10 . "<br>";
//
//print_r($array2);

// gán giá trị cho phần tử mới
//echo $array2[4] = 100 . "<br>";
//
//print_r($array2);


// duyệt mảng tuần tự 1 chiều bằng for
//$myArray = array(1,2,3,4,5); // khai báo mảng và khởi tạo giá trị
//$length = count($myArray); // đấm số phần tử có trong mảng
//for($i = 0; $i < $length; $i++){
//    echo $myArray[$i]."<br>";
//}

// khai báo mảng bất kì gồm 5 phần tử
// xác định phần tử số chẵn, số lẻ (giá trị)
// tính tổng các phần tử của mảng, tính tổng các số chẵn, số lẻ

//$myArray = array(12,5,3,7,65,4,2);// khai báo mảng và khởi tạo giá trị
//$tong = 0;
//$tongchan = 0;
//$tongle = 0;
//$length = count($myArray);
//for ($i = 0; $i < $length; $i++){
//    if($myArray[$i] % 2 == 0){ // xác định số chẵn
//        echo $myArray[$i]." là số chẵn"."<br>";
//        $tongchan += $myArray[$i]; // tổng của các số chẵn
//        // $tongchan =  $tongchan + $myArray[$i];
//    }else{ // xác định số lẻ
//        echo $myArray[$i]." là số lẻ"."<br>";
//        $tongle += $myArray[$i]; // tổng của các số lẻ
//        // $tongle =  $tongle + $myArray[$i];
//    }
//    $tong+=$myArray[$i];
//    // $tong = $tong + $myArray[$i];
//
//}
//echo "Tổng của mảng là: ".$tong."<br>"; // in ra kết quả tổng mảng
//echo "Tổng các số chẵn của mảng là: ".$tongchan."<br>"; // in ra kết quả tổng chẵn
//echo "Tổng các số lẻ của mảng là: ".$tongle."<br>"; // in ra kết quả tổng lẻ

// duyệt mảng tuần tự 1 chiều bằng foreach

//$myArray = array(12,3,4,8,9);
////// in mình giá trị
////foreach ($myArray as $value){
////    echo $value."<br>";
////}
//
//// in cả vị trí và giá trị của từng phần tử
//foreach ($myArray as $index => $value){
//    echo "Index: ".$index.", Value: ".$value."<br>";
//}


// khai báo mảng tuần tự nhiều chiều
// cách 1
//$multiArray = [
//    [1,2,3],
//    [4,5,6],
//    [7,8,9]
//];
//echo $multiArray [1][2];

// cách 2
$multiArray = array(
    array (1,2,3),
    array (4,5,6),
    array (7,8,9)
);
//echo $multiArray [1][2];

// duyệt mảng tuần tự nhiều chiều
// duyệt mảng tuần tự nhiều chiều bằng for


//$row = count($multiArray);// số hàng
//$cols = count($multiArray);// số cột
//
//for($i=0;$i<$row; $i++){
//    for ($j = 0 ; $j < $cols; $j++){
//        echo $multiArray [$i] [$j];
//    }
//    echo "<br>";
//}

//duyệt bằng foreach
// in ra giá trị
//foreach ($multiArray as $row){
//    foreach ($row as $value){
//        echo $value;
//    }
//    echo "<br>";
//}

// in cả chỉ số và giá trị
//foreach ($multiArray as $rowIndex => $row){
//    foreach ($row as $columnIndex => $value){
//        echo "[$rowIndex] [$columnIndex] => $value".", ";
//    }
//    echo "<br>";
//}