<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Quản lý sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th style="width:15%">Tên sản phẩm</th>
                        <th style="width:15%">Hình ảnh</th>
                        <th>Loại sản phẩm</th>
                        <th>Thương hiệu</th>
                        <th>Xuất xứ</th>
                        <th>Nồng độ</th>
                        <th>Thể tích</th>
                        <th>Giá bán</th>
                        <th>Sửa</th>
                        <th>Xoá</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($arr as $each) : ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $each->getProductName(); ?></td>
                            <td><img src="img/<?php echo $each->getImage(); ?>" alt="" style="width:100%;"></td>
                            <td><?php echo $each->getCategoryName(); ?></td>
                            <td><?php echo $each->getBrand(); ?></td>
                            <td><?php echo $each->getOrigin(); ?></td>
                            <td><?php echo $each->showConcentration(); ?></td>
                            <td><?php echo $each->showVolume(); ?></td>
                            <td><?php echo $each->showPrice(); ?></td>
                            <td>
                                <a href="?action=edit&id=<?php echo $each->getProductId(); ?>">Sửa</a>
                            </td>
                            <td>
                                <a onclick="return Del('<?php echo $each->getProductName(); ?>')" href="?action=delete&id=<?php echo $each->getProductId(); ?>">Xoá</a>
                            </td>
                        <?php endforeach ?>
                </tbody>
            </table>
            <a class='btn btn-primary' href="?action=create">Thêm mới</a>
        </div>
    </div>
</div>

<script>
    document.title = "Quản lý sản phẩm";

    function Del(name) {
        return confirm("Bạn có chắc chắn muốn xoá sản phẩm: " + name + " ?");
    }
</script>