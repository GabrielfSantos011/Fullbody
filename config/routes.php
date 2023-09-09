<?php
//Arquivo para definir as rotas da minha aplicação
declare(strict_types=1);

return [
    'GET|/' => fullBody\Mvc\controller\AppController::class,
    'GET|/login' => fullBody\Mvc\Controller\LoginFormController::class,
    'POST|/login' => fullBody\Mvc\Controller\LoginController::class,
    'GET|/register' => fullBody\Mvc\Controller\RegisterController::class,
    'POST|/register' =>fullBody\Mvc\Controller\RegisterController::class,
    'GET|/home' => fullBody\Mvc\Controller\HomeFormController::class,
    'GET|/logout' => fullBody\Mvc\Controller\LoginController::class,
    'GET|/video' => fullBody\Mvc\Controller\VideoController::class,
    'POST|/biotipo' => fullBody\Mvc\Controller\BiotipoController::class,
    'GET|/biotipo' => fullBody\Mvc\Controller\BiotipoController::class,
    'GET|/perfil' => fullBody\Mvc\Controller\PerfilController::class,
    'GET|/forgotPassword' => fullBody\Mvc\Controller\ForgotPassword::class,
    'POST|/forgotPassword' => fullBody\Mvc\Controller\ForgotPassword::class,
];