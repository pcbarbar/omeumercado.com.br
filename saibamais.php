<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <?php include 'templates/header.html'; ?>

    <style>
      /* EFEITO PARALLAX - SAIBAMAIS */
      .parallaximg {
        background-image: url("imagens/bg_saibamais.jpg");
        background-position: center top;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: #ffffff;
        padding-top: 250px;
        padding-bottom: 250;
      }
      /* BACKGROUND DE FUNDO DA PÁGINA */
      body{
        background-image: url("imagens/bg_saibamais1.jpg");
      }
    </style>
  </head>
  <body>

    <?php include 'templates/menu.html'; ?>

    
<!-- EFEITO PARALLAX NA IMAGEM DE BACKGROUND - INÍCIO -->
      <section class="parallaximg">
        <div class="container pb-5">
          <div class="row">
            <div class="col-xs-12">
              <h1 class="text-center h1responsiva">Olá Parceiro, você está no Saiba mais!</h1>
              <p class="text-center">Veja agora as funcionalidades de nossa plataforma...</p>
            </div>
          </div>
        </div>
      </section>
<!-- EFEITO PARALLAX NA IMAGEM DE BACKGROUND - FINAL -->


<!-- MODAL --- PARTE 1 CARD 1 --- - INICIO -->
<div class="modal fade" id="modalparte1card1" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Informações sobre: teste</h5>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Entendi!</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL --- PARTE 1 CARD 1 --- - FINAL -->


<!-- CARDS DE INFORMAÇÕES DO SAIBA MAIS ---- INÍCIO | PARTE 1 -->
    <div class="container-fluid principal mt-0">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="row">
            <!--CARD 1-->
            <div class="col-lg-3 col-md-12 mb-4">
              <div class="card-section border rounded ml-4 mr-4">
                  <div class="card-header card-header-second rounded">
                    <h2 class="card-header-title mb-3 mt-1 text-white">Ventas</h2>
                  </div>
                  <div class="card-body text-center bg-white">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat malesuada, volutpat fermentum eu ac faucibus pellentesque torquent nullam gravida et, ut nam massa purus congue class mi nunc.</p>
                      <br>
                      <a href="#" data-toggle="modal" data-target="#modalparte1card1"><button class="btn btn-lg btn-info">Mais informações</button></a>
                  </div>
              </div>
            </div>
            <!--CARD 2-->
            <div class="col-lg-3 col-md-12 mb-4">
              <div class="card-section border rounded ml-4 mr-4">
                  <div class="card-header card-header-second rounded">
                    <h2 class="card-header-title mb-3 mt-1 text-white">Ventas</h2>
                  </div>
                  <div class="card-body text-center bg-white">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat malesuada, volutpat fermentum eu ac faucibus pellentesque torquent nullam gravida et, ut nam massa purus congue class mi nunc.</p>
                      <br>
                      <a href="#" data-toggle="modal" data-target="#modalparte1card1"><button class="btn btn-lg btn-info">Mais informações</button></a>
                  </div>
              </div>
            </div>
            <!--CARD 3-->
            <div class="col-lg-3 col-md-12 mb-4">
              <div class="card-section border rounded ml-4 mr-4">
                  <div class="card-header card-header-second rounded">
                    <h2 class="card-header-title mb-3 mt-1 text-white">Ventas</h2>
                  </div>
                  <div class="card-body text-center bg-white">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat malesuada, volutpat fermentum eu ac faucibus pellentesque torquent nullam gravida et, ut nam massa purus congue class mi nunc.</p>
                      <br>    
                      <a href="#" data-toggle="modal" data-target="#modalparte1card1"><button class="btn btn-lg btn-info">Mais informações</button></a>
                  </div>
              </div>
            </div>
            <!--CARD 4-->
            <div class="col-lg-3 col-md-12 mb-4">
              <div class="card-section border rounded ml-4 mr-4">
                  <div class="card-header card-header-second rounded">
                    <h2 class="card-header-title mb-3 mt-1 text-white">Ventas</h2>
                  </div>
                  <div class="card-body text-center bg-white">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat malesuada, volutpat fermentum eu ac faucibus pellentesque torquent nullam gravida et, ut nam massa purus congue class mi nunc.</p>
                      <br>    
                      <a href="#" data-toggle="modal" data-target="#modalparte1card1"><button class="btn btn-lg btn-info">Mais informações</button></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- CARDS DE INFORMAÇÕES DO SAIBA MAIS ---- FINAL | PARTE 1 -->




<!--sistema de avaliações
cupons de desconto (desconto por indicação)
sistema de entregas (horário definido, entrega terceirizada)
lista de compras
gratuidade
-->









