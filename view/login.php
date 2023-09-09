<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Login</title>
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

<body class="bg-black d-flex flex-column ">
    <nav class="navbar bg-dark navbar-expand-lg navbar-dark bg-light">
        <div class="container py-1">
            <a class="navbar-brand d-flex align-items-center fw-semibold " href="/">
                <img src="img/icon.png" alt="login-icon" style="height: 3.5rem">
                FullBody</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link fw-semibold custom-button">Blog</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link btn btn-link fw-semibold custom-button">Log-in</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link btn btn-link fw-semibold custom-button " style="background-color: #F35508; color: white; margin-left: 1rem;">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <form action="/login" method="POST">
        <div class="bg-light p-5 rounded-5 text-dark shadow mx-auto mt-5 " style="width: 25rem">
            <div class="d-flex justify-content-center">
                <img src="img/icon.png" alt="login-icon" style="height: 7rem" />
            </div>
            <div class="text-center fs-1 fw-bold">Bem vindo(a)</div>
            <div class="input-group mt-4 bg-light">
                <input class="form-control " type="text" placeholder="E-mail" name="email" />
            </div>
            <div class="input-group mt-2 bg-light">
                <input class="form-control" type="password" placeholder="Senha" name="password"/>
            </div>
            <input class="form-control" type="hidden" name="login" value="login" />
            <button type="submit" class="btn btn-custom-color text-white w-100 mt-4 fw-semibold shadow-sm">Login</button>
            <div class="d-flex gap-1 justify-content-center mt-1">
                <div>Não tem uma conta?</div>
                <a href="/register" class="text-decoration-none text-primary fw-semibold">Registrar-se</a>
            </div>
            <input name="biotipo" type="hidden" value="<?=$_GET['action'] ?? ""?>">
    </form>
    </div>
</body>

</html>