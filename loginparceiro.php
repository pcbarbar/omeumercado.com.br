<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <?php include 'header.html'; ?>
  
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

  </body>
</html>