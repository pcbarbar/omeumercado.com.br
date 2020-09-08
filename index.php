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
    
    <!-- Título da Página -->
    <title>OMeuMercado.com.br</title>

    <style>
      /* ALTERAÇÃO: .CARD */
    	.cardform {
    		background-color: #ffcc00;
    		box-shadow: 3px 6px 8px 3px rgba(100, 100, 100, 0.7);
    	}
      /* IMAGEM DE FUNDO PARA O CONTAINER PRINCIPAL*/
      .big-banner {
        background-image: url("imagens/fundo_index.jpg");
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: 100%;
      }
      .fixedpulse {
        position: fixed;
        right: 0;
        bottom: 1;
        left: 1;
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
            <li class="nav-item"><a class="nav-link" href="contato.html">Contato</a></li>
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


<!-- FORMULÁRIO DE CADASTRO - INICIO -->
<div class="container-fluid border shadow mb-5 bg-white rounded" style="width: 95%; margin-top: 30px;" id="cadastraragora">
    <div class="container-fluid margem-superior-30" style="margin-bottom: 30px;">
      <div class="container-fluid big-banner">
        <div class="row">
          <div class="col"></div>
          <div class="col-6">
          <div class="row mt-4">
          <h1 class="h1responsiva">Comece a vender on-line agora <i class="fas fa-arrow-right"></i></h1></p>
          </div>
          <div class="row">
            <h4 class="h4responsiva">Seja nosso parceiro sem gastar nada</h4>
          </div>
        </div>
        <div class="col"></div>
        <div class="col">

          <!-- OBS: CPF NÃO VALIDADO!!!!!!!!!!!! -->

          <form action="validaprecadastro.php" method="post" class="login-form text-center cardform" onsubmit="limparMascara()">
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
              <div class="form-group mb-1">
                <input type="text" class="form-control rounded-pill" id="cupomindica" name="cupomindica" minlength="8" maxlength="8" placeholder="Cupom de indicação (opcional)">
              </div>
              <div>
                <a href="#" data-toggle="modal" data-target="#modalExemplo"><h6 class="text-right mb-3">Precisa de ajuda?</h6></a>
                <h1 class="text-left termos-contrato text-black mb-1">Ao prosseguir, eu concordo com os <a href="#"><u>Termos de Uso</u></a> do OMEUMERCADO e confirmo que li a <a href="#"><u>Política de Privacidade</u></a>.</h1>
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
            Olá Parceiro! Olá Cliente Amigo! Para iniciar o cadastro basta preencher os campos corretamente: seu E-mail, nome completo, número do CPF, ddd e celular. Caso tenha um Cupom de Indicação, esse é o momento de usar, para mais informações basta consultar o FAQ disponível no menu. Após este pré-cadastro você receberá nosso E-mail de confirmação. Espero ter ajudado e seja bem-vindo ao OMeuMercado!!!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Entendi!</button>
          </div>
        </div>
      </div>
    </div>
<!-- MODAL PRECISA DE AJUDA? FORMULÁRIO - FINAL -->


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

   
<!-- PARA USAR OS ÍCONES -->    
    <div class="invisible">
      <a href="https://icons8.com/icon/44027/money-bag">Money Bag icon by Icons8</a>
      <a href="https://icons8.com/icon/77111/online-store">Online Store icon by Icons8</a>
      <a href="https://icons8.com/icon/114458/business-building">Business Building icon by Icons8</a>
      <a href="https://icons8.com/icon/46086/move-stock">Move Stock icon by Icons8</a>
    </div>


<!-- 4 CARDS ---- INÍCIO -->
    <div class="container-fluid" style="width: 98%;" id="saibamais">
      <div class="row">
        <div class="col-sm-3">
          <div class="card shadow rounded pb-4 pt-4 pr-4 pl-4">
            <div class="text-center"><img src="https://img.icons8.com/nolan/96/money-bag.png"></div>
            <p class="text-center"><br>Parceiro, este é uma plataforma diferente: você não paga implantação, mensalidade, implementações, suporte, treinamentos, no OMeuMercado você paga apenas uma pequena colaboração quando vender. Ainda não se casdastrou? Então dê esse primeiro passo, torne-se nosso parceiro e começe as suas vendas on-line agora!</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card shadow rounded pb-4 pt-4 pr-4 pl-4">
            <div class="text-center"><img src="https://img.icons8.com/nolan/96/online-store.png"/></div>
            <p class="text-center"><br>Com a implantação das vendas on-line do OMeuMercado, você perceberá nosso difencial pois além de proporcionar a você um aumento considerável nas vendas também daremos suporte, incentivos e descontos para seus clientes por nossa conta, o cliente é a alma do negócio, mas também o gestor, conosco estará completo! Esperando o que para se cadastrar?</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card shadow rounded pb-4 pt-4 pr-4 pl-4">
            <div class="text-center"><img src="https://img.icons8.com/nolan/96/move-stock.png"/></div>
            <p class="text-center"><br>Estoque, entregas, pagamentos, enfim tudo que se relaciona com vendas OMeuMercado disponibiliza de forma prática para você poder visualizar tudo sem perda de tempo, temos soluções para melhorar sua logística fazendo assim uma obtenção maior de lucro com as vendas, pensamos sempre em você. Não fique de fora, comece a vender on-line já, cadastre-se!</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card shadow rounded pb-4 pt-4 pr-4 pl-4">
            <div class="text-center"><img src="https://img.icons8.com/nolan/96/client-company.png"/></div>
            <p class="text-center"><br>Pensando em como será tudo isso funcionando? Nossa plataforma de vendas é intuitiva, tanto para você, como para seu cliente! É tudo bem parecido com o que já faz, só que melhor, e lembra daquele consumidor do outro bairro? Ele poderá facilmente ser seu cliente e fazer compras com você agora, pense nisso! Se já estiver pronto para ver como é, basta se cadastrar!</p>
          </div>
        </div>
      </div>
    </div>
  <!-- 4 CARDS ---- FINAL -->

<!-- CAROUSEL 6 BANNERS - INICIO -->
    <div class="container-fluid margem-superior-30" style="width: 90%;">
      <div id="myCarousel" class="carousel slide shadow" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="imagens/demobanner1.jpg">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imagens/demobanner2.jpg">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imagens/demobanner3.jpg">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imagens/demobanner4.jpg">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imagens/demobanner5.jpg">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imagens/demobanner6.jpg">
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
<!-- CAROUSEL 6 BANNERS - FINAL -->    


<!-- TEXTO PARA SE CADASTRAR ---- INÍCIO -->
    <div class="container margem-superior-60">
      <h1 class="h1responsiva"><strong><i class="fas fa-arrow-right"></i> Tudo pronto para começar?</strong></h1>
      <h4 class="mt-3 font-weight-normal text-warning col-8 text-center h4responsiva"><strong> CADASTRE-SE AGORA! <a class="text-warning" style="text-decoration: none;" href="#cadastraragora">CLIQUE AQUI!</a></strong></h4>
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
    
    <!-- Máscara para formulário JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <!-- Boostrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

<!-- MÁSCARA PARA FORMULÁRIOS -->
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