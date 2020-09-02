<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/9c8d73ada2.js" crossorigin="anonymous"></script>

    <!-- Carousel CSS -->
    <link href="/css/carousel.css" rel="stylesheet">

    <!-- Título -->
    <title>OMeuMercado.com.br</title>
    <style>
      body{
        background-color: #dcdcdc;
      }
      .form-control:focus{
        border-color:#191647;
        box-shadow: 0 0 0 0.1rem rgba(25,22,71,.25);
      }
      .nav-link {
        color: #ffffff;
      }
    </style>
  </head>
  <body>
    
<!-- PRIMEIRO NAVBAR - INICIO -->
    
    <nav class="navbar navbar-expand-lg pt-0 py-0" style="background-color: #000033">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="imagens/logotipoparceiro.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSite">
          <ul class="navbar-nav mr-auto">
            <form class="form-inline my-md-0 ml-1 mr-3">
              <input class="form-control rounded-pill" type="text" placeholder="Buscar produtos...">
              <button class="btn" type="submit"><a href="#" style="color: #ffffff;"><i class="fas fa-search"></i></a></button>
            </form>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#">Cadastrar</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Entrar</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Minha Lista</a></li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#"><h2><i class="fas fa-shopping-cart"></i></h2></a></li>
          </ul>



          </ul>
        </div>
      </div>
    </nav>
<!-- PRIMEIRO NAVBAR - FINAL -->

<!-- SEGUNDO NAVBAR - INICIO -->
    <nav class="navbar navbar-expand-lg pt-0 py-0" style="background-color: #191647; font-size: 14px;">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSite">
          <ul class="navbar-nav mr-center">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Categorias</a>
              <div class="dropdown-menu" style="font-size: 14px;">
                <a class="dropdown-item" href="#">Alimentos</a>
                <a class="dropdown-item" href="#">Bebidas</a>
                <a class="dropdown-item" href="#">Congelados</a>
                <a class="dropdown-item" href="#">Açougue</a>
              </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Produtos em Oferta</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Ver Produtos da Minha Lista</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Atendimento ao Cliente</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Só mais uma coisa</a></li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#">Contato <i class="fas fa-phone"></i></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Social</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fab fa-facebook"> Facebook</i></a>
                <a class="dropdown-item" href="#"><i class="fab fa-instagram"> Instagram</i></a>
                <a class="dropdown-item" href="#"><i class="fab fa-youtube"> Youtube</i></a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- SEGUNDO NAVBAR - FINAL -->

<!-- CAROUSEL - INICIO -->
  
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="imagens/banner1.jpg">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="imagens/banner2.jpg">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="imagens/banner3.jpg">
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
<!-- CAROUSEL - FINAL -->
  
<p class="margem-superior-60">Colocar restante da página inicial</p>

<!-- FOOTER PADRÃO PARA PLATAFORMA -->
    <footer class="py-2 fixed-bottom margem-superior-60" style="background-color: #181174;">
      <div class="container">
        <div class="row" style="margin-top: 10px;">
          <div class="col">
            <h6 class="text-left"><a href="/index.php" style="color: #ffffff; text-decoration: none;">OMEUMERCADO.COM.BR</a></h6>
          </div>
          <div class="col">
            <p class="text-right" style="color: #ffffff; font-size: 12px;">Copyright © 2020 omeumercado.com.br</p>
          </div>
        </div>
      </div>
    </footer>

    
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="/js/form-validation.js"></script>
  </body>
</html>