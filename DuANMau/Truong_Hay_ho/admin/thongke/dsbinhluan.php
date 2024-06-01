<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH Bình Luận</h1>
    </div>
    <div class="row2 form_content ">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>ID Bình Luận</th>
                        <th>Nội Dung Bình Luận</th>
                        <th>Tên Tài Khoản</th>
                        <th>Ngày Bình Luận</th>
                        <th>Chức Năng</th>
                    </tr>
                    <tr>
                        <?php
                        foreach ( $dsbl as $value){
                            extract($value);
                            echo '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$noidung.'</td>
                        <td>'.$user.'</td>
                        <td>'.$ngaybinhluan.'</td>
                       <td>
                            <a href="index.php?act=xoabl&&id='.$id.'">Xoá</a>
                       </td>
                    </tr>';
                        }
                        ?>
                </table>
            </div>
    </div>
</div>
