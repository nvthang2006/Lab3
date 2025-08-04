<?php
class User
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function findByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':email' => $email]);
        return $stmt->fetch();
    }

    public function register($name, $email, $password, $phone, $address)
    {
        $sql = "INSERT INTO `users`(`name`, `email`, `password`, `phone`, `address`) 
        VALUES (:name, :email, :password, :phone, :address)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':password' => md5($password),
            ':phone' => $phone,
            ':address' => $address
        ]);
        return $stmt->fetch();
    }

    public function checkLogin($email, $password)
    {
        $sql = "SELECT * FROM `users` WHERE `email` = :email AND `password` = :password";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':email' => $email,
            ':password' => md5($password)
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC); // trả về thông tin người dùng nếu đúng, hoặc false nếu sai
    }

    public function index()
    {
        $sql = "SELECT * FROM `users` ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }
    // Thêm người dùng mới
    public function insert()
    {
        $sql = "INSERT INTO `users`(`name`, `email`, `password`, `phone`, `address`, `role`) 
                VALUES (:name, :email, :password, :phone, :address, :role)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name', $_POST['name']);
        $stmt->bindParam('email', $_POST['email']);
        $stmt->bindParam('password', $_POST['password']);
        $stmt->bindParam('phone', $_POST['phone']);
        $stmt->bindParam('address', $_POST['address']);
        $stmt->bindParam('role', $_POST['role']);
        return $stmt->execute();
    }

    // Lấy 1 người dùng theo ID
    public function getOne()
    {
        $sql = "SELECT * FROM `users` WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $_GET['id']);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Xóa người dùng
    public function delete()
    {
        $sql = "DELETE FROM `users` WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $_GET['id']);
        return $stmt->execute();
    }

    // Cập nhật người dùng
    public function update()
    {
        $sql = "UPDATE `users` 
                SET `name` = :name,
                    `email` = :email,
                    `password` = :password,
                    `phone` = :phone,
                    `address` = :address,
                    `role` = :role
                WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name', $_POST['name']);
        $stmt->bindParam('email', $_POST['email']);
        $stmt->bindParam('password', $_POST['password']);
        $stmt->bindParam('phone', $_POST['phone']);
        $stmt->bindParam('address', $_POST['address']);
        $stmt->bindParam('role', $_POST['role']);
        $stmt->bindParam('id', $_GET['id']);
        return $stmt->execute();
    }
}
