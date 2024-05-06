<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class ComplementoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($cod){
		include("conexao.php");
		$sql = 'SELECT * FROM complementos WHERE cod = :cod';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":cod",$cod);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM complementos';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM complementos ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($cod){
		include("conexao.php");
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
		include("conexao.php");
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
		include("conexao.php");
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
		include("conexao.php");
		$sql = 'DELETE FROM complementos';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>