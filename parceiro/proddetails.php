<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <?php include 'templates/header.html'; ?>

    <style>
    </style>
  </head>
  <body>

    <?php include 'templates/menu.html'; ?>


    <div class="container bg-white mt-5 rounded shadow">
      <div class="row pt-3 pb-3 pr-3 pl-3">
        <div class="col-8">
          <img class="mx-auto d-block" src="imagens/wella.png" style="max-width: 600px">
        </div> <!-- Coluna da Imagem-->
        <div class="col-4 rounded border">
          <div class="row mt-5 mb-4 mr-1 ml-1">
            <span class="card-notify-oferta"><i class="fa fa-tag"></i> OFERTA</span>
            <h5 class=""><strong>Kit Wella Professionals Invigo Color Brilliance</strong></h5>
          </div>

          <div class="row mb-2">
            <h6 class="text-secondary ml-4"><del>R$ 23,99</del></h6>
          </div>
          <div class="row">
            <div class="col">
              <h3 class="text-dark"><strong>R$ 20,39</strong></h3>
            </div>
            <div class="col">
              <h5 class="text-success align-top">15% OFF</h5>
            </div>
          </div>

          <div class="row mt-3">

          
            <div class="input-group">
              <div class="input-group-append">
                  <button class="btn btn-dark btn-sm" id="minus-btn"><i class="fa fa-minus"></i></button>
              </div>
              <input type="number" id="qty_input" class="text-center form-control form-control-sm" value="1" min="1">
              <div class="input-group-append">
                  <button class="btn btn-dark btn-sm" id="plus-btn"><i class="fa fa-plus"></i></button>
              </div>
            </div>
                        
                        
          </div>
                

          



        </div> <!-- Coluna dos Detalhes-->
      </div> <!-- Linha Geral -->
    </div> <!-- Container Principal -->


    

    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>



    <?php include 'templates/footer.html'; ?>

    <script>
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