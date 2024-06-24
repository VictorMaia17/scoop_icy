<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
include(__DIR__ . '/../config/config.php');		   

class ComplementoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include(CONEXAO_PATH);
		$sql = 'SELECT * FROM complementos WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include(CONEXAO_PATH);
		$sql = 'SELECT * FROM complementos';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include(CONEXAO_PATH);
		$sql = 'SELECT * FROM complementos ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include(CONEXAO_PATH);
		$sql = 'DELETE FROM complementos WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($complemento){
		include(CONEXAO_PATH);
		$sql = 'INSERT INTO complementos (cod, nome, disponibilidade, loja, classificacao) VALUES (:cod, :nome, :disponibilidade, :loja, :classificacao)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$complemento->getCod()); 

		$consulta->bindValue(':nome',$complemento->getNome()); 

		$consulta->bindValue(':disponibilidade',$complemento->getDisponibilidade()); 

		$consulta->bindValue(':loja',$complemento->getLoja()); 

		$consulta->bindValue(':classificacao',$complemento->getClassificacao()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($complemento){
		include(CONEXAO_PATH);
		$sql = 'UPDATE complementos SET cod = :cod, nome = :nome, disponibilidade = :disponibilidade, loja = :loja, classificacao = :classificacao WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':cod',$complemento->getCod()); 

		$consulta->bindValue(':nome',$complemento->getNome()); 

		$consulta->bindValue(':disponibilidade',$complemento->getDisponibilidade()); 

		$consulta->bindValue(':loja',$complemento->getLoja()); 

		$consulta->bindValue(':classificacao',$complemento->getClassificacao()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include(CONEXAO_PATH);
		$sql = 'DELETE FROM complementos';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>