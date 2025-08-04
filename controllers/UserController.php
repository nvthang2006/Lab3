<?php
class UserController
{
    public $modelUser;
    public function __construct()
    {
        $this->modelUser = new User();
    }

    public function index()
    {
        $title = "Quản lý người dùng";
        $view = "user/index";
        $users = $this->modelUser->index();
        require_once './views/trangchu.php';
    }

    public function create()
    {
        $title = "Thêm người dùng";
        $view = "user/create";
        require_once './views/trangchu.php';
    }

    public function store()
    {
        $this->modelUser->insert();
        header('Location: index.php?act=user-list');
        exit;
    }

    public function edit()
    {
        $title = "Chỉnh sửa người dùng";
        $view = "user/edit";
        $user = $this->modelUser->getOne();
        require_once './views/trangchu.php';
    }

    public function update()
    {
        $this->modelUser->update();
        header('Location: index.php?act=user-list');
        exit;
    }

    public function destroy()
    {
        $this->modelUser->delete();
        header('Location: index.php?act=user-list');
        exit;
    }
}
