<?php
// Require toàn bộ các file khai báo môi trường, thực thi,...(không require view)

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/ProductController.php';
require_once './controllers/HomeController.php';
require_once './controllers/CategoryController.php';

// Require toàn bộ file Models
require_once './models/ProductModel.php';
require_once './models/CategoryModel.php';

// Route
$act = $_GET['act'] ?? '/';



// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/' => (new ProductController())->Home(),
    // '/'=>(new HomeController())->Home(),

    'product-list' => (new ProductController())->index(),
    'product-create' => (new ProductController())->create(),
    'product-store' => (new ProductController())->store(),
    'product-destroy' => (new ProductController())->delete(),
    'product-edit' => (new ProductController())->edit(),
    'product-update' => (new ProductController())->update(),



    'category-list'    => (new CategoryController())->index(),
    'category-create'  => (new CategoryController())->create(),
    'category-store'   => (new CategoryController())->store(),
    'category-edit'    => (new CategoryController())->edit(),
    'category-update'  => (new CategoryController())->update(),
    'category-destroy' => (new CategoryController())->delete(),
};
