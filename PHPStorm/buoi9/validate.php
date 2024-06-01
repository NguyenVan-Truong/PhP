<?php
if (isset($_POST['btn'])){
    if (isset($_POST['ten'])&& !empty($_POST['ten'])){
        $validateten = '';
    }else{
        $validateten = ' Mời nhập họ và tên';
    }
    // check email
//    $checkemali = '/^[a-zA-Z0-9._+%]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    $checkemali = '/^[a-zA-Z0-9._+%]+@[fpt.edu]+\.[vn]{2,}$/';
    if(isset($_POST['email'])&& !empty($_POST['email'])){
        $validateemail = '';
        if (preg_match($checkemali, $_POST['email'])){
            $validateemail ='';
        }else{
            $validateemail= 'email ko hợp lệ';
        }
    }else {

        $validateemail = ' vui lòng nhập email';
    }
    $checksdt= '/^[0]+[1-9]{1,1}+[0-9]{8,8}/';


    if (isset($_POST['sdt'])&& !empty($_POST['sdt'])){
        $validatesdt='';
        if (preg_match($checksdt,$_POST['sdt'])){
            $validatesdt ='';
        }else{
            $validatesdt ='sdt ko ôn định';
        }
    }else{
        $validatesdt='vui lòng nhâp sdt';
    }
}