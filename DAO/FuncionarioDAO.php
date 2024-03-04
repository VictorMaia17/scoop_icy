<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class FuncionarioDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM funcionario WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM funcionario';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM funcionario ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
		$sql = 'DELETE FROM funcionario WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($funcionario){
		include("conexao.php");
		$sql = 'INSERT INTO funcionario (nome, telefone, email, login, rg, senha, cpf, cod, rua, bairro, cidade, numero, complemento) VALUES (:nome, :telefone, :email, :login, :rg, :senha, :cpf, :cod, :rua, :bairro, :cidade, :numero, :complemento)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':nome',$funcionario->getNome()); 
		$consulta->bindValue(':telefone',$funcionario->getTelefone()); 
		$consulta->bindValue(':email',$funcionario->getEmail()); 
		$consulta->bindValue(':login',$funcionario->getLogin()); 
		$consulta->bindValue(':rg',$funcionario->getRg()); 
		$consulta->bindValue(':senha',$funcionario->getSenha()); 
		$consulta->bindValue(':cpf',$funcionario->getCpf()); 
		$consulta->bindValue(':cod',$funcionario->getCod()); 
		$consulta->bindValue(':rua',$funcionario->getRua()); 
		$consulta->bindValue(':bairro',$funcionario->getBairro()); 
		$consulta->bindValue(':cidade',$funcionario->getCidade()); 
		$consulta->bindValue(':numero',$funcionario->getNumero()); 
		$consulta->bindValue(':complemento',$funcionario->getComplemento()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($funcionario){
		include("conexao.php");
		$sql = 'UPDATE funcionario SET nome = :nome, telefone = :telefone, email = :email, login = :login, rg = :rg, senha = :senha, cpf = :cpf, cod = :cod, rua = :rua, bairro = :bairro, cidade = :cidade, numero = :numero, complemento = :complemento WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':nome',$funcionario->getNome()); 
		$consulta->bindValue(':telefone',$funcionario->getTelefone()); 
		$consulta->bindValue(':email',$funcionario->getEmail()); 
		$consulta->bindValue(':login',$funcionario->getLogin()); 
		$consulta->bindValue(':rg',$funcionario->getRg()); 
		$consulta->bindValue(':senha',$funcionario->getSenha()); 
		$consulta->bindValue(':cpf',$funcionario->getCpf()); 
		$consulta->bindValue(':cod',$funcionario->getCod()); 
		$consulta->bindValue(':rua',$funcionario->getRua()); 
		$consulta->bindValue(':bairro',$funcionario->getBairro()); 
		$consulta->bindValue(':cidade',$funcionario->getCidade()); 
		$consulta->bindValue(':numero',$funcionario->getNumero()); 
		$consulta->bindValue(':complemento',$funcionario->getComplemento()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM funcionario';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>