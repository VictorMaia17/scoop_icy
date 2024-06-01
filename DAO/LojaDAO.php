<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class LojaDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM loja WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM loja';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM loja ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM loja WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($loja){
		include("conexao.php");
		$sql = 'INSERT INTO loja (nome, cod, cnpj, email, senha, numero, rua, bairro, cidade, complemento, login, status, logo, foto_fundo, descricao, dias, instagram, facebook, taxa_entrega, telefone) VALUES (:nome, :cod, :cnpj, :email, :senha, :numero, :rua, :bairro, :cidade, :complemento, :login, :status, :logo, :foto_fundo, :descricao, :dias, :instagram, :facebook, :taxa_entrega, :telefone)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':nome',$loja->getNome()); 

		$consulta->bindValue(':cod',$loja->getCod()); 

		$consulta->bindValue(':cnpj',$loja->getCnpj()); 

		$consulta->bindValue(':email',$loja->getEmail()); 

		$consulta->bindValue(':senha',$loja->getSenha()); 

		$consulta->bindValue(':numero',$loja->getNumero()); 

		$consulta->bindValue(':rua',$loja->getRua()); 

		$consulta->bindValue(':bairro',$loja->getBairro()); 

		$consulta->bindValue(':cidade',$loja->getCidade()); 

		$consulta->bindValue(':complemento',$loja->getComplemento()); 

		$consulta->bindValue(':login',$loja->getLogin()); 

		$consulta->bindValue(':status',$loja->getStatus()); 

		$consulta->bindValue(':logo',$loja->getLogo()); 

		$consulta->bindValue(':foto_fundo',$loja->getFoto_fundo()); 

		$consulta->bindValue(':descricao',$loja->getDescricao()); 

		$consulta->bindValue(':dias',$loja->getDias()); 

		$consulta->bindValue(':instagram',$loja->getInstagram()); 

		$consulta->bindValue(':facebook',$loja->getFacebook()); 

		$consulta->bindValue(':taxa_entrega',$loja->getTaxa_entrega()); 

		$consulta->bindValue(':telefone',$loja->getTelefone()); 

		$loja_id = $conn->insert_id;

		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($loja){
		include("conexao.php");
		$sql = 'UPDATE loja SET nome = :nome, cod = :cod, cnpj = :cnpj, email = :email, senha = :senha, numero = :numero, rua = :rua, bairro = :bairro, cidade = :cidade, complemento = :complemento, login = :login, status = :status, logo = :logo, foto_fundo = :foto_fundo, descricao = :descricao, dias = :dias, instagram = :instagram, facebook = :facebook, taxa_entrega = :taxa_entrega , telefone = :telefone WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':nome',$loja->getNome()); 

		$consulta->bindValue(':cod',$loja->getCod()); 

		$consulta->bindValue(':cnpj',$loja->getCnpj()); 

		$consulta->bindValue(':email',$loja->getEmail()); 

		$consulta->bindValue(':senha',$loja->getSenha()); 

		$consulta->bindValue(':numero',$loja->getNumero()); 

		$consulta->bindValue(':rua',$loja->getRua()); 

		$consulta->bindValue(':bairro',$loja->getBairro()); 

		$consulta->bindValue(':cidade',$loja->getCidade()); 

		$consulta->bindValue(':complemento',$loja->getComplemento()); 

		$consulta->bindValue(':login',$loja->getLogin()); 

		$consulta->bindValue(':status',$loja->getStatus()); 

		$consulta->bindValue(':logo',$loja->getLogo()); 

		$consulta->bindValue(':foto_fundo',$loja->getFoto_fundo()); 

		$consulta->bindValue(':descricao',$loja->getDescricao()); 

		$consulta->bindValue(':dias',$loja->getDias()); 

		$consulta->bindValue(':instagram',$loja->getInstagram()); 

		$consulta->bindValue(':facebook',$loja->getFacebook()); 

		$consulta->bindValue(':taxa_entrega',$loja->getTaxa_entrega()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM loja';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>