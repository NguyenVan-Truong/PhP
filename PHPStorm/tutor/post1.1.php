<?php
if (isset($_POST['submit'])&&($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    if ($a< $b) {
        if ($b == 0) {
            echo "pt vô số nghiệm";
        } else {
            echo "pt vo nghiem";
        }
    } else {
        if ($b == 0) {
            echo "pt có nghiệm x =0";
        } else {
            echo " nghiemla " . ((-$b) / $a);
        }
    }
}
// ktr pt bac 1
//a=0, b=0 => vo so nghiem
// a=0 , b!= 0 bo no
// còn lai x = -b/a

