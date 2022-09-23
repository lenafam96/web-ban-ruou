<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa thông tin sản phẩm</h2>
        </div>
        <div class="card-body">
            <form action="?action=update" method="post" enctype="multipart/form-data">
                <input type="hidden" name="product_id" class="form-control" required value="<?php echo $each->getProductId(); ?>">
                <input type="hidden" name="img_old" class="form-control" value="<?php echo $each->getImage(); ?>">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" required value="<?php echo $each->getProductName(); ?>">
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Loại sản phẩm</label>
                    <select name="category_id" class="form-control" required>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo $category->getCategoryId(); ?>" <?php if ($each->getCategoryId() === $category->getCategoryId()) echo "selected"; ?>>
                                <?php echo $category->getCategoryName(); ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Thương hiệu</label>
                    <input type="text" name="brand" class="form-control" required value="<?php echo $each->getBrand(); ?>">
                </div>
                <div class="form-group">
                    <label for="">Xuất xứ</label>
                    <input type="text" name="origin" class="form-control" required value="<?php echo $each->getOrigin(); ?>">
                </div>
                <div class="form-group">
                    <label for="">Nồng độ</label>
                    <input type="number" name="concentration" class="form-control" min="0" max="70" step="0.1" required value="<?php echo $each->getConcentration(); ?>">
                </div>
                <div class="form-group">
                    <label for="">Thể tích</label>
                    <input type="number" name="volume" class="form-control" min="0" required value="<?php echo $each->getVolume(); ?>">
                </div>
                <div class="form-group">
                    <label for="">Giá bán</label>
                    <input type="number" name="price" min="0" class="form-control" required value="<?php echo $each->getPrice(); ?>">
                </div>
                <button type="submit" name="sbm" class="btn btn-primary">Lưu</button>
            </form>
        </div>
    </div>
</div>


<script>
    document.title = "Cập nhật thông tin sản phẩm";
</script>