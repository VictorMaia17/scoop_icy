<?php

require_once ("include_dao.php");

$botao = isset($_POST['botao']) ? $_POST['botao'] : "";
$pesquisa = isset($_GET['pesquisa']) ?  $_GET['pesquisa'] : ""; 

$loja = new Loja();
$lojaDAO = new LojaDAO();
$atendimento = new Atendimento();
$atendimentoDAO = new AtendimentoDAO();			

if (empty($pesquisa)){

	$lojas = $lojaDAO->listartodos();

}			

else{

	$lojas = $lojaDAO->pesquisar($pesquisa);

}
 
//login

if($botao == "logar"){
	$email = isset($_POST['email']) ? $_POST['email'] : "";
	$password = isset($_POST['password']) ? $_POST['password'] : "";

	$resultado = $lojaDAO->logar($email, $password);

	if($resultado == false){
		print("Email ou senha INCORRETO!");
	}
	else{
		session_start();
		$_SESSION['usuario'] = $email;
		header("location:index.html");
	}
}


if($botao == "cadastrar"){

	$origem = $_POST['origem'];

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

	else{

		$novoNome = "semFoto.png";

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

	$hora_abre = "";
	$hora_fecha = "";

	//ADICIONA OS DIAS EM QUE A EMPRESA FUNCIONA
	$dias_selecionados = isset($_POST['dias_selecionados']) ? $_POST['dias_selecionados'] : "";

    $dias_semana = [

		["domingo", ""],
		["segunda", ""],
		["terca", ""],
		["quarta", ""],
		["quinta", ""],
		["sexta", ""],
		["sabado", ""]

	];

	for($i = 0; $i <= 6; $i++){

		foreach($dias_selecionados as $selecionados){

			if($dias_semana[$i][0] == $selecionados){

				$dias_semana[$i][1] = "1";
				break;

			}

			else{

				$dias_semana[$i][1] = "0";

			}
		
	}
	}
	
	$atendimento->setLoja_cod($lojaDAO->retorna_id());
    $atendimento->setDomingo($dias_semana[0][1]);  
	$atendimento->setSegunda($dias_semana[1][1]);  
	$atendimento->setTerca($dias_semana[2][1]);
	$atendimento->setQuarta($dias_semana[3][1]);
	$atendimento->setQuinta($dias_semana[4][1]);
	$atendimento->setSexta($dias_semana[5][1]);
	$atendimento->setSabado($dias_semana[6][1]);
	$atendimento->setHora_abre($hora_abre);
	$atendimento->setHora_fecha($hora_fecha);

    $resultado = $atendimentoDAO->inserir($atendimento);
	
	if($origem == "gerenciarLoja"){

		header("location:gerenciarLoja.php");

	} 
	
	else{

		header("location:index.html");

	}
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

	$resultado = $lojaDAO->atualizar($loja);
	header("location:gerenciar.php");

}

else if($botao == "Deletar"){
	$cod = isset($_POST['cod']) ? $_POST['cod'] : "";
	$lojaDAO->deletar($cod);
	header("location:gerenciar.php");
}


	
?>