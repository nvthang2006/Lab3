<?php
// có class chứa các function thực thi xử lý logic 
class ProductController
{
    public $modelProduct;

    public function __construct()
    {
        $this->modelProduct = new ProductModel();
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
}
