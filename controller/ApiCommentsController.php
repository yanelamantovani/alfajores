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
        $comments = $this->model->getComments();
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
        // TODO: VALIDACIONES -> 400 (Bad Request)
        $id = $this->model->insertComment($body->comment, $body->user_id, $body->product_id, $body->rating);
        if ($id != 0) {
            $this->view->response("El comentario fue creado con el id=$id.", 200);
        } else {
            $this->view->response("El comentario no pudo ser creado.", 500);
        }
    }

    function updateComment($params = null) {
        $commentId = $params[':ID'];
        $body = $this->getBody();
        // TODO: VALIDACIONES -> 400 (Bad Request)
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

}
