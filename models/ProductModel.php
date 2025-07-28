<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class ProductModel 
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Viết truy vấn danh sách sản phẩm 
    public function getAllProduct()
    {
        $sql = "SELECT p.*, c.name AS category_name 
        FROM `product` p 
        LEFT JOIN category c on c.id = p.category_id";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function insert(){
        $sql = "INSERT INTO `product`(`name`, `image`, `price`, `category_id`) 
        VALUES (:name, :image, :price, :category_id)";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam('name', $_POST['name']);
        $stmt->bindParam('image', $_POST['image']);
        $stmt->bindParam('price', $_POST['price']);
        $stmt->bindParam('category_id', $_POST['category_id']);
        return $stmt->execute();
    }
    public function getOne(){
        $sql = "SELECT * FROM `product` WHERE id = :id";
        $stmt=$this->conn->prepare($sql);
        $stmt->bindParam('id', $_GET['id']);
        $stmt->execute();
        return $stmt->fetch();
    }
    public  function delete(){
        $sql = "DELETE FROM `product` WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('id', $_GET['id']);
        return $stmt->execute();
    }
    public function update(){
        $sql = "UPDATE `product` 
        SET `name`= :name,`image`= :image,`price`= :price,`category_id`= :category_id 
        WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name', $_POST['name']);
        $stmt->bindParam('image', $_POST['image']);
        $stmt->bindParam('price', $_POST['price']);
        $stmt->bindParam('category_id', $_POST['category_id']);
        $stmt->bindParam('id', $_GET['id']);
        return $stmt->execute();
    }
}
