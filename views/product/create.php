<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm mới</h2>
        </div>
        <div class="card-body">
            <form action="?action=store" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Loại sản phẩm</label>
                    <select name="category_id" class="form-control" required>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo $category->getCategoryId(); ?>">
                                <?php echo $category->getCategoryName(); ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Thương hiệu</label>
                    <input type="text" name="brand" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Xuất xứ</label>
                    <input type="text" name="origin" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nồng độ</label>
                    <input type="number" name="concentration" class="form-control" min="0" max="70" step="0.1" required>
                </div>
                <div class="form-group">
                    <label for="">Thể tích</label>
                    <input type="number" name="volume" class="form-control" min="0" required>
                </div>
                <div class="form-group">
                    <label for="">Giá bán</label>
                    <input type="number" name="price" min="0" class="form-control" required>
                </div>
                <button type="submit" name="sbm" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.title = "Thêm sản phẩm mới";
</script>