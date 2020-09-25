<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <?php include 'templates/header.html'; ?>

    <style>
    </style>
  </head>
  <body>

    <?php include 'templates/menu.php'; ?>

    <div class="container bg-white mt-5 rounded shadow">
      <div class="row pt-3 pb-3 pr-3 pl-3">
        <div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-8 mb-3"> <!-- Coluna da Imagem-->
          <img class="imgproddetails mx-auto d-block" src="imagens/wella.png">
        </div> <!-- Coluna da Imagem-->
        <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-4 mt-3 rounded border"> <!-- Coluna dos Detalhes-->
          <div class="container mt-5">
            <div class="row"> <!-- Descrição e Preços -->
              <span class="card-notify-oferta"><i class="fa fa-tag"></i> OFERTA</span>
              <a type="button" class="btn-minhalista" href="#"><i class="far fa-list-alt"></i></a>  
              <h5 class=""><strong>Kit Wella Professionals Invigo Color Brilliance</strong></h5>
            </div>
            <div class="row mt-3 mb-1">
              <h6 class="text-secondary ml-4"><del>R$ 23,99</del></h6>
            </div>
            <div class="row">
              <div class="col">
                <h3 class="text-dark"><strong>R$ 20,39</strong></h3>
              </div>
              <div class="col">
                <h5 class="text-success align-top">15% OFF</h5>
              </div>
            </div> <!-- Descrição e Preços -->
            <div class="row mt-3">
              <span class="text-info" style="font-size: 13px;"><strong><i class="fas fa-info-circle"></i> Estoque Disponível</strong></span>
              <!--<span class="text-danger" style="font-size: 13px;"><strong><i class="fas fa-info-circle"></i> Estoque Indisponível</strong></span>-->
            </div>
            <div class="row mt-1">
              <span class="text-info" style="font-size: 13px;"><strong><i class="fas fa-info-circle"></i> Prazo de Entrega: 5 horas</strong></span>
            </div>
            <div class="row mt-0">
              <a href="trocaedevol.php" target="_blank"><span class="text-info" style="font-size: 13px;"><strong><i class="fas fa-info-circle"></i><u> Política de Trocas e Devoluções</u></strong></span></a>
            </div>
            <div class="row mt-3">
              <span class="text-secondary text-justify" style="font-size: 13px;">Outras Informações Pertinentes: Tipos de Pagamentos, Aceita Cartões e Boletos, Tempo de Entrega, Mais Vendidos, Parte de alguma Receita de Minhas Receitas, etc...</span>
            </div>
            <div class="row mt-4 ml-2"> <!-- QUANTIDADE | INICIO-->
                <span class=""><strong>Quantidade:</strong></span>
            </div>
            <div class="row">
              <div class="col-5 pr-1 pl-1">
                <div class="input-group">
                  <div class="input-group-append">
                      <button class="btn btn-warning rounded" id="minus-btn"><i class="fa fa-minus"></i></button>
                  </div>
                  <input type="number" id="qty_input" class="text-center form-control form-control" value="1" min="1">
                  <div class="input-group-append">
                      <button class="btn btn-warning rounded" id="plus-btn"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-7 pr-0 pl-0">
                <a href="#" data-toggle="modal" data-target="#modaladdcart"><button class="btn btn-warning rounded pt-2 pb-2 w-100" style="font-size: 13px;"><strong>Adicionar ao carrinho</strong><i class="fa fa-shopping-cart"></i></button></a>
              </div>
            </div> <!-- QUANTIDADE | FINAL -->
            <div class="row mt-1 mb-2">
              <a class="w-100" href="meucarrinho.php"><button class="btn btn-warning rounded pt-2 pb-2 w-100" style="font-size: 13px;"><strong>COMPRAR AGORA </strong></button></a>
            </div>
            <hr>
            <div class="row mt-3 ml-1">
              <p class="text-secondary text-justify" style="font-size: 13px;">Caso Usuário esteja logado pode-se colocar endereço de entrega aqui e outras informações pertinentes:</p>              
              <p class="text-info" style="font-size: 13px;"><i class="fas fa-map-marker-alt"></i> Rua Teixeira Soares, 9853 - Centro</p>
            </div>
          </div> <!-- Container geral para as margens dos Detalhes-->
        </div> <!-- Coluna dos Detalhes-->
      </div> <!-- Linha Geral -->
    </div> <!-- Container Principal -->



    <div class="container mt-5">
        <div class="row">
          <div class="col">
            <div class="card cardproddet card-nav-tabs">
              <div class="card-header card-header-warning">
                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                <div class="nav-tabs-navigation">
                  <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" data-tabs="tabs">
                      <li class="nav-item">
                          <a class="nav-link active" href="#description" data-toggle="tab">Descrição</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#specifications" data-toggle="tab">Especificações</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#others" data-toggle="tab">Outros</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="tab-content text-center">
                  <div class="tab-pane active" id="description">
                      <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                  </div>
                  <div class="tab-pane" id="specifications">
                      <p> I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
                  </div>
                  <div class="tab-pane" id="others">
                      <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container rounded cardprod mt-4 mb-5">
      <div class="row">
        <?php include 'templates/prodcard.php'; ?>
        <?php include 'templates/prodcard.php'; ?>
        <?php include 'templates/prodcard.php'; ?>
        <?php include 'templates/prodcard.php'; ?>
      </div>
    </div>




    <?php include 'templates/footer.html'; ?>

    <script>
      // Quantidade do Produto //
      $(document).ready(function(){
        $('#qty_input').prop('disabled', true);
        $('#plus-btn').click(function(){
          $('#qty_input').val(parseInt($('#qty_input').val()) + 1 );
          });
          $('#minus-btn').click(function(){
            $('#qty_input').val(parseInt($('#qty_input').val()) - 1 );
            if ($('#qty_input').val() == 0) {
            $('#qty_input').val(1);
            }
          });
      });
    </script>

</body>
</html>