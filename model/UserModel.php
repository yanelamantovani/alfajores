<?php

class UserModel {

    function __construct() {
        $this->db = require 'model/DB.php'; 
    }

    function getUser($email) {
        $query = $this->db->prepare("SELECT * FROM user WHERE email = ?"); 
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function getUsers() {
        $query = $this->db->prepare("SELECT * FROM user"); 
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function createUser($email, $password, $role) {
        $query = $this->db->prepare('INSERT INTO user (email, password, role) VALUES (? , ?, ?)');
        $query->execute([$email, $password, $role]);
    }

    function updateUser($id, $email, $role) {
        $sentence = $this->db->prepare("UPDATE user SET 
                                            email = ?, 
                                            role = ?
                                        WHERE id = ? ");
        $sentence->execute(array($email, $role, $id));
    }

    function deleteUser($userId) {
        $sentence = $this->db->prepare("DELETE FROM user WHERE id = ?");
        $sentence->execute(array($userId));
    }

}