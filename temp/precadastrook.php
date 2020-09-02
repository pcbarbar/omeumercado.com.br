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
      .border {
          border: 2px solid blue !important;
          margin-top: 100px;
          padding-top: 50px;
          padding-bottom: 50px;
          padding-left: 20px;
          padding-right: 20px;
      }
      .textoverde {
        color: blue;
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
    
       <!-- NavBar Fixo -->
      <nav class="navbar border-bottom navbar-expand-lg shadow p-3 mb-5 rounded">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="imagens/omeumercado.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSite">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="#">Saiba mais</a></li>
              <li class="nav-item"><a class="nav-link" href="login.php">Entrar</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Quero fazer compras</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Contato <i class="fas fa-phone"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
<?php
    if(isset($_SESSION["msg"])){
      echo $_SESSION["msg"];
      unset($_SESSION["msg"]);
    }
    ?>

      <!--
      <div class="container border big-banner">
        <h2 class="text-left"><i class="far fa-check-circle textoverde"></i> Pedido de cadastro</h2>
        <hr>
        <h5 class="text-left font-weight-light">Acesse o email enviado para o endereço <strong><?php //echo $email; ?></strong> para validar seu registro e dar continuidade ao seu pedido de cadastro.</h5>
      </div>
    -->

<!-- Pulse
<div class="margem-superior-60 center">
<div class="pulse"><a href="/index.php"><i class="fab fa-whatsapp"></i></a></div>
</div> -->


<!-- FOOTER PADRÃO PARA PLATAFORMA -->
      <footer class="py-2 fixed-bottom margem-superior-60" style="background-color: #181174;;">
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