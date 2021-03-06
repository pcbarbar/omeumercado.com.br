<!DOCTYPE html>
<html lang="pt-br">
  <head>

    <?php include 'templates/header.html'; ?>

    <style>
      /* IMAGEM DE FUNDO PARA O FAQ*/
      .big-banner {
        background-image: url("imagens/bg_faq.png");
        background-repeat: repeat;
        background-size: 30%;
      }
      /* ESTILO DOS LINKS DO FAQ */
      .btn-link {
        color: #000;
      }
      .btn-link:focus, .btn-link:hover {
        color: #000;
        text-decoration: none;
      }
      .btn-link i {
        margin-right: 10px;
      }
    </style>
  </head>
  <body>

    <?php include 'templates/menu.html'; ?>

<!-- FAQ - INÍCIO -->
    <section id="faq">
      <div class="container big-banner shadow margem-superior-60">
        <div class="accordion pl-5 pr-5">
          <div class="card">
            <div class="card-header" id="faq1">
              <div class="mb-0 mt-2">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1"><h4 class="h4responsiva"><i class="far fa-caret-square-right"></i> O que é FAQ? <i class="fas fa-user-tie"></i><i class="fas fa-user"></i></h4>
                </button>
              </div>
            </div>
            <div id="collapse1" class="collapse show" aria-labelledby="faq1" data-parent="#faq">
              <div class="card-body"><p>FAQ é um acrônimo da expressão inglesa <em>Frequently Asked Questions</em> em português seria algo como "Perguntas Frequentes". Um FAQ, quando usado num contexto pluralista, significa uma compilação de perguntas frequentes acerca de determinado tema; quando usado num contexto singular, será uma dessas perguntas frequentes.</p>
              </div>
            </div>
          </div>
          <div class="card border-bottom">
            <div class="card-header" id="faq2">
              <div class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2"><h4 class="h4responsiva"><i class="far fa-caret-square-right"></i> Como faço para me cadastrar? <i class="fas fa-user-tie"></i><i class="fas fa-user"></i></h4>
                </button>
              </div>
            </div>
          </div>
          <div id="collapse2" class="collapse bg-white" aria-labelledby="faq2" data-parent="#faq">
            <div class="card-body"><p>R2 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="faq3">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3"><h4 class="h4responsiva"><i class="far fa-caret-square-right"></i> Quanto vai me custar? <i class="fas fa-user-tie"></i></h4>
                </button>
              </h5>
            </div>
            <div id="collapse3" class="collapse" aria-labelledby="faq3" data-parent="#faq">
              <div class="card-body"><p>R3 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
            </div>
          </div>
          <div class="card border">
            <div class="card-header" id="faq4">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4"><h4 class="h4responsiva"><i class="far fa-caret-square-right"></i> Onde faço compras? <i class="fas fa-user"></i></h4>
                </button>
              </h5>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="faq4" data-parent="#faq">
              <div class="card-body"><p>R4 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
            </div>
          </div>
          <div class="card border">
            <div class="card-header" id="faq5">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5"><h4 class="h4responsiva"><i class="far fa-caret-square-right"></i> Esta é uma pergunta muito grande, será que é 5? <i class="fas fa-user-tie"></i><i class="fas fa-user"></i></h4>
                </button>
              </h5>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="faq5" data-parent="#faq">
              <div class="card-body"><p>R5 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
            </div>
          </div>
          <div class="card border">
            <div class="card-header" id="faq6">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6"><h4 class="h4responsiva"><i class="far fa-caret-square-right"></i> Pergunta 6? <i class="fas fa-user-tie"></i><i class="fas fa-user"></i></h4>
                </button>
              </h5>
            </div>
            <div id="collapse6" class="collapse" aria-labelledby="faq6" data-parent="#faq">
              <div class="card-body"><p>R6 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
            </div>
          </div>
          <div class="card border">
            <div class="card-header" id="faq7">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7"><h4 class="h4responsiva"><i class="far fa-caret-square-right"></i> Pergunta 7? <i class="fas fa-user-tie"></i><i class="fas fa-user"></i></h4>
                </button>
              </h5>
            </div>
            <div id="collapse7" class="collapse" aria-labelledby="faq7" data-parent="#faq">
              <div class="card-body"><p>R7 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
            </div>
          </div>


  <!-- COPIAR ESTRUTURA DE PARA MAIS PERGUNTAS DO FAQ DAQUI - INICIO -->
          <div class="card border">
            <div class="card-header" id="faq8">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8"><h4 class="h4responsiva"><i class="far fa-caret-square-right"></i> Pergunta 8? <i class="fas fa-user-tie"></i><i class="fas fa-user"></i></h4>
                </button>
              </h5>
            </div>
            <div id="collapse8" class="collapse" aria-labelledby="faq8" data-parent="#faq">
              <div class="card-body"><p>R8 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
              </div>
            </div>
          </div>
<!-- COPIAR ESTRUTURA DE PARA MAIS PERGUNTAS DO FAQ DAQUI - FINAL -->


        </div>
      </div>
    </section>
<!-- FAQ - FINAL -->


    <?php include 'templates/footer.html'; ?>

  </body>
</html>