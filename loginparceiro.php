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
      .card {
        background-color: #ffcc00;
        box-shadow: 3px 6px 8px 3px rgba(100, 100, 100, 0.7);
      }
    </style>
  </head>
  <body>
  
  <?php include 'menu.html'; ?>  

<!-- MODAL PRECISA DE AJUDA? FORMULÁRIO - INICIO -->
      <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Precisa de Ajuda?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Olá Parceiro! Para iniciar o acesso a área exclusiva de administração do seu <em>MarketPlace</em> é necessário fazer o login. Digite seu E-mail ou CPF cadastrado. Caso ainda não esteja cadastrado é só ir para página inicial ou clicar no logotipo do OMeuMercado. Espero ter ajudado!!!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Entendi!</button>
          </div>
        </div>
      </div>
    </div>
<!-- MODAL PRECISA DE AJUDA? FORMULÁRIO - FINAL -->


<!-- FORMULÁRIO DE LOGIN DO PARCEIRO - INICIO -->
      <div class="container mb-3 mt-5">
        <form class="login-form text-center card needs-validation" novalidate>
          <h4 class="font-weight-light mb-4">Olá Parceiro!</h4>
          <div class="form-group mb-0">
            <input type="email" class="form-control rounded-pill" id="email" placeholder="E-mail" required>
          </div>
          <p class="mb-0">ou</p>
          <div class="form-group mb-2">
            <input type="cpf" class="form-control rounded-pill" id="cpf" placeholder="CPF" required>
          </div>
          <div class="form-group mb-1">
            <input type="password" class="form-control rounded-pill" id="senha" placeholder="Senha" required>
          </div>
          <div>
            <a href="#" data-toggle="modal" data-target="#modalExemplo"><h6 class="text-right mb-3">Precisa de ajuda?</h6></a>
          </div>
          <div>
            <h1 class="text-center termos-contrato text-black mb-1">Este login é exclusivo para Parceiros do OMeuMercado, caso deseje fazer compras você pode <a href="buscaparceiro.php"><u>Clicar aqui</u></a></h1>
          </div>
          <button type="submit" class="btn mt-3 rounded-pill btn-lg btn-custom btn-block"><a href="class01/mercado001/adminparceiro.php" class="text-white">PROSSEGUIR <i class="far fa-arrow-alt-circle-right"></i></a></button>
          <p class="mt-3 font-weight-normal">Ainda não tem conta? <a href="index.php"><strong>Cadastre-se</strong></a></p>
       </form>
      </div>
<!-- FORMULÁRIO DE LOGIN DO PARCEIRO - FINAL -->


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