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
      <div class="container linhadepar w-25 ml-0 mb-5">
        <h2 class="text-dark">Departamentos</h2>
      </div>
    </div>

<!-- CARDS DE DEPARTAMENTOS - INICIO -->

    <div class="container carddepart border">
      <div class="row mx-auto">

        <div class="col-4 col-sm-4 col-lg-3 col-xl-2 mx-auto">
          <div class="card" style="width: 150px; height: 230px;">
            <a href="#"><img  class="card-img-top" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-lg-3 col-xl-2 mx-auto">
          <div class="card" style="width: 150px; height: 230px;">
            <a href="#"><img  class="card-img-top" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-lg-3 col-xl-2 mx-auto">
          <div class="card" style="width: 150px; height: 230px;">
            <a href="#"><img  class="card-img-top" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-lg-3 col-xl-2 mx-auto">
          <div class="card" style="width: 150px; height: 230px;">
            <a href="#"><img  class="card-img-top" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-lg-3 col-xl-2 mx-auto">
          <div class="card" style="width: 150px; height: 230px;">
            <a href="#"><img  class="card-img-top" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-lg-3 col-xl-2 mx-auto">
          <div class="card" style="width: 150px; height: 230px;">
            <a href="#"><img  class="card-img-top" src="imagens/depart1.jpg"></a>
          </div>
        </div>
      </div>  

      
      <hr class="mt-3 mb-3">
        
      
      <div class="row mx-auto">
        <div class="col-4 col-sm-4 col-lg-3 col-xl-2">
          <div class="card" style="width: 150px; height: 230px;">
            <a href="#"><img  class="card-img-top" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-lg-3 col-xl-2">
          <div class="card" style="width: 150px; height: 230px;">
            <a href="#"><img  class="card-img-top" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-lg-3 col-xl-2">
          <div class="card" style="width: 150px; height: 230px;">
            <a href="#"><img  class="card-img-top" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-lg-3 col-xl-2">
          <div class="card" style="width: 150px; height: 230px;">
            <a href="#"><img  class="card-img-top" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-lg-3 col-xl-2">
          <div class="card" style="width: 150px; height: 230px;">
            <a href="#"><img  class="card-img-top" src="imagens/depart1.jpg"></a>
          </div>
        </div>
        <div class="col-4 col-sm-4 col-lg-3 col-xl-2">
          <div class="card" style="width: 150px; height: 230px;">
            <a href="#"><img  class="card-img-top" src="imagens/depart1.jpg"></a>
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






<!-- CAROUSEL - MARCAS - INICIO -->
    <div class="container mt-5">
      <div class="container linhadepar w-50 ml-0 mb-5">
        <h2 class="text-dark">Marcas Favoritas</h2>
      </div>
    </div>

    <div class="container pl-0 pr-0 mr-auto">
      <div id="marcas" class="carousel slide" data-ride="carousel">
      <!-- The slideshow -->
      <div class="carousel-inner" style="padding-left: 0px; padding-right: 0px;">
        <div class="carousel-item active">
          <div class="marca" style="margin-left: 120px;">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="/index.php" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="/index.php" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="/index.php" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="/index.php" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>


        </div>
        <div class="carousel-item" style="margin-left: 115px;">
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
          <div class="marca">
            <a href="#" onclick=abc(this) class="slider_info">
              <img class="" src="imagens/marcas_favoritas/gillette.png" style="width: 5rem;">
            </a>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#marcas" data-slide="prev">
        <h1><i class="text-danger fa fa-arrow-alt-circle-left"></i></h4>
      </a>
      <a class="carousel-control-next" href="#marcas" data-slide="next">
        <h1><i class="text-danger fa fa-arrow-alt-circle-right"></i></h1>
      </a>
    </div>
  </div>
<!-- CAROUSEL - MARCAS - FINAL -->


<!-- MINHA LISTA DE PRODUTOS - INICIO -->

    <div class="container mt-5">
      <div class="container linhadepar w-75 ml-0 mb-5">
        <h2 class="text-dark"><i class="fas fa-list-alt"></i> Minha Lista</h2>
      </div>
    </div>

    <div class="container rounded cardprod" >
      <div class="row">

        <div class="col-xl-3 pr-0 pl-0 mx-auto mt-3">
          <div class="card rounded mx-auto pt-2 pr-2 pl-2" style="width: 17.2rem;">
            <span class="card-notify-oferta"><i class="fa fa-tag"></i> OFERTA</span>
            <a type="button" class="btn-minhalista" href="#"><i class="far fa-list-alt"></i></a>  
            <!-- Se já estiver na minha lista | fas fa-list-alt -->
            <a href="produto.php">
              <img class="card-img-top" style="max-height: 16.05rem;" src="imagens/wella.png">
              <hr class="mb-3 mt-0">
              <!--Se houver desconto -->
              <span class="text-secondary ml-2" style="font-size: 11px;"><del>R$ 23,99</del></span>
              <!---->
              <div class="row">
                <div class="col mb-1">
                  <span class="text-dark"><strong>R$ 20,39</strong></span>
                </div>
                <div class="col">
                  <!--Se houver desconto calcular -->
                  <span class="text-success align-top" style="font-size: 12px;">15% OFF</span>
                </div>
              </div>
              <span class="card-desc mt-2">Kit Wella Professionals Invigo Color Brilliance</span>
              <span class="text-secondary" style="font-size: 12px;"> ─ Wella</span>
            </a>
            <div class="row mt-3 mb-3 mr-0 ml-0">
              <div class="col-3 pl-0 pr-0">
                <form>
                  <input class="form-control w-100 text-dark" value="1" type="number" name="qtd" style="border-color: #ffc107;">
                </form>
              </div>
              <div class="col-7 pl-1 pr-1">
                <a href="#"><button type="button" class="btn btn-warning w-100"><spam style="font-size: 14px;">Carrinho </spam><i class="fa fa-shopping-cart"></i></button></a>
              </div>
              <div class="col-2  pl-0 pr-0">
                <a href="produto.php"><button type="button" class="btn btn-warning w-100"><i class="fas fa-eye"></i></button></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-xl-3 pr-0 pl-0 mx-auto mt-3">
          <div class="card mx-auto pt-2 pr-2 pl-2" style="width: 17.2rem;">
            <a class="text-center" href="#">
              <img class="card-img-top" style="max-height: 16.05rem;" src="imagens/lamen.png">
              <hr>
              <h6 class="card-title">Carnes, Aves e Peixes</h6>
            </a>
          </div>
        </div>


        <div class="col-xl-3 pr-0 pl-0 mx-auto mt-3">
          <div class="card mx-auto pt-2 pr-2 pl-2" style="width: 17.2rem;">
            <a class="text-center" href="#">
              <img class="card-img-top" style="max-height: 16.05rem;" src="imagens/arroz.png">
              <hr>
              <h6 class="card-title">Carnes, Aves e Peixes</h6>
            </a>
          </div>
        </div>
      </div>
    </div>
<!-- MINHA LISTA DE PRODUTOS - FINAL -->    

    <br><br><br><br><br><br><br>


    <?php include 'templates/footer.html'; ?>

  </body>
</html>