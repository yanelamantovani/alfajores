<?php

class ProductModel {

    private $db;

    function __construct() {
        $this->db = require 'model/DB.php'; 
    }

    function getProducts() {
        $sentence = $this->db->prepare("SELECT * FROM product");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }

    function createProduct($name, $description, $image, $productTypeId) {
        $sentence = $this->db->prepare("INSERT INTO product(name,description,image,product_type_id) VALUES(?,?,?,?)");
        $sentence->execute(array($name, $description, $image, $productTypeId));
    }

    function deleteProduct($productId) {
        $sentence = $this->db->prepare("DELETE FROM product WHERE id = ?");
        $sentence->execute(array($productId));
    }

    function updateProduct($id, $name, $description, $image, $productTypeId) {
        $sentence = $this->db->prepare("UPDATE product SET 
                                            name = ?, 
                                            description = ?,
                                            image = ?, 
                                            product_type_id = ?   
                                        WHERE id = ? ");
        $sentence->execute(array($name, $description, $image, $productTypeId, $id));
    }

    function getProduct($id) {
        $sentence = $this->db->prepare("SELECT * FROM product WHERE id = ?");
        $sentence->execute(array($id));
        return $sentence->fetch(PDO::FETCH_OBJ);
    }

    function getProductsByProductType($productTypeId) {
        $sentence = $this->db->prepare("SELECT * FROM product WHERE product_type_id = ?");
        $sentence->execute(array($productTypeId));
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }
}