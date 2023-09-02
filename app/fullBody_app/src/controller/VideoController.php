<?php

namespace fullBody\Mvc\controller;

use fullBody\Mvc\model\conn\Connection;
use fullBody\Mvc\model\ModelExercicio;

class VideoController {
    public function __construct() {}

    public function processaRequisicao() {
        switch ($_GET['action']) {
            case "carregarVideo":
                $this->actionCarregarVideo();
                break;
           
        }
        
    }

    public function actionCarregarVideo()
    {
        $conn = new Connection();
        $dbo = $conn->getConnection();
        $exercicio = new modelExercicio($dbo);

        $videos = $exercicio->getVideos();
        
        $jsonData = json_encode($videos);
        echo $jsonData;
        exit;
    }
}