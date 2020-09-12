<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <?php include 'templates/header.html'; ?>

    <!-- Pulse CSS -->
    <link href="css/pulse.css" rel="stylesheet">

    <style>
      .bgcontato {
        background-image: url("imagens/bg_contato.jpg");
        background-repeat: repeat;
        background-size: 50%;
      }
      /* ALTERAÇÃO: .CARD */
    	.cardform {
    		background-color: #dcdcdc;
        box-shadow: 3px 6px 8px 3px rgba(100, 100, 100, 0.7);
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;
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

    <?php include 'templates/menu.html'; ?>

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
            Olá, para entrar em contato por meio do formulário basta preencher os campos corretamente: seu E-mail, Nome Completo, DDD, Celular e deixe uma mensagem com sua dúvida, crítica, sugestão ou pedido de informação. Após o envio entraremos em contato. Você também pode consultar o FAQ disponível no menu, a sua pergunta pode já ter sido respondida lá. Espero ter ajudado!!!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Entendi!</button>
          </div>
        </div>
      </div>
    </div>
<!-- MODAL PRECISA DE AJUDA? FORMULÁRIO - FINAL -->


<!-- MÓDULO CENTRAL COM VÍDEO DE FORMULÁRIO - INICIO -->
    <div class="container-fluid bgcontato mt-4 shadow rounded bg-white" style="width: 90%;">
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
            <form method="post" class="text-center">
              <h4 class="font-weight-light mb-4">Contate-nos</h4>
              <div class="input-group mb-1">
                <div class="input-group-prepend">
									<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
								</div>
                <input type="email" class="form-control rounded-pill" id="email" name="email" minlength="6" maxlength="100" placeholder="E-mail" required>
              </div>
              <div class="input-group mb-1">
                <div class="input-group-prepend">
									<span class="input-group-text"> <i class="fa fa-user"></i> </span>
								</div>
                <input type="text" class="form-control rounded-pill" id="nome" name="nome" minlength="2" maxlength="100" placeholder="Nome Completo" required>
              </div>
              <div class="input-group mb-1">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
									</div>
								<input name="" class="form-control rounded-pill" placeholder="DDD" maxlength="2" type="number" style="max-width: 100px;" required>
								<input name="" class="form-control rounded-pill" placeholder="Celular" type="text" required>
							</div>
              <div class="input-group">
                <div class="input-group-prepend">
									<span class="input-group-text"> <i class="fa fa-comment"></i> </span>
                </div>
                <input type="text" class="form-control rounded-pill" id="mensagem" name="mensagem" minlength="2" maxlength="100" placeholder="Digite sua mensagem" required>
              </div>
              <div>
                <a style="text-decoration: none;" href="#" data-toggle="modal" data-target="#modalExemplo"><h6 class="text-right mb-3 mt-2">Precisa de ajuda?</h6></a>
                <h1 class="termos-contrato text-black mb-0 text-justify">Ao enviar eu concordo que o OMEUMERCADO e seus representantes podem entrar em contato comigo por whatsapp, e-mail, telefone ou SMS (inclusive por meios automatizados) no endereço de e-mail ou número que eu forneci, inclusive para fins de marketing.</h1>
                <a class="" style="text-decoration: none;" href="#"><button class="btn btn-primary btn-block rounded-pill mt-3">Enviar <i class="far fa-arrow-alt-circle-right"></i></button></a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<!-- MÓDULO CENTRAL COM VÍDEO DE FORMULÁRIO - FINAL -->



<!-- TEXTO PARA SE CADASTRAR ---- INÍCIO -->
    <div class="container margem-superior-60">
      <h1 class="h1responsiva"><strong><i class="fas fa-arrow-right"></i> Tudo pronto para começar?</strong></h1>
      <h4 class="mt-3 font-weight-normal text-warning col-8 text-center h4responsiva"><strong> CADASTRE-SE AGORA! <a class="text-warning" style="text-decoration: none;" href="cadastrar.php">CLIQUE AQUI!</a></strong></h4>
    </div>
<!-- TEXTO PARA SE CADASTRAR ---- FINAL -->

    <?php include 'templates/footer.html'; ?>

  </body>
</html>