<?php
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/thongke.php";
    include "../model/binhluan.php";
    include "../global.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "listsp":
                if (isset($_POST['clickOK'])&&($_POST['clickOK'])){
                    $keyw=$_POST['keyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $keyw="";
                    $iddm=0;
                }
                $listdanhmuc= loadall_danhmuc();
                $listsanpham= loadall_sanpham($keyw,$iddm);
                include "sanpham/list.php";
                break;
            case "bieudosp":
                $listsanpham = loadall_sanpham();
                include "sanpham/bieudo.php";
                break;
            case "addsp":
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $luotxem=$_POST['luotxem'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    // thuoc tinh cua file
                    $target_dir="../upload/";
                    $target_file=$target_dir.basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file)){
                        echo " up anh thanh cong";
                    }
//                    else{
//                        echo "ko thanh cong";
//                    }
                if (!empty($tensp)&&!empty($giasp)&&!empty($hinh)&&!empty($mota)&&!empty($iddm)&&!empty($luotxem)){
                        insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm,$luotxem);
                        $thanhcong = "thanh cong";
                        header('location:http://localhost/DuAnMau/Truong_Hay_Ho/admin/index.php?act=listsp');
                    }else{
                        echo "Ban can nhap du gia tri";
                    }

                }
                $listdanhmuc= loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case "suasp":
                if (isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $sanpham=loadone_sanpham($_GET['idsp']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case "updatesp":
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $iddm=$_POST['iddm'];
                    $id=$_POST['id'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $luotxem=$_POST['luotxem'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir="../upload/";
                    $target_file=$target_dir.basename($_FILES['hinh']['name']);
                    if (move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file)){
                        echo " thanh cong";
                    }else{
                        echo 'loi';
                    }
                    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh,$luotxem);
                    $thongbao="cap nhat thanh cong";
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case "bieudo":
                $dsthongke=load_thongke_sanpham_danhmuc();
                include "thongke/bieudo.php";
                break;
            case "hard_delete":
                if (isset($_GET['idsp'])){
                    hard_delete($_GET['idsp']);
                }
                $listsanpham=loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case "soft_delete":
                 if (isset($_GET['idsp'])){
                     soft_delete($_GET['idsp']);
                 }
                $listsanpham=loadall_sanpham("",0);
                 $listdanhmuc=loadall_danhmuc();
                 include "sanpham/list.php";
                 break;
            case "thongke":
                $dsthongke=load_thongke_sanpham_danhmuc();
                include "thongke/list.php";
                break;
            case "binhluan":
                $dsbl=load_allbl();
                include "thongke/dsbinhluan.php";
                break;
            case "xoabl":
                delete_bl($_GET['id']);
                header('Location: index.php?act=binhluan');
                break;
        }
    }else{
        include "../view/home.php";
    }
    include "footer.php";
?>
