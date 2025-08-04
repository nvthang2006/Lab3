<div class="container">
    <div class="row">
        <div class="col-3">
            <?php include "views/admin/sidebar.php" ?>
        </div>
        <div class="col-9">
            <a href="<?= BASE_URL . '?act=user-create' ?>" class="btn btn-primary btn-sm">Thêm</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Phone</td>
                        <td>Address</td>
                        <td>Role</td>
                        <td>Hành động</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['phone'] ?></td>
                            <td><?= $user['address'] ?></td>
                            <td><?= $user['role'] == 1 ? 'Admin' : 'User' ?></td>
                            <td>
                                <a href="?act=user-edit&id=<?= $user['id'] ?>" class="btn btn-sm btn-primary">Sửa</a>
                                <a href="?act=user-destroy&id=<?= $user['id'] ?>" onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-sm btn-danger">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>