<?php
if (is_array($sanpham)){
    extract($sanpham);
}
$hinhpath="../upload/".$img;
if (is_file($hinhpath)){
    $hinhpath='<img src="'.$hinhpath.'" width="180px" >';
}else{
    $hinhpath="loi";
}
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>CAP NHAT SAN PHAM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
                <label>TEn SAn PHam </label> <br>
                <input type="text" name="tensp" value="<?= $name?>">
            </div>
            <div class="row2 mb10">
                <label>GIa</label> <br>
                <input type="number" name="giasp"value="<?= $price?>">
            </div>
            <div class="row2 mb10">
                <label>danh muc</label> <br>
                <select name="iddm" id="">
                    <?php
                    foreach ($listdanhmuc as $key=> $value){
                            if ($iddm==$value['id']){
                                echo '<option value="'.$value['id'].'"selected>'.$value['name']. '</option>';
                            }else{
                                echo '<option value="'.$value['id'].'">'.$value['name']. '</option>';
                            }
                    }
                    ?>
                </select>
            </div>
            <div class="row2 mb10">
                <label>hinh anh</label> <br>
                <input type="file" name="hinh" >
                <?= $hinhpath ?>
            </div>
            <div class="row2 mb10">
                <label>mo ta</label> <br>
<!--                <textarea name="mota" id="" cols="30" rows="10" value="--><?php //= $mota?><!--"></textarea>-->
                <input type="text" name="mota" value="<?= $mota?>">
            </div>
            <div class="row2 mb10">
                <label>luot xem</label> <br>
                <input type="number" name="luotxem" value="<?= $luotxem ?>">
            </div>
            <div class="row mb10 ">
                <input type="hidden" name="id" value="<?= $id?>">
                <input class="mr20" name="capnhat" type="submit" value="Cap Nhat">
                <input  class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <!--              --><?php
            //              if (isset($thanhcong)&&($thanhcong !="")){
            //                  echo $thanhcong;
            //              }
            //              ?>
        </form>
    </div>
</div>