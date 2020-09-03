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

    <!-- Carousel CSS -->
    <link href="css/carousel.css" rel="stylesheet">

    <!--Ícone da Página-->
    <link rel="shortcut icon" href="imagens/omeumercado.ico">
    
    <!-- Título -->
    <title>OMeuMercado.com.br</title>
    <style>
      /* ALTERAÇÃO: .CARD */
    	.card {
    		background-color: #ffcc00;
    		box-shadow: 3px 6px 8px 3px rgba(100, 100, 100, 0.7);
    	}
        /* IMAGEM DE FUNDO PARA O CONTAINER */
      .big-banner {
        background-image: url("imagens/fundo_index.jpg");
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: 100%;
      }
    </style>
    
  </head>
  <body>
    
<!-- PRIMEIRO NAVBAR - INICIO -->
      <nav class="navbar navbar-expand-xl shadow mynavblue fixed-top">
        <div class="container center">
          <a class="navbar-brand" href="index.php"><img src="imagens/omeumercado.png"></a>
          <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSite #navbarSite2">
            <i class="fas fa-bars"></i>
          </button>
          
            <div class="collapse navbar-collapse" id="navbarSite">
              <ul class="navbar-nav ml-4">
                <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
                <li class="nav-item active"><a class="nav-link" href="loginparceiro.php"><i class="fas fa-lock"></i> Área do Parceiro</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-youtube"></i></a></li>
              </ul>
              <div class="mrt">
                <ul>
                  <li class="nav-item"><a class="nav-link" href="buscaparceiro.php">Quero fazer compras <i class="fab fa-opencart"></i></a></li>
                </ul>
              </div>
            
          </div>
        </div>
      </nav>
<!-- PRIMEIRO NAVBAR - FINAL -->

<!-- SEGUNDO NAVBAR - INICIO -->
      <nav class="navbar navbar-expand-xl mynavblack margem-superior-94">
        <div class="container">
          <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSite2"><i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSite2">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a class="nav-link" href="#">Como funciona</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Saiba mais</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Quem somos</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Escrever aqui</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Mais coisas</a></li>
              <li class="nav-item"><a class="nav-link" href="loginparceiro.php">FAQ</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Precisa de Ajuda? <i class="fas fa-phone"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
<!-- SEGUNDO NAVBAR - FINAL -->

