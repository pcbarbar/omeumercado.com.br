<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <!-- Custom do Parceiro -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/9c8d73ada2.js" crossorigin="anonymous"></script>

    <!-- Carousel CSS -->
    <link href="/css/carousel.css" rel="stylesheet">

    <!--Ícone da Página-->
    <link rel="shortcut icon" href="/imagens/omeumercado.ico">

    <!-- Título -->
    <title>OMeuMercado.com.br</title>
    <style>
    </style>
  </head>
  <body>
    

<!-- PRIMEIRO NAVBAR - INICIO -->
    <nav class="navbar navbar-expand-xl border mynav1">
      <div class="container">      
      <a class="navbar-brand" href="index.php" style="border-bottom: 0;"><img src="imagens/logotipoparceiro.png"></a>
        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSite"><i class="fas fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarSite">
          <ul class="navbar-nav mr-auto">
            <form class="form-inline ml-1">
              <input class="form-control rounded-pill"  style="width: 385px;" type="text" placeholder="Buscar produtos...">
              <button class="btn" type="submit"><a href="#" style="color: #ffffff; border-bottom: 0;"><i class="fas fa-search"></i></a></button>
            </form>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#">Cadastrar</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Entrar</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Minha Lista</a></li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#" style="border-bottom: 0;"><h2><i class="fas fa-shopping-cart"></i></h2></a></li>
          </ul>
        </div>
      </div>
    </nav>
<!-- PRIMEIRO NAVBAR - FINAL -->


<!-- SEGUNDO NAVBAR - INICIO -->
<nav class="navbar navbar-expand-xl mynav2">
      <div class="container mr-0">
        <div class="collapse navbar-collapse" id="navbarSite">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Olá Cliente!</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Social</a>
              <div class="dropdown-menu navdrop2">
                <a class="dropdown-item navitem2" href="#"><i class="fab fa-facebook"> Facebook</i></a>
                <a class="dropdown-item navitem2" href="#"><i class="fab fa-instagram"> Instagram</i></a>
                <a class="dropdown-item navitem2" href="#"><i class="fab fa-youtube"> Youtube</i></a>
              </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#modalnavbar">Precisa de Ajuda?</a></li>
          </ul>
        </div>
      </div>
    </nav>
<!-- SEGUNDO NAVBAR - FINAL -->



<!-- 
  Mínimo 3 níveis (bom para compras por impulso, ficar mostrando os produtos relacionados)
  Departamento; Categoria; Subcategoria; Segmento e subsegmento
  ex.
  Alimento - Biscoito - Doce - Recheado - Chocolate

-->

<!-- TERCEIRO NAVBAR - INICIO -->
    <nav class="navbar navbar-expand-xl mynav3">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSite">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Categorias</a>
              <div class="dropdown-menu navdrop3">
                <a class="dropdown-item navitem3" href="#">Alimentos</a>
                <a class="dropdown-item navitem3" href="#">Hortifruti</a>
                <a class="dropdown-item navitem3" href="#">Adega e Bebidas</a>
                <a class="dropdown-item navitem3" href="#">Congelados</a>
                <a class="dropdown-item navitem3" href="#">Frios e Laticínios</a>
                <a class="dropdown-item navitem3" href="#">Carnes</a>
                <a class="dropdown-item navitem3" href="#">Padaria</a>
                <a class="dropdown-item navitem3" href="#">Higiene e Perfumaria</a>
                <a class="dropdown-item navitem3" href="#">Material de Limpeza</a>
                <a class="dropdown-item navitem3" href="#">PetShop</a>

                <a class="nav-item dropdown">
              <a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Outra coisa</a>
              <div class="dropdown-menu navdrop3">

                <a class="dropdown-item navitem3" href="#">Utilidades</a>
              </div>
              </a>



              </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Produtos em Oferta</a></li>
            <li class="nav-item"><a class="nav-link" href="#"><em>Minhas Receitas!</em></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Atendimento ao Cliente</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Só mais uma coisa</a></li>
          </ul>
        </div>
      </div>
    </nav>
<!-- TERCEIRO NAVBAR - FINAL -->







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
<p class="margem-superior-60">Colocar restante da página inicial</p>
<p class="margem-superior-60">Colocar restante da página inicial</p>
<p class="margem-superior-60">Colocar restante da página inicial</p>
<p class="margem-superior-60">Colocar restante da página inicial</p>

<!-- FOOTER PADRÃO PARA PLATAFORMA -->
    <footer class="py-2 margem-superior-60" style="background-color: #000033;">
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