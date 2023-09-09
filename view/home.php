<?php
  include("protect/protect.php");
// No início do seu script PHP


// Resto do seu código PHP aqui
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/home.css">
  <title>Home</title>
</head>

<body class="bg-black d-flex flex-column ">
  <nav class="navbar bg-dark navbar-expand-lg navbar-dark bg-light text-center">
    <div class="container py-1">
      <a class="navbar-brand d-flex align-items-center fw-semibold" href="/">
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
            <a href="/perfil" class="nav-link btn btn-link fw-semibold custom-button" style="margin-left: 2rem;">Perfil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" id="content">
    <div class="row" id="videoList">
    
    </div>
  </div>

  <script src= "/js/home.js"></script>
</body>

</html>