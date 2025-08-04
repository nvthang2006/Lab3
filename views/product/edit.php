<form action="<?= BASE_URL . '?act=product-update&id=' . $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="<?= $detail['name'] ?>" required class="form-control">
    </div>
    <div>
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control">
        <?php if (!empty($detail['image'])): ?>
            <img src="uploads/<?= $detail['image'] ?>" alt="" width="100">
            <!-- Giữ ảnh cũ nếu không upload ảnh mới -->
            <input type="hidden" name="old_image" value="<?= $detail['image'] ?>" >
        <?php endif; ?>
    </div>
    <div>
        <label for="price">Price</label>
        <input type="number" name="price" value="<?= $detail['price'] ?>" required class="form-control">
    </div>
    <div>
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" value="<?= $detail['quantity'] ?>" required class="form-control">
    </div>
    <div>
        <label for="category_id">Category</label>
        <select name="category_id" required>
            <option value="" disabled>Chọn danh mục</option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category['id'] ?>" <?= $category['id'] == $detail['category_id'] ? 'selected' : '' ?>>
                    <?= $category['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" rows="4" required class="form-control"><?= $detail['description'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Cập nhật</button>
</form>
