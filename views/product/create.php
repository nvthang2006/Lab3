<form action="<?= BASE_URL . '?act=product-store' ?>" method="POST" enctype="multipart/form-data">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" required class="form-control">
    </div>
    <div>
        <label for="image">Image</label>
        <input type="file" name="image" required class="form-control">
    </div>
    <div>
        <label for="price">Price</label>
        <input type="number" name="price" required class="form-control">
    </div>
    <div>
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" required class="form-control">
    </div>
    <div>
        <label for="category_id">Category</label>
        <select name="category_id" required>
            <option value="" disabled selected>Chọn danh mục</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" rows="4" required class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Thêm</button>
</form>
