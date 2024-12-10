<?php
class Get {
    protected $pdo;
    
    public function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getProducts($category = null) {
        try {
            $sql = "SELECT * FROM addproduct";
            $params = [];
            
            if ($category) {
                $sql .= " WHERE productCategory = ?";
                $params[] = $category;
            }
            
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            return array("error" => $e->getMessage());
        }
    }

    public function getProduct($productID) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM addproduct WHERE productID = ?");
            $stmt->execute([$productID]);
            return $stmt->fetch();
        } catch (\PDOException $e) {
            return array("error" => $e->getMessage());
        }
    }
}
