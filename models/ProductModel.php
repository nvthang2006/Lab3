<?php 
class ProductModel 
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Lấy danh sách sản phẩm (có tên danh mục)
    public function getAllProduct()
    {
        $sql = "SELECT p.*, c.name AS category_name 
                FROM `products` p 
                LEFT JOIN categories c ON c.id = p.category_id";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    // Thêm sản phẩm mới
    public function insert($path)
    {
        $sql = "INSERT INTO `products`(`name`, `price`, `quantity`, `category_id`, `image`, `description`) 
                VALUES (:name, :price, :quantity, :category_id, :image, :de~~scription)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name', $_POST['name']);
        $stmt->bindParam('price', $_POST['price']);
        $stmt->bindParam('quantity', $_POST['quantity']);
        $stmt->bindParam('category_id', $_POST['category_id']);
        $stmt->bindParam('image', $path);
        $stmt->bindParam('description', $_POST['description']);
        return $stmt->execute();
    }

    // Lấy 1 sản phẩm theo ID
    public function getOne()
    {
        $sql = "SELECT * FROM `products` WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $_GET['id']);
        $stmt->execute();
        return $stmt->fetch();
    }

    // Xoá sản phẩm
    public function delete()
    {
        $sql = "DELETE FROM `products` WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $_GET['id']);
        return $stmt->execute();
    }

    // Cập nhật sản phẩm
    public function update()
    {
        $sql = "UPDATE `products` 
                SET `name` = :name, 
                    `price` = :price, 
                    `quantity` = :quantity,
                    `category_id` = :category_id,
                    `image` = :image,
                    `description` = :description
                WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name', $_POST['name']);
        $stmt->bindParam('price', $_POST['price']);
        $stmt->bindParam('quantity', $_POST['quantity']);
        $stmt->bindParam('category_id', $_POST['category_id']);
        $stmt->bindParam('image', $_POST['image']);
        $stmt->bindParam('description', $_POST['description']);
        $stmt->bindParam('id', $_GET['id']);
        return $stmt->execute();
    }
}
