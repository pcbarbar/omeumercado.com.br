<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <?php include 'templates/header.html'; ?>

    <style>
      .bgcontato {
        background-image: url("imagens/bg_contato.jpg");
        background-repeat: repeat;
        background-size: 50%;
      }
    </style>
  </head>
  <body>

    <?php include 'templates/menu.html'; ?>

<!-- MÓDULO CENTRAL - INICIO -->
    <div class="container-fluid bgcontato margem-superior-60 shadow rounded bg-white" style="width: 90%;">
      <div class="row bg-white pt-5 pb-5 mr-4 ml-4">
        
        <h4 class="h4responsiva ml-5">Formulário enviado...aguarde que em breve entraremos em contato!</h4>
        <!-- <h4 class="h4responsiva ml-5">Ops! Algo deu errado, tente novamente mais tarde. Desculpe o inconveniente.</h4> -->
      
      </div>
    </div>
<!-- MÓDULO CENTRAL - FINAL -->


<!-- TEXTO PARA SE CADASTRAR ---- INÍCIO -->
    <div class="container margem-superior-60">
      <h1 class="h1responsiva"><strong><i class="fas fa-arrow-right"></i> Tudo pronto para começar?</strong></h1>
      <h4 class="mt-3 font-weight-normal text-warning col-8 text-center h4responsiva"><strong> CADASTRE-SE AGORA! <a class="text-warning" style="text-decoration: none;" href="index.php">CLIQUE AQUI!</a></strong></h4>
    </div>
<!-- TEXTO PARA SE CADASTRAR ---- FINAL -->

    <?php include 'templates/footer.html'; ?>

  </body>
</html>