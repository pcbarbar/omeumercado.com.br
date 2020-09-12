<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <?php include 'templates/header.html'; ?>

    <!-- Carousel CSS -->
    <link href="/css/carousel.css" rel="stylesheet">

    <style>
    </style>
  </head>
  <body>

<!-- PRIMEIRO NAVBAR - INICIO -->
    <nav class="navbar navbar-icon-top navbar-expand-xl border mynav1">
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
            <li class="nav-item"><a class="nav-link" href="#" style="border-bottom: 0;"><i class="fa fa-shopping-cart"><span class="badge badge-danger">999</span></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
<!-- PRIMEIRO NAVBAR - FINAL -->

    <?php include 'templates/menu.html'; ?>




<!-- 
  Mínimo 3 níveis (bom para compras por impulso, ficar mostrando os produtos relacionados)
  Departamento; Categoria; Subcategoria; Segmento e subsegmento
  ex.
  Alimento - Biscoito - Doce - Recheado - Chocolate

-->




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



    <?php include 'templates/footer.html'; ?>

  </body>
</html>