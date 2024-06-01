 <main class="catalog  mb ">

        <div class="boxleft">

            <div class="box_title">Đăng ký thành viên</div>
            <div class="box_content form_account">
                <form action="index.php?act=dangky" method="post">
                    <div class="mau1">
                        <p>Email</p>
                        <input type="email" name="email" placeholder="email">
                    </div>
                    <div class="mau1">
                        Tên đăng nhập
                        <input type="text" name="user"  placeholder="user">
                    </div >
                    Mật khẩu
                    <div class="mau1">
                        <input type="password" name="pass"  placeholder="pass">
                    </div>
                    <input class="mau1" type="submit" value="Đăng ký" name="dangky">
                    <input class="mau1" type="reset" value="Nhập lại">
                </form>
                <?php
                if (isset($_POST['dangky'])){
                    if (isset($thongbao)&& ($thongbao) != ""){
                        echo $thongbao;
                    }else{
                        echo "Đăng Ký Ko thành Công";
                    }
                }
                ?>
            </div>

        </div>
     <?php
            include 'view/boxright.php';
            ?>

    </main>