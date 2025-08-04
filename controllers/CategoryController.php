<?php
// có class chứa các function thực thi xử lý logic 
class CategoryController
{
    public $modelCategory;

    public function __construct()
    {
        $this->modelCategory = new CategoryModel();
    }

    public function index()
    {
        $title = "Danh sách danh mục";
        $view = "category/index";
        $categories = $this->modelCategory->getAllCategory();
        require_once './views/trangchu.php';
    }

    public function create()
    {
        $title = "Thêm danh mục";
        $view = "category/create";
        require_once './views/trangchu.php';
    }

    public function store()
    {
        $result = $this->modelCategory->insert();
        if ($result) {
            header('Location: ' . BASE_URL . '?act=category-list');
            exit;
        }
    }

    public function edit()
    {
        $title = "Chỉnh sửa danh mục";
        $view = "category/edit";
        $detail = $this->modelCategory->getOne();
        require_once './views/trangchu.php';
    }

    public function update()
    {
        $updated = $this->modelCategory->update();
        if ($updated) {
            header('Location: ' . BASE_URL . '?act=category-list');
            exit;
        }
    }

    public function delete()
    {
        $deleted = $this->modelCategory->delete();
        if ($deleted) {
            header('Location: ' . BASE_URL . '?act=category-list');
            exit;
        }
    }
}
