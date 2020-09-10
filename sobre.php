<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/9c8d73ada2.js" crossorigin="anonymous"></script>

    <!-- Carousel CSS -->
    <link href="css/carousel.css" rel="stylesheet">

        <!--Ícone da Página-->
    <link rel="shortcut icon" href="imagens/omeumercado.ico">
    
    <!-- Título -->
    <title>OMeuMercado.com.br</title>
    <style>
      /* IMAGEM DE FUNDO PARA O FAQ*/
        .bg-sobre {
        background-image: url("imagens/bg_sobre.jpg");
        background-repeat: repeat;
        background-size: 30%;
      }

      /* IMAGEM DE FUNDO PARA O CONTAINER SOBRE*/
        .big-banner {
        background-image: url("imagens/bg_sobre_video.jpg");
        background-repeat: no-repeat;
        /*background-position: center;*/
        background-size: 100%;
      }
    </style>
  </head>
  <body>

    <?php include 'menu.html'; ?>

    <div class="container-fluid rounded shadow pr-5 pl-5 bg-sobre" style="width: 95%; margin-top: 20px;">
      <div class="conatiner bg-white">
        <div class="row pt-5 pl-5 pb-5 pr-5">
          <div class="col-sm-8">
            <h1 class="h1responsiva" style="font-weight: 300;">Sobre OMeuMercado</h1>
            <h5 class="h5responsiva" style="font-weight: 300;"><br>Consiste em uma Plataforma de vendas on-line para mercados, armazéns, padarias, petshops e outros comercios que façam vendas de produtos finais e surgiu da necessidade de realizar compras corriqueiras de mercado sem a necessidade de sair de casa, em tempos de pandemia de COVID-19 isto é primordial para segurança e quando isto passar e vai passar, a facilidade falará mais alto, tendo em vista a versatilidade, rapidez, segurança, conforto e outros atributos que este aplicativo pode se tornar, até oferendo trabalhos indiretos com entregas de produtos e mercados sem corredores.</h5>
          </div>
          <div class="col-sm-4">
            <div class="text-center"><img class="mt-5 img-fluid" src="imagens/sobre_desenho.png"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid rounded shadow bg-white" style="width: 95%; margin-top: 30px;">
      <div class="row pt-5 pr-5 pb-5">
        <div class="col-sm-6">
          <div class="text-center"><img class="mt-5 img-fluid" src="imagens/sobre_desenho2.jpg"></div>
        </div>
        <div class="col-sm-6">
          <h1 class="h1responsiva-thin">Mais Sobre OMeuMercado</h1>
          <h5 class="h5responsiva-thin"><br>O <strong>Parceiro</strong> é o estabelecimento onde o <strong>Cliente</strong> faz as compras e a <strong>Plataforma do OMeuMercado</strong> é a integração do conjunto: onde vários Clientes podem comprar em vários Parceiros, mas cada um tem o seu próprio <em>Marketplace</em>, que é onde os Clientes fazem as compras efetivamente, ou seja, é o local onde funciona o estabelecimento virtual de cada Parceiro.</h5><h5 class="h5responsiva-thin"> Na Plataforma do OMeuMercado é onde o Parceiro faz seu pré-cadastro como também pode fazer um Cliente, e onde este terá a possibilidade de procurar o Parceiro que desejar.</h5><h5 class="h5responsiva-thin"> Quando o Cliente acessa o Marketplace do Parceiro, ele terá a tranquilidade de fazer compras onde estiver e quando quiser podendo colocar suas compras em um carrinho ou lista de compras e encerrar depois se desejar, tendo vários tipos de meios de pagamentos e podendo escolher o horário da entrega de acordo com o tempo de cada Parceiro, e por outro lado este terá o prazo que lhe convier para separar os produtos e fazer as entregas no prazo combinado, lembrando que o Marketplace fica aberto 24hs. todos os dias.</h5><h5 class="h5responsiva-thin"> Assista o vídeo abaixo sobre Marketplace, e se estiver pronto para se cadastrar, seja parceiro ou cliente, basta <a class="text-warning" style="text-decoration: none;" href="index.php">clicar aqui. </a>E obrigado por estar conosco, sua presença é muito importante!</h5>
        </div>
      </div>
    </div>

    <div class="container-fluid big-banner rounded shadow" style="width: 90%; margin-top: 30px;">
      <div class="row pt-3 pb-3 pl-3 pr-3">
        <div class="col-sm-8">
        </div>
        <div class="col-sm-4">
          <div class="embed-responsive embed-responsive-16by9 shadow">
            <iframe class="embed-responsive-item rounded border" src="https://www.youtube.com/embed/zvNSL-Uecpg" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <?php include 'footer.html'; ?>

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <!-- jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- Boostrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>