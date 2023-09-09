<?php

namespace fullBody\Mvc\controller;

use fullBody\Mvc\model\conn\Connection;
use fullBody\Mvc\model\ModelUser;
use Exception;
use stdClass;


class LoginController {
    public function __construct() {
        if($_GET['action'] ?? "" == "logout") {
            $this->logout();
        } else if($_POST['login'] ?? "" == "login") {
            $this->login();
        } 
    }

    public function logout(){

        if(!isset($_SESSION)) {
            session_start();
        }

        session_destroy();
        header("Location: /login");
    }

    public function processaRequisicao()
    {
        require_once __DIR__ . '/../../view/login.php';
    }

    public function login() {
        try {
            $obj = $this->getFormBean();
            $this->validateFormBean($obj);
            
            $conn = new Connection();
            $dbo = $conn->getConnection();
            $db =  new modelUser($dbo);
            $user = $db->getUser($obj);
            
            if(empty($user)) {
                throw new Exception("Nenhum usuário encontrado");
            } else {
                if(!isset($_SESSION)) {
                    session_start();
                }

                $_SESSION['idUser'] = $user['idUser'];
                
                if($obj->biotipo == "biotipo") {
                    require_once("../view/biotipo.php");
                    exit;
                } else {
                    header("Location: /home");
                }
            }

        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }

    }

    public function getFormBean()
    {
        $user = new stdClass();
        $user->email = trim($_POST['email'] ?? "");
        $user->password = trim($_POST['password'] ?? "");
        $user->biotipo = trim($_POST['biotipo']);
        return $user;
    }

    public function validateFormBean($obj)
    {
        if(empty($obj->email)){
            throw new Exception("Email vazio");
        }

        if(empty($obj->password)) {
            throw new Exception("Senha vazia");
        }
    }
}