<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/9c8d73ada2.js" crossorigin="anonymous"></script>

    <!-- Pulse CSS -->
    <link href="css/pulse.css" rel="stylesheet">

    <!--Ícone da Página-->
    <link rel="shortcut icon" href="imagens/omeumercado.ico">
    
    <!-- Título da Página -->
    <title>OMeuMercado.com.br</title>

    <style>
      .bgcontato {
        background-image: url("imagens/bg_contato.jpg");
        background-repeat: repeat;
        background-size: 50%;
      }
      /* ALTERAÇÃO: .CARD */
    	.cardform {
    		background-color: #ffcc00;
    		box-shadow: 3px 6px 8px 3px rgba(100, 100, 100, 0.7);
    	}
      .fixedpulse {
        position: fixed;
        right: 0;
        bottom: 1;
        left: 1;
      }
      .whatsapp {
        position: fixed;
        top: 0%;
        left: 0%;
        padding: 0px;
        z-index: 10000000;
      }
    </style>
  </head>
  <body>

    <?php include 'menu.html'; ?>

<!-- BOTÃO PULSE - INÍCIO -->
    <div class="pulse fixedpulse">
      <a href="https://api.whatsapp.com/send?phone=5554996001906" target="_blank">
        <img class="" src="https://images.tcdn.com.br/static_inst/integracao/imagens/whatsapp.png"/>
      </a>
    </div>
<!-- BOTÃO PULSE - FINAL -->


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
            Olá Parceiro! Olá Cliente Amigo! Para entrar em contato por meio do formulário basta preencher os campos corretamente: seu E-mail, Nome Completo, DDD, Celular e deixe uma mensagem com sua dúvida, crítica, sugestão ou pedido de informação. Após o envio entraremos em contato. Você também pode consultar o FAQ disponível no menu, a sua pergunta pode já ter sido respondida lá. Espero ter ajudado!!!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Entendi!</button>
          </div>
        </div>
      </div>
    </div>
<!-- MODAL PRECISA DE AJUDA? FORMULÁRIO - FINAL -->


<!-- MÓDULO CENTRAL COM VÍDEO DE FORMULÁRIO - INICIO -->
    <div class="container-fluid bgcontato margem-superior-30 shadow rounded bg-white" style="width: 90%;">
      <div class="row bg-white pt-4 pb-4 mr-4 ml-4">
        <div class="col-8">
          <h4 class="h4responsiva text-center">Você pode entrar em contato conosco por meio deste formulário,</h4>
          <h6 class="h6responsiva text-center">ou ligar diretamente para (00)3986-3986 ou (00)98765-0102 e falar com um de nossos atendentes.</h6>
          <h6 class="h6responsiva text-center">Ou pode ainda, clicar no botão pulsante para falar diretamente conosco por meio de nosso Whatsapp!</h6>
          <div class="container mt-5">
            <div class="container-fluid pr-0 pl-0" style="width: 60%;">
              <div class="rounded shadow embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kbqp4gFod2w" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="cardform mr-4 ml-4">
            <form method="post" class="login-form text-center">
              <h4 class="font-weight-light mb-4">Contate-nos</h4>
              <div class="form-group mb-1">
                <input type="email" class="form-control rounded-pill" id="email" name="email" minlength="6" maxlength="100" placeholder="E-mail" required>
              </div>
              <div class="form-group mb-1">
                <input type="text" class="form-control rounded-pill" id="nome" name="nome" minlength="2" maxlength="100" placeholder="Nome Completo" required>
              </div>
              <div class="form-row">
                <div class="form-group mb-1 col-md-4">
                  <input type="int" class="form-control rounded-pill" id="ddd" name="ddd" minlength="2" maxlength="2" placeholder="DDD" required>
                </div>
                <div class="form-group mb-1 col-md-8">
                  <input type="text" class="form-control rounded-pill" id="celular" name="celular" minlength="10" maxlength="10" placeholder="Celular" required>
                </div>
              </div>
              <div class="form-group mb-1">
                <input type="text" class="form-control rounded-pill" id="mensagem" name="mensagem" placeholder="Digite sua mensagem">
              </div>
              <div>
                <a href="#" data-toggle="modal" data-target="#modalExemplo"><h6 class="text-right mb-3">Precisa de ajuda?</h6></a>
                <h1 class="text-left termos-contrato text-black mb-0">Ao enviar eu concordo que o OMEUMERCADO e seus representantes podem entrar em contato comigo por whatsapp, e-mail, telefone ou SMS (inclusive por meios automatizados) no endereço de e-mail ou número que eu forneci, inclusive para fins de marketing.</h1>
              </div>
              <button type="submit" class="btn mt-3 rounded-pill btn-lg btn-custom btn-block">ENVIAR <i class="far fa-arrow-alt-circle-right"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
<!-- MÓDULO CENTRAL COM VÍDEO DE FORMULÁRIO - FINAL -->



<!-- TEXTO PARA SE CADASTRAR ---- INÍCIO -->
    <div class="container margem-superior-60">
      <h1 class="h1responsiva"><strong><i class="fas fa-arrow-right"></i> Tudo pronto para começar?</strong></h1>
      <h4 class="mt-3 font-weight-normal text-warning col-8 text-center h4responsiva"><strong> CADASTRE-SE AGORA! <a class="text-warning" style="text-decoration: none;" href="index.php">CLIQUE AQUI!</a></strong></h4>
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