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
        $statement->bindValue(2, $obj->password);
        
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
        
            // Insira o novo usuário na tabela
            $sql = "INSERT INTO user (email, password) VALUES (?, ?)";
            $statement = $this->pdo->prepare($sql);
            $statement->bindValue(1, $obj->email);
            $statement->bindValue(2, $obj->password);
                
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
        
}
