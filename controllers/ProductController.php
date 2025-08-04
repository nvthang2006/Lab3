<?php
// có class chứa các function thực thi xử lý logic 
class ProductController
{
    public $modelProduct;
    public $modelCategory;

    public function __construct()
    {
        $this->modelProduct = new ProductModel();
        $this->modelCategory = new CategoryModel();
    }

    public function Home()
    {
        $title = "Trang chủ";
        $view = "trangchu"; // nếu bạn có file ./views/home.php
        require_once './views/trangchu.php';
    }

    public function index()
    {

        $title = "Trang sản phẩm";
        $view = "product/index";
        $products = $this->modelProduct->getAllProduct();
        require_once './views/trangchu.php';
    }

    public function create()
    {

        $title = "Thêm sản phẩm";
        $view = "product/create";
        $categories = $this->modelCategory->getAllCategory();
        require_once './views/trangchu.php';
    }

    public function store()
    {
                $file = $_FILES['image'];
        $path = "";
        if (!empty($file)) {
            $newName = time() . $file['name'];
            $path = 'uploads/' . $newName;
            move_uploaded_file($file['tmp_name'], $path);
        }
        $result = $this->modelProduct->insert($path);
        if ($result) {
            header('Location: ' . BASE_URL . '?act=product-list');
            exit;
        }
    }

    public function delete()
    {
        $deleted = $this->modelProduct->delete();
        if ($deleted) {
            header('Location: ' . BASE_URL . '?act=product-list');
            exit;
        }
    }

    public function edit()
    {
        $title = "Chỉnh sửa sản phẩm";
        $view = "product/edit";
        $categories = $this->modelCategory->getAllCategory();
        $detail = $this->modelProduct->getOne();
        require_once './views/trangchu.php';
    }

    public function update()
    {
        $updated = $this->modelProduct->update();
        if ($updated) {
            header('Location: ' . BASE_URL . '?act=product-list');
            exit;
        }
    }
}
