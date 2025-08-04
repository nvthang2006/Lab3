<div class="container">
    <div class="row">
        <div class="col-3">
            <?php include "views/admin/sidebar.php" ?>
        </div>
        <div class="col-9">
            <a href="<?= BASE_URL . '?act=category-create' ?>" class="btn btn-primary btn-sm">Thêm</a>
            <table class="table table-striped">
                <thead>
                    <td>id</td>
                    <td>name</td>
                </thead>
                <tbody>
                    <?php foreach ($categories as $category): ?>
                        <tr>
                            <td><?= $category['id'] ?></td>
                            <td><?= $category['name'] ?></td>
                            <td>
                                <a href="?act=category-edit&id=<?= $category['id'] ?>" class="btn btn-primary btn-sm">Sửa</a>
                            </td>
                            <td>
                                <a href="?act=category-destroy&id=<?= $category['id'] ?>" onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger btn-sm">Xóa</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>