<?php
namespace fullBody\Mvc\model;

use Exception;
use PDO;
use stdClass;

class ModelExercicio {
    public function __construct(private \PDO $pdo) {
    
    }

    public function getVideos() {
       return $this->pdo->query("SELECT * FROM exercicios;")->fetchAll(PDO::FETCH_ASSOC);
    }
}