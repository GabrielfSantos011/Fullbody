<?php
namespace fullBody\Mvc\model;

use Exception;
use PDO;
use stdClass;

class ModelUser {
    private $db = null;
    public function __construct(private \PDO $pdo) {
    
    }

    public function getUser(stdClass $obj) {
        $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $obj->email);
        $statement->bindValue(2, md5($obj->password));
        //var_dump(md5($obj->password));exit;

        if ($statement->execute()) {
            // A consulta foi executada com sucesso
        
            $user = $statement->fetch(PDO::FETCH_ASSOC); // ou fetchAll() se você espera múltiplos resultados
        
            if ($user) {
                // Um usuário foi encontrado
                return $user;
            } else {
                // Nenhum usuário correspondeu às credenciais
                throw new Exception("Nenhum usuário encontrado.");
            }
        } else {
            // Houve um erro na execução da consulta
            throw new Exception("Erro na consulta: " . $statement->errorInfo()[2]);
        }
    }

    public function updateUser(stdClass $obj) {
        $sql = "UPDATE user SET biotipo = ?, height = ?, weigh = ? WHERE idUser = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $obj->biotipo);
        $statement->bindValue(2, $obj->height);
        $statement->bindValue(3, $obj->weigh);
        $statement->bindValue(4, $obj->id);

        if ($statement->execute()) {
            // A atualização foi bem-sucedida
            return true;
        } else {
            // Houve um erro na atualização
            throw new Exception("Erro na atualização: " . $statement->errorInfo()[2]);
        }
    }

    public function registerUser(stdClass $obj) {
        try {
            // Verifique se o email já está em uso
            $existingUser = $this->getUserByEmail($obj->email);
        
            if ($existingUser) {
                throw new Exception("O email já está em uso.");
            }   
            
             // Use md5 para criar o hash da senha
            $passwordHash = md5($obj->password);
            // Insira o novo usuário na tabela
            $sql = "INSERT INTO user (email, password,name,last_name) VALUES (?, ?, ?, ?)";
            $statement = $this->pdo->prepare($sql);
            $statement->bindValue(1, $obj->email);
            //$statement->bindValue(2, $obj->password);
            $statement->bindValue(2, $passwordHash);
            $statement->bindValue(3, $obj->name);
            $statement->bindValue(4, $obj->lastName);
                
            if ($statement->execute()) {
                    return true; // Registro bem-sucedido
            } else {
                    throw new Exception("Erro no registro: " . $statement->errorInfo()[2]);
            }
        } catch (Exception $e) {
            throw new Exception("Erro no registro: " . $e->getMessage());
        }
    }

    public function getUserByEmail($email) {
        try {
            $sql = "SELECT * FROM user WHERE email = ?";
            $statement = $this->pdo->prepare($sql);
            $statement->bindValue(1, $email);
    
            if ($statement->execute()) {
                $user = $statement->fetch(PDO::FETCH_ASSOC);
    
                if ($user) {
                    return $user; // Retorna os dados do usuário se encontrado
                }
            }
    
            return null; // Retorna null se o usuário não for encontrado
        } catch (Exception $e) {
            throw new Exception("Erro ao buscar usuário por email: " . $e->getMessage());
        }
    }
    
    public function getPerfilInfo($idUser) {
        // Construa a consulta SQL para buscar as informações do perfil
        
        $sql = "SELECT name, last_name, email, biotipo FROM user WHERE idUser = ?";
        
        // Prepara a consulta SQL
        $statement = $this->pdo->prepare($sql);
        
        // Vincula o valor do parâmetro idUser à consulta
        
        $statement->bindValue(1, $idUser);
        // Executa a consulta
        
        if ($statement->execute()) {
            // Obtém o resultado da consulta
            $perfilInfo = $statement->fetch(PDO::FETCH_ASSOC);
            
            // Verifica se encontrou um perfil com o idUser fornecido
            if ($perfilInfo) {
                return $perfilInfo; // Retorna as informações do perfil
            } else {
                return null; // Retorna null se o perfil não foi encontrado
            }
        } else {
            // Trate erros de consulta aqui, se necessário
            return null;
        }
    }

    public function updateUserPassword($newPassword, $email)
    {
         // Construa a consulta SQL para atualizar a senha do usuário
         $sql = "UPDATE user SET password = ? WHERE email = ?";
        
         // Prepara a consulta SQL
         $statement = $this->pdo->prepare($sql);
         // Vincula os valores dos parâmetros à consulta
         $statement->bindValue(1, $newPassword);
         $statement->bindValue(2, $email);
         
         // Executa a consulta
         if ($statement->execute()) {
             // A atualização da senha foi bem-sucedida
             return true;
         } else {
             // Houve um erro na atualização da senha
             throw new Exception("Erro na atualização da senha: " . $statement->errorInfo()[2]);
         }
    }

}
