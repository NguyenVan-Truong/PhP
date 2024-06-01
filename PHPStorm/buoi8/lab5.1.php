<?php
function tinhtoan ($a , $b){
        if ($a >$b) {
            echo 'chu vi hinh chu nhat'.(2*(($a) + ($b))).'<br>';
            echo 'dien tich hinh chu nhat '.(($a) + ($b));
        } else {
            echo ' chièu dài phải lớn chiều rộng';
        }
    }

if (isset($_POST['submit'])&&($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    tinhtoan($a,$b);
}

?>



<?php
// thêm vào mang
//if(isset($_POST['submit'])){
//    $a = $_POST['a'];
//    $b = $_POST['b'];
//
//    $chuvi = 2 * ($a + $b);
//    $dientich = $a * $b;
//
//    $mang = array($a, $b, $chuvi,$dientich);
//
//    echo "<br>Mảng đã lưu: ";
//    print_r($mang);
//}
//?>
