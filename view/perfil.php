<?php
include("protect/protect.php");

$completeName = '';

if (isset($user['name'])) {
    $completeName .= $user['name'];

    if (isset($user['last_name'])) {
        $completeName .= ' ' . $user['last_name'];
    }

}?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Perfil</title>

  <style>
    .btn-custom-color {
    background-color: #f35508 !important;
    border-color: #f35508 !important;
    transition: background-color 0.3s, border-color 0.3s;
  }
  
  .btn-custom-color:hover {
    background-color: #d84500 !important; /* Cor mais clara para quando passar o mouse */
    border-color: #d84500 !important;
  }
  
  .custom-button {
    border-radius: 50px;
    margin: 0.2rem;
    transition: background-color 0.3s, color 0.3s, transform 0.3s;
  }
  
  .custom-button:hover {
    color: white;
    transform: scale(1.05);
  }
  
  .dropdown-item:hover {
    background-color: #f35508;
    color: white;
  }
  
  </style>
</head>

<body class="bg-black d-flex flex-column ">
  <nav class="navbar bg-dark navbar-expand-lg navbar-dark bg-light text-center">
    <div class="container py-1">
      <a class="navbar-brand d-flex align-items-center fw-semibold " href="/">
        <img src="img/icon.png" alt="login-icon" style="height: 3.5rem">
        FullBody </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menuNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
          <a href="https://fullbodyproject.blogspot.com/" class="nav-link fw-semibold custom-button" target="_blank">Blog</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="/home" class="nav-link btn btn-link fw-semibold custom-button">Exercicios</a>
          </li>
          <li class="nav-item">
            <a href="/biotipo" class="nav-link btn btn-link fw-semibold custom-button" style="margin-left: 2rem;">Biotipo</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link btn btn-link fw-semibold custom-button" style="margin-left: 2rem;">Perfil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-5" style="width: 400px; height: 550px;">
      <div class="text-center">
        <img src="img/user.png" alt="Usuário" class="rounded-circle" style="width: 200px;">
      </div>
      <form>
        <div class="mt-3">
          <h5 class="text-center" style="font-size: 22px;"><?=$completeName?></h5>
          <p class="text-center" style="font-size: 22px;"><?=$user['email'] ?? ""?></p>
          <div class="text-center">
            <p class="text-center" style="font-size: 20px;"><?=$user['biotipo'] ?? ""?></p>
            <p class="text-center">
              <a href="/biotipo" class="justify-content-center text-decoration-none text-primary fw-semibold" style="font-size: 1.1rem; color:white">Alterar biotipo</a>
            </p>
            <a href="/logout?action=logout" class="btn btn-custom-color custom-button fw-semibold " style="color: white; text-align: center;" >Sair da Conta</a>
          </div>
        </div>
      </form>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>