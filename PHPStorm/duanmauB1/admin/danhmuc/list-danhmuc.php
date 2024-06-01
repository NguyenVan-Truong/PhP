<div class="col-md-8">
    <h3>Danh sách danh mục sản phẩm</h3>
    <a href="?act=adddm" class="btn btn-success">Thêm mới</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dsdm as $key => $value): ?>
            <tr>
                <th scope="row">
                    <?php echo $key + 1; ?>
                </th>
                <td>
                    <?php echo $value['name']; ?>
                </td>
                <td>
                    <a href="edit-danhmuc.html" class="btn btn-warning">Sửa</a>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete">
                        Xóa
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>