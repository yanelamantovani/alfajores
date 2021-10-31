<?php

class CommentModel {

    private $db;

    function __construct() {
        $this->db = require 'model/DB.php'; 
    }

    function getComments() {
        $sentence = $this->db->prepare("SELECT * FROM comment");
        $sentence->execute();
        $comment = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $comment; 
    }

    function getComment($id) {
        $sentence = $this->db->prepare("SELECT * FROM comment WHERE id=?");
        $sentence->execute(array($id));
        $comment = $sentence->fetch(PDO::FETCH_OBJ);
        return $comment; 
    }

    function insertComment($comment, $userId, $productId, $rating) {
        $sentence = $this->db->prepare("INSERT INTO comment(comment, user_id, product_id, rating) VALUES(?, ?, ?, ?)");
        $sentence->execute(array($comment, $userId, $productId, $rating));
        return $this->db->lastInsertId();
    }

    function deleteComment($id) {
        $sentence = $this->db->prepare("DELETE FROM comment WHERE id=?");
        $sentence->execute(array($id));
    }

    function updateComment($id, $comment, $userId, $productId, $rating){
        $sentence = $this->db->prepare("UPDATE comment SET comment=?, user_id=?, product_id=?, rating=? WHERE id=?");
        $sentence->execute(array($comment, $userId, $productId, $rating, $id));
    }

}