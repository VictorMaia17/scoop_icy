<?php

require_once ("include_dao.php");

$botao = isset($_POST['botao']) ? $_POST['botao'] : "";
$pesquisa = isset($_GET['pesquisa']) ?  $_GET['pesquisa'] : "";
$loja = new Loja();
$lojaDAO = new LojaDAO();


if (empty($pesquisa)){

	$lojas = $lojaDAO->listartodos();

}			

else{

	$lojas = $lojaDAO->pesquisar($pesquisa);

}

//login

/*if($botao == "enviar"){
	$email = isset($_POST['email']) ? $_POST['email'] : "";
	$password = isset($_POST['password']) ? $_POST['password'] : "";

	$resultado = $clienteDAO->logar($email, $password);

	if($resultado == false){
		print("Email ou senha INCORRETO!");
	}
	else{
		session_start();
		$_SESSION['usuario'] = $email;
		header("location:logado.php");
	}
}
*/

else if($botao == "cadastrar"){

	$foto = isset($_FILES['foto']) ? $_FILES['foto'] : "";

	if(!empty($foto)){

		$name = explode(".", $foto['name']);

		if ($name[1] == "jpg" || $name[1] == "png" || $name[1] == "jpeg"){
			
			$novoNome = "cliente-".md5(time()*rand()).".".$name[1];
			$destino = "clientes_img/$novoNome";
			move_uploaded_file($foto["tmp_name"], $destino);
			//var_dump($foto);
		}
	
	}
	else{
		$novoNome = "semFoto.png";
	}
	$nome = isset($_POST['nome']) ? $_POST['nome'] : "";
	$cnpj = isset($_POST['cnpj']) ? $_POST['cnpj'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
	$numero = isset($_POST['numero']) ? $_POST['numero'] : "";
	$rua = isset($_POST['rua']) ? $_POST['rua'] : "";
	$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : "";
    $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : "";
    $complemento = isset($_POST['complemento']) ? $_POST['complemento'] : "";
    $login = isset($_POST['login']) ? $_POST['login'] : "";
    $status = isset($_POST['status']) ? $_POST['status'] : "";
    $logo = isset($_POST['logo']) ? $_POST['logo'] : "";
    $foto_fundo = isset($_POST['foto_fundo']) ? $_POST['foto_fundo'] : "";
    $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : "";
    $dias = isset($_POST['dias']) ? $_POST['dias'] : "";
    $instagram = isset($_POST['instagram']) ? $_POST['instagram'] : "";
    $facebook = isset($_POST['facebook']) ? $_POST['facebook'] : "";
    $taxa_entrega = isset($_POST['taxa_entrega']) ? $_POST['taxa_entrega'] : "";
	$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : "";

	$cliente->setFotos($novoNome);  
	$cliente->setNome($nome);
	$cliente->setNumero($numero);
	$cliente->setRua($rua);
  	$cliente->setTelefone($telefone);
  	$cliente->setBairro($bairro);
  	$cliente->setCidade($cidade);
  	$cliente->setEmail($email);
  	$cliente->setSenha($password);
  	$cliente->setRg($rg);
  	$cliente->setCpf($cpf);
  	$cliente->setComplemento($complemento);
  	$cliente->setLogin($login);
	
	
	$resultado = $clienteDAO->inserir($cliente);
	header("location:gerenciar.php?msg=adicionado");

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