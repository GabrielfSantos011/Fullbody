<?php

namespace fullBody\Mvc\model\protect;


if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['idUser'])) {
    die("Você não está logado.");
}