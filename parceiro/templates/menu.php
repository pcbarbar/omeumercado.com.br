<!-- TOP HEADER -->
<div class="top-header fixed-top">
    <div class="container">
      <!-- CRIAR CONTA E LOGIN -->
      <!--
      <ul class="header-links text-right">
        <li><a href="#"><i class="fa fa-sign-in-alt"></i> Crie sua conta</a></li>
        <li><a href="#"><i class="fa fa-user-o"></i> Entre</a></li>
      </ul>
      -->
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-9 col-xl-9 mt-1">
          <ul class="header-links text-right">
            <li><img class="" src="imagens/user.png" style="width: 28px;"></li>
            <li><a href="#"> Josélia da Costa Bonif</a></li> <!-- máx. 22 caracteres-->
          </ul>
        </div>
        <div class="col-2 col-sm-2 col-md-2 col-lg-1 col-xl-1 align-self-center">
          <div class="header-ctn">
            <div><a href="#"><h4><i class="text-white fa fa-ticket-alt"></i></h4><div class="qty">0</div></a></div>
          </div>
        </div>
        <div class="col-2 col-sm-2 col-md-2 col-lg-1 col-xl-1 align-self-center">
          <div class="header-ctn">
            <div><a href="minhalista.php"><h4><i class="text-white fas fa-list-alt"></i></h4><div class="qty">0</div></a></div>
          </div>
        </div>
        <div class="col-2 col-sm-2 col-md-2 col-lg-1 col-xl-1 align-self-center">
          <div class="header-ctn">
            <div><a href="meucarrinho.php"><h4><i class="text-white fa fa-shopping-cart"></i></h4><div class="qty">0</div></a></div>
          </div>
        </div>
      </div>
      <!---->
    </div>
  </div>
<!-- /TOP HEADER -->


<!-- MAIN HEADER -->
  <div class="header" style="margin-top: 57px;">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- LOGO -->
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 pr-0 pl-0 mr-0 ml-0">
          <div class="header-logo">
            <a href="index.php" class="logo">
              <img src="imagens/logo.png">
            </a>
          </div>
        </div>
        <!-- /LOGO -->

        <!-- SEARCH BAR -->
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 pr-0 pl-0 mr-0 ml-0">
          <div class="header-search">
            <form class="text-center">
              <select class="input-select">
                <option value="0">Todos Departamentos</option>
                <option value="2">Alimentos em Geral</option>
                <option value="3">Hortifrutigranjeiro</option>
                <option value="4">Adega e Bebidas</option>
                <option value="5">Congelados Diversos</option>
                <option value="6">Frios e Laticínios</option>
                <option value="7">Carnes, Aves e Peixes</option>
                <option value="8">Padaria e Rotisseria</option>
                <option value="9">Higiene e Perfumaria</option>
                <option value="10">Limpeza e Lavanderia</option>
                <option value="11">Pet Shop e Cia</option>
                <option value="12">Utilidades Domésticas</option>
              </select>
              <input class="input" placeholder="Digite aqui o seu produto...">
              <button class="search-btn"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
        <!-- /SEARCH BAR -->
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-3 pr-0 pl-0 mr-0 ml-0">
          <ul class="header-links text-center mt-4 pr-0 pl-0 mr-0 ml-0">
            <li><a href="#"><p class="mr-2" style="font-size: 14px; font-weight: 300;">Contate-nos</p></a></li>
            <li><a href="#" data-toggle="modal" data-target="#modalajudamenu"><p style="font-size: 14px; font-weight: 300;">Precisa de Ajuda?</p></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>


<!-- TERCEIRO NAVBAR - INICIO -->
  <nav class="navbar navbar-expand-xl navigation">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsite" aria-controls="navbarsite" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarsite">
        <div class="mx-auto">
          <ul class="navbar-nav main-nav">
            <li class="nav-item mr-3"><a class="nav-link" href="#">Produtos em Oferta</a></li>
            <li class="nav-item mr-3"><a class="nav-link" href="#">Ofertas 24H</a></li>
            <li class="nav-item mr-3"><a class="nav-link" href="#">Minhas Receitas</a></li>
            <li class="nav-item mr-3"><a class="nav-link" href="#">Quero Cupons!</a></li>
            <li class="nav-item mr-3"><a class="nav-link" href="#">Mais Vendidos</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Não achou o que procura?</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
<!-- TERCEIRO NAVBAR - FINAL -->


<!-- MODAL PRECISA DE AJUDA? NAVBAR - INICIO -->
  <div class="modal fade" id="modalajudamenu" tabindex="-1" role="dialog" aria-labelledby="ModalNavBar" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content border text-white" style="background-color:  #1E1F29;">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalNavBar">Precisa de Ajuda com o Menu?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>- Clicando no logotipo da loja você retorna para página principal onde estiver;</p>
        <p>- Você pode procurar o produto que deseja digitando em "Buscar produtos..." e clicando na pequena lupa;</p>
        <p>- Se ainda não é cadastrado, clique em "Cadastrar" e comece a fazer compras conosco!;</p>
        <p>- Faça login em sua conta clicando em "Entrar";</p>
        <p>- Em "Minha Lista" você terá os produtos que costuma comprar e outros produtos que deseja comprar, é uma lista editável que facilita sua compra!;</p>
        <p>- Desenho do "Carrinho de Compras", nele você poderá visualizar toda sua a compra;</p>
        <p>- Olá Cliente!, algums dicas e funcionalidades do MarketPlace;</p>
        <p>- Para falar conosco basta clicar em "Contato", você pode esclarecer dúvidas e dar sugestões;</p>
        <p>- Clique em "Social" e siga-nos no Facebook, Instagram, Twitter ou Youtube, não esqueça de compartilhar nossas publicações! (se disponível);</p>
        <p>- "FAQ", são perguntas frequentes já respondidas, talvez a resposta para sua dúvida já esteja aqui;</p>
        <p>- Você "Precisa de Ajuda?"", você encontrará este link em vários lugares no e poderá solucionar sua dúvida, como esta aqui!</p>
        <p>- Clique em "Departamentos" para visualizar os produtos de cada setor, se não encontrar você pode ir em "Buscar produtos...";</p>
        <p>- ...Ou você pode ir diretamente e ver as ofertas, isso é ótimo!;</p>
        <p>- Sempre novas receitas para você expandir seus conhecimentos culinários! É só clicar e automaticamente os produtos necessários são colocados em seu carrinho de compras, fácil né!?!;</p>
        <p>- Atendimento ao Cliente</p>
        <p>- Só mais uma coisa</p>
        <h6>Obrigado por estar conosco!</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Entendi!</button>
      </div>
    </div>
  </div>
  </div>
<!-- MODAL PRECISA DE AJUDA? NAVBAR - FINAL -->

<!-- MODAL ADICIONADO AO CARRINHO - INICIO -->
<div class="modal fade" id="modaladdcart" tabindex="-1" role="dialog" aria-labelledby="modaladdcart" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content border text-white bg-warning">
      <div class="modal-header">
        <h6 class="modal-title" id="modaladdcart"><i class="fa fa-shopping-cart"></i> Produto adicionado ao carrinho com sucesso!</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL ADICIONADO AO CARRINHO - FINAL -->