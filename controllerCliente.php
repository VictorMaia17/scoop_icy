<?php

require_once ("include_dao.php");

$botao = isset($_POST['botao']) ? $_POST['botao'] : "";

$cliente = new Cliente();
$clienteDAO = new ClienteDAO();

$usuarios = $clienteDAO->listarTodos();

if($botao == "enviar"){
	$login = isset($_POST['login']) ? $_POST['login'] : "";
	$senha = isset($_POST['senha']) ? $_POST['senha'] : "";

	$resultado = $clienteDAO->logar($login, $senha);

	if($resultado == false){
		print("Login ou senha INCORRETO!");
	}
	else{
		session_start();
		$_SESSION['usuario'] = $login;
		header("location:logado.php");
	}
}

else if($botao == "cadastrar"){
	
	$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
	$email = isset($_POST['email']) ? $_POST['email'] : "";
	$rua = isset($_POST['rua']) ? $_POST['rua'] : "";
	$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : "";

	$cliente->setNome($login);
	$cliente->setLogin($senha);
	$resultado = $usuarioDAO->cadastrar($usuarioModel);

}

?>