<?php
// có class chứa các function thực thi xử lý logic 
class CategoryController
{
    public $modelCategory;

    public function __construct()
    {
        $this->modelCategory = new CategoryModel();
    }

    // Danh sách
    public function index()
    {
        $categories = $this->modelCategory->getAllCategory();
        require_once './views/category/index.php';
    }

    // Giao diện thêm
    public function create()
    {
        require_once './views/category/create.php';
    }

    // Lưu khi thêm
    public function store()
    {
        $result = $this->modelCategory->insert();
        if ($result) {
            header('Location: ' . BASE_URL . '?act=category-list');
            exit;
        }
    }

    // Giao diện sửa
    public function edit()
    {
        $detail = $this->modelCategory->getOne();
        require_once './views/category/edit.php';
    }

    // Cập nhật sau khi sửa
    public function update()
    {
        $updated = $this->modelCategory->update();
        if ($updated) {
            header('Location: ' . BASE_URL . '?act=category-list');
            exit;
        }
    }

    // Xoá
    public function delete()
    {
        $deleted = $this->modelCategory->delete();
        if ($deleted) {
            header('Location: ' . BASE_URL . '?act=category-list');
            exit;
        }
    }
}
