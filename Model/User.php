<?php

namespace Model;

use PDO;
use Model\Connection;

class User
{
    private $conn;

    public $id;
    public $name;
    public $email;

    public function __construct()
    {
        $this->conn = Connection::getConnection();
    }

    // Método para obter todos os usuários
    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para criar um novo usuário
    public function createUser()
    {
        $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":name", $this->name, PDO::PARAM_STR);
        $stmt->bindParam(":email", $this->email, PDO::PARAM_STR);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }



}
