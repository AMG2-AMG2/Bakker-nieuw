<?php
class Product {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllProducts() {
        $query = $this->db->query('SELECT * FROM producten LIMIT 10');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id) {
        $query = $this->db->prepare('SELECT * FROM producten WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }
}
