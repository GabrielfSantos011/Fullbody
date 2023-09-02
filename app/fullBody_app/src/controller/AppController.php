<?php
namespace fullBody\Mvc\controller;

class AppController {
    public function __construct()
    {

    }

    public function processaRequisicao() {
        require_once __DIR__ . '/../../view/display.php';
    }
}