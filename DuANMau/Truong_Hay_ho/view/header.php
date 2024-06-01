<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="css/css.css">
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="boxcenter">
       <!-- BIGIN HEADER -->
       <header>
        <div class="row mb menu">
            <ul class="main">
                <li><img src="./img/logo.jpg" alt="" width="70px" height="70px"></li>
                <li class="dropdown">
                  <a class="dropdownbtn" href="index.php">Trang chủ</a>
                </li>
                <li class="dropdown">
                  <a class="dropdownbtn" href="">Về ShionShop</a>
                    <div class="dropdown_content">
                        <a href="">Câu Chuyện Về ShionShop</a>
                        <a href="">11 Trải Nghiệm Mua Sắm</a>
                        <a href="">Khách Hàng Nổi Tiếng</a>
                    </div>
                <li class="dropdown">
                  <a class="dropdownbtn" href="index.php?act=sanpham">Thương Hiệu</a>
                  <div class="dropdown_content">
                     <?php
                     foreach ($dsdm as $dm){
                         extract($dm);
                         $linkdm="index.php?act=sanpham&iddm=".$id;
                         echo '<a href="'.$linkdm.'">'.$name.'</a>';
                     }
                    ?>
                  </div>
                <li class="dropdown">
                  <a class="dropdownbtn" href="">Phụ Kiện</a>
                    <div class="dropdown_content">
                        <a href="">Quả Bóng Đá</a>
                        <a href="">Bọc Ống Đồng</a>
                        <a href="">Găng Tay Thủ Môn</a>
                        <a href="">Vở Bóng Đá </a>
                        <a href="">Áo Bóng Đá Chính Hãng </a>
                        <a href="">Bộ Quần Áo Bóng Đá</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdownbtn" href="">Giày Bóng Đá</a>
                    <div class="dropdown_content">
                        <a href="">Giày Cỏ Tự Nhiên </a>
                        <a href="">Giày Cỏ Nhân Tạo</a>
                        <a href="">Giày Futsal</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdownbtn" href="">Dịch Vụ</a>
                    <div class="dropdown_content">
                        <a href="">In Ấn Theo Yêu Cầu</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdownbtn" href="">Hướng Dẫn</a>
                    <div class="dropdown_content">
                        <a href="">Cách Chọn Size </a>
                        <a href="">Chính Sách Vận CHuyển</a>
                        <a href="">CHính Sách Bảo Hành</a>
                        <a href="">Đặt Hàng Online</a>
                        <a href="">Quy Định Đổi Hàng</a>
                        <a href="">Hướng Dẫn Mua Hàng</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdownbtn" href="">Tin Tức Giày</a>
                <?php
                    if (!$_SESSION){
                ?>
                <li class="login">
                    <a href="index.php?act=dangnhap">Đăng Nhập</a>
                <?php
                    }else{?>
                            <div class="circle1">
                                 <li class="login"><a href="index.php?act=dangnhap">Hello <?= $_SESSION['user']?></a></li>
                                <li class="circle" ><img  src="img/khachhang.jpg" alt=""></li>
                            </div>
                <?php
                    }
                ?>
                </li>
            </ul>
        </div>
           <div class="navbar">
               <div class="navbar1">
                   <div class="running-text">
                       <span>Chào mừng bạn đến với trang web bán hàng của chúng tôi!
                           Chúng tôi rất vui mừng bạn đã ghé thăm và quan tâm đến các sản phẩm mà chúng tôi cung cấp.</span>
                   </div>
               </div>
           </div>
       </header>
            <!-- END HEADER -->