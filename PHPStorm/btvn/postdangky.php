<?php
session_start();

// Kiểm tra nếu người dùng đã đăng nhập, chuyển hướng đến trang chào mừng
if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
    exit();
}

// Xử lý đăng ký
if (isset($_POST['btnSub'])) {
    $accounts = [];

    $checkName = '/^[a-zA-ZA-za-z ]*$/';
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $validateName = "";
        if (preg_match($checkName, $_POST['name'])) {
            $validateName = "";
        } else {
            $validateName = "Tên không hợp lệ";
        }
    } else {
        $validateName = "Bạn phải nhập tên";
    }

    $checkEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $validateEmail = '';
        if (preg_match($checkEmail, $_POST['email'])) {
            $validateEmail = '';
        } else {
            $validateEmail = 'Địa chỉ email không hợp lệ';
        }
    } else {
        $validateEmail = 'Vui lòng nhập email';
    }

    $checksdt = '/^[0]+[1-9]{1,1}+[0-9]{8,8}$/';
    if (isset($_POST['phoneNumber']) && !empty($_POST['phoneNumber'])) {
        $validatesdt = '';
        if (preg_match($checksdt, $_POST['phoneNumber'])) {
            $validatesdt = '';
        } else {
            $validatesdt = 'Số điện thoại không hợp lệ';
        }
    } else {
        $validatesdt = 'Vui lòng nhập số điện thoại';
    }

    $checkdiachi = '/^[a-zA-Z\d]*$/';
    if (isset($_POST['location']) && !empty($_POST['location'])) {
        $validatediachi = '';
        if (preg_match($checkdiachi, $_POST['location'])) {
            $validatediachi = '';
        } else {
            $validatediachi = 'Địa chỉ không hợp lệ';
        }
    } else {
        $validatediachi = 'Vui lòng nhập địa chỉ';
    }

    $checktk= '/^[a-zA-ZA-za-z ]*$/';
    if (isset($_POST['username']) && !empty($_POST['username'])) {
        $validateUsername  = "";
        if (preg_match($checktk, $_POST['username'])) {
            $validateUsername  = "";
        } else {
            $validateUsername  = "Tên không hợp lệ";
        }
    } else {
        $validateUsername  = "Bạn phải nhập tên";
    }


    // Kiểm tra mật khẩu
    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $validatePassword = '';
        $password = $_POST['password'];

    } else {
        $validatePassword = 'Vui lòng nhập mật khẩu';
    }

    // Nếu không có lỗi, lưu thông tin tài khoản vào mảng $accounts và chuyển hướng đến trang đăng nhập
    if (empty($validateName) && empty($validateEmail) && empty($validatesdt) && empty($validatediachi) && empty($validateUsername) && empty($validatePassword)) {
        $accounts = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'phoneNumber' => $_POST['phoneNumber'],
            'location' => $_POST['location'],
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];

        // Lưu thông tin vào session
        $_SESSION['accounts'] = $accounts;

        // Chuyển hướng đến trang đăng nhập
        header("Location: dangnhap.php");
        exit();
    }
}
?>