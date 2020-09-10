<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <?php include 'header.html'; ?>

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
    
    <?php include 'menu.html'; ?>

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

    <?php include 'footer.html'; ?>

  </body>
</html>