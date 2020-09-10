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

<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <!-- jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- Boostrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    

  </body>
</html>