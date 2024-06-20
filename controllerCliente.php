<?php

require_once ("include_dao.php");

$botao = isset($_POST['botao']) ? $_POST['botao'] : "";
$pesquisa = isset($_GET['pesquisa']) ?  $_GET['pesquisa'] : "";
$action = isset($_GET['action']) ? $_GET['action'] : "";
$cliente = new Cliente();
$clienteDAO = new ClienteDAO();

function testaSession(){
	if (empty($_SESSION['usuario'])){

		echo "
		<script>
		mostraModal();
		</script>";
		
	}
	
	else{
		
		echo "
		<script>
		window.location.href='gerenciarLoja.php';
		</script>";
		
	}
  }

  if ($action == 'testaSession') {
    testaSession();
    exit;
}

if (empty($pesquisa)){

	$clientes = $clienteDAO->listartodos();

}			

else{

	$clientes = $clienteDAO->pesquisar($pesquisa);

}

if($botao == "logar"){
	$email = isset($_POST['email']) ? $_POST['email'] : "";
	$password = isset($_POST['password']) ? $_POST['password'] : "";

	$resultado = $clienteDAO->logar($email, $password);

	if($resultado == false){
		print("Email ou senha INCORRETO!");
	}
	else{
		session_start();
		$_SESSION['usuario'] = $email;
		header("location:index.php");
	}
}

else if($botao == "cadastrar"){

	$origem = $_POST['origem'];

	$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
	$numero = isset($_POST['numero']) ? $_POST['numero'] : "";
	$rua = isset($_POST['rua']) ? $_POST['rua'] : "";
	$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : "";
	$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : "";
  	$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : "";
  	$email = isset($_POST['email']) ? $_POST['email'] : "";
  	$password = isset($_POST['password']) ? $_POST['password'] : "";
  	$complemento = isset($_POST['complemento']) ? $_POST['complemento'] : "";
  	$login = isset($_POST['login']) ? $_POST['login'] : "";
  
	$cliente->setNome($nome);
	$cliente->setNumero($numero);
	$cliente->setRua($rua);
  	$cliente->setTelefone($telefone);
  	$cliente->setBairro($bairro);
  	$cliente->setCidade($cidade);
  	$cliente->setEmail($email);
  	$cliente->setSenha($password);
  	$cliente->setComplemento($complemento);
  	$cliente->setLogin($login);
	
	
	$resultado = $clienteDAO->inserir($cliente);

	if($origem == "cadastrarCliente"){

		header("location:index.php");
		
	} 
	
	else{
		
		header("location:gerenciarCliente.php");

	}

}

else if($botao == "editar"){

	$cod = isset($_POST['cod']) ? $_POST['cod'] : "";
	$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
	$numero = isset($_POST['numero']) ? $_POST['numero'] : "";
	$rua = isset($_POST['rua']) ? $_POST['rua'] : "";
	$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : "";
	$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : "";
  	$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : "";
  	$email = isset($_POST['email']) ? $_POST['email'] : "";
  	$password = isset($_POST['password']) ? $_POST['password'] : "";
  	$rg = isset($_POST['rg']) ? $_POST['rg'] : "";
  	$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : "";
  	$complemento = isset($_POST['complemento']) ? $_POST['complemento'] : "";
  	$login = isset($_POST['login']) ? $_POST['login'] : "";


	$cliente->setCod($cod);
	$cliente->setNome($nome);
	$cliente->setNumero($numero);
	$cliente->setRua($rua);
	$cliente->setTelefone($telefone);
	$cliente->setBairro($bairro);
	$cliente->setCidade($cidade);
	$cliente->setEmail($email);
	$cliente->setSenha($password);
	$cliente->setComplemento($complemento);
	$cliente->setLogin($login);

	$resultado = $clienteDAO->atualizar($cliente);
	header("location:gerenciar.php");

}

else if($botao == "Deletar"){
	$cod = isset($_POST['cod']) ? $_POST['cod'] : "";
	$clienteDAO->deletar($cod);
	header("location:gerenciar.php");
}


	
?>