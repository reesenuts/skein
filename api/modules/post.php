<?php
class Post {
    protected $pdo;
    
    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function addProduct($data) {
        try {
            $stmt = $this->pdo->prepare("
                INSERT INTO addproduct 
                (productID, productName, productImage, productPrice, productQuantity, productCategory) 
                VALUES (?, ?, ?, ?, ?, ?)
            ");
            
            $productID = uniqid('PROD_');
            
            $stmt->execute([
                $productID,
                $data['productName'],
                $data['productImage'],
                $data['productPrice'],
                $data['productQuantity'],
                $data['productCategory']
            ]);
            
            return array(
                "success" => true,
                "message" => "Product added successfully",
                "productID" => $productID
            );
        } catch (\PDOException $e) {
            return array(
                "error" => $e->getMessage(),
                "code" => 500
            );
        }
    }
}
