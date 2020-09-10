<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <?php include 'header.html'; ?>

    <!-- Carousel CSS -->
    <link href="/css/carousel.css" rel="stylesheet">

    <style>
    </style>
  </head>
  <body>
    
    <?php include 'menu.html'; ?>





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

    <?php include 'footer.html'; ?>

  </body>
</html>