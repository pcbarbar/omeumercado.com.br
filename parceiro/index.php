<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <?php include 'templates/header.html'; ?>

    <!-- Carousel CSS -->
    <link rel="stylesheet" href="/css/carousel.css">

    <style>

    </style>
  </head>
  <body>

    <?php include 'templates/menu.html'; ?>

    <!-- CAROUSEL - INICIO -->
    <div class="container shadow pr-0 pl-0">
      <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
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
    </div>
<!-- CAROUSEL - FINAL -->

    <div class="container mt-5">
      <div class="container linhadepar w-25 ml-0 mb-4">
        <h2 class="text-dark">Departamentos</h2>
      </div>
    </div>

<!-- CARDS DE DEPARTAMENTOS - INICIO -->

    <div class="container carddepart">
      <div class="row mx-auto">

        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <div class="card mr-1 ml-1">
            <a href="#"><img  class="carddepart-img" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <div class="card mr-1 ml-1">
            <a href="#"><img  class="carddepart-img" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <div class="card mr-1 ml-1">
            <a href="#"><img  class="carddepart-img" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <div class="card mr-1 ml-1">
            <a href="#"><img  class="carddepart-img" src="imagens/depart4.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <div class="card mr-1 ml-1">
            <a href="#"><img  class="carddepart-img" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <div class="card mr-1 ml-1">
            <a href="#"><img  class="carddepart-img" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 mt-3">
          <div class="card mr-1 ml-1">
            <a href="#"><img  class="carddepart-img" src="imagens/depart7.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 mt-3">
          <div class="card mr-1 ml-1">
            <a href="#"><img  class="carddepart-img" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 mt-3">
          <div class="card mr-1 ml-1">
            <a href="#"><img  class="carddepart-img" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 mt-3">
          <div class="card mr-1 ml-1">
            <a href="#"><img  class="carddepart-img" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 mt-3">
          <div class="card mr-1 ml-1">
            <a href="#"><img  class="carddepart-img" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 mt-3">
          <div class="card mr-1 ml-1">
            <a href="#"><img  class="carddepart-img" src="imagens/depart1.jpg"></a>
          </div>
        </div>
      </div>
    </div>
<!-- CARDS DE DEPARTAMENTOS - FINAL -->


<!-- 
  Mínimo 3 níveis (bom para compras por impulso, ficar mostrando os produtos relacionados)
  Departamento; Categoria; Subcategoria; Segmento e subsegmento
  ex.
  Alimento - Biscoito - Doce - Recheado - Chocolate
-->





<div class="container mt-5">
      <div class="container linhadepar w-75 ml-0 mt-3 mb-4">
        <h2 class="text-dark"><i class="fas fa-list-alt"></i> Minha Lista</h2>
      </div>
    </div>

    
<!-- MINHA LISTA DE PRODUTOS - INICIO -->
    <div class="container rounded cardprod">
      <div class="row">
        <?php include 'templates/prodcard.php'; ?>
        <?php include 'templates/prodcard.php'; ?>
        <?php include 'templates/prodcard.php'; ?>
        <?php include 'templates/prodcard.php'; ?>
        <?php include 'templates/prodcard.php'; ?>
        <?php include 'templates/prodcard.php'; ?>
        <?php include 'templates/prodcard.php'; ?>
        <?php include 'templates/prodcard.php'; ?>
      </div>
    </div>
<!-- MINHA LISTA DE PRODUTOS - FINAL -->    

    <br><br><br><br><br><br><br>


    <?php include 'templates/footer.html'; ?>

  </body>
</html>