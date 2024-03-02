<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class DonoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM dono WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM dono';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM dono ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM dono WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($dono){
		include("conexao.php");
		$sql = 'INSERT INTO dono (cod, email, senha, telefone, nome, cnpj, cpf, numero, rua, bairro, cidade, complemento, login) VALUES (:cod, :email, :senha, :telefone, :nome, :cnpj, :cpf, :numero, :rua, :bairro, :cidade, :complemento, :login)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$dono->getCod()); 
		$consulta->bindValue(':email',$dono->getEmail()); 
		$consulta->bindValue(':senha',$dono->getSenha()); 
		$consulta->bindValue(':telefone',$dono->getTelefone()); 
		$consulta->bindValue(':nome',$dono->getNome()); 
		$consulta->bindValue(':cnpj',$dono->getCnpj()); 
		$consulta->bindValue(':cpf',$dono->getCpf()); 
		$consulta->bindValue(':numero',$dono->getNumero()); 
		$consulta->bindValue(':rua',$dono->getRua()); 
		$consulta->bindValue(':bairro',$dono->getBairro()); 
		$consulta->bindValue(':cidade',$dono->getCidade()); 
		$consulta->bindValue(':complemento',$dono->getComplemento()); 
		$consulta->bindValue(':login',$dono->getLogin()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($dono){
		include("conexao.php");
		$sql = 'UPDATE dono SET cod = :cod, email = :email, senha = :senha, telefone = :telefone, nome = :nome, cnpj = :cnpj, cpf = :cpf, numero = :numero, rua = :rua, bairro = :bairro, cidade = :cidade, complemento = :complemento, login = :login WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$dono->getCod()); 
		$consulta->bindValue(':email',$dono->getEmail()); 
		$consulta->bindValue(':senha',$dono->getSenha()); 
		$consulta->bindValue(':telefone',$dono->getTelefone()); 
		$consulta->bindValue(':nome',$dono->getNome()); 
		$consulta->bindValue(':cnpj',$dono->getCnpj()); 
		$consulta->bindValue(':cpf',$dono->getCpf()); 
		$consulta->bindValue(':numero',$dono->getNumero()); 
		$consulta->bindValue(':rua',$dono->getRua()); 
		$consulta->bindValue(':bairro',$dono->getBairro()); 
		$consulta->bindValue(':cidade',$dono->getCidade()); 
		$consulta->bindValue(':complemento',$dono->getComplemento()); 
		$consulta->bindValue(':login',$dono->getLogin()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM dono';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>