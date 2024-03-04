<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class ClienteDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	public function logar($login, $senha){

		include("conexao.php");
		$sql = 'SELECT * FROM cliente WHERE login = :login and senha = :senha';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":login",$login);
		$consulta->bindValue(":senha",$senha);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));

	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM cliente ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM cliente WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($cliente){
		include("conexao.php");
		$sql = 'INSERT INTO cliente (cod, nome, rg, cpf, email, telefone, senha, login, rua, numero, bairro, cidade, complemento) VALUES (:cod, :nome, :rg, :cpf, :email, :telefone, :senha, :login, :rua, :numero, :bairro, :cidade, :complemento)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$cliente->getCod()); 

		$consulta->bindValue(':nome',$cliente->getNome()); 

		$consulta->bindValue(':rg',$cliente->getRg()); 

		$consulta->bindValue(':cpf',$cliente->getCpf()); 

		$consulta->bindValue(':email',$cliente->getEmail()); 

		$consulta->bindValue(':telefone',$cliente->getTelefone()); 

		$consulta->bindValue(':senha',$cliente->getSenha()); 

		$consulta->bindValue(':login',$cliente->getLogin()); 

		$consulta->bindValue(':rua',$cliente->getRua()); 

		$consulta->bindValue(':numero',$cliente->getNumero()); 

		$consulta->bindValue(':bairro',$cliente->getBairro()); 

		$consulta->bindValue(':cidade',$cliente->getCidade()); 

		$consulta->bindValue(':complemento',$cliente->getComplemento()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($cliente){
		include("conexao.php");
		$sql = 'UPDATE cliente SET cod = :cod, nome = :nome, rg = :rg, cpf = :cpf, email = :email, telefone = :telefone, senha = :senha, login = :login, rua = :rua, numero = :numero, bairro = :bairro, cidade = :cidade, complemento = :complemento WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$cliente->getCod()); 

		$consulta->bindValue(':nome',$cliente->getNome()); 

		$consulta->bindValue(':rg',$cliente->getRg()); 

		$consulta->bindValue(':cpf',$cliente->getCpf()); 

		$consulta->bindValue(':email',$cliente->getEmail()); 

		$consulta->bindValue(':telefone',$cliente->getTelefone()); 

		$consulta->bindValue(':senha',$cliente->getSenha()); 

		$consulta->bindValue(':login',$cliente->getLogin()); 

		$consulta->bindValue(':rua',$cliente->getRua()); 

		$consulta->bindValue(':numero',$cliente->getNumero()); 

		$consulta->bindValue(':bairro',$cliente->getBairro()); 

		$consulta->bindValue(':cidade',$cliente->getCidade()); 

		$consulta->bindValue(':complemento',$cliente->getComplemento()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM cliente';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>