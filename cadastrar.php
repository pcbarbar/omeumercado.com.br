<!DOCTYPE html>
<html lang="pt-br">
<head>

	<?php include 'header.html'; ?>
	<link rel="stylesheet" href="css/entradas.css">

</head>
<body>

	<?php include 'menu.html'; ?>

<!-- MODAL PRECISA DE AJUDA? CLIENTE - INICIO -->
	<div class="modal fade" id="modalcliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Precisa de Ajuda?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Olá Cliente Amigo! Para iniciar o cadastro basta preencher os campos corretamente: seu E-mail, nome completo, número do CPF, ddd e celular. Caso tenha um Cupom de Indicação, esse é o momento de usar, para mais informações basta consultar o FAQ disponível no menu. Após este pré-cadastro você receberá nosso E-mail de confirmação. Espero ter ajudado e seja bem-vindo ao OMeuMercado!!!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Entendi!</button>
          </div>
        </div>
      </div>
    </div>
<!-- MODAL PRECISA DE AJUDA? CLIENTE - FINAL -->


<!-- MODAL PRECISA DE AJUDA? PARCEIRO - INICIO -->
<div class="modal fade" id="modalparceiro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Precisa de Ajuda?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Olá Parceiro! Para iniciar o cadastro basta preencher os campos corretamente: seu E-mail, nome completo, número do CPF, ddd e celular. Caso tenha um Cupom de Indicação, esse é o momento de usar, para mais informações basta consultar o FAQ disponível no menu. Após este pré-cadastro você receberá nosso E-mail de confirmação. Espero ter ajudado e seja bem-vindo ao OMeuMercado!!!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Entendi!</button>
          </div>
        </div>
      </div>
    </div>
<!-- MODAL PRECISA DE AJUDA? PARCEIRO - FINAL -->



	<div class="container register rounded shadow mt-3">
		<div class="row">
			<div class="col-md-3 register-left">
				<img src="imagens/logoomeumercado90.png" alt=""/>
				<h3>Bem-vindo</h3>
				<p>Você está a 1 minuto de começar a economizar!</p>
				<h6 style="font-weight: 300;">Já tem conta?</h6>
				<a class="text-dark" style="text-decoration: none;" href="login.php"><button class="btn btn-light btn-block rounded-pill">Entrar</button></a><br>
			</div>
			<div class="col-md-9 register-right">
				<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Cliente</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Parceiro</a>
					</li>
				</ul>

				<!-- CADASTRO DE CLIENTE -->
				<div class="tab-content pt-5" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<h3 class="register-heading">Quero criar conta como Cliente</h3>
						<div class="row register-form">
							<div class="col-md-6">
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-user"></i> </span>
									</div>
									<input name="" class="form-control rounded-pill" placeholder="Nome Completo" type="text" required>
								</div> <!-- form-group// -->
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
									</div>
									<input name="" class="form-control rounded-pill" placeholder="Endereço de E-mail" type="email" required>
								</div> <!-- form-group// -->
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
									</div>
									<input name="" class="form-control rounded-pill" placeholder="C.P.F." type="text" required>
								</div> <!-- form-group// -->
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
									</div>
								<input name="" class="form-control rounded-pill" placeholder="DDD" type="number" style="max-width: 100px;" required>
								<input name="" class="form-control rounded-pill" placeholder="Celular" type="text" required>
							</div> <!-- form-group// -->
						</div>
						<div class="col-md-6">
							<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> <i class="fa fa-ticket-alt"></i> </span>
								</div>
								<input name="" class="form-control rounded-pill" placeholder="Cupom Indicação Opcional" type="text">
							</div> <!-- form-group// -->
							<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
								</div>
								<input class="form-control rounded-pill" placeholder="Crie sua senha" type="password">
							</div> <!-- form-group// -->
							<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
								</div>
								<input class="form-control rounded-pill" placeholder="Repita sua senha" type="password">
							</div> <!-- form-group// -->                                      
							<a href="#" data-toggle="modal" data-target="#modalcliente" style="text-decoration: none;" ><h6 class="text-right mb-3">Precisa de ajuda?</h6></a>
							<h1 class="termos-contrato text-black mb-1 text-justify">Ao prosseguir, eu concordo com os <a href="#"><u>Termos de Uso</u></a> do OMEUMERCADO e confirmo que li a <a href="#"><u>Política de Privacidade</u></a>.</h1>
							<h1 class="termos-contrato text-black mb-4 text-justify">Eu também concordo que o OMEUMERCADO e seus representantes podem entrar em contato comigo por whatsapp, e-mail, telefone ou SMS (inclusive por meios automatizados) no endereço de e-mail ou número que eu forneci, inclusive para fins de marketing.</h1>
							<a class="" style="text-decoration: none;" href="#"><button class="btn btn-primary btn-block rounded-pill">Criar Conta</button></a>
						</div>
					</div>
				</div>
				<!-- CADASTRO DE PARCEIRO -->
					<div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<h3  class="register-heading">Quero criar conta como Parceiro</h3>
						<div class="row register-form">
							<div class="col-md-6">
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-user"></i> </span>
									</div>
									<input name="" class="form-control rounded-pill" placeholder="Nome Completo" type="text" required>
								</div> <!-- form-group// -->
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
									</div>
									<input name="" class="form-control rounded-pill" placeholder="Endereço de E-mail" type="email" required>
								</div> <!-- form-group// -->
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
									</div>
									<input name="" class="form-control rounded-pill" placeholder="C.P.F." type="text" required>
								</div> <!-- form-group// -->
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
									</div>
									<input name="" class="form-control rounded-pill" placeholder="DDD" type="number" style="max-width: 100px;" required>
									<input name="" class="form-control rounded-pill" placeholder="Celular" type="text" required>
								</div> <!-- form-group// -->
							</div>
							<div class="col-md-6">
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-store"></i> </span>
									</div>
									<input name="" class="form-control rounded-pill" placeholder="Nome Fantasia" type="text">
								</div> <!-- form-group// -->
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="far fa-id-card"></i> </span>
									</div>
									<input name="" class="form-control rounded-pill" placeholder="C.N.P.J." type="text">
								</div> <!-- form-group// -->
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-ticket-alt"></i> </span>
									</div>
									<input name="" class="form-control rounded-pill" placeholder="Cupom Indicação Opcional" type="text">
								</div> <!-- form-group// -->
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
									</div>
									<input class="form-control rounded-pill" placeholder="Crie sua senha" type="password">
								</div> <!-- form-group// -->
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
									</div>
									<input class="form-control rounded-pill" placeholder="Repita sua senha" type="password">
								</div> <!-- form-group// -->                                      
								<a href="#" data-toggle="modal" data-target="#modalparceiro" style="text-decoration: none;" ><h6 class="text-right mb-3">Precisa de ajuda?</h6></a>
				                <h1 class="termos-contrato text-black mb-1 text-justify">Ao prosseguir, eu concordo com os <a href="#"><u>Termos de Uso</u></a> do OMEUMERCADO e confirmo que li a <a href="#"><u>Política de Privacidade</u></a>.</h1>
								<h1 class="termos-contrato text-black mb-4 text-justify">Eu também concordo que o OMEUMERCADO e seus representantes podem entrar em contato comigo por whatsapp, e-mail, telefone ou SMS (inclusive por meios automatizados) no endereço de e-mail ou número que eu forneci, inclusive para fins de marketing.</h1>
								<a class="" style="text-decoration: none;" href="#"><button class="btn btn-primary btn-block rounded-pill">Criar Conta</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.html'; ?>

</body>
</html>