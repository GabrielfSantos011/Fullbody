<?php

namespace fullBody\Mvc\controller;

class HomeFormController {

    public function __construct() {
    }

    public function processaRequisicao() {
        require_once __DIR__ . '/../../view/home.php';
    }
}