<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class CategoryModel
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Viết truy vấn danh sách sản phẩm 
    public function getAllCategory()
    {
        $sql = "SELECT * FROM `category`";
        $stmt = $this->conn->prepare($sql);
        return $stmt->fetchAll();
    }
}
