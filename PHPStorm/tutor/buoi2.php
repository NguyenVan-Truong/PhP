<?php
// khai bao function
function family($ten , $namsinh){
    echo "Ten".$ten ."nam sinh ".$namsinh;
    echo "<br>";
}
// truyen tham so
family("Truong","2004");
// return
function tong($a,$b){
    return $a * $b;
}
$c = tong(4,5);
echo $c."<br>";

//function check($a){
//    if (is_string($a)){
//        echo $a;
//    }else{
//        echo $a % 3 ==0 ? "chia het cho 3" :" ko chia het cho 3";
//    }
//}
//check(15);
// qua nhieu tham so truyen vao
function truong(){
//    print_r(func_get_args());
//    $a = func_get_arg(0);
//    echo $a;
//    echo "<br>";
//    echo func_num_args();
    $b = func_get_args();
    print_r($b);
    foreach ($b as $c){
//        echo $c;
        $sum+=$c;

    }
    echo $sum;
}
truong(4,5,6,7,8);
truong(1,2,3);