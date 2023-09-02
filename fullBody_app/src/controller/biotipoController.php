<?php
namespace fullBody\Mvc\controller;

use fullBody\Mvc\model\conn\Connection;
use fullBody\Mvc\model\ModelUser;

use stdClass;
use Exception;

class BiotipoController 
{
    public function __construct(){}

    public function processaRequisicao() 
    {
        switch($_POST['action']) {
            case "sendBiotipo":
                $this->sendBiotipo();
                break;               
        }
    }

    public function sendBiotipo() 
    {
        try{

            if(!isset($_SESSION)) {
                session_start();
            }

            $obj = $this->getFormBean();
            $this->validateFormBean($obj);
            $conn = new Connection();
            $dbo = $conn->getConnection();
            $db = new ModelUser($dbo);

            $update =  $db->updateUser($obj);

            if($update) {
                header("Location: /home");
            }

        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }    
    }
    
    public function getFormBean()
    {
        $obj = new stdClass();
        $obj->biotipo = trim($_POST["biotipo"] ?? '');
        $obj->height = preg_replace("/[^0-9]/", "",$_POST["altura"] ?? "");
        $obj->weigh = preg_replace("/[^0-9]/", "",$_POST["peso"] ?? "");
        $obj->id = preg_replace("/[^0-9]/", "", $_POST['id']);

        return $obj;
    }
    
    public function validateFormBean($obj)
    {
        if ($_SESSION['idUser'] != $obj->id) {
            throw new Exception("essa id não é sua seu arrombado");

        }else if(empty($obj->biotipo)) {
            throw new Exception ("Biotipo é obrigatório");

        } else if (empty($obj->height)) {
            throw new Exception ("Altura é obrigatório");

        } else if (empty($obj->weigh)) {
            throw new Exception ("Peso é obrigatório");
        }
    }
}