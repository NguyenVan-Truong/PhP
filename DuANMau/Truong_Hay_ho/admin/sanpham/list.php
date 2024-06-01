<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <form method="post" action="index.php?act=listsp">
                    <input type="text" name="keyw">
                    <select class="muc" name="iddm" id="">
                        <option class="nut2" value="0" selected>Tất Cả Sản Phẩm </option>
                        <?php
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>
                    </select>
                    <input type="submit" class="nut1" name="clickOK" value="Gui">
                </form>

                <table>
                    <tr>
                        <th></th>
                        <th>MÃ San Pham</th>
                        <th>Ten San Pham</th>
                        <th>gia</th>
                        <th>HInh</th>
                        <th>mo ta</th>
                        <th>luot xem</th>
                        <th>so binh luan</th>
                        <th></th>
                    </tr>

                    <tr>
                        <?php
                            foreach ( $listsanpham as $sanpham){
                                extract($sanpham);
                                $hinhpath="../upload/".$img;
                                $suasp="index.php?act=suasp&idsp=".$id;
                                $hard_delete="index.php?act=hard_delete&idsp=".$id;
                                $soft_delete="index.php?act=soft_delete&idsp=".$id;
                                if (is_file($hinhpath)){
                                    $hinhpath="<img src='".$hinhpath."' width='100px' height='100px'</img>";
                                }else{
                                    $hinhpath="no image!";
                                }
                                echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$price.'</td>
                        <td>'.$hinhpath.'</td>
                        <td>'.$mota.'</td>
                        <td>'.$luotxem.'</td>
                        <td>'.$sobinhluan.'</td>
                        <td>  <a href="'.$suasp.'"> <input type="button" value="Sửa"> </a>
                               <a href="'.$hard_delete.'"><input type="button" value="Xóa Cung" onclick="return confirm(\'ban co chac chan xoa ko\')"> </a> 
                               <a href="'.$soft_delete.'"><input type="button" value="Xóa mem" onclick="return confirm(\'ban co chac chan xoa ko\')"> </a> 
                         </td>
                    </tr>';
                            }
                        ?>
             </table>
            </div>
            <div class="row mb10 ">
                <a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
                <a href="index.php?act=bieudosp"> <input  class="mr20" type="button" value="bieu do binh luan"></a>
            </div>
        </form>
    </div>
</div>
