<?php
namespace fullBody\Mvc\controller;

use fullBody\Mvc\model\conn\Connection;
use fullBody\Mvc\model\ModelUser;

use stdClass;
use Exception;

class ForgotPassword
{
    public function __construct(){}

    public function processaRequisicao() 
    {
        if(isset($_POST['email'])) {
            $this->changePassword();
        } else {
            require_once __DIR__ . '/../../view/forgotPassword.php';

        }
    }

    public function changePassword()
    {       
        try{    
            $obj = $this->getFormBean();
            $this->validateFormBean($obj);

            $newPassword = substr(md5(time()), 0 , 6);
            $passCript = md5($newPassword);

            $conn = new Connection();
            $dbo = $conn->getConnection();
            $db =  new modelUser($dbo);
            $user = $db->getUserByEmail($obj->email);

           if(empty($user)) {
                throw new Exception("Email não encontrado na base de dados");
           } else {
                if(mail($obj->email, "Sua nova senha", "Sua nova senha: ".$newPassword)){
                    $db->updateUserPassword($passCript, $obj->email);
                    header("Location: /home");
                }    
           }

        } catch (Exception $e) {
            echo "Erro na atualização da senha: ". $e->getMessage();
        }    
    }

    public function getFormBean()
    {
        $user = new stdClass();
        $user->email = trim($_POST['email'] ?? "");
        return $user;
    }

    public function validateFormBean($obj)
    {
        if(empty($obj->email)){
            throw new Exception("Email vazio");
        }

        /* else if(!filter_var($obj->email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("O campo 'email' deve conter um endereço de email válido.");
        }  */
    }
}    