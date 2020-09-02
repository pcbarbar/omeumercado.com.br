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
      a:hover {
       color: #ffffff;
        text-decoration: none;
        }
        .login-form{
          margin: auto;
          width: 450px;
          padding: 15px;
          max-width: 100%;
        }
        .textoazul {
          color: #000000;
        }
    </style>
  </head>
  <body>
    
       <!-- NavBar Fixo -->
      <nav class="navbar border-bottom navbar-expand-lg navbartexto shadow p-3 mb-5 rounded">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="imagens/omeumercado.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSite">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="#">Saiba mais</a></li>
              <li class="nav-item"><a class="nav-link" href="loginparceiro.php">Entrar</a></li>
              <li class="nav-item"><a class="nav-link" href="buscaparceiro.php">Quero fazer compras</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Contato <i class="fas fa-phone"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <h3>Você encontrou <strong>3</strong> estabelecimentos credenciados:</h3>
        <h6>Se ainda não encontrou quem procurava, não se preocupe, você pode utilizar seu código de Cliente Cadastrado para efetivar um PARCEIRO, verifique a Política de Parcerias, e conseguirá CUPONS de DESCONTO para fazer suas futuras compras!</h6>
      </div>

      <div class="container border margem-superior-60">
        <a href="class01/mercado001/index.php"><img src="imagens/templistaparceiros.jpg" class="img-fluid align-middle" alt="Imagem responsiva"></a>
      </div>

      <div class="container margem-superior-60">
        <h4> Deseja fazer nova busca?</h4>
        <hr>
      </div>
      
      <div class="container border margem-superior-60 margem-inferior-60">
        <div class="row">
          <div class="col">
            <img src="imagens/fundobuscaparceiro.jpg" class="img-fluid align-middle" alt="Imagem responsiva">
          </div>
          <div class="col">
          <form class="login-form text-center needs-validation" novalidate>
            <h3 class="text-center">Onde você está?</h3>
            <h6 class="text-center mb-3">Dessa forma você terá acesso aos estabelecimentos mais próximos em sua região.</h6>
            <p class="text-center mb-1">Escolher a cidade:</p>
            <div class="form-group mb-1">
                <select class="form-control rounded-pill" id="cidade" name="cidade">
                  <option>...</option>
                  <option>Canela/RS</option>
                  <option>Gramado/RS</option>
                  <option>Fernandópolis/SP</option>
                </select>
            </div>
            <p class="text-center mb-1">ou</p>
            <div class="form-group mb-1">
              <input type="text" class="form-control rounded-pill" id="cep" placeholder="CEP">
            </div>
            <button type="submit" class="btn mt-3 rounded-pill btn-lg btn-custom btn-block"><a href="listaparceiros.php" class="text-white">PROSSEGUIR <i class="far fa-arrow-alt-circle-right"></i></a></button>
          </form>
          </div>
        </div>
      </div>




      <footer class="py-2 margem-superior-60" style="background-color: blue;">
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