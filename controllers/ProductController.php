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
        $title = "Đây là trang chủ nhé hahaa";
        $thoiTiet = "Hôm naytrời có vẻ là mưa";
        require_once './views/trangchu.php';
    }

    public function index(){
        $products = $this->modelProduct->getAllProduct();
        require_once './views/product/index.php';
    }

    public function create(){
        $categories = $this->modelCategory->getAllCategory();
        require_once './views/product/create.php';
    }
    public function store(){
        $result = $this->modelProduct->insert();
        if ($result) {
            header('Location: ' . BASE_URL . '?act=product-list');
            exit;
        }
    }
    public function delete(){

        $deleted = $this->modelProduct->delete();
        if ($deleted) {
            header('Location: ' . BASE_URL . '?act=product-list');
            exit;
        }
    }
    public function edit(){
        $categories = $this->modelCategory->getAllCategory();
        $detail = $this->modelProduct->getOne();
        require_once './views/product/edit.php';
    }
    public function update(){
        $deleted = $this->modelProduct->update();
        if ($deleted) {
            header('Location: ' . BASE_URL . '?act=product-list');
            exit;
        }
    }
}
