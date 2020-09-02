<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "cadastros";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
//if (!$conn) {
//      die("Connection failed: " . mysqli_connect_error());
//}


$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$email = strtolower($email);
$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$nome = strtoupper($nome);
$cpf = mysqli_real_escape_string($conn, trim($_POST['cpf']));
$ddd = mysqli_real_escape_string($conn, trim($_POST['ddd']));
$celular = mysqli_real_escape_string($conn, trim($_POST['celular']));
//$senha = mysqli_real_escape_string($conn, trim(md5($_POST['senha'])));
$cupomindica = mysqli_real_escape_string($conn, trim($_POST['cupomindica']));
$cupomindica = strtoupper($cupomindica);

// Verifica se já existe o cadastro em cadastrogeral e se está ainda no précadastro
$query = "SELECT email, cpf, precadastro FROM cadastrogeral WHERE email = '$email' or cpf = '$cpf'";
$resultado = mysqli_query($conn, $query);
$qtd = mysqli_num_rows($resultado); 
$row = $resultado->fetch_assoc();

if ($qtd == 1 and $row[precadastro]) {
	$_SESSION['retornovalidacao'] = "<div class='container borderyellow big-banner'><h2 class='text-left'><i class='fas fa-exclamation textoyellow'></i> Pedido de cadastro</h2><hr><h5 class='text-left font-weight-light'>OPS! Usuário já existente. Para dar continuidade ao cadastro acesse o email enviado anteriormente e verifique na Caixa de Entrada ou Spam/Lixo Eletrônico e siga as intruções, caso esteja com problemas acesse os canais de ajuda ou entre em contato para dar continuidade ao seu pedido de cadastro, você é muito importante para nós!</h5></div>";
	    header("Location: retornoprecadastro.php");
		exit;
} elseif ($qtd == 1 and ! $row[precadastro]) {
	$_SESSION['retornovalidacao'] = "<div class='container borderyellow big-banner'><h2 class='text-left'><i class='fas fa-exclamation textoyellow'></i> Pedido de cadastro</h2><hr><h5 class='text-left font-weight-light'>OPS! Você já está cadastrado. Se for um Parceiro, <a href='loginparceiro.php' style='text-decoration: none';><strong>CLIQUE AQUI</strong></a> para entrar na sua área exclusiva, se for um Cliente, <a href='buscaparceiro.php' style='text-decoration: none';><strong>CLIQUE AQUI</strong></a> para procurar um local e fazer compras perto de você. Agradecemos por estar conosco!</h5></div>";
	    header("Location: retornoprecadastro.php");
		exit;
} 

// Cadastra tudo
$sql = "INSERT INTO precadastro (email, nome, cpf, ddd, celular, cupomindica, created) VALUES ('$email', '$nome', '$cpf', '$ddd', '$celular', '$cupomindica', NOW())";
$sqlgeral = "INSERT INTO cadastrogeral (email, cpf, precadastro) VALUES ('$email', '$cpf', true)";

if (mysqli_query($conn, $sql)) {
    $html1 = "<div class='container bordergreen big-banner'><h2 class='text-left'><i class='far fa-check-circle textogreen'></i> Pedido de cadastro</h2><hr><h5 class='text-left font-weight-light'>Acesse o email enviado com as informações necessárias para o endereço <strong>";
	$html2 = "</strong> para validar seu registro e dar continuidade ao seu pedido de cadastro. Caso não encontre, tente mais tarde ou procure na caixa de spam/lixo eletrônico. Obrigado por se cadastrar!</h5></div>";
	$_SESSION['retornovalidacao'] = "$html1$email$html2";
	mysqli_query($conn, $sqlgeral);
	header("Location: retornoprecadastro.php");
} else {
	$_SESSION['retornovalidacao'] = "<div class='container borderred big-banner'><h2 class='text-left'><i class='fas fa-times'></i> Pedido de cadastro</h2><hr><h5 class='text-left font-weight-light'>Houve um erro ao tentar realizar o seu registro, tente novamente mais tarde. Se o erro persistir, acesse os canais de ajuda ou entre em contato para dar continuidade ao seu pedido de cadastro, você é muito importante para nós. Pedimos desculpas pelo incoveniente.</h5></div>";
	//echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header("Location: retornoprecadastro.php");
}
mysqli_close($conn);
?>