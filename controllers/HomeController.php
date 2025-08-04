<?php
class HomeController
{
    public $conn;
    public $modelUser;
    public function __construct()
    {
        $this->conn = connectDB();
        $this->modelUser = new User();
    }
    public function Home()
    {
        $title = "Trang chủ";
        $view = "trangchu";
        require_once './views/trangchu.php';
    }

    public function login()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == 'POST') {
            $check = $this->modelUser->checkLogin($_POST['email'], $_POST['password']);
            if ($check) {
                $_SESSION['success'][] = "Đăng nhập thành công. ";
                $_SESSION['userLogin'] = [
                    'id' => $check['id'],
                    'name' => $check['name'],
                    'role' => $check['role']
                ];
                if ($check['role'] == '1') {
                    header('Location:' . BASE_URL . "?act=admin-dashboard");
                    exit();
                }
                header('Location:' . BASE_URL);
                exit();
            } else {
                $_SESSION['errors'][] = "Đăng nhập thất bại";
                header('Location:' . BASE_URL . '?act=login');
                exit();
            }
        }
        $title = "Đăng nhập";
        $view = "login";
        require_once './views/trangchu.php';
    }

    public function register()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method == 'POST') {
            if ($_POST['password'] == $_POST['confirm']) {
                $check =  $this->modelUser->findByEmail($_POST['email']);
                if (!$check) {
                    $this->modelUser->register(
                        $_POST['name'],
                        $_POST['email'],
                        $_POST['password'],
                        $_POST['phone'],
                        $_POST['address'],
                    );
                    $_SESSION['success'][] = "Đăng ký thành công. ";
                    header('Location:' . BASE_URL . '?act=login');
                    exit();
                }
                $_SESSION['errors'][] = "Email đã tồn tại";
                header('Location:' . BASE_URL . '?act=register');
                exit();
            }
            $_SESSION['errors'][] = "Mật khẩu phải trùng nhau";
            header('Location:' . BASE_URL . '?act=register');
            exit();
        }
        $title = "Đăng ký";
        $view = "register";
        require_once './views/trangchu.php';
    }

    public function logout()
    {
        unset($_SESSION['userLogin']);
        $_SESSION['success'][] = "Đăng xuất thành công.";
        header('Location: ' . BASE_URL . "?act=login");
        exit();
    }
}
