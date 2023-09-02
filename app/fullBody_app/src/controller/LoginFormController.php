<?php

namespace fullBody\Mvc\controller;

class LoginFormController {

    public function __construct() {
        
    }

    public function processaRequisicao() {

         require_once __DIR__ . '/../../view/login.php';
        
    }
}