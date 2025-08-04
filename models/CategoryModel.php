<?php 
class CategoryModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllCategory()
    {
        $sql = "SELECT * FROM `categories`"; // đổi tên bảng
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function insert()
    {
        $sql = "INSERT INTO `categories`(`name`) VALUES (:name)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name', $_POST['name']);
        return $stmt->execute();
    }

    public function getOne()
    {
        $sql = "SELECT * FROM `categories` WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $_GET['id']);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update()
    {
        $sql = "UPDATE `categories` SET `name` = :name WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name', $_POST['name']);
        $stmt->bindParam('id', $_GET['id']);
        return $stmt->execute();
    }

    public function delete()
    {
        $sql = "DELETE FROM `categories` WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $_GET['id']);
        return $stmt->execute();
    }
}
