<h3>Cập nhật người dùng</h3>
<form action="?act=user-update&id=<?= $user['id'] ?>" method="POST">
    <div class="mb-3">
        <label>Họ tên</label>
        <input type="text" name="name" value="<?= $user['name'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Mật khẩu</label>
        <input type="password" name="password" value="<?= $user['password'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Điện thoại</label>
        <input type="text" name="phone" value="<?= $user['phone'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Địa chỉ</label>
        <input type="text" name="address" value="<?= $user['address'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Quyền</label>
        <select name="role" class="form-control">
            <option value="0" <?= $user['role'] == 0 ? 'selected' : '' ?>>User</option>
            <option value="1" <?= $user['role'] == 1 ? 'selected' : '' ?>>Admin</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