<!-- FORMULÁRIO DE CADASTRO - INICIO -->
<div class="container-fluid border shadow mb-5 bg-white rounded margem-superior-30" style="width: 95%";>
    <div class="container-fluid margem-superior-60 margem-inferior-60">
      <div class="container-fluid big-banner">
        <div class="row">
          <div class="col"></div>
          <div class="col-6">
          <div class="row mt-3">
          <h1 class="">Comece a vender on-line agora <i class="fas fa-arrow-right"></i></h1></p>
          </div>
          <div class="row">
            <h4>Seja nosso parceiro sem gastar nada</h4>
          </div>
        </div>
        <div class="col"></div>
        <div class="col">

          <!-- ATENÇÃO: CPF NÃO VALIDADO!!!!!!!!!!!! -->

          <form action="validaprecadastro.php" method="post" class="login-form text-center card" onsubmit="limparMascara()">
              <h4 class="font-weight-light mb-4">Cadastre-se já!</h4>
              <div class="form-group mb-1">
                <input type="email" class="form-control rounded-pill" id="email" name="email" minlength="6" maxlength="100" placeholder="E-mail" required>
              </div>
              <div class="form-group mb-1">
                <input type="text" class="form-control rounded-pill" id="nome" name="nome" minlength="2" maxlength="100" placeholder="Nome Completo" required>
              </div>
              <div class="form-group mb-1">
                <input type="text" class="form-control rounded-pill cpf" id="cpf" name="cpf" minlength="14" maxlength="14" placeholder="CPF" required>
              </div>
              <div class="form-row">
                <div class="form-group mb-1 col-md-4">
                  <input type="int" class="form-control rounded-pill" id="ddd" name="ddd" minlength="2" maxlength="2" placeholder="DDD" required>
                </div>
                <div class="form-group mb-1 col-md-8">
                  <input type="text" class="form-control rounded-pill" id="celular" name="celular" minlength="10" maxlength="10" placeholder="Celular" required>
                </div>
              </div>
              <!--
              <div class="form-group mb-1">
                <input type="password" class="form-control rounded-pill" id="senha" name="senha" minlength="6" maxlength="6"placeholder="Crie uma senha de 6 dígitos" required>
              </div>-->
              <div class="form-group mb-1">
                <input type="text" class="form-control rounded-pill" id="cupomindica" name="cupomindica" minlength="8" maxlength="8" placeholder="Cupom de indicação (opcional)">
              </div>
              <div>
                <a href="#" data-toggle="modal" data-target="#modalExemplo"><h6 class="text-right mb-3">Precisa de ajuda?</h6></a>
                <h1 class="text-left termos-contrato text-black mb-1">Ao continuar, eu concordo com os <a href="#"><u>Termos de Uso</u></a> do OMEUMERCADO e confirmo que li a <a href="#"><u>Política de Privacidade</u></a>.</h1>
                <h1 class="text-left termos-contrato text-black mb-0">Eu também concordo que o OMEUMERCADO e seus representantes podem entrar em contato comigo por whatsapp, e-mail, telefone ou SMS (inclusive por meios automatizados) no endereço de e-mail ou número que eu forneci, inclusive para fins de marketing.</h1>
              </div>

              <button type="submit" class="btn mt-3 rounded-pill btn-lg btn-custom btn-block">PROSSEGUIR <i class="far fa-arrow-alt-circle-right"></i></button>
              <p class="mt-3 font-weight-normal">Já tem conta? <a href="loginparceiro.php"><strong>Entrar</strong></a></p>
              </form>
          </div>
          <div class="col"></div>
          <div class="col"></div>
        </div>
    </div>
  </div>
</div>
<!-- FORMULÁRIO DE CADASTRO - FINAL -->


<!-- MODAL PRECISA DE AJUDA? - INICIO -->
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
            Olá Parceiro! Olá Cliente Amigo! Para iniciar o cadastro basta preencher os campos corretamente: seu E-mail, nome completo, número do CPF, ddd e celular. Caso tenha um Cupom de Indicação, esse é o momento de usar, para mais informações basta consultar o FAQ disponível no menu. Após este pré-cadastro você receberá nosso E-mail de confirmação. Espero ter ajudado e seja bem-vindo ao OMeuMercado!!!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Entendi!</button>
          </div>
        </div>
      </div>
    </div>
<!-- MODAL PRECISA DE AJUDA? - FINAL -->


<!-- CAROUSEL - INICIO -->
    
      <div class="container-fluid margem-superior-30" style="width: 95%";>
        <div id="myCarousel" class="carousel slide shadow" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="imagens/banner1.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="imagens/banner2.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="imagens/banner3.jpg">
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
      </div>
    
<!-- CAROUSEL - FINAL -->

      

    


    <!-- FOOTER PADRÃO PARA PLATAFORMA -->
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

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <!-- jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <!-- Máscara para formulário JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- Boostrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>
      $(document).ready(function(){
      //Telefone
      //$("#telefone").mask("(99) 99999-9999");
      //CEP
      //$("#cep").mask("99999-999");
      //CPF
      $("#cpf").mask("999.999.999-99");
      $("#celular").mask("90000-0000");
      //$("#senha").mask("000000");
      $("#cupomindica").mask("AAAAAAAA");
      $("#ddd").mask("00");
      //CNPJ
      //$("#cnpj").mask("99.999.999/9999-99");
      //Data
      //$("#data").mask("99/99/9999");
      //Dinheiro
      //$('#dinheiro1').mask('000.000.000.000.000,00' , { reverse : true});
      //$('#dinheiro2').mask("#.##0,00" , { reverse:true});
      });
    </script>
    <script>
      function limparMascara(){
        $('#cpf').unmask();
        $('#celular').unmask();
      }
    </script>
  </body>
</html>