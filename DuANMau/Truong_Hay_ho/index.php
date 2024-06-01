<?php
ob_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/binhluan.php";
    include "model/taikhoan.php";
    include "global.php";
    $spnew = loadall_sanpham_home();
    $dsdm = loadall_danhmuc();
    $dstop10 = loadall_sanpham_top10();
    include "view/header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        // lấy dường chuyền url
        $act=$_GET['act'];
        switch($act){
            case "sanpham":
                if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
                    $kyw = $_POST['keyword'];
                }else{
                    $kyw = "";
                }
                if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                }
                $dssp=loadall_sanpham($kyw,$iddm);
//                $tendm= load_ten_dm($iddm);
                include "view/sanpham.php";
                break;
            case "sanphamct":
                if(isset($_POST['guibinhluan'])){
                    if (isset($_SESSION['idkh'])){
                        insert_binhluan($_POST['idpro'], $_POST['noidung'],$_SESSION['idkh']);
                    }else{
                        echo "ban phai dang nhap";
                    }
                }
                // lấy dữ lieu tu duong link home
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0){
                    $sanpham = loadone_sanpham($_GET['idsp']);
                    $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                    $binhluan = loadall_binhluan($_GET['idsp']);
                    include "view/chitietsanpham.php";
                }else{
                    include "view/home.php";            
                }
                break;

            case "dangky":
                if (isset($_POST['dangky'])){
                    if (isset($_POST['email'])&&isset($_POST['user'])&&isset($_POST['pass'])&&($_POST['email'])!=''&&($_POST['user'])!=''&&($_POST['pass'])!=''){
                        $email = $_POST['email'];
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        insert_taikhoan($email,$user,$pass);
                        $thongbao="Đăng Ký THành Công";
                    }

                }
                include "view/login/dangky.php";
                break;
            case "dangnhap":
                if (isset($_POST['dangnhap'])) {
                    $loginMess = dangnhap($_POST['user'], $_POST['pass']);
                    if ($loginMess) {
                        if ($check_role = check_role($_POST['user'], $_POST['pass']) == 1) {

                            header('Location: http://localhost/DuAnMau/Truong_Hay_Ho/admin/index.php?act=listsp');
                        } else {

                            header("location:index.php");
                        }
                    } else {
                        echo 1;
                        $loginMess = "Mật khẩu Hoặc Tài Khoản sai";
                        include "view/login/dangnhap.php";
                    }
                }else{
                    echo 2;
                    include "view/login/dangnhap.php";
                }
                break;
            case "dangxuat":
                dangxuat();
                header("location:index.php");
                break;
            case "quenmk";
                if (isset($_POST['guiemail'])){
                    $email = $_POST['email'];
                    $sendMailMess=sendMail($email);
                }
                include "view/login/quenmk.php";
                break;
        }
    }else{
        include "view/home.php";
    }
   
    include "view/footer.php";
ob_end_flush();
?>