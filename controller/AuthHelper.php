<?php

class AuthHelper {

    function __construct() {
    }

    function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION["email"])) {
            header("Location: ".BASE_URL."admin/login");
            die;
        }
    }

    function logout() {
        session_start();
        session_destroy();
    }

    function getLoggedRole() { 
        if(!isset($_SESSION)){ 
            session_start(); 
        } 
        if (isset($_SESSION["role"]) && !empty($_SESSION["role"])){
            return $_SESSION["role"];
        }
        return null;
    }
}