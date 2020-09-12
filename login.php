<!DOCTYPE html>
<html lang="pt-br">
<head>

	<?php include 'templates/header.html'; ?>
	<link rel="stylesheet" href="css/entradas.css">

</head>
<body>

	<?php include 'templates/menu.html'; ?>

<!-- MODAL PRECISA DE AJUDA? LOGIN - INICIO -->
	<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Precisa de Ajuda para fazer Login?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Olá Parceiro! Para iniciar o acesso a sua área exclusiva de administração é necessário fazer o login. Entre por meio de sua conta do Twitter ou Facebook ou então digite seu E-mail ou CPF cadastrado, digite sua senha e clique no botão "Entrar". Caso ainda não tenha cadastro clique no botão "Criar Conta" ou acesse a página inicial clicando no Logotipo do OMeuMercado no topo desta página. Espero ter ajudado!!!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Entendi!</button>
          </div>
        </div>
      </div>
    </div>
<!-- MODAL PRECISA DE AJUDA? LOGIN - FINAL -->


<!-- LOGIN - INÍCIO -->
	<div class="container register rounded shadow mt-3">
		<div class="row">
			<div class="col-md-4 register-left">
				<img src="imagens/logoomeumercado90.png" alt=""/>
				<h3>Bem-vindo</h3>
				<p>Parceiro, você está acessando sua área exclusiva de administração</p>
				<h6 style="font-weight: 300;">Ainda não tem conta?</h6>
				<a class="text-dark" style="text-decoration: none;" href="precadastro.php"><button class="btn btn-light btn-block rounded-pill">Criar Conta</button></a><br>
			</div>
			<div class="col-md-8 register-right">
				<div class="tab-content pt-0" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<h3 class="register-heading"><i class="fas fa-lock"></i> Área Exclusiva do Parceiro</h3>
						<div class="row register-form">
						<div class="container w-75">
								<p>
    								<a href="" class="btn btn-block btn-twitter rounded-pill pr-5 pl-5"> <i class="fab fa-twitter"></i>   Entrar via Twitter</a>
    								<a href="" class="btn btn-block btn-facebook rounded-pill"> <i class="fab fa-facebook-f"></i>   Entrar via Facebook</a>
								</p>
								<hr>
								<div class="form-group input-group mb-0">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
									</div>
									<input name="" class="form-control rounded-pill" placeholder="E-mail" type="email" required>
								</div> <!-- form-group// -->
								<p class="text-center text-secondary mb-0">ou</p>
								<div class="form-group input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
									</div>
									<input name="" class="form-control rounded-pill" placeholder="C.P.F." type="text" required>
								</div> <!-- form-group// -->
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
									</div>
									<input class="form-control rounded-pill" placeholder="Senha" type="password">
								</div> <!-- form-group// -->
								<a href="#" data-toggle="modal" data-target="#modalExemplo" style="text-decoration: none;"><h6 class="text-right mb-3">Precisa de ajuda?</h6></a>
								<button type="submit" class="btn btn-primary btn-block rounded-pill">Entrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- LOGIN - FINAL -->

	<?php include 'templates/footer.html'; ?>

</body>
</html>