<!-- CARDS DE INFORMAÇÕES DO SAIBA MAIS ---- INÍCIO | PARTE 2 -->
<div class="container-fluid principal mt-3">
  <div class="row">
    <div class="col-lg-12 text-center">
      <div class="row">
        <!--CARD 1-->
        <div class="col-lg-3 col-md-12 mb-4">
          <div class="card-section border rounded ml-4 mr-4">
              <div class="card-header card-header-second rounded">
                <h2 class="card-header-title mb-3 mt-1 text-white">Ventas</h2>
              </div>
              <div class="card-body text-center bg-white">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat malesuada, volutpat fermentum eu ac faucibus pellentesque torquent nullam gravida et, ut nam massa purus congue class mi nunc.</p>
                  <br>
                  <a href="#" data-toggle="modal" data-target="#modalparte1card1"><button class="btn btn-lg btn-info">Mais informações</button></a>
              </div>
          </div>
        </div>
        <!--CARD 2-->
        <div class="col-lg-3 col-md-12 mb-4">
          <div class="card-section border rounded ml-4 mr-4">
              <div class="card-header card-header-second rounded">
                <h2 class="card-header-title mb-3 mt-1 text-white">Ventas</h2>
              </div>
              <div class="card-body text-center bg-white">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat malesuada, volutpat fermentum eu ac faucibus pellentesque torquent nullam gravida et, ut nam massa purus congue class mi nunc.</p>
                  <br>
                  <a href="#" data-toggle="modal" data-target="#modalparte1card1"><button class="btn btn-lg btn-info">Mais informações</button></a>
              </div>
          </div>
        </div>
        <!--CARD 3-->
        <div class="col-lg-3 col-md-12 mb-4">
          <div class="card-section border rounded ml-4 mr-4">
              <div class="card-header card-header-second rounded">
                <h2 class="card-header-title mb-3 mt-1 text-white">Ventas</h2>
              </div>
              <div class="card-body text-center bg-white">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat malesuada, volutpat fermentum eu ac faucibus pellentesque torquent nullam gravida et, ut nam massa purus congue class mi nunc.</p>
                  <br>    
                  <a href="#" data-toggle="modal" data-target="#modalparte1card1"><button class="btn btn-lg btn-info">Mais informações</button></a>
              </div>
          </div>
        </div>
        <!--CARD 4-->
        <div class="col-lg-3 col-md-12 mb-4">
          <div class="card-section border rounded ml-4 mr-4">
              <div class="card-header card-header-second rounded">
                <h2 class="card-header-title mb-3 mt-1 text-white">Ventas</h2>
              </div>
              <div class="card-body text-center bg-white">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat malesuada, volutpat fermentum eu ac faucibus pellentesque torquent nullam gravida et, ut nam massa purus congue class mi nunc.</p>
                  <br>    
                  <a href="#" data-toggle="modal" data-target="#modalparte1card1"><button class="btn btn-lg btn-info">Mais informações</button></a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- CARDS DE INFORMAÇÕES DO SAIBA MAIS ---- FINAL | PARTE 2 -->



<!-- CARDS DE INFORMAÇÕES DO SAIBA MAIS ---- INÍCIO | PARTE 3 -->
<div class="container-fluid principal mt-3">
  <div class="row">
    <div class="col-lg-12 text-center">
      <div class="row">
        <!--CARD 1-->
        <div class="col-lg-3 col-md-12 mb-4">
          <div class="card-section border rounded ml-4 mr-4">
              <div class="card-header card-header-second rounded">
                <h2 class="card-header-title mb-3 mt-1 text-white">Ventas</h2>
              </div>
              <div class="card-body text-center bg-white">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat malesuada, volutpat fermentum eu ac faucibus pellentesque torquent nullam gravida et, ut nam massa purus congue class mi nunc.</p>
                  <br>
                  <a href="#" data-toggle="modal" data-target="#modalparte1card1"><button class="btn btn-lg btn-info">Mais informações</button></a>
              </div>
          </div>
        </div>
        <!--CARD 2-->
        <div class="col-lg-3 col-md-12 mb-4">
          <div class="card-section border rounded ml-4 mr-4">
              <div class="card-header card-header-second rounded">
                <h2 class="card-header-title mb-3 mt-1 text-white">Ventas</h2>
              </div>
              <div class="card-body text-center bg-white">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat malesuada, volutpat fermentum eu ac faucibus pellentesque torquent nullam gravida et, ut nam massa purus congue class mi nunc.</p>
                  <br>
                  <a href="#" data-toggle="modal" data-target="#modalparte1card1"><button class="btn btn-lg btn-info">Mais informações</button></a>
              </div>
          </div>
        </div>
        <!--CARD 3-->
        <div class="col-lg-3 col-md-12 mb-4">
          <div class="card-section border rounded ml-4 mr-4">
              <div class="card-header card-header-second rounded">
                <h2 class="card-header-title mb-3 mt-1 text-white">Ventas</h2>
              </div>
              <div class="card-body text-center bg-white">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat malesuada, volutpat fermentum eu ac faucibus pellentesque torquent nullam gravida et, ut nam massa purus congue class mi nunc.</p>
                  <br>    
                  <a href="#" data-toggle="modal" data-target="#modalparte1card1"><button class="btn btn-lg btn-info">Mais informações</button></a>
              </div>
          </div>
        </div>
        <!--CARD 4-->
        <div class="col-lg-3 col-md-12 mb-4">
          <div class="card-section border rounded ml-4 mr-4">
              <div class="card-header card-header-second rounded">
                <h2 class="card-header-title mb-3 mt-1 text-white">Ventas</h2>
              </div>
              <div class="card-body text-center bg-white">
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipiscing elit feugiat malesuada, volutpat fermentum eu ac faucibus pellentesque torquent nullam gravida et, ut nam massa purus congue class mi nunc.</p>
                  <br>    
                  <a href="#" data-toggle="modal" data-target="#modalparte1card1"><button class="btn btn-lg btn-info">Mais informações</button></a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- CARDS DE INFORMAÇÕES DO SAIBA MAIS ---- FINAL | PARTE 3 -->






<!-- TEXTO PARA SE CADASTRAR ---- INÍCIO -->
    <div class="container-fluid border bg-white">
      <div class="container margem-superior-60 margem-inferior-60">
        <h1 class="h1responsiva"><strong><i class="fas fa-arrow-right"></i> Tudo pronto para começar?</strong></h1>
        <h4 class="mt-3 font-weight-normal text-warning col-8 text-center h4responsiva"><strong> CADASTRE-SE AGORA! <a class="text-warning" style="text-decoration: none;" href="cadastrar.php">CLIQUE AQUI!</a></strong></h4>
      </div>
  </div>
<!-- TEXTO PARA SE CADASTRAR ---- FINAL -->

    <?php include 'templates/footer.html'; ?>

  </body>
</html>