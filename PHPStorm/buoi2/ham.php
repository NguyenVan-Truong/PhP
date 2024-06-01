<?php
// function là hàm
// hàm có 2 loại chính
// có sẵn và tự tạo
// hàm có 2 loại chính sử dụng


//function test(){
//    // hàm ko trar về
////    echo "các ban có đã trông mong ve chx";
//    return 'chúc các bạn vui vẻ';
//}
//// hàm ko trả về
////test();
//// hàm có trả về phải có echo
//echo test();

//$r = null;
//$pi = 3.14;
////function hinhtron($r,$pi){
////    // nếu trong () có hiển thị được hiểu là hàm có tham số
////    // nếu trong () ko có hiển thị được hiểu l hàm ko có tham sô
////    echo 'diện tích hình tròn'.($pi * pow($r, 2));
////
////}
////hinhtron(3, 3.14 );
//
//function hinhtron1(){
//    $pi = 3.14;
//    $r = 5;
//    echo 'diện tích hình tròn'.($pi * pow($r, 2));
//}
//hinhtron1();

//vuong
function hinhvuong($r){
    echo 'chu vi cac hinh vuông '.(4*$r)."<br>";
    echo 'diện tích hình vuông '.($r * $r)."<br>";
}
hinhvuong(5);

function chunhat($d , $r){
    echo "chu vi hinh chu nhat ".(($d+ $r)*2)."<br>";
    echo 'diện tích hình chu nhat '.($r * $d)."<br>";
}
chunhat(10,5);
function tamgiac($a , $h,$b ,$c ){
    echo "chu vi hinh tam giac".($a + $b + $c)."<br>";
    echo 'diện tích hình tam giac'.(($a * $h)/2)."<br>";
}
tamgiac(5,4,3,2);
function thang($b1 , $b2 , $h  ){
    echo "chu vi hinh thang".sqrt( );
    echo 'diện tích hình thang'.(0.5 *($b1 + $b2)*$h)."<br>";
}
thang(5,5,7);
