<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <?php include 'templates/header.html'; ?>

    <!-- Carousel CSS -->
    <link href="css/carousel.css" rel="stylesheet">

    <style>
      /* EFEITO PARALLAX - INDEX */
      .parallaximg {
        background-image: url("imagens/bg_index.jpg");
        background-position: center top;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: #ffffff;
        padding-top: 250px;
        padding-bottom: 250;
      }
    </style>
  </head>
  <body>

    <?php include 'templates/menu.html'; ?>

<!-- EFEITO PARALLAX NA IMAGEM DE BACKGROUND - INÍCIO -->
    <section class="parallaximg">
        <div class="container pb-5">
          <div class="row">
            <div class="col-xs-12">
              <h1 class="text-center h1responsiva">Seja muito bem vindo! Você está no OMeuMercado</h1>
              <h5 class="text-center h5responsiva-thin">A maior plataforma de vendas gratuita para Mercados, Armazéns, Frutarias, Padarias, Petshops...</h5>
            </div>
          </div>
        </div>
      </section>
<!-- EFEITO PARALLAX NA IMAGEM DE BACKGROUND - FINAL -->


<!-- PARA USAR OS ÍCONES -->    
    <div class="invisible">
      <a href="https://icons8.com/icon/44027/money-bag">Money Bag icon by Icons8</a>
      <a href="https://icons8.com/icon/77111/online-store">Online Store icon by Icons8</a>
      <a href="https://icons8.com/icon/114458/business-building">Business Building icon by Icons8</a>
      <a href="https://icons8.com/icon/46086/move-stock">Move Stock icon by Icons8</a>
    </div>

<!-- 4 CARDS ---- INÍCIO -->
    <div class="container-fluid" style="width: 98%;" id="saibamais">
      <div class="row">
        <div class="col-sm-3">
          <div class="card shadow rounded pb-4 pt-4 pr-4 pl-4">
            <div class="text-center"><img src="https://img.icons8.com/nolan/96/money-bag.png"></div>
            <p class="text-center"><br>Parceiro, este é uma plataforma diferente: você não paga implantação, mensalidade, implementações, suporte, treinamentos, no OMeuMercado você paga apenas uma pequena colaboração quando vender. Ainda não se casdastrou? Então dê esse primeiro passo, torne-se nosso parceiro e começe as suas vendas on-line agora!</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card shadow rounded pb-4 pt-4 pr-4 pl-4">
            <div class="text-center"><img src="https://img.icons8.com/nolan/96/online-store.png"/></div>
            <p class="text-center"><br>Com a implantação das vendas on-line do OMeuMercado, você perceberá nosso difencial pois além de proporcionar a você um aumento considerável nas vendas também daremos suporte, incentivos e descontos para seus clientes por nossa conta, o cliente é a alma do negócio, mas também o gestor, conosco estará completo! Esperando o que para se cadastrar?</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card shadow rounded pb-4 pt-4 pr-4 pl-4">
            <div class="text-center"><img src="https://img.icons8.com/nolan/96/move-stock.png"/></div>
            <p class="text-center"><br>Estoque, entregas, pagamentos, enfim tudo que se relaciona com vendas OMeuMercado disponibiliza de forma prática para você poder visualizar tudo sem perda de tempo, temos soluções para melhorar sua logística fazendo assim uma obtenção maior de lucro com as vendas, pensamos sempre em você. Não fique de fora, comece a vender on-line já, cadastre-se!</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card shadow rounded pb-4 pt-4 pr-4 pl-4">
            <div class="text-center"><img src="https://img.icons8.com/nolan/96/client-company.png"/></div>
            <p class="text-center"><br>Pensando em como será tudo isso funcionando? Nossa plataforma de vendas é intuitiva, tanto para você, como para seu cliente! É tudo bem parecido com o que já faz, só que melhor, e lembra daquele consumidor do outro bairro? Ele poderá facilmente ser seu cliente e fazer compras com você agora, pense nisso! Se já estiver pronto para ver como é, basta se cadastrar!</p>
          </div>
        </div>
      </div>
    </div>
  <!-- 4 CARDS ---- FINAL -->

<!-- CAROUSEL 6 BANNERS - INICIO -->
    <div class="container-fluid margem-superior-30" style="width: 90%;">
      <div id="myCarousel" class="carousel slide shadow" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="imagens/demobanner1.jpg">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imagens/demobanner2.jpg">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imagens/demobanner3.jpg">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imagens/demobanner4.jpg">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imagens/demobanner5.jpg">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imagens/demobanner6.jpg">
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
<!-- CAROUSEL 6 BANNERS - FINAL -->    


<!-- TEXTO PARA SE CADASTRAR ---- INÍCIO -->
    <div class="container margem-superior-60">
      <h1 class="h1responsiva"><strong><i class="fas fa-arrow-right"></i> Tudo pronto para começar?</strong></h1>
      <h4 class="mt-3 font-weight-normal text-warning col-8 text-center h4responsiva"><strong> CADASTRE-SE AGORA! <a class="text-warning" style="text-decoration: none;" href="cadastrar.php">CLIQUE AQUI!</a></strong></h4>
    </div>
<!-- TEXTO PARA SE CADASTRAR ---- FINAL -->

    <?php include 'templates/footer.html'; ?>

  </body>
</html>