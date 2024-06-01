<?php
//$a=5;
//$b=15;
//$d=20;
//$e=100;
//$c=$a+$b*$d+$e;
//$tr="truonghayho <br>";
//$tr1="hà nội <br>";
//$tr2="18 tuổi <br>";
//
//echo $tr,$tr1,$tr2;
//
//
//for ($i=0;$i<10;$i++){
//    echo $tr1;
//}
//
//$a = -1000;
//if($a<0){
//    echo $a."là số âm";
//}else{
//    echo $a."là số dương";
//}


//$a =7;
//$b =5;
//if($a==0){
//    if($b==0){
//        echo"phuong trinh vo so nghiem";
//    } else {
//        echo "phuong trinh vo nghiem";
//    }
//}else{
//    echo"phuong trinh co nghiem la " .(-$b/$a);
//}

//for($i=1;$i<=10;$i++){
//    echo $i."-";
//}


$a=10;
$b=9;
$c=4;
//x^2+2x+1=0
if($a==0){
    if($b==0){
        if($c!=0){
            echo 'phương trình vô nghiệp';}else{
            echo "phương trình vô số nghiệm";}

    }else{
        echo 'phương trình có nghiệm là'.((-$c)/b);
    }

}else{
    $d=($b*$b)-4*$a*$c;
    if($d<0){
        echo"phương trình vô nghiệm";
    }else{
        if($d==0){
            echo"phương trình có nghiệm kép".((-$b)/(2*$a));
        }else if($d>0){
            echo"phương trình có 2 nghiệp phân biệt".(((-$b)-sprt($d))/2*$a).(((-$b)+sprt($d))/2*$a);
        }

    }
}