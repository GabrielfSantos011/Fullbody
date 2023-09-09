<?php
namespace fullBody\Mvc\model;
use PDO;
class Conexao {
    private $db = null;
    public function __construct() {
        var_dump("conectei");exit;
        $host = "localhost";
        $dbName  = "full_body";
        $user  = "root";
        $passWord  = "root";
        $this->db = new PDO("mysql:$host;dbname=BASE", "$user", "$passWord");
    }

    public function getConnectionInstance() {
        return $this->db;
    }

}