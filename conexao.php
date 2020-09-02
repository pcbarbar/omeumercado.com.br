<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'omeumercado');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

//if(mysqli_connect_errno($conexao)){
//	echo "FALHA NA CONEXÃO";
//}else{
//	echo "CONEXÃO OK!";
//}
?>