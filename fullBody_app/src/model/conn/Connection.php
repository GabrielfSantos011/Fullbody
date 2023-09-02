<?php

namespace fullBody\Mvc\model\conn;
use PDO;

class Connection {
    public function __construct() {
        
    }

    public function getConnection() {
        $host = "localhost";
        $dbName  = "full_body";
        $user  = "root";
        $password  = "root";
        return new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
    }
}