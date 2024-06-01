<style>
td {
    padding: 0 20px;
}
</style>
<main class="catalog  mb ">
    <div class="boxleft">
        <?php extract($sanpham); ?>
        <div class="  mb">
            <div class="box_title">
                <?php echo $name; ?>
            </div>
            <div class="box_content">
                <?php 
                    $img = $img_path . $img;
                    echo "<img style='' src='$img' width='300'>";
                    echo "<div class='thongtin'>";
                    echo "<p style='color: black'>$mota</p>";
                    echo "<p style='color: #2B6988;margin-left: 25px;font-size: 30px; margin-top: 25px'>$price</p>";
                    echo "<button class='nut'  >Mua Ngay</button>";
                    echo "</div>";
                ?>

            </div>
        </div>

        <div class="mb">
            <div class="box_title">BÌNH LUẬN</div>
            <div class="box_content2  product_portfolio binhluan ">
                <table>
                    <?php foreach($binhluan as $value): ?>
                    <tr>
                        <td><?php echo $value['noidung']?></td>
                        <td><?php echo $value['user']?></td>
                        <td><?php echo date("d/m/Y", strtotime($value['ngaybinhluan'])) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="box_search">
                <form action="index.php?act=sanphamct&idsp=<?=$id?>" method="POST">
                    <input type="hidden" name="idpro" value="<?=$id?>">
                    <input type="text" name="noidung">
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
            </div>

        </div>

        <div class=" mb">
            <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="box_conten">
                <?php foreach($sanphamcl as $value):
                    // gọi tập hợp mảng to
                   extract($value)
                    ?>

                <li>
                        <?php $img=$img_path.$img;?>
                        <div class="selling_products">
                            <img src="<?= $img?>"> <a href="index.php?act=sanphamct&idsp=<?=$value['id']?>"><?=$value['name']?></a>
                        </div>

                </li>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php
    include "view/boxright.php";
?>

</main>