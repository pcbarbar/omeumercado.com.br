<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <?php include 'templates/header.html'; ?>

    <style>
    /* IMAGEM DE FUNDO PARA TEXTO DA BUSCA*/
      .bg-img {
        background-image: url("imagens/bg_sobre.jpg");
        background-repeat: repeat;
        background-size: 30%;
      }
      .big-banner {
        background-image: url("/imagens/bg_retornoprecadastro.jpg");
        background-repeat: repeat;
        background-size: 20%;
      }
      a:hover {
        color: #ffffff;
        text-decoration: none;
      }
    </style>
  </head>
  <body>

    <?php include 'templates/menu.html'; ?>
    
<!-- RETORNO DA BUSCA - INÍCIO -->
      <div class="container bg-img mt-4 rounded shadow">
        <div class="row big-banner ml-4 pb-5 pt-5 rounded">
          <h4 class="h4responsiva ml-4">Você encontrou <strong>3</strong> estabelecimentos credenciados:</h4>
          <h6 class="h6responsiva ml-4">Se ainda não encontrou quem procurava, não se preocupe, você pode utilizar seu código de indicação para efetivar um PARCEIRO, assim conseguirá CUPONS de DESCONTO para fazer suas futuras compras!</h6>
        </div>
      </div>

      <div class="container border margem-superior-30">
        <a href="parceiro/index.php"><img src="imagens/templistaparceiros.jpg" class="img-fluid align-middle" alt="Imagem responsiva"></a>
      </div>
<!-- RETORNO DA BUSCA - INÍCIO -->


      <div class="container margem-superior-60">
        <h4> Deseja fazer nova busca?</h4>
        <hr>
      </div>

      
<!-- PROCEDIMENTO CENTRAL IGUAL DO BUSCAPARCEIRO.PHP ---- INÍCIO -->
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
            <div class="input-group mb-1">
              <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-city"></i> </span>
              </div>
              <select class="form-control rounded-pill" id="cidade">
                <option>...</option>
                <option>Canela/RS</option>
                <option>Gramado/RS</option>
                <option>Caxias do Sul/RS</option>
              </select>
            </div>
            <p class="text-center mb-1">ou</p>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-mail-bulk"></i> </span>
              </div>
              <input type="text" class="form-control rounded-pill" id="cep" placeholder="CEP">
            </div>
          </form>
          <div class="container w-75">
            <a class="mb-4 mx-auto btn-block" href="listaparceiros.php"><button class="btn btn-primary btn-block rounded-pill mt-3">Prosseguir <i class="far fa-arrow-alt-circle-right"></i></button></a>
          </div>
        </div>
      </div>
    </div>
<!-- PROCEDIMENTO CENTRAL IGUAL DO BUSCAPARCEIRO.PHP ---- FINAL -->


    <?php include 'templates/footer.html'; ?>

  </body>
</html>