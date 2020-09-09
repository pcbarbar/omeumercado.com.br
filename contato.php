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
    <link rel="stylesheet" href="/css/style.css">

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
      .fixedpulse {
        position: fixed;
        right: 0;
        bottom: 1;
        left: 1;
      }
      /* ALTERAÇÃO: .CARD */
    	.cardform {
    		background-color: #ffcc00;
    		box-shadow: 3px 6px 8px 3px rgba(100, 100, 100, 0.7);
    	}
    </style>
  </head>
  <body>

<!-- PRIMEIRO NAVBAR - INICIO -->
    <nav class="navbar navbar-expand-xl mynavblue border">
      <div class="container">      
      <a class="navbar-brand" href="index.php" style="border-bottom: 0;"><img class="img-fluid" src="imagens/logoomeumercado90.png"></a>
        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSite">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSite">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="sobre.html">Sobre</a></li>
            <li class="nav-item"><a class="nav-link" href="loginparceiro.php"><i class="fas fa-lock"></i> Área do Parceiro</a></li>
            <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
            <li class="nav-item"><a class="nav-link" href="#" style="border-bottom: 0;"><i class="fab fa-facebook"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#" style="border-bottom: 0;"><i class="fab fa-instagram"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#" style="border-bottom: 0;"><i class="fab fa-youtube"></i></a></li>
            <div class="efeitobtn" style="margin-top: 0px;">
              <li class="nav-item"><a class="nav-link" href="buscaparceiro.php">Quero fazer compras <i class="fab fa-opencart"></i></a></li>
            </div>
          </ul>
        </div>
      </div>
    </nav>
<!-- PRIMEIRO NAVBAR - FINAL -->

<!-- SEGUNDO NAVBAR - INICIO -->
    <nav class="navbar navbar-expand-xl mynavblack">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSite">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="saibamais.html">Saiba mais</a></li>
            <li class="nav-item"><a class="nav-link" href="vdexplica.html">Vídeos Explicativos</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Exemplo do seu E-Commerce</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Olá Cliente!</a></li>
            <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#modalnavbar">Precisa de Ajuda?</a></li>
          </ul>
        </div>
      </div>
    </nav>
<!-- SEGUNDO NAVBAR - FINAL -->


<!-- BOTÃO PULSE - INÍCIO -->
    <div class="pulse fixedpulse">
      <a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
    </div>
<!-- BOTÃO PULSE - FINAL -->


<!-- MODAL PRECISA DE AJUDA? NAVBAR - INICIO -->
    <div class="modal fade" id="modalnavbar" tabindex="-1" role="dialog" aria-labelledby="ModalNavBar" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalNavBar">Precisa de Ajuda com o Menu?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>- Logotipo OMEUMERCADO, esteja onde estiver clicando no logo você retorna para página principal;</p>
            <p>- Sobre, é a idéia geral sobre seu OMeuMercado, algumas explicações, história, missão e valores;</p>
            <p>- Área do Parceiro, é uma área exclusiva para o Parceiro cadastrado fazer a administração do seu MarketPlace, também disponível no próprio local;</p>
            <p>- Contato, é onde você pode enviar um formuálio com dúvidas, sugestões e também onde encontrar nossos telefones e emails para você poder falar conosco;</p>
            <p>- Ícones de Facebook, Instagram e Youtube são nossos canais sociais, entre lá e siga-nos, deixe mensagens e compartilhe nossas publicações;</>
            <p>- Botão Quero fazer compras, é onde o cliente amigo pode procurar um estabelecimento credenciado (Parceiro) para fazer compras;</p>
            <p>- Saiba mais, são explicações, funcionalidades, ...</p>
            <p>- Vídeos Explicativos, decidimos incorporar vídeos explicativos pois são mais elucidativos, práticos, e de forma geral rápidos para o entendimento de como funciona a Plataforma OMeuMercado;</p>
            <p>- Exemplo do seu E-Commerce, entre e saiba com este exemplo como ficaria se negócio on-line, não se preocupe ele será customizado para atender suas necessidades;</p>
            <p>- FAQ, são perguntas frequentes já respondidas, talvez a resposta para sua dúvida já esteja aqui;</p>
            <p>- Precisa de Ajuda?, este link você encontrará em vários lugares no website e poderá solucionar sua dúvida, como este aqui!</p>
            <h6>Obrigado por estar conosco!</h6>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
<!-- MODAL PRECISA DE AJUDA? NAVBAR - FINAL -->


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



<!-- FOOTER PADRÃO PARA PLATAFORMA -- INÍCIO -->
    <footer class="py-2 margem-superior-60" style="background-color: #1d2c57;">
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
<!-- FOOTER PADRÃO PARA PLATAFORMA -- FINAL -->


    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <!-- jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- Boostrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>