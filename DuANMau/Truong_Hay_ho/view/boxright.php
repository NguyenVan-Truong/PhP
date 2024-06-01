<div class="boxright">
<!---->
<!--    <div class="mb">-->
<!--        <div class="box_title">TÀI KHOẢN</div>-->
<!--        --><?php
//        if (!$_SESSION){
//        ?>
<!--        <div class="box_content form_account">-->
<!--            <form action="index.php?act=dangnhap" method="POST">-->
<!--            <h4 class="mau1">Tên đăng nhập :</h4><br>-->
<!--            <input type="text" name="user" id="">-->
<!--            <h4 class="mau1">Mật khẩu :</h4><br>-->
<!--            <input type="password" name="pass" id=""><br>-->
<!--            <p class="mau1"><input type="checkbox" name="" id="" > Ghi nhớ tài khoản? </p>-->
<!--            <br><input class="m1" type="submit" name="dangnhap" value="Đăng nhập">-->
<!--                <br>-->
<!--                --><?php
//                if (isset($loginMess)&&$loginMess != ''){
//                     echo $loginMess;
//                }
//                ?>
<!--            </form>-->
<!--            <div class="mau2">-->
<!--                <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>-->
<!--                <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        --><?php
//        }else{ ?>
<!--            <p>Hello --><?php //=$_SESSION['user']?><!--</p>-->
<!--            <button name="dangxuat"><a href="index.php?act=dangxuat">Đăng Xuất</a></button>-->
<!--        --><?php
//        }
//        ?>
<!--    </div>-->
    <div class="mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
            <ul>
                <?php
                      foreach($dsdm as $dm){
                          extract($dm);
                          $linkdm="index.php?act=sanpham&iddm=".$id;
                          echo '<li><a href="'.$linkdm.'">'.$name.' </a></li>';

                      }
                      ?>
            </ul>
        </div>
        <div class="box_search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" id="" placeholder="Từ khóa tìm kiếm" name="keyword" required>
                <input type="submit" value="tìm kiếm">
            </form>
        </div>
    </div>
    <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
    <div class="mb">
        <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
        <div class="box_content1">
            <?php
                    foreach($dstop10 as $sp){
                        extract($sp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $img=$img_path.$img;
                        echo'<div class="selling_products" style="width:100%;">
               
                 <img src="'.$img.'" alt="anh">
                  <a href="'.$linksp.'" >'.$name.'</a>
                </div>';
                    }
                    ?>
        </div>
    </div>
</div>