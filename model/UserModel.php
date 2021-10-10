<?php

class UserModel {

    function __construct() {
        $this->db = new PDO('mysql:host=localhost:3306;'.'dbname=alfajores;charset=utf8','root','root');
    }

    function getUser($email) {
        $query = $this->db->prepare("SELECT * FROM user WHERE email = ? AND role = 'ADMIN'"); 
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

}