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

    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between px-5">
        <div class="container">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="btn btn-primary btn-sm" href="<?= BASE_URL ?>?act=login">Đăng nhập</a>
                </li>
            </ul>
        </div>
        <div>
            <?php if (isset($_SESSION['userLogin'])): ?>
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $_SESSION['userLogin']['name']?>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= BASE_URL ?>?act=logout">Logout</a></li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </nav>

    <div class="container">
        <?php if (isset($_SESSION['errors']) && count($_SESSION['errors']) > 0): ?>
            <ul>
                <?php foreach ($_SESSION['errors'] as $errors): ?>
                    <li>
                        <span class="text-danger"><?= $errors ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php unset($_SESSION['errors']); ?>
        <?php endif; ?>
        <?php if (isset($_SESSION['success']) && count($_SESSION['success']) > 0): ?>
            <ul>
                <?php foreach ($_SESSION['success'] as $success): ?>
                    <li>
                        <span class="text-success"><?= $success ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>
        <h1 class="mt-3 mb-3"><?= $title ?? 'Home' ?></h1>
        <div class="row">
            <?php
            if (isset($view)) {
                require_once './views/' . $view . '.php';
            }
            ?>
        </div>
    </div>

</body>

</html>