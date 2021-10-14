<?php

class UserModel {

    function __construct() {
        $this->db = require 'model/DB.php'; 
    }

    function getUser($email) {
        $query = $this->db->prepare("SELECT * FROM user WHERE email = ? AND role = 'ADMIN'"); 
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

}