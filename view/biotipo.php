<?php
    include("protect/protect.php");
    $idUser = $_SESSION["idUser"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Biotipo</title>

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
  

  </style>
</head>

<body class="bg-black d-flex flex-column">
  <nav class=" navbar bg-dark navbar-expand-lg navbar-dark bg-light text-center">
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
            <a href="#" class="nav-link btn btn-link fw-semibold custom-button" style="margin-left: 2rem;">Biotipo</a>
          </li>
          <li class="nav-item">
            <a href="/perfil" class="nav-link btn btn-link fw-semibold custom-button" style="margin-left: 2rem;">Perfil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container bg-white p-5 rounded-5 text-dark shadow mx-auto mt-5 " style="width: 34rem">
    <div class="text-center">
      <h2>Teste de Biotipo</h2>
      <div class="mt-4">
        <img src="img/teste.jpg" alt="">
      </div>
      <p class="mt-4">Informaçoes para fazer o teste</p>
    </div>

    <form class="mt-5" action="/biotipo" method="POST">
      <div class="mb-3">
        <label for="biotipoSelect" class="form-label">Selecione seu biotipo:</label>
        <select class="form-select" id="biotipoSelect" name="biotipo">
          <option value="ectomorfo">Ectomorfo</option>
          <option value="mesomorfo">Mesomorfo</option>
          <option value="endomorfo">Endomorfo</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="alturaInput" class="form-label">Altura:</label>
        <input type="text" class="form-control" id="alturaInput" name="altura">
      </div>
      <div class="mb-3">
        <label for="pesoInput" class="form-label">Peso:</label>
        <input type="text" class="form-control" id="pesoInput" name="peso">
      </div>
      <input name="action" type="hidden" value="sendBiotipo">
      <input name="id" type="hidden" value="<?=$idUser?>">
      <button type="submit" class="btn btn-custom-color custom-button fw-semibold shadow-sm" style="color: white; ">Confirmar</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>