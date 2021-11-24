<?php
require_once "./Model/CommentModel.php";
require_once "./View/ApiView.php";

class ApiCommentsController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new CommentModel();
        $this->view = new ApiView();
    }

    function getComments(){
        if (isset($_GET["rating"])) {
            $comments = $this->model->findCommentsByRating($_GET["rating"]);    
        } elseif (isset($_GET["sortBy"]) && isset($_GET["sortDirection"])) {
            if ($_GET["sortBy"] == "id") {
                if ($_GET["sortDirection"] == "ASC") {
                    $comments = $this->model->findCommentsSortedByIdAsc();
                } elseif ($_GET["sortDirection"] == "DESC") {
                    $comments = $this->model->findCommentsSortedByIdDesc();
                }
            } elseif ($_GET["sortBy"] == "rating") {
                if ($_GET["sortDirection"] == "ASC") {
                    $comments = $this->model->findCommentsSortedByRatingAsc();
                } elseif ($_GET["sortDirection"] == "DESC") {
                    $comments = $this->model->findCommentsSortedByRatingDesc();
                }
            }
        } else {
            $comments = $this->model->getComments();
        }
        return $this->view->response($comments, 200);
    }

    function getComment($params = null) {
        $commentId = $params[":ID"];
        $comment = $this->model->getComment($commentId);
        if ($comment) {
            return $this->view->response($comment, 200);
        } else {
            return $this->view->response("El comentario id=$commentId no existe.", 404);
        }
    }

    function deleteComment($params = null) {
        $commentId = $params[":ID"];
        $comment = $this->model->getComment($commentId);
        if ($comment) {
            $this->model->deleteComment($commentId);
            return $this->view->response("El comentario id=$commentId fue borrado.", 200);
        } else {
            return $this->view->response("El comentario id=$commentId no existe.", 404);
        }
    }

    function insertComment($params = null) {
        $body = $this->getBody();
        $this->validateComment($body);
        $id = $this->model->insertComment($body->comment, $body->user_id, $body->name, $body->product_id, $body->rating);
        if ($id != 0) {
            $this->view->response("El comentario fue creado con el id=$id.", 200);
        } else {
            $this->view->response("El comentario no pudo ser creado.", 500);
        }
    }

    function updateComment($params = null) {
        $commentId = $params[':ID'];
        $body = $this->getBody();
        $this->validateComment($body);
        $comment = $this->model->getComment($commentId);
        if ($comment) {
            $this->model->updateComment($commentId, $body->comment, $body->user_id, $body->product_id, $body->rating);
            $this->view->response("El comentario fue actualizado.", 200);
        } else {
            return $this->view->response("El comentario id=$commentId no existe.", 404);
        }
    }

    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }

    private function validateComment($body) {
        if (empty($body->comment) 
            || empty($body->user_id) 
            || empty($body->name) 
            || empty($body->product_id)
            || empty($body->rating)) {
            $this->view->response("Campos vacios.", 400);
            die;
        }
    }

}
