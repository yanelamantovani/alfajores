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

    function findCommentsByRating($rating) {
        $sentence = $this->db->prepare("SELECT * FROM comment WHERE rating = ?");
        $sentence->execute(array($rating));
        $comment = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $comment; 
    }

    function findCommentsSortedByIdAsc() {
        $sentence = $this->db->prepare("SELECT * FROM comment ORDER BY id ASC");
        $sentence->execute();
        $comment = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $comment; 
    }

    function findCommentsSortedByIdDesc() {
        $sentence = $this->db->prepare("SELECT * FROM comment ORDER BY id DESC");
        $sentence->execute();
        $comment = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $comment; 
    }

    function findCommentsSortedByRatingAsc() {
        $sentence = $this->db->prepare("SELECT * FROM comment ORDER BY rating ASC");
        $sentence->execute();
        $comment = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $comment; 
    }

    function findCommentsSortedByRatingDesc() {
        $sentence = $this->db->prepare("SELECT * FROM comment ORDER BY rating DESC");
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

    function insertComment($comment, $userId, $name, $productId, $rating) {
        $sentence = $this->db->prepare("INSERT INTO comment(comment, user_id, name, product_id, rating) VALUES(?, ?, ?, ?, ?)");
        $sentence->execute(array($comment, $userId, $name, $productId, $rating));
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