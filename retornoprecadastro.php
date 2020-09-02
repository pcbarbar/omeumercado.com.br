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

    <link rel="stylesheet" href="css/pulse.css">

    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/9c8d73ada2.js" crossorigin="anonymous"></script>

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
        background-image: url("/imagens/retornoemail.jpg");
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: 100%;
      }
    </style>

  </head>
  <body>
    
    <!-- PRIMEIRO NAVBAR - INICIO -->
      <nav class="navbar navbar-expand-xl mynavblue">
        <div class="container center">
          <a class="navbar-brand" href="index.php"><img src="imagens/omeumercado.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <i class="fas fa-bars"></i>
          </button>
          
            <div class="collapse navbar-collapse" id="navbarSite">
              <ul class="navbar-nav ml-4">
                <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
                <li class="nav-item active"><a class="nav-link" href="loginparceiro.php"><i class="fas fa-lock"></i> Área do Parceiro</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-youtube"></i></a></li>
              </ul>
              <div class="mrt">
                <ul>
                  <li class="nav-item"><a class="nav-link" href="buscaparceiro.php">Quero fazer compras <i class="fab fa-opencart"></i></a></li>
                </ul>
              </div>
            
          </div>
        </div>
      </nav>
<!-- PRIMEIRO NAVBAR - FINAL -->

<!-- SEGUNDO NAVBAR - INICIO -->
      <nav class="navbar navbar-expand-xl shadow mynavblack">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarSite">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a class="nav-link" href="#">Saiba mais</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Quem somos</a></li>
              <li class="nav-item"><a class="nav-link" href="loginparceiro.php">FAQ</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Precisa de Ajuda? <i class="fas fa-phone"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
<!-- SEGUNDO NAVBAR - FINAL -->

<!-- PRÉ CADASTRO COM SUCESSO OU NÃO, VINDO DE VALIDAPRECADASTRO.PHP -->      
      <?php
        if(isset($_SESSION["retornovalidacao"])){
          echo $_SESSION["retornovalidacao"];
          unset($_SESSION["retornovalidacao"]);
        }
      ?>

<!-- FOOTER PADRÃO PARA PLATAFORMA -->
      <footer class="py-2 fixed-bottom margem-superior-60" style="background-color: #1d2c57;">
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

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
  </body>
</html>