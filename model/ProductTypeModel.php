<?php

class ProductTypeModel {

    private $db;

    function __construct() {
        $this->db = require 'model/DB.php'; 
    }

    function getProductTypes() {
        $sentence = $this->db->prepare("SELECT * FROM product_type");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }

    function insertProductType($name, $description, $price1, $price6, $price12) {
        $sentence = $this->db->prepare("INSERT INTO product_type(name,description,price1,price6,price12) VALUES(?,?,?,?,?)");
        $sentence->execute(array($name, $description, $price1, $price6, $price12));
    }

    function deleteProductType($productTypeId) {
        $sentence = $this->db->prepare("DELETE FROM product_type WHERE id = ?");
        $sentence->execute(array($productTypeId));
    }

    function updateProductType($id, $name, $description, $price1, $price6, $price12) {
        $sentence = $this->db->prepare("UPDATE product_type SET 
                                            name = ?, 
                                            description = ?,
                                            price1 = ?, 
                                            price6 = ?,   
                                            price12 = ?,   
                                        WHERE id = ? ");
        $sentence->execute(array($name, $description, $price1, $price6, $price12, $id));
    }

    function getProductType($id) {
        $sentence = $this->db->prepare("SELECT * FROM product_type WHERE id = ?");
        $sentence->execute(array($id));
        return $sentence->fetch(PDO::FETCH_OBJ);
    }

    function getProductTypeByName($name) {
        $sentence = $this->db->prepare("SELECT * FROM product_type WHERE name = ?");
        $sentence->execute(array($name));
        return $sentence->fetch(PDO::FETCH_OBJ);
    }
}