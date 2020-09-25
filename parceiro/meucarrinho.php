<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <?php include 'templates/header.html'; ?>

    <!-- Carousel CSS -->
    <link rel="stylesheet" href="/css/carousel.css">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap');
    </style>
  </head>
  <body>

    <?php include 'templates/menu.php'; ?>
    <?php include 'templates/carousel.php'; ?>

    <div class="container mt-5">
      <div class="container linhadepar w-50 ml-0 mb-4">
        <h2 class="text-dark">Meu Carrinho <i class="fa fa-shopping-cart"></i></h2>
      </div>
    </div>

    <div class="container shoping__cart bg-white rounded shadow">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Produto</th>
                                    <th>Preço</th>
                                    <th>Quantidade</th>
                                    <th>Total</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php include 'templates/prodcart.php'; ?>
                                <?php include 'templates/prodcart.php'; ?>
                                <?php include 'templates/prodcart.php'; ?>
                                <?php include 'templates/prodcart.php'; ?>

                              </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <spam><strong>Escolha a Entrega:</strong></spam>
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col">
                                <div class="card cardproddet card-nav-tabs">
                                    <div class="card-header card-header-warning">
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <ul class="nav nav-tabs" data-tabs="tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#local" data-toggle="tab">Endereço</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#retirar" data-toggle="tab">Retirar</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content text-center">
                                            <div class="tab-pane active" id="local">
                                                <p class="text-info" style="font-size: 14px;"><i class="fas fa-map-marker-alt"></i> Rua Teixeira Soares, 9853 - Centro</p>
                                                <p style="font-size: 14px;">Valor da Entrega: R$12,00</p>
                                                <a class="" href="#"><span class="text-secondary" style="font-size: 13px;"><u>Alterar local de entrega</u></span></a>
                                            </div>
                                            <div class="tab-pane" id="retirar">
                                                <span class="text-info" style="font-size: 14px;">Retirar na Rua Fernando Ferrari, 7614 - Centro</span>
                                                <span class="text-secondary" style="font-size: 14px;">Horário Comercial</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <span class="text-secondary">Outras Informações aqui...</span><br>
                    <a class="" href="#"><span class="text-secondary"><u>Política de Entregas</u></span></a><br>
                    <a class="" href="#"><span class="text-danger">Precisa de Ajuda?</span></a>
                </div>
                <div class="col-lg-6">
                    <div class="container rounded border border-secondary shoping__checkout">
                        <h5>Total da Compra:</h5>
                        <ul>
                            <li>Subtotal <span>R$1.000,00</span></li>
                            <li>Valor da Entrega <span>R$12,00</span></li>
                            <li>Desconto <span>R$100,00</span></li>
                            <hr>
                            <li>Total <span>R$912,00</span></li>
                        </ul>
                        <a class="w-100" href="meucarrinho.php"><button class="btn btn-warning rounded pt-2 pb-2 w-100" style="font-size: 14px;"><strong>FINALIZAR COMPRA</strong></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br><br><br><br><br><br><br><br><br>

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