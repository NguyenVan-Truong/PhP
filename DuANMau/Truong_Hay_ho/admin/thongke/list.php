<div class="row2">
    <div class="row2 font_title">
        <h1>Thong ke LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th>So luong</th>
                        <th>Gia nho nhat</th>
                        <th>Gia Trung binh</th>
                        <th>GIa Lon NHat</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($dsthongke as $thongke){
                        extract($thongke);
                        ?>
                        <tr>
                            <td><?= $id?></td>
                            <td><?= $name?></td>
                            <td><?= $soluong?></td>
                            <td>$<?= $gia_min?></td>
                            <td>$<?= $gia_max?></td>
                            <td>$<?=number_format($gia_avg,2) ?></td>
                        </tr>
                    <?php
                    }
                    ?>

                </table>
            </div>
            <div class="row mb10 ">
                <a href="?act=bieudo"> <input  class="mr20" type="button" value="Xem Bieu do"></a>
            </div>
        </form>
    </div>
</div>




</div>
