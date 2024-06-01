<?php
//session_start();
//
//if (isset($_POST['btnSub'])) {
//
//    $checktk = '/^[a-zA-ZA-za-z ]*$/';
//    if (isset($_POST['username']) && !empty($_POST['username'])) {
//        $validateUsername = "";
//        if (preg_match($checktk, $_POST['username'])) {
//            $validateUsername = "";
//        } else {
//            $validateUsername = "Tên không hợp lệ";
//        }
//    } else {
//        $validateUsername = "Bạn phải nhập tên";
//    }
//
//
//// Kiểm tra mật khẩu
//    if (isset($_POST['password']) && !empty($_POST['password'])) {
//        $validatePassword = '';
//        $password = $_POST['password'];
//
//    } else {
//        $validatePassword = 'Vui lòng nhập mật khẩu';
//    }
//}

session_start();

// Kiểm tra nếu người dùng đã đăng nhập, chuyển hướng đến trang chào mừng
if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}

// Xử lý đăng ký
if (isset($_POST['btnSub'])) {
    $accounts = [];
    $checktk = '/^[a-zA-ZA-za-z ]*$/';
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $validateUsername = "";
        if (preg_match($checktk, $_POST['username'])) {
            $validateUsername = "";
        } else {
            $validateUsername = "Tên không hợp lệ";
        }
    } else {
        $validateUsername = "Bạn phải nhập tên";
    }


    // Kiểm tra mật khẩu
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $validatePassword = '';
        $password = $_POST['password'];

    } else {
        $validatePassword = 'Vui lòng nhập mật khẩu';
    }

}
