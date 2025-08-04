<h3>Thêm người dùng</h3>
<form action="?act=user-store" method="POST">
    <div class="mb-3">
        <label>Họ tên</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Mật khẩu</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Điện thoại</label>
        <input type="text" name="phone" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Địa chỉ</label>
        <input type="text" name="address" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Quyền</label>
        <select name="role" class="form-control">
            <option value="0">User</option>
            <option value="1">Admin</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Thêm</button>
</form>
