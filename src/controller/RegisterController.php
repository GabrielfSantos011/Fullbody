<?php

namespace fullBody\Mvc\controller;

use fullBody\Mvc\model\conn\Connection;
use fullBody\Mvc\model\ModelUser;
use stdClass;
use Exception;

class RegisterController 
{
    
    public function __construct() {}

    public function processaRequisicao() {

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->registerUser();
        }
        
        require_once __DIR__ . '/../../view/register.php';
    }

    public function registerUser()
    {
        try {
            $obj = $this->getFormBean();
            $this->validateFormBean($obj);

            $conn = new Connection();
            $dbo = $conn->getConnection();
            $db =  new modelUser($dbo);
            $register = $db->registerUser($obj);

            if($register) {
                header("Location: /login");
            }
        } catch (Exception $e) {
            // Você deve chamar getMessage() dentro do bloco catch para obter a mensagem de erro.
            echo "Erro no registro: ". $e->getMessage();
            exit;
        }
    }    

    public function getFormBean()
    {
        $user = new stdClass();
        $user->name = trim($_POST['name'] ?? "");
        $user->lastName = trim($_POST['last_name'] ?? "");
        $user->email = trim($_POST['email'] ?? "");
        $user->password = trim($_POST['password'] ?? "");
        $user->confirmPassword = trim($_POST['confirm_password'] ?? "");

        return $user;
    }

    function validateFormBean($user)
    {
        // Verifique se o nome está presente e não está vazio
    if (empty($user->name)) {
        throw new Exception("O campo 'name' é obrigatório.");
    }

    // Verifique se o sobrenome está presente e não está vazio
    if (empty($user->lastName)) {
        throw new Exception("O campo 'last_name' é obrigatório.");
    }

    // Verifique se o email é válido
    if (!filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("O campo 'email' deve conter um endereço de email válido.");
    } 

    // Verifique se a senha tem pelo menos 8 caracteres
    if (strlen($user->password) < 8) {
        throw new Exception("A senha deve ter pelo menos 8 caracteres.");
    }

    // Verifique se a senha de confirmação coincide com a senha
    if ($user->password !== $user->confirmPassword) {
        throw new Exception("A senha de confirmação não coincide com a senha.");
    }
    }

}