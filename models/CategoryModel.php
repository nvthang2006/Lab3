<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class CategoryModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Lấy tất cả danh mục
    public function getAllCategory()
    {
        $sql = "SELECT * FROM `category`";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    // Thêm mới danh mục
    public function insert()
    {
        $sql = "INSERT INTO `category`(`name`) VALUES (:name)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name', $_POST['name']);
        return $stmt->execute();
    }

    // Lấy 1 danh mục theo id
    public function getOne()
    {
        $sql = "SELECT * FROM `category` WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $_GET['id']);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Cập nhật danh mục
    public function update()
    {
        $sql = "UPDATE `category` SET `name` = :name WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name', $_POST['name']);
        $stmt->bindParam('id', $_GET['id']);
        return $stmt->execute();
    }

    // Xóa danh mục
    public function delete()
    {
        $sql = "DELETE FROM `category` WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $_GET['id']);
        return $stmt->execute();
    }
}
