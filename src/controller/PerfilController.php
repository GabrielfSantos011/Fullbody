<?php

namespace fullBody\Mvc\controller;

use fullBody\Mvc\model\conn\Connection;
use fullBody\Mvc\model\ModelUser;
use stdClass;
use Exception;

class PerfilController 
{
    
    public function __construct() {}
    
    public function processaRequisicao() {   
        $this->getPerfilData();
    }
    
    public function getPerfilData()
    {   
        if(!isset($_SESSION)) {
            session_start();
        }
        
        $sessionId = $_SESSION['idUser'] ?? "";
        $conn = new Connection();
        $dbo =  $conn->getConnection();
        $db =  new modelUser($dbo);
        $user = $db->getPerfilInfo($sessionId); 
       
        
        
        require_once (__DIR__ . '/../../view/perfil.php');
    }
}