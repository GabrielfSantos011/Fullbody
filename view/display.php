<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <title>landingpage</title>
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
      border-radius: 10px;
      margin: 0.2rem;
      padding: 6px 12px; /* Adjust padding values for the desired button size */
      font-size: 18px;
      transition: background-color 0.3s, color 0.3s, transform 0.3s;
    }

    .custom-button:hover {
      color: white;
      transform: scale(1.05);
    }

    .carousel-item {
      height: 100vh;
      min-height: 300px;
    }

    .carousel-caption {
      bottom: 220px;
      z-index: 2;
    }

    .carousel-caption h5 {
      font-size: 45px;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-top: 25px;
    }

    .carousel-caption p {
      width: 60%;
      margin: auto;
      font-size: 18px;
      line-height: 1.9;
    }

    .carousel-inner:before {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.7);
      z-index: 1;
    }

    .about-text h2 {
      color: white;
      border-radius: 10px;
    }

    .about-text h2 span {
      color: #f35508;
      font-weight: 600;
    }

    .about-text p {
      color: white;
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .carousel-caption {
        bottom: 370px;
      }
      .carousel-caption p {
        width: 100%;
      }
      .card {
        margin-bottom: 30px;
      }
      .img-area img {
        width: 100%;
      }
    }

    .fw-semibold {
      font-weight: 600;
    }

    .text-white {
      color: white;
    }

    .rounded-text {
      font-size: 38px; /* Adjust the font size as needed */
      border-radius: 10px; /* Adjust the border-radius as needed */
      display: inline-block;
    }

    .button {
      text-decoration: none;
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
          <a href="https://fullbodyproject.blogspot.com/" class="nav-link fw-semibold custom-button" target="_blank">Blog</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="/login" class="nav-link btn btn-link fw-semibold custom-button">Log-in</a>
          </li>
          <li class="nav-item">
            <a href="/register" class="nav-link btn btn-link fw-semibold custom-button " style="background-color: #F35508; color: white; margin-left: 1rem;">Cadastrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/CaraAndando1024.png" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Desafie-se</h5>
          <p>Desafie a si mesmo a dar o primeiro passo, e logo estarás correndo em direção ao melhor de si mesmo. Seu potencial é como a estrada à sua frente: infinito e cheio de conquistas a alcançar.</p>
          <p><a href="https://fullbodyproject.blogspot.com/2023/09/quantas-vezes-ja-adiamos-o-inicio-de.html" class="btn btn-custom-color custom-button fw-semibold mt-3" style="color: white;" target="_blank">Saiba mais</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/CaraDeOculos1024.png" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Moldando Corpo e Mente na Jornada de Transformação</h5>
          <p>Enquanto cada passo ecoa a batida do seu progresso, você molda não apenas seu corpo, mas também a resiliência da sua mente. Cada passo é uma afirmação do seu compromisso consigo mesmo, e o caminho à frente é a trilha da sua transformação contínua</p>
          <p><a href="https://fullbodyproject.blogspot.com/2023/09/moldando-corpo-e-mente-na-jornada-de.html" class="btn btn-custom-color custom-button fw-semibold mt-3" style="color: white;" target="_blank">Saiba mais</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/people2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>Fortalecendo Vínculos e Celebrando Conquistas Juntos</h5>
          <p>Cada passo compartilhado é um vínculo fortalecido, e cada sorriso trocado é a celebração da jornada que estão trilhando lado a lado. O poder da parceria transforma cada corrida em uma experiência de alegria e realização mútua.</p>
          <p><a href="https://fullbodyproject.blogspot.com/2023/09/fortalecendo-vinculos-e-celebrando.html" class="btn btn-custom-color custom-button fw-semibold mt-3" style="color: white;" target="_blank">Saiba mais</a></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <section id="about" class="about-section-padding mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
          <div class="about-img">
            <img src="img/mulherCaminhando.jpg" alt="" class="img-fluid" style="height: 550px; width: 400px;">
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
          <div class="about-text ">
            <h2 style="color: white; border-radius: 10px;">
              Você não pode ter um corpo
              <span class="fw-semibold" style="color: #F35508; font-weight: 600;">saudável</span>
              sem um estilo de vida
              <span class="fw-semibold" style="color: #F35508; font-weight: 600;">saudável</span>
            </h2>
            <p style="color: white;">
              Uma vida saudável é a base para um corpo vigoroso. Cuidar da mente e das emoções é tão importante quanto nutrir o físico. A harmonia entre hábitos positivos e cuidados pessoais reflete na vitalidade e bem-estar
            </p>
            <div class="text-center">
              <a href="" class="btn btn-custom-color custom-button fw-semibold " style="color: white; text-align: center;">Treinar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio" class="portfolio section-padding" style="margin-top: 3rem;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
            <h2 class="text-white fw-semibold rounded-text">Treinos para todos os Biotipos</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card bg-dark zoom-card">
            <img src="img/ectomorfo1.png" class="card-img-top" alt="">
            <div class="card-body text-white d-flex flex-column justify-content-end">
              <h3 class="card-title" style="text-align: center;">Ectomorfo</h3>
              <p class="lead" style="text-align: center;">O ectomorfo é caracterizado por magreza aparente, metabolismo acelerado e dificuldade em ganhar massa muscular</p>
              <a href="/login?action=biotipo" class="btn btn-custom-color custom-button fw-semibold " style="color: white; text-align: center;">Fazer o teste</a>
            </div>
          </div>
        </div>
        <div class=" col-12 col-md-12 col-lg-4 ">
          <div class=" card bg-dark zoom-card" style="margin-top: -20px;">
            <img src="img/mesomorfo1.png" class="card-img-top" alt="">
            <div class="card-body text-white d-flex flex-column justify-content-end">
              <h3 class="card-title" style="text-align: center;">Mesomorfo</h3>
              <p class="lead" style="text-align: center;">O mesomorfo exibe músculos bem desenvolvidos, facilidade para ganhar massa e boa proporção corporal</p>
              <a href="/login?action=biotipo" class="btn btn-custom-color custom-button fw-semibold " style="color: white; text-align: center;">Fazer o teste</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card bg-dark zoom-card">
            <img src="img/endomorfo1.png" class="card-img-top" alt="">
            <div class="card-body text-white d-flex flex-column justify-content-end">
              <h3 class="card-title" style="text-align: center;">Endomorfo</h3>
              <p class="lead" style="text-align: center;">
                O endomorfo tende a acumular mais gordura, possui estrutura corporal arredondada e metabolismo mais lento.</p>
                <a href="/login?action=biotipo" class="btn btn-custom-color custom-button fw-semibold " style="color: white; text-align: center;">Fazer o teste</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about-section-padding mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
          <div class="about-img">
            <img src="img/boxe.png" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
          <div class="about-text " style="text-align: center;">
            <h2 style="color: white; border-radius: 10px;" class="fw-semibold rounded-text">
              Diversos treinos na palma da sua mão
            </h2>
            <p style="color: white; font-size: 20px;">Acesso a uma alta gama de treinos no seu celular, colocando sua jornada fitness literalmente em suas mãos. Seu dispositivo se transforma em um guia versátil para alcançar seus objetivos de saúde onde quer que você esteja</p>
            <div class="text-center">
              <a href="#" class="btn btn-custom-color custom-button fw-semibold " style="color: white; text-align: center;">Treinar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="card bg-black text-white">
    <div class="mx-auto">
      <img src="img/tenis.png" alt="Imagem" class="card-img w-100" style="max-height: 750px; max-width: 1200;">
      <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
        <h4 class="card-title" style="color: white; border-radius: 10px;font-size: 48px;" class="fw-semibold rounded-text">Conheça nosso blog</h4>
        <h5 class="card-title" style="color: white; border-radius: 10px;font-size: 38px; " class="fw-semibold rounded-text">E venha exercitar-se conosco</h5>
        <a href="https://fullbodyproject.blogspot.com/" class="btn btn-custom-color custom-button fw-semibold mt-3" style="color: white">Acessar</a>
      </div>
    </div>
  </div>
  <footer class="bg-dark p-2 text-center">
    <div class="container">
      <p class="text-white">All Right Reserved By FullBody</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>



</html>