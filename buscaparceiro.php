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

    <?php include 'menu.html'; ?>

<!-- PROCEDIMENTO CENTRAL ---- INÍCIO -->
    <div class="container border mt-4 shadow-lg rounded" style="background-color: #ededed;">
      <div class="row">
        <div class="col-xl-6 border">
          <img src="imagens/mapinha.jpg" class="img-fluid mx-auto d-block">
        </div>
        <div class="col-xl-6">
        <form class="login-form text-center">
          <h3 class="text-center">Onde você está?</h3>
          <h6 class="text-center mb-3">Dessa forma você terá acesso aos estabelecimentos mais próximos em sua região.</h6>
          <h6 class="text-center mb-3"><a href="#" class="text-warning"><i class="fas fa-map-marker-alt"></i> Utilizar localização automática</a></h6>
          <p class="text-center mb-1">Você também pode escolher a cidade:</p>
          <div class="form-group mb-1">
              <select class="form-control rounded-pill" id="cidade">
                <option>...</option>
                <option>Canela/RS</option>
                <option>Gramado/RS</option>
                <option>Caxias do Sul/RS</option>
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
<!-- PROCEDIMENTO CENTRAL ---- FINAL -->


<!-- TEXTO PARA SE CADASTRAR ---- INÍCIO -->
    <div class="container mt-5">
      <h3 class="h3responsiva-thin">Olá Cliente amigo!</h3>
      <h3 class="h3responsiva-thin">Se ainda não é cadastrado pode fazer isto agora mesmo!</h3>
      <h5 class="h4responsiva"><a class="text-warning" style="text-decoration: none;" href="index.php"><strong>CLIQUE AQUI PARA SE CADASTRAR!</strong></a></h5>
    </div>
<!-- TEXTO PARA SE CADASTRAR ---- FINAL -->

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