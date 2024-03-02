<?php

require_once ("include_dao.php");

$botao = isset($_GET['botao']) ? $_GET['botao'] : "";

$cliente = new Cliente();
$clienteDAO = new ClienteDAO();

if($botao == "enviar"){
	$login = isset($_GET['login']) ? $_GET['login'] : "";
	$senha = isset($_GET['senha']) ? $_GET['senha'] : "";

	$resultado = $clienteDAO->logar($login, $senha);

	if($resultado == false){
		print("Login ou senha INCORRETO!");
	}
	else{
		session_start();
		$_SESSION['usuario'] = $login;
		echo("Deu certo!!!");
	}
}

else if($botao == "cadastrar"){
	
	$login = isset($_GET['login']) ? $_GET['login'] : "";
	$senha = isset($_GET['senha']) ? $_GET['senha'] : "";

	$usuarioModel->setLogin($login);
	$usuarioModel->setLogin($senha);
	$resultado = $usuarioDAO->cadastrar($usuarioModel);

}

?>