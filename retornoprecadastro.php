<?php
session_start();
?>
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
    <link rel="stylesheet" href="css/style.css">

    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/9c8d73ada2.js" crossorigin="anonymous"></script>

    <!--Ícone da Página-->
    <link rel="shortcut icon" href="imagens/omeumercado.ico">

    <!-- Título -->
    <title>OMeuMercado.com.br</title>

    <style>
      .bordergreen {
          border: 2px solid green !important;
          margin-top: 100px;
          padding-top: 50px;
          padding-bottom: 50px;
          padding-left: 20px;
          padding-right: 20px;
      }
      .textogreen {
        color: green;
      }
      .borderyellow {
          border: 2px solid #ffcc00 !important;
          margin-top: 100px;
          padding-top: 50px;
          padding-bottom: 50px;
          padding-left: 20px;
          padding-right: 20px;
      }
      .textoyellow {
        color: #ffcc00;
      }
      .borderred {
          border: 2px solid red !important;
          margin-top: 100px;
          padding-top: 50px;
          padding-bottom: 50px;
          padding-left: 20px;
          padding-right: 20px;
      }
      .textored {
        color: red;
      }
      .big-banner {
        background-image: url("/imagens/bg_retornoprecadastro.jpg");
        background-repeat: repeat;
        background-size: 20%;
      }
    </style>

  </head>
  <body>

  <!-- PRIMEIRO NAVBAR - INICIO -->
    <nav class="navbar navbar-expand-xl mynavblue border">
      <div class="container">      
      <a class="navbar-brand" href="index.php" style="border-bottom: 0;"><img class="img-fluid" src="imagens/logoomeumercado90.png"></a>
        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSite">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSite">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="sobre.html">Sobre</a></li>
            <li class="nav-item"><a class="nav-link" href="loginparceiro.php"><i class="fas fa-lock"></i> Área do Parceiro</a></li>
            <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
            <li class="nav-item"><a class="nav-link" href="#" style="border-bottom: 0;"><i class="fab fa-facebook"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#" style="border-bottom: 0;"><i class="fab fa-instagram"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#" style="border-bottom: 0;"><i class="fab fa-youtube"></i></a></li>
            <div class="efeitobtn" style="margin-top: 0px;">
              <li class="nav-item"><a class="nav-link" href="buscaparceiro.php">Quero fazer compras <i class="fab fa-opencart"></i></a></li>
            </div>
          </ul>
        </div>
      </div>
    </nav>
<!-- PRIMEIRO NAVBAR - FINAL -->

<!-- SEGUNDO NAVBAR - INICIO -->
    <nav class="navbar navbar-expand-xl mynavblack">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSite">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="saibamais.html">Saiba mais</a></li>
            <li class="nav-item"><a class="nav-link" href="vdexplica.html">Vídeos Explicativos</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Exemplo do seu E-Commerce</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Olá Cliente!</a></li>
            <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#modalnavbar">Precisa de Ajuda?</a></li>
          </ul>
        </div>
      </div>
    </nav>
<!-- SEGUNDO NAVBAR - FINAL -->


<!-- MODAL PRECISA DE AJUDA? NAVBAR - INICIO -->
      <div class="modal fade" id="modalnavbar" tabindex="-1" role="dialog" aria-labelledby="ModalNavBar" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalNavBar">Precisa de Ajuda com o Menu?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>- Logotipo OMEUMERCADO, esteja onde estiver clicando no logo você retorna para página principal;</p>
            <p>- Sobre, é a idéia geral sobre seu OMeuMercado, algumas explicações, história, missão e valores;</p>
            <p>- Área do Parceiro, é uma área exclusiva para o Parceiro cadastrado fazer a administração do seu MarketPlace, também disponível no próprio local;</p>
            <p>- Contato, é onde você pode enviar um formuálio com dúvidas, sugestões e também onde encontrar nossos telefones e emails para você poder falar conosco;</p>
            <p>- Ícones de Facebook, Instagram e Youtube são nossos canais sociais, entre lá e siga-nos, deixe mensagens e compartilhe nossas publicações;</>
            <p>- Botão Quero fazer compras, é onde o cliente amigo pode procurar um estabelecimento credenciado (Parceiro) para fazer compras;</p>
            <p>- Saiba mais, são explicações, funcionalidades, ...</p>
            <p>- Vídeos Explicativos, decidimos incorporar vídeos explicativos pois são mais elucidativos, práticos, e de forma geral rápidos para o entendimento de como funciona a Plataforma OMeuMercado;</p>
            <p>- Exemplo do seu E-Commerce, entre e saiba com este exemplo como ficaria se negócio on-line, não se preocupe ele será customizado para atender suas necessidades;</p>
            <p>- FAQ, são perguntas frequentes já respondidas, talvez a resposta para sua dúvida já esteja aqui;</p>
            <p>- Precisa de Ajuda?, este link você encontrará em vários lugares no website e poderá solucionar sua dúvida, como este aqui!</p>
            <h6>Obrigado por estar conosco!</h6>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
<!-- MODAL PRECISA DE AJUDA? NAVBAR - FINAL -->


<!-- PRÉ CADASTRO COM SUCESSO OU NÃO, VINDO DE VALIDAPRECADASTRO.PHP | MODELO NÃO APAGAR-->
    <div class="container shadow rounded bordergreen big-banner">
      <h2 class="text-left"><i class="far fa-check-circle textogreen"></i> Pedido de cadastro</h2>
      <hr>
      <h5 class="'text-left font-weight-light">Acesse o email enviado com as informações necessárias para o endereço <strong>variavel@validaprecadastro.com</strong> para validar seu registro e dar continuidade ao seu pedido de cadastro. Caso não encontre, tente mais tarde ou procure na caixa de spam/lixo eletrônico. Obrigado por se cadastrar!</h5>
    </div>
<!-- PRÉ CADASTRO COM SUCESSO OU NÃO, VINDO DE VALIDAPRECADASTRO.PHP -->


      <!--
      <phpphp
        if(isset($_SESSION["retornovalidacao"])){
          echo $_SESSION["retornovalidacao"];
          unset($_SESSION["retornovalidacao"]);
        }
      ?>-->      



<!-- FOOTER PADRÃO PARA PLATAFORMA -- INÍCIO -->
    <footer class="py-2 fixed-bottom" style="background-color: #1d2c57;">
      <div class="container">
        <div class="row" style="margin-top: 10px;">
          <div class="col">
            <h6 class="text-left"><a href="index.php" style="color: #ffffff; text-decoration: none;">OMEUMERCADO.COM.BR</a></h6>
          </div>
          <div class="col">
            <p class="text-right" style="color: #ffffff; font-size: 12px;">Copyright © 2020 omeumercado.com.br</p>
          </div>
        </div>
      </div>
    </footer>
<!-- FOOTER PADRÃO PARA PLATAFORMA -- FINAL -->


<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <!-- jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- Boostrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    

  </body>
</html>