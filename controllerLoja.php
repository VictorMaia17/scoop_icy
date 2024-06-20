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

if($botao == "cadastrar"){

	$logo = isset($_FILES['logo']) ? $_FILES['logo'] : "";

	if(!empty($logo)){

		$name = explode(".", $logo['name']);

		if ($name[1] == "jpg" || $name[1] == "png" || $name[1] == "jpeg"){
			
			$novoNome = "loja-".md5(time()*rand()).".".$name[1];
			$destino = "lojas_logo/$novoNome";
			move_uploaded_file($logo["tmp_name"], $destino);
			//var_dump($foto);
		}
	
	}

	$foto_fundo = isset($_FILES['foto_fundo']) ? $_FILES['foto_fundo'] : "";

	if(!empty($foto_fundo)){

		$name = explode(".", $foto_fundo['name']);

		if ($name[1] == "jpg" || $name[1] == "png" || $name[1] == "jpeg"){
			
			$novaFotoFundo = "loja-".md5(time()*rand()).".".$name[1];
			$destino = "lojas_fundo/$novaFotoFundo";
			move_uploaded_file($foto_fundo["tmp_name"], $destino);
			//var_dump($foto);
		}
	
	}

	else{
		$novaFotoFundo = "nada.jpg";
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
	
	$loja->setFoto_fundo($novaFotoFundo);  
	$loja->setLogo($novoNome);  
	$loja->setNome($nome);
	$loja->setCnpj($cnpj);
	$loja->setEmail($email);
	$loja->setSenha($password);
	$loja->setNumero($numero);
	$loja->setRua($rua);
	$loja->setBairro($bairro);
	$loja->setCidade($cidade);
	$loja->setComplemento($complemento);
	$loja->setLogin($login);
	$loja->setStatus($status);
	$loja->setDescricao($descricao);
	$loja->setDias($dias);
	$loja->setInstagram($instagram);
	$loja->setFacebook($facebook);
	$loja->setTaxa_entrega($taxa_entrega);
	$loja->setTelefone($telefone);
	
	
	$resultado = $lojaDAO->inserir($loja);
	header("location:gerenciar.php?msg=adicionado");

}

else if($botao == "editar"){

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

	$loja->setFotos($novoNome);  
	$loja->setNome($nome);
	$loja->setCnpj($cnpj);
	$loja->setEmail($email);
	$loja->setSenha($password);
	$loja->setNumero($numero);
	$loja->setRua($rua);
	$loja->setBairro($bairro);
	$loja->setCidade($cidade);
	$loja->setComplemento($complemento);
	$loja->setLogin($login);
	$loja->setStatus($status);
	$loja->setDescricao($descricao);
	$loja->setDias($dias);
	$loja->setInstagram($instagram);
	$loja->setFacebook($facebook);
	$loja->setTaxa_entrega($taxa_entrega);
	$loja->setTelefone($telefone);

	$resultado = $lojaDAO->atualizar($loja);
	header("location:gerenciar.php");

}

else if($botao == "Deletar"){
	$cod = isset($_POST['cod']) ? $_POST['cod'] : "";
	$lojaDAO->deletar($cod);
	header("location:gerenciar.php");
}


	
?>