<?php
class DashboardController
{
    public function index()
    {
        $title = "Dashboard";
        $view = "admin/dashboard"; 
        require_once './views/trangchu.php';
    }
}
