<div class="container">
    <div class="row">
        <div class="col-3">
            <?php include "views/admin/sidebar.php" ?>
        </div>
        <div class="col-9">
            <a href="<?= BASE_URL . '?act=product-create' ?>" class="btn btn-primary btn-sm">Thêm</a>
            <table class="table table-striped">
                <thead>
                    <td>id</td>
                    <td>name</td>
                    <td>image</td>
                    <td>price</td>
                    <td>quantity</td>
                    <td>description</td>
                    <td>category_id</td>
                    <td colspan="2">Hành động</td>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= $product['id'] ?></td>
                            <td><?= $product['name'] ?></td>
                            <td><img src="<?= $product['image'] ?>" width="80"></td>
                            <td><?= $product['price'] ?></td>
                            <td><?= $product['quantity'] ?></td>
                            <td><?= $product['description'] ?></td>
                            <td><?= $product['category_name'] ?></td>
                            <td>
                                <a href="?act=product-edit&id=<?= $product['id'] ?>" class="btn btn-primary btn-sm">Sửa</a>
                            </td>
                            <td>
                                <a href="?act=product-destroy&id=<?= $product['id'] ?>" onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger btn-sm">Xóa</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>