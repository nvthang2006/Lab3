<?php
class HomeController
{
    public function __construct()
    {
    }
    public function Home()
    {
        $title = "Đây là trang chủ nhé hahaa";
        $thoiTiet = "Hôm nay trời có vẻ là mưa";
        require_once './views/trangchu.php';
    }
}
