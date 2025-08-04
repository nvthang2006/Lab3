<form action="<?= BASE_URL ?>?act=register" method="post">
    <div class="mb-3">
        <label for="Name" class="form-label">Name</label>
        <input type="text" class="form-control" id="Name" name="name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="Password" class="form-label">Password</label>
        <input type="password" class="form-control" id="Password" name="password">
    </div>
    <div class="mb-3">
        <label for="Confirm" class="form-label">Confirm password</label>
        <input type="password" class="form-control" id="Confirm" name="confirm">
    </div>
    <div class="mb-3">
        <label for="PhoneNumber" class="form-label">Phone number</label>
        <input type="text" class="form-control" id="PhoneNumber" name="phone">
    </div>
    <div class="mb-3">
        <label for="Address" class="form-label">Address</label>
        <textarea name="address" id="Address" class="form-control"></textarea>
    </div>
    <div class="flex">
        <span>Đã có tài khoản - </span>
         <a href="<?= BASE_URL . '?act=login' ?>">Đăng nhập</a>
    </div>
   
    <button type="submit" class="btn btn-primary">Đăng ký</button>
</form>