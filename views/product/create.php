<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Du an mau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">WEB2041-Dự án mẫu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL . '?act=product-list' ?>">Sản phẩm</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL . '?act=category-list' ?>">Danh mục</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>">Đăng nhập</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>">Đăng ký</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL ?>">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        <form action="<?= BASE_URL . '?act=product-store' ?>" method="POST" enctype="multipart/form-data">
            <div>
                <label for="name">name</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="image">image</label>
                <input type="file" name="image">
            </div>
            <div>
                <label for="price">price</label>
                <input type="number" name="price">
            </div>
            <div>
                <label for="category_id">category_id </label>
                <select name="category_id">
                    <option value="" disabled selected>Chọn</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit">Thêm</button>
        </form>
</body>

</html>